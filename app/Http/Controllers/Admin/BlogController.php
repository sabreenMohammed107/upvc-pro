<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blogs_tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Image;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        $tags = Blogs_tag::all();
        return view("admin.blog.index", ["blog"=>$blog ,"tags"=>$tags]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.blog.create");
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
                ->save(public_path('uploads/blogs/' . $request->image	->hashName()));
            $request_data['image'] = $request->image->hashName();
        }

        if ($request->thumbnail	) {
            Image::make($request->thumbnail	)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/blogs/' . $request->thumbnail	->hashName()));
            $request_data['thumbnail'] = $request->thumbnail->hashName();
        }
        $blog = Blog::create($request_data);
        // $tag = [$request->tag];
        // $blog->Tags()->sync($tag);


        session()->flash('success', 'Blog Data Added Succsessfuly');
        return redirect('/AdminBlog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view("admin.blog.blog_tags")->with("blog",$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view("admin.blog.edit")->with("blog",$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if($request->hasFile('image'))
        {
            //delete old
            $fileName=public_path('uploads/blogs/'.$blog->image);
            File::delete($fileName);
           $fileDoc=$request->file('image');
           $blog->image= $this->UplaodFile($fileDoc);
        }

        if($request->hasFile('thumbnail'))
        {
            //delete old
            $fileName=public_path('uploads/blogs/'.$blog->thumbnail);
            File::delete($fileName);
           $fileDoc=$request->file('thumbnail');
           $blog->thumbnail= $this->UplaodFile($fileDoc);
        }

        if($request->active){
            $blog->active=1;
        }else{
            $blog->active=0;
        }
        $blog->update($request->except(['image','thumbnail']));
        session()->flash('success', 'Blog Data Updated Succsessfuly');
        return redirect('/AdminBlog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = Blog::find($id);

        if ($blog->image != 'default.png') {
            $fileName=public_path('uploads/blogs/'.$blog->image);
            File::delete($fileName);
        }//end of if

        if ($blog->image != 'default.png') {
            $fileName=public_path('uploads/blogs/'.$blog->thumbnail);
            File::delete($fileName);
        }//end of if

        $blog->delete();
        session()->flash('success', 'Blog Data Deleted Successfully');
        return redirect('/AdminBlog');
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
      
		$uploadPath = public_path('uploads/blogs');
		
		// Move The image..
		  $file->move($uploadPath, $imageName);
     
        return $imageName;
    }
}
