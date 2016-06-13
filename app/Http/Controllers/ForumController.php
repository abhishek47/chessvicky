<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Question;
use App\Models\Category;

class ForumController extends Controller
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

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->get('s');
         $q = $request->get('q');
        if($s)
        {
            if($s == 'newest')
            {
              $questions = Question::latest()->paginate(20);
              $sby = 'newest';
            } else if($s == 'alpha')
            {
              $questions = Question::orderBy('title')->paginate(20);
              $sby = 'alpha';
            } else if ($s == 'starred') {
              $ids = array();
              $favs = \Auth::user()->favourites;
              foreach ($favs as $key => $fav) {
                if($fav->type == 3)
                {
                   $ids[] = $fav->item_id;  
                }
               }
               $questions = Question::whereIn('id', $ids)->latest()->paginate(20); 
                $sby = 'starred';
             } else {

              $questions = Question::where('category_id', $s)->latest()->paginate(20);
              $c = Category::find($s);
              $sby = 'topic';
            }
        }  else if($q)
        {
            $questions = Question::where('title', 'LIKE', '%' . $q . '%')->latest()->paginate(20);
           $sby = 'newest';

        } else 
        {
          $questions = Question::latest()->paginate(20);
          $sby = 'newest';
        }
      
      $categories = Category::orderBy('name')->get();
      return view('app.forum.index', compact('questions', 'sby', 'categories', 'c', 'q')); 
    }
    
    public function listByUser(Request $request)
    {
    	$s = $request->get('s');
         $q = $request->get('q');

        if($s)
        {
            
             $questions = Question::where('category_id', $s)->where('user_id', \Auth::user()->id)->latest()->paginate(20);
              $c = Category::find($s);
              $sby = 'topic';
            
        } else if($q)
        {
            $questions = Question::where('title', 'LIKE', '%' . $q . '%')->where('user_id', \Auth::user()->id)->latest()->paginate(20);
           $sby = 'newest';

        } else 
        {
          $questions = Question::where('user_id', \Auth::user()->id)->latest()->paginate(20);
          $sby = 'newest';
        }
        $user = true;
      
      $categories = Category::orderBy('name')->get();
      return view('app.forum.index', compact('questions', 'sby', 'categories', 'c', 'q', 'user')); 
    }


  

}
