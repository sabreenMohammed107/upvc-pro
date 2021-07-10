<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Why_company;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        
       $whyRows=Why_company::all();
        return view('web.about',compact('whyRows'));

    }
}

