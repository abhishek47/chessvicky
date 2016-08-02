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

}
