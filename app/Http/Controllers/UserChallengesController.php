<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\UserChallenges;

class UserChallengesController extends Controller
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


    public function store(Request $request)
    {
        $cId = $request->get('challengeId');
        $points = $request->get('points');

        \Auth::user()->profile->skillometer += $points;

        \Auth::user()->profile->save();

         $data['challenge_id'] = $cId;
         $data['user_id'] = \Auth::user()->id;
         UserChallenges::create($data);
    }
}
