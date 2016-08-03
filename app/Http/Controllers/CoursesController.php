<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Category;
use App\Models\Course;

class CoursesController extends Controller
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


   public function list(Request $request)
   {
        $s = $request->get('s');
        $q = $request->get('q');
        if($s)
        {
            if($s == 'newest')
            {
              $courses = Course::latest()->paginate(20);
              $sby = 'newest';
            } else if($s == 'alpha')
            {
              $courses = Course::orderBy('title')->paginate(20);
              $sby = 'alpha';
            } else if ($s == 'starred') {
              $ids = array();
              $favs = \Auth::user()->favourites;
              foreach ($favs as $key => $fav) {
                if($fav->type == 0)
                {
                   $ids[] = $fav->item_id;  
                }
               }
               $courses = Course::whereIn('id', $ids)->latest()->paginate(20); 
                $sby = 'starred';
             }

            else {

              $courses = Course::where('category_id', $s)->latest()->paginate(20);
              $c = Category::find($s);
              $sby = 'topic';
            }
        } else if($q)
        {
           $courses = Course::where('title', 'LIKE', '%'. $q . '%')->latest()->paginate(20);
           $sby = 'newest';

        } else 
        {
          $courses = Course::latest()->paginate(20);
          $sby = 'newest';
        }
      
      $categories = Category::orderBy('name')->get();
      $page = 'library';
      return view('app.courses.index', compact('courses', 'sby', 'categories', 'c', 'q', 'page')); 

   }

   public function show($slug)
   {
       $course = Course::where('slug', $slug)->first();
       $videos = $course->videos;
       if(count($videos) > 0){
        $firstvideo = $videos[0];
       } else {
        $firstvideo = null;
     }
       $page = 'courses';
        return view('app.courses.show', compact('course', 'page', 'videos', 'firstvideo')); 
   }
    

    public function create()
    {
    	$categories = Category::all();
   	  $page = "library";
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
       if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
       $data['slug'] = str_slug($request->get('title'));

   	   Course::create($data);

       
       $notification['type'] = "NewCourseAdded";
       $notification['subject'] = "New Course Added";
       $notification['body'] = "A new course is added on topic : " . Category::findOrFail($data['category_id'])->name . "!!"; 
       $notification['link'] = url('/' . 'courses' . '/' . $data['slug']); 

       notifyUser($notification); 


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
       if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
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
