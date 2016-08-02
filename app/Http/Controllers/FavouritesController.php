<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Course;
use App\Models\Category;
use App\Models\Video;
use App\Models\Article;
use App\Models\Question;
use App\Models\Favourite;


class FavouritesController extends Controller
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

    

    public function index()
    {
    	$user = \Auth::user();

    	$favs = $user->favourites;
      
        $page = 'home';
    	return view('app.favs.index', compact('favs', 'page') );
    }

    public function store($type, $id)
    { 
    	$fav = Favourite::where('user_id', \Auth::user()->id)
    	                  ->where('type', $type)
    	                  ->where('item_id', $id)->first();
    	if($fav == null) 
    	{
    	  $fav = new Favourite();
	      $fav->type = $type;
	      $fav->user_id = \Auth::user()->id;
	      $fav->item_id = $id;
	      $fav->save();
    	}   else {
    		$fav->delete();
    	}              
    	

    	return back();
     }
}
