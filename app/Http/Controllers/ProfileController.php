<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{

	 public function __construct()
    {
        $this->middleware(['auth']);
    }
   

   public function create()
   {
     $page = 'more';
   	  return view('app.profile.test', compact('page'));
   }

   public function show($username)
   { 
      $data['user'] = User::where('username', $username)->first();
      if($data['user']) {
          if($data['user']->username == \Auth::user()->username){
           
           $data['page'] = 'home';
          return view('app.profile.index', $data);
            } else {
           $data['page'] = 'home';
           return view('app.profile.other', $data);
            }
       } else {
           return view('errors.404');
       } 


    
   }


   public function update(Request $request)
   {
       $user = \Auth::user();
       $this->validate($request, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'birthday' => 'required',
            'gender' => 'required',
            'username' => 'required',
            'email' => 'required',
            'country' => 'required',
            'bio' => 'required',
        ]);

       if($request->get('username') == $user->username)
       {
          $userData = $request->only(['fname', 'lname', 'birthday', 'gender']);
          $user->update($userData);

          $profileData = $request->only(['bio', 'country']);
          $user->profile->update($profileData);

          return back();

       } else {
          return 'Error!!';
       }


   }

   public function updatePassword(Request $request)
   {
      if(\Hash::check($request->get('oldpass'), \Auth::user()->password))
      {
          $this->validate($request, [
              'password' => 'required|confirmed|min:6',
            ]);

           \Auth::user()->forceFill([
            'password' => \Hash::make($request->get('password')),
           ])->save();

           return back();
      } else {
          return view('errors.404');
      }
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

            updateRank($profile, $skillometer);

            $profile->save();

            \Auth::user()->profile_id = $profile->id;

            \Auth::user()->save();
         
            $page = 'more';

            $request->session()->flash('tag', "Welcome!!");

            $request->session()->flash('type', 'success');
            
            $request->session()->flash('status', 'Here we begin!!We have begun our journey to connect people intereted in chess on 19th August 2016 with more and more resources we have!Our all content and resources is being checked for quality assuarance!So stay tuned as the content is daily goin to be updated!!');

   	       return view('app.profile.grade', compact('result', 'correct', 'skillometer', 'page'));
   }
}
