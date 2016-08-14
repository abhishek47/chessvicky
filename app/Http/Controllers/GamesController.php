<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GamesController extends Controller
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
        $page = 'game';
    	return view('app.game.index', compact('page'));
    }
   

    public function engine()
    {
        $page = 'game';
        return view('app.game.new', compact('page'));
    }
    

    public function live()
    {
        $page = 'game';
        return view('app.game.live');
    }

    public function stats(Request $request)
   {  
       $points = $request->get('points');
        
      if($request->get('operation') == 'increment')
      {
         \Auth::user()->profile->skillometer += $points;
         \Auth::user()->profile->games_won += 1;
          
  
      } else if($request->get('operation') == 'decrement') {
  
        \Auth::user()->profile->skillometer -= $points;
        \Auth::user()->profile->games_lost += 1;
        
  
      } else {
        \Auth::user()->profile->skillometer -= $points;
        \Auth::user()->profile->games_drawn += 1;
      }
      \Auth::user()->profile->save();
   }

}
