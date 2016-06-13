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
    	return view('app.game.index');
    }
   

   public function engine()
    {
        return view('app.game.new');
    }

     public function live()
    {
        return view('app.game.live');
    }

}
