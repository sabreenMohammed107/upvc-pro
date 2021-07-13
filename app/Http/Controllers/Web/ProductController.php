<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Company_performance;
use App\Models\Product;
use App\Models\Product_category;
use App\Models\Product_img;
use App\Models\Product_key_feature;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        
        $performances=Company_performance::all();
        // $products=Product::where('active', 1)->orderBy('order', 'asc')->get();
       $categories=Product_category::all();
        return view('web.products',compact('performances','categories'));

    }
    public function singleProduct($id){
$product=Product::where('id',$id)->first();
$images=Product_img::where('product_id',$id)->orderBy('order', 'asc')->get();
$features=Product_key_feature::where('product_id',$id)->get();
$others=Product::where('id','!=',$id)->get();
return view('web.single-product',compact('product','images','features','others'));
    }
}
