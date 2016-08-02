<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
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

    public function getAllUsers(Request $request)
    { 
         $q = $request->get('q')  

    	 $users = User::where('fname', 'LIKE', '%'. $q . '%')->get();
 
    	 return Response::json($users);


    }
}
