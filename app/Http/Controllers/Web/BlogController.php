<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blogs_tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        
        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->get();
       
        return view('web.blogs',compact('blogs'));

    }


    public function singleBlog($id){
        $blog=Blog::where('active', 1)->first();
        $tags=Blogs_tag::where('blog_id',$id)->get();
        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->get();
        return view('web.single-blog',compact('blog','tags','blogs'));
    }
}
