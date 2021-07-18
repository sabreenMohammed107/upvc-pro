<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Image_gallery;
use App\Models\Vedio_gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index(){
        
        $images=Image_gallery::where('active', 1)->inRandomOrder()->limit(6)->get();
        $vedios=Vedio_gallery::where('active', 1)->limit(6)->get();
       
        return view('web.gallery',compact('images','vedios'));

    }
}
