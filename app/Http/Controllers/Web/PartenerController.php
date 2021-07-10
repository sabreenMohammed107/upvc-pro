<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PartenerController extends Controller
{
    //
    public function index(){
        
        $parteners=Supplier::where('active', 1)->orderBy('created_at', 'desc')->paginate(8);
       
        return view('web.parteners',compact('parteners'));

    }

    function fetch_data(Request $request)
    {
     

     if($request->ajax())
     {
       
        $parteners=Supplier::where('active', 1)->orderBy('created_at', 'desc')->paginate(8);
                
      return view('web.partenersList', compact('parteners'))->render();
     }
    }
}
