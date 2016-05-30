<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Profile;

class ProfileController extends Controller
{

	 public function __construct()
    {
        $this->middleware(['auth']);
    }
   

   public function create()
   {
   	  return view('app.profile.test');
   }

   public function grade(Request $request)
   {
   	        $answer1 = $request->get('question-1-answers');
            $answer2 = $request->get('question-2-answers');
            $answer3 = $request->get('question-3-answers');
            $answer4 = $request->get('question-4-answers');
            $answer5 = $request->get('question-5-answers');

            $result = 0;
            $correct = 0;

            if ($answer1 == "D") 
            {
            	$result += 10;
            	$correct++;
            }

            if ($answer2 == "B") 
            {
            	$result += 10;
            	$correct++;
            }

            if ($answer3 == "C") 
            {
            	$result += 10;
            	$correct++;
            }

            if ($answer4 == "D") 
            {
            	$result += 10;
            	$correct++;
            }

            if ($answer5 == "B") 
            {
            	$result += 10;
            	$correct++;
            }

            $profile = new Profile(); 

            $skillometer = ($result/10);

            $profile->user_id = \Auth::user()->id;

            $profile->skillometer = $skillometer;  

            $profile->save();

            \Auth::user()->profile_id = $profile->id;

            \Auth::user()->save();


   	       return view('app.profile.grade', compact('result', 'correct', 'skillometer'));
   }
}
