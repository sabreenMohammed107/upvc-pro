<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image_gallery;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class Image_galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $image_gallery = image_gallery::all();
return view ("admin.image_gallery.create");
        // return view("admin.image_gallery.index")->with("image_gallery",$image_gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.image_gallery.create");
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

        // if ($request->image	) {
        //     Image::make($request->image	)
        //         ->resize(300, null, function ($constraint) {
        //             $constraint->aspectRatio();
        //         })
        //         ->save(public_path('uploads/galleries/' . $request->image->hashName()));
        //     $request_data['image'] = $request->image->hashName();
        // }

        if ($request->image) {
            $image=$request->file('image');
            $request_data['image']  = $this->UplaodFile($image);
        }

        $image_gallery = image_gallery::create($request_data);
        session()->flash('success', 'Image Gallery Added Succsessfuly');
        return redirect('/AdminImageGallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Image_gallery $image_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $image_gallery = image_gallery::find($id);
         return view("admin.image_gallery.edit")->with("image_gallery",$image_gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_gallery = image_gallery::find($id);

        if($request->hasFile('image'))
        {
            //delete old
$fileName=public_path('uploads/galleries/'.$image_gallery->image);
File::delete($fileName);
           $fileDoc=$request->file('image');
           $image_gallery->image= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $image_gallery->active=1;
        }else{
            $image_gallery->active=0;
        }
        $image_gallery->update($request->except(['image']));
        session()->flash('success', 'Home Gallery Data Updated Succsessfuly');
        return redirect('/AdminImageGallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image_gallery = image_gallery::find($id);

        if ($image_gallery->image != 'default.png') {
            $fileName=public_path('uploads/galleries/'.$image_gallery->image);
            File::delete($fileName);
        }//end of if

        $image_gallery->delete();
        session()->flash('success', 'Image Gallery Data Deleted Successfully');
        return redirect('/AdminImageGallery');
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
