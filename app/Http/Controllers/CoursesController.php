<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Category;
use App\Models\Course;

class CoursesController extends Controller
{
    

    public function create()
    {
    	$categories = Category::all();
   	    $page = "courses";
    	return view('admin.courses.new' , compact('categories', 'page'));
    }




    public function showadmin($slug)
    { 
          $course = Course::where('slug', $slug)->first();
          $videos = $course->videos;
          $page = 'courses';  
          return view('admin.courses.show', compact('course', 'page', 'videos'));
    }

     public function store(Request $request)
   {
   	  $this->validate($request, [
          'title' => 'required',
          'desc' => 'required',
          'category_id' => 'required',
          'tags' => 'required'
   	  	]);
       
       $data = $request->all();
       $data['slug'] = str_slug($request->get('title'));

   	   Course::create($data);
   	   return redirect('admin/courses');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $course = Course::where('slug', $slug)->first();
         $categories = Category::all();
        $page = 'courses';
        return view('admin.courses.edit', compact('course', 'page', 'categories'));
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
          'category_id' => 'required',
          'tags' => 'required'
   	  	]);

        $course =  Course::where('slug', $slug)->first();
        
        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));

        $course->update($data);

        return redirect('admin/courses'); 

    }

    public function delete($slug)
   {
   	   $course = Course::where('slug', $slug)->first();
   	   if($course)
   	   {
   	   	  $course->delete();
   	   }
   	   return redirect('admin/courses');
   }

}
