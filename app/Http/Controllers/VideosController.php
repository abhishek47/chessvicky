<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Video;
use App\Models\Course;

class VideosController extends Controller
{ 

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function list()
    {
        $videos = Video::where('course_id', 0)->latest()->paginate(20);
        $page = 'videos';
        return view('app.videos.index' , compact('videos', 'page'));

    }

    public function show($cslug, $vslug)
    {
           $video = Video::where('slug', $vslug)->first();
           $course = $video->course;
           $page = 'video';
           return view('app.videos.show' , compact('video', 'course', 'page'));
    }

     public function showsingle($slug)
    {
           $video = Video::where('slug', $slug)->first();
           $page = 'video';
           return view('app.videos.showsingle' , compact('video', 'page'));
    }

      public function create()
    {
    	$courses = Course::all();
   	    $page = "videos";
    	return view('admin.videos.new' , compact('courses', 'page'));
    }
   
    
    public function showadmin($slug)
    {
    	$video = Video::where('slug', $slug)->first();
    	$page = "videos";
    	return view('admin.videos.show' , compact('video', 'page'));
    }


     public function store(Request $request)
   {
   	  $this->validate($request, [
          'title' => 'required',
          'desc' => 'required',
          'course_id' => 'required',
          'tags' => 'required',
          'url' => 'required',
          'position' => 'required'
   	  	]);
       
       $data = $request->all();
       $data['slug'] = str_slug($request->get('title'));

   	   Video::create($data);
   	   return redirect('admin/videos');
   }


   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $video = Video::where('slug', $slug)->first();
        $courses = Course::all();
        $page = 'videos';
        return view('admin.videos.edit', compact('video', 'page', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

       $this->validate($request, [
          'title' => 'required',
          'desc' => 'required',
          'course_id' => 'required',
          'tags' => 'required',
          'url' => 'required',
          'position' => 'required'
   	  	]);

        $video = Video::where('slug', $slug)->first();
        
        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));

        $video->update($data);

        return redirect('admin/videos'); 

    }


   public function delete($slug)
   {
   	   $video = Video::where('slug', $slug)->first();
   	   if($video)
   	   {
   	   	  $video->delete();
   	   }
   	   return back();
   }
}