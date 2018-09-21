<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class purchaseController extends Controller
{
    public function index(){
        $products=DB::table('products')->get();
        foreach($products as $row){
            $product[]=$row->name;  
        }
        $category=DB::table('category')->where('status','1')->get();
        $brand=DB::table('brand')->where('status','1')->get();
        return view('purchase')->with('product',$product)->with('category',$category)->with('brand',$brand);
    }
    public function searchProduct(Request $req){
        $sql="select products.id as id,products.name as name,category.name as category,products.category_id as category_id,products.brand as brand_id,brand.name as brand,products.unit as unit_id,unit.name as unit,products.sell as sell,products.purchase as purchase from products,category,brand,unit where products.id>0 and products.category_id=category.id and products.brand=brand.id and products.unit=unit.id";
        $name=$req->name;
        $category=$req->category;
        $brand=$req->brand;
        if(!empty($name)){
            $sql =$sql." and products.name like '%$name%'";
        }
        if(!empty($category)){
            $sql =$sql." and products.category_id='$category'";
        }
        if(!empty($brand)){
            $sql =$sql." and products.brand='$brand'";
        }
        $data=DB::select($sql);
        if(count($data)>0){
            return $data;
        }
        echo "ok";
    }
}
