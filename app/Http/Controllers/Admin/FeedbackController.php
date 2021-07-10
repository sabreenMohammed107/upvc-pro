<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all();
        return view("admin.feedback.index")->with("feedback",$feedback);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.feedback.create");
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
                ->save(public_path('uploads/feedback/' . $request->image	->hashName()));
            $request_data['image'] = $request->image->hashName();
        }

        $feedback = Feedback::create($request_data);
        session()->flash('success', 'Home Slider Added Succsessfuly');
        return redirect('/AdminFeedback');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $feedback = Feedback::find($id);
         return view("admin.feedback.edit")->with("feedback",$feedback);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);

        if($request->hasFile('image'))
        {
            //delete old
$fileName=public_path('uploads/feedback/'.$feedback->image);
File::delete($fileName);
           $fileDoc=$request->file('image');
           $feedback->image= $this->UplaodFile($fileDoc);
        }
        if($request->active){
            $feedback->active=1;
        }else{
            $feedback->active=0;
        }
        $feedback->update($request->except(['image']));
        session()->flash('success', 'Home Slider Data Updated Succsessfuly');
        return redirect('/AdminFeedback');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $feedback = Feedback::find($id);

        if ($feedback->image != 'default.png') {
            $fileName=public_path('uploads/feedback/'.$feedback->image);
            File::delete($fileName);
        }//end of if

        $feedback->delete();
        session()->flash('success', 'Home Slider Data Deleted Successfully');
        return redirect('/AdminFeedback');
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
      
		$uploadPath = public_path('uploads/feedback');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
