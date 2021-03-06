<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Home_slider;
use App\Models\Home_vedio;
use App\Models\Material;
use App\Models\News_letter;
use App\Models\Product;
use App\Models\Product_category;
use App\Models\Upvc_number;
use App\Models\Why_company;
use Illuminate\Http\Request;
use Lang;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    protected $viewName = 'web.';
    public function index()
    {
        $homeSliders = Home_slider::where('active', 1)->orderBy('order', 'asc')->get();
        $numbers = Upvc_number::where('active', 1)->get();
        $feedBacks = Feedback::where('active', 1)->get();
        $materials = Material::where('active', 1)->get();
        $blog=Blog::where('active', 1)->where('order', 1)->first();
        $blogs=Blog::where('active', 1)->where('order',">", 1)->orderBy('order', 'asc')->get();
        $whyRows=Why_company::limit(6)->get();
        $categories=Product::distinct('category_id')->pluck('category_id');
        $nums=Product::wherein('id',[1,4,7])->pluck('id');
$products=Array();
// foreach ($categories as $category) {
//     $obj = new Collection();
//     $obj->product = Product::where('category_id',$category)->first();;

//     array_push($products,$obj->product);

// }
foreach ($nums as $num) {
    $obj = new Collection();
    $obj->product = Product::where('id',$num)->first();;

    array_push($products,$obj->product);

}
        $homeVedio=Home_vedio::orderBy('created_at', 'desc')->first();
        return view($this->viewName . 'home', compact('homeSliders', 'numbers', 'feedBacks', 'materials','blogs','blog','whyRows','products','homeVedio'));
    }
    public function sendLetter(Request $request){
        News_letter::create($request->except('_token'));
        return redirect()->back()->with('flash_success', Lang::get('links.controller_message_sub'));
    }
}
