<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = Material::all();
        return view("admin.material.index")->with("material",$material);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.material.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_data = $request->all();

        if ($request->logo) {
            Image::make($request->logo)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/materials/' . $request->logo->hashName()));

            $request_data['logo'] = $request->logo->hashName();

            
        }//end of if
        
        $material = Material::create($request_data);
        session()->flash('success', 'Material Data Added Succsessfuly');
        return redirect('/AdminMaterial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $material =Material::find($id);
         return view("admin.material.edit")->with("material",$material);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material =Material::find($id);

        if($request->hasFile('logo'))
        {
            //delete old
           $fileName=public_path('uploads/materials/'.$material->logo);
           File::delete($fileName);
           $fileDoc=$request->file('logo');
           $material->logo= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $material->active=1;
        }else{
            $material->active=0;
        }
        $material->update($request->except(['logo']));
        session()->flash('success', 'Material Data Updated Succsessfuly');
        return redirect('/AdminMaterial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material =material::find($id);

        if ($material->logo != 'default.png') {
            $fileName=public_path('uploads/materials/'.$material->logo);
            File::delete($fileName);
        }//end of if

        $material->delete();
        session()->flash('success', 'Material Data Deleted Successfully');
        return redirect('/AdminMaterial');
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
      
		$uploadPath = public_path('uploads/materials');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
