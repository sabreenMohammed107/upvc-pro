<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home_slider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class Home_sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $home_slider = Home_slider::all();
        return view("admin.home_slider.index")->with("home_slider",$home_slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.home_slider.create");
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

        if ($request->image	) {
            Image::make($request->image	)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/home_slider/' . $request->image	->hashName()));
            $request_data['image'] = $request->image->hashName();
        }

        $home_slider = Home_slider::create($request_data);
        session()->flash('success', 'Home Slider Added Succsessfuly');
        return redirect('/AdminHomeSlider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function show(Home_slider $home_slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $home_slider = Home_slider::find($id);
         return view("admin.home_slider.edit")->with("home_slider",$home_slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home_slider = Home_slider::find($id);

        if($request->hasFile('image'))
        {
            //delete old
$fileName=public_path('uploads/home_slider/'.$home_slider->image);
File::delete($fileName);
           $fileDoc=$request->file('image');
           $home_slider->image= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $home_slider->active=1;
        }else{
            $home_slider->active=0;
        }
        $home_slider->update($request->except(['image']));
        session()->flash('success', 'Home Slider Data Updated Succsessfuly');
        return redirect('/AdminHomeSlider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $home_slider = Home_slider::find($id);

        if ($home_slider->image != 'default.png') {
            $fileName=public_path('uploads/home_slider/'.$home_slider->image);
            File::delete($fileName);
        }//end of if

        $home_slider->delete();
        session()->flash('success', 'Home Slider Data Deleted Successfully');
        return redirect('/AdminHomeSlider');
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
      
		$uploadPath = public_path('uploads/home_slider');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
