<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class SearchController extends Controller
{
    
     public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function findusers(Request $request)
    {
    	return User::search($request->get('q'))->with('profile')->get();
    }


}
