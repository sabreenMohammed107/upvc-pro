<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function sitemap()
{
    $products = Product::get();
    $blogs=Blog::get();
    return response()->view('pages.sitemap', compact('products','blogs'))->header('Content-Type', 'text/xml');
}
}
