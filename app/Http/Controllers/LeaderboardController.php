<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Profile;
use App\User;

class LeaderboardController extends Controller
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


    public function index(Request $request)
    {
    	


    	$data['profiles'] =  Profile::orderBy('skillometer', 'DESC')->paginate(10);
       
       
        $data['page'] = 'more';

        if($request->has('page'))
        {
        	$data['pno'] = $request->get('page');
        } else {
        	$data['pno'] = 1; 
        } 
         $data['perpage'] = 10;
    	
    	return view('app.leaderboard.index', $data);
    }

}
