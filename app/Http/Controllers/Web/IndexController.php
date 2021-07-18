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
use App\Models\Upvc_number;
use App\Models\Why_company;
use Illuminate\Http\Request;
use Lang;
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
        $products=Product::inRandomOrder()->limit(3)->get();
        $homeVedio=Home_vedio::orderBy('created_at', 'desc')->first();
        return view($this->viewName . 'home', compact('homeSliders', 'numbers', 'feedBacks', 'materials','blogs','blog','whyRows','products','homeVedio'));
    }
    public function sendLetter(Request $request){
        News_letter::create($request->except('_token'));
        return redirect()->back()->with('flash_success', Lang::get('links.controller_message'));
    }
}
