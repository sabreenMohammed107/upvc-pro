<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;
class ClientController extends Controller
{
    /**
     * // "guzzlehttp/guzzle": "^6.3.1|^7.0.1",//
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client = Client::all();
        return view("admin.client.index")->with("client",$client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.client.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request_data = $request->all();

        // if ($request->logo) {
        //     Image::make($request->logo)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('uploads/clients/' . $request->logo->hashName()));

        //     $request_data['logo'] = $request->logo->hashName();
            
        // }
        // $client = Client::create($request_data);
        // session()->flash('success', 'Client Added Succsessfuly');
        // return redirect('/AdminClient');

        $request_data = $request->all();

        if ($request->logo) {
                $logo=$request->file('logo');
                $request_data['logo']  = $this->UplaodFile($logo);
        }
        
        $client = Client::create($request_data);
        session()->flash('success', 'Client Added Succsessfuly');
        return redirect('/AdminClient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $client =Client::find($id);
         return view("admin.client.edit")->with("client",$client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client =Client::find($id);

        if($request->hasFile('logo'))
        {
            //delete old
$fileName=public_path('uploads/clients/'.$client->logo);
File::delete($fileName);
           $fileDoc=$request->file('logo');
           $client->logo= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $client->active=1;
        }else{
            $client->active=0;
        }
        $client->update($request->except(['logo']));
        session()->flash('success', 'Client Data Updated Succsessfuly');
        return redirect('/AdminClient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client =Client::find($id);

        if ($client->logo != 'default.png') {
            $fileName=public_path('uploads/clients/'.$client->logo);
            File::delete($fileName);
        }//end of if

        $client->delete();
        session()->flash('success', 'Client Deleted Successfully');
        return redirect('/AdminClient');
    }

    public function UplaodFile($file_request)
	{
		//  This is Image Info..
		$file = $file_request;
		$name = $file->getClientOriginalName();
		$ext  = $file->getClientOriginalExtension();
		$size = $file->getSize();
		$path = $file->getRealPath();
		$mime = $file->getMimeType();


		// Rename The Image ..
        $imageName = $name;
      
		$uploadPath = public_path('uploads/clients');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
