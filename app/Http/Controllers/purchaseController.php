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
        $data=0;
        $products=DB::table('products')->get();
        foreach($products as $row){
            $product[]=$row->name;  
        }
        $category=DB::table('category')->where('status','1')->get();
        $brand=DB::table('brand')->where('status','1')->get();
        return view('purchase')->with('product',$product)->with('category',$category)->with('brand',$brand)->with('data',$data);
    }
    public function searchProduct(Request $req){
        $sql="select products.id as id,products.name as name,category.name as category,products.category_id as category_id,products.brand as brand_id,brand.name as brand,products.unit as unit_id,unit.name as unit,products.sell as sell,products.purchase as purchase from products,category,brand,unit where products.id>0 and products.category_id=category.id and products.brand=brand.id and products.unit=unit.id";
        $name=$req->name;
        $category=$req->category;
        $brand=$req->brand;
        if(!empty($name)){
            $sql =$sql." and products.name like '%$name%'";
        }
        if(!empty($category) && $category!=0){
            $sql =$sql." and products.category_id='$category'";
        }
        if(!empty($brand) && $category!=0){
            $sql =$sql." and products.brand='$brand'";
        }
        $data=DB::select($sql);
        if($data){
        foreach($data as $row){
        echo '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" ondblclick="tapProduct('.$row->id.')" id="'.$row->id.'">
        <input type="hidden" id="productid'.$row->id.'" value="'.$row->id.'">
        <input type="hidden" id="productName'.$row->id.'" value="'.$row->name.'">
        <input type="hidden" id="productSell'.$row->id.'" value="'.$row->sell.'">
         <div class="offer offer-info">
            <div class="offer-content">
                <h5>'
                .$row->name.'
                </h5>						
            </div>
        </div>
    </div>';
     }
    }
    }
}
