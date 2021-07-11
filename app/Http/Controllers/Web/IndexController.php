<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Home_slider;
use App\Models\Material;
use App\Models\Upvc_number;
use App\Models\Why_company;

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
        return view($this->viewName . 'home', compact('homeSliders', 'numbers', 'feedBacks', 'materials','blogs','blog','whyRows'));
    }
}
