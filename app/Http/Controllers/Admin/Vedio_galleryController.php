<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vedio_gallery;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class Vedio_galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vedio_gallery = Vedio_gallery::all();
        return view("admin.vedio_gallery.index")->with("vedio_gallery",$vedio_gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.vedio_gallery.create");
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

        if ($request->image) {
            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/galleries/' . $request->image->hashName()));
                $request_data['image'] = $request->image->hashName();
        }

        $vedio_gallery = Vedio_gallery::create($request_data);
        session()->flash('success', 'Vedio Gallery Added Succsessfuly');
        return redirect('/AdminVedioGallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vedio_gallery  $vedio_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Vedio_gallery $vedio_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vedio_gallery  $vedio_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vedio_gallery = vedio_gallery::find($id);
         return view("admin.vedio_gallery.edit")->with("vedio_gallery",$vedio_gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vedio_gallery  $vedio_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vedio_gallery = Vedio_gallery::find($id);

        if($request->hasFile('image'))
        {
            //delete old
$fileName=public_path('uploads/galleries/'.$vedio_gallery->image);
File::delete($fileName);
           $fileDoc=$request->file('image');
           $vedio_gallery->image= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $vedio_gallery->active=1;
        }else{
            $vedio_gallery->active=0;
        }
        $vedio_gallery->update($request->except(['image']));
        session()->flash('success', 'Home Gallery Data Updated Succsessfuly');
        return redirect('/AdminVedioGallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vedio_gallery  $vedio_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vedio_gallery = Vedio_gallery::find($id);

        if ($vedio_gallery->image != 'default.png') {
            $fileName=public_path('uploads/galleries/'.$vedio_gallery->image);
            File::delete($fileName);
        }//end of if

        $vedio_gallery->delete();
        session()->flash('success', 'Vedio Gallery Data Deleted Successfully');
        return redirect('/AdminVedioGallery');
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
      
		$uploadPath = public_path('uploads/galleries');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
