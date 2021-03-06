<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LandingController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
    	return view('landing.index');
    }

    public function subscribe()
    {
    	return view('landing.subscribe');
    }

  
}
