<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Contact_message;
use Illuminate\Http\Request;
use Lang;
class ContactController extends Controller
{
    protected $viewName = 'web.';
    const stage_1 = 'message.failed';
    public function index()
    {
       
        return view($this->viewName . 'contact');
    }
    public function sendMessage(Request $request){
        Contact_message::create($request->except('_token'));
        return redirect()->route('contact-us')->with('flash_success', Lang::get('links.controller_message'));
    }
}
