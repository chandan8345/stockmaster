<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;
class productController extends Controller
{
    public function index(){
        $unit=DB::table('unit')->where('status','1')->get();
        $category=DB::table('category')->where('status','1')->get();
        $brand=DB::table('brand')->where('status','1')->get();
        return view('product')->with('category',$category)->with('brand',$brand)->with('unit',$unit);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'unit' => 'required',
            'purchase' => 'required',
            'sale' => 'required'
           ]
        );
        if ($validator->fails()) {
            return redirect('/product')
                        ->withErrors($validator)
                        ->withInput();
        }
        $data="";
        $name=$request->input('name');
        $category=$request->input('category');
        $brand=$request->input('brand');
        $unit=$request->input('unit');
        $purchase=$request->input('purchase');
        $sell=$request->input('sale');

        $data=array('name'=>$name,'category_id'=>$category,'brand'=>$brand,'unit'=>$unit,'purchase'=>$purchase,'sell'=>$sell,'status'=>'1');
        if($data != ""){
        DB::table('products')->insert($data);
        $request->session()->flash('alert-success', 'Product Successfully Added!');
        $data="";}
        return redirect('/product');
    }
    public function stock(){
        $product[0]='';
        $products=DB::table('products')->get();
        foreach($products as $row){
            $product[]=$row->name;  
        }
        $unit=DB::table('unit')->where('status','1')->get();
        $category=DB::table('category')->where('status','1')->get();
        $brand=DB::table('brand')->where('status','1')->get();
        return view('stock')->with('category',$category)->with('brand',$brand)->with('product',$product);
    }
    public function stocksearch(Request $request){
        $product[0]='';
        $products=DB::table('products')->get();
        foreach($products as $row){
            $product[]=$row->name;  
        }
        $name=$request->input('n');
        $category=$request->input('c');
        $brand=$request->input('b');
        if(!empty($name) || !empty($category) || !empty($brand)){
            $sql="select products.id as id,products.name as name,category.name as category,products.category_id as category_id,products.brand as brand_id,brand.name as brand,products.unit as unit_id,unit.name as unit,products.sell as sell,products.purchase as purchase from products,category,brand,unit where products.id>0 and products.category_id=category.id and products.brand=brand.id and products.unit=unit.id";
            if(!empty($name)){
                $sql =$sql." and products.name like '%$name%'";
            }
            if(!empty($category)){
                $sql =$sql." and products.category_id='$category'";
            }
            if(!empty($brand)){
                $sql =$sql." and products.brand='$brand'";
            }
            $compact=array('n'=>$name, 'c'=>$category, 'b'=>$brand);
            $data=DB::select($sql);
            if(count($data)>0){
            $unit=DB::table('unit')->where('status','1')->get();
            $category=DB::table('category')->where('status','1')->get();
            $brand=DB::table('brand')->where('status','1')->get();
            return view('stock',compact('compact'))->with('data',$data)->with('category',$category)->with('brand',$brand)->with('product',$product)->with('unit',$unit);
            }else{
                $request->session()->flash('alert-danger', 'Sorry not found any product !');  
                return redirect('/stock');
            }
        }else{
            $request->session()->flash('alert-danger', 'Please input any search critera');
            return redirect('/stock');
        }
    }
    public function updateProduct(Request $req){
        $id=$req->id;
        $name=$req->name;
        $category=$req->category;
        $brand=$req->brand;
        $unit=$req->unit;
        $purchase=$req->purchase;
        $sell=$req->sales;
        $data=array('name'=>$name,'category_id'=>$category,'brand'=>$brand,'unit'=>$unit,'purchase'=>$purchase,'sell'=>$sell,'status'=>'1');
        if($data != ""){
        DB::table('products')->where('id',$id)->update($data);
        $data="";}
    }
    public function deleteProduct(Request $req){
        $id=$req->id;
        DB::table('products')->where('id',$id)->delete();
    }
    public function cbu(){
        $unit=DB::table('unit')->where('status','1')->orderBy('name', 'asc')->get();
        $category=DB::table('category')->where('status','1')->orderBy('name', 'asc')->get();
        $brand=DB::table('brand')->where('status','1')->orderBy('name', 'asc')->get();
        return view('cbu')->with('category',$category)->with('brand',$brand)->with('unit',$unit);
    }
    public function updateCategory(Request $req){
        $id=$req->id;
        $name=$req->name;
        $data=array('name'=>$name);
        DB::table('category')->where('id',$id)->update($data);
        echo "category update";
    }
    public function updateBrand(Request $req){
        $id=$req->id;
        $name=$req->name;
        $data=array('name'=>$name);
        DB::table('brand')->where('id',$id)->update($data);
        echo "brand update";
    }
    public function updateUnit(Request $req){
        $id=$req->id;
        $name=$req->name;
        $data=array('name'=>$name);
        DB::table('unit')->where('id',$id)->update($data);
        echo "unit update";
    }
    public function addCategory(Request $req){
        $name=$req->name;
        $data=array('name'=>$name,'status'=>1);
        DB::table('category')->insert($data);
        echo "insert category";
    }
    public function addBrand(Request $req){
        $name=$req->name;
        $data=array('name'=>$name,'status'=>1);
        DB::table('brand')->insert($data);
        echo "insert brand";
    }
    public function addUnit(Request $req){
        $name=$req->name;
        $data=array('name'=>$name,'status'=>1);
        DB::table('unit')->insert($data);
        echo "insert unit";
    }
}