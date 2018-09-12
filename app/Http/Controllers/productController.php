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
        $category=DB::table('category')->where('status','1')->get();
        $brand=DB::table('brand')->where('status','1')->get();
        return view('product')->with('category',$category)->with('brand',$brand);
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
        $category=DB::table('category')->where('status','1')->get();
        $brand=DB::table('brand')->where('status','1')->get();
        return view('stock')->with('category',$category)->with('brand',$brand);
    }
    public function stocksearch(Request $request){
        $name=$request->input('n');
        $category=$request->input('c');
        $brand=$request->input('b');
        if(!empty($name) || !empty($category) || !empty($brand)){
            $sql="select products.id as id,products.name as name,category.name as category,brand.name as brand,products.unit as unit,products.sell as sell,products.purchase as purchase from products,category,brand where products.id>0 and products.category_id=category.id and products.brand=brand.id";
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
            $category=DB::table('category')->where('status','1')->get();
            $brand=DB::table('brand')->where('status','1')->get();
            return view('stock',compact('compact'))->with('data',$data)->with('category',$category)->with('brand',$brand);
            }else{
                $request->session()->flash('alert-danger', 'Sorry not found any product !');  
                return redirect('/stock');
            }
        }else{
            $request->session()->flash('alert-danger', 'Please input any search critera');
            return redirect('/stock');
        }
    }
    public function updateProduct(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'unit' => 'required',
            'purchase' => 'required',
            'sale' => 'required'
           ]
        );
        $name=$request->input('name');
        $category=$request->input('category');
        $brand=$request->input('brand');
        $unit=$request->input('unit');
        $purchase=$request->input('purchase');
        $sell=$request->input('sale');

        $data=array('name'=>$name,'category_id'=>$category,'brand'=>$brand,'unit'=>$unit,'purchase'=>$purchase,'sell'=>$sell,'status'=>'1');
        if($data != ""){
        DB::table('products')->update($data)->where(id,$id);
        //$request->session()->flash('alert-success', 'Product Successfully Added!');
        $data="";}
        return redirect('/stocksearch');
            
    }
    public function deleteProduct(){

    }
}