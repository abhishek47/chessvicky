<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Quiz;
use App\Models\QuizQuestion;


class QuizController extends Controller
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


    public function list($level = 'all', $cat = 'all')
    {
    	if($level != 'all' || $cat != 'all')
    	{
           if($level != 'all' && $cat == 'all')
           {
           	  $quizzes = Quiz::where('level', $level)->latest()->paginate(20);
           }
           else if($level == 'all' && $cat != 'all')
           {
             $quizzes = Quiz::where('category', $cat)->latest()->paginate(20);
           } 
           else {
              $quizzes = Quiz::where('level', $level)->where('category', $cat)->latest()->paginate(20);      
           }

    	} else {

    		$quizzes = Quiz::latest()->paginate(20);
    	}
    	
      $page = 'more';
    	return view('app.quiz.index', compact('quizzes', 'level', 'cat', 'page'));
    }

    public function show($slug)
    {
        $quiz = Quiz::where('slug', $slug)->first();
        $questions = $quiz->questions;
        $points = 0;
        foreach ($questions as $key => $question) {
          	 $points += $question->points;
          }  
        $page = 'more';
         return view('app.quiz.show', compact('quiz', 'questions', 'points', 'page')); 
    }


    public function check(Request $request, $slug)
    {
        $quiz = Quiz::where('slug', $slug)->first();
         $questions = $quiz->questions;
          $result = 0;
          $correct = 0;
          foreach ($questions as $key => $question) {
          	   
          	   $answer = $question->answer;
          	   $givenAns = $request->get('question-'. $question->id . '-answers');

          	   if($answer == $givenAns)
          	   {
          	   	  $result += $question->points;
            	  $correct++;
          	   }

          }


            $profile =\Auth::user()->profile; 

            $newSkillometer = $result;

             $profile->skillometer += $newSkillometer;  
              
             $skillometer = $profile->skillometer;
              
            $profile->save();

            $count = count($questions);
             $page = 'more';
           return view('app.quiz.grade', compact('result', 'correct', 'skillometer', 'count', 'newSkillometer', 'page'));  

    }

    public function create()
    {
    	return view('admin.quiz.new');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
          'title' => 'required',
          'level' => 'required',
          'category' => 'required'
        ]);
       
       $data = $request->all();
       if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
       $data['slug'] = str_slug($request->get('title'));
       Quiz::create($data);
       return redirect('/admin/quiz/' . $data['slug']);
    }
   

    public function edit($slug)
    {
    	$quiz = Quiz::where('slug', $slug)->first();
    	return view('admin.quiz.edit', compact('quiz'));
    }
    
    public function showadmin($slug)
    {
    	$quiz = Quiz::where('slug', $slug)->first();
    	return view('admin.quiz.show', compact('quiz'));
    }


     /**

     * Update a  created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
         $this->validate($request, [
          'title' => 'required',
          'level' => 'required',
          'category' => 'required'
        ]);
         
       $data = $request->all();
       if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
       $data['slug'] = str_slug($request->get('title'));
       
       $quiz = Quiz::where('slug', $slug)->first();

       $quiz->update($data);

        return redirect('/admin/quiz/' . $data['slug']);
    }


    public function delete($slug)
    {
    	$quiz = Quiz::where('slug', $slug)->first();
    	
    	if($quiz)
    	{
    		$quiz->delete();
    	}

    	 return back();
    }

    public function storeQuestion(Request $request, $slug)
    {
    	  $this->validate($request, [
          'question' => 'required',
          'points' => 'required'
        ]);

    	$quiz = Quiz::where('slug', $slug)->first();  
        
       $data = $request->all();
       $data['quiz_id'] = $quiz->id;

        QuizQuestion::create($data); 

        return back();
    }


    public function updateQuestion(Request $request, $slug, $id)
    {
       $this->validate($request, [
          'question' => 'required',
          'points' => 'required'
        ]);
        
       $question = QuizQuestion::findOrFail($id);

       $quiz = Quiz::where('slug', $slug)->first();  
        
       $data = $request->all();
       $data['quiz_id'] = $quiz->id;

        $question->update($data); 

        return back();
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteQuestion($slug, $id)
    {
        $question = QuizQuestion::findOrFail($id);
       if($question)
       {
          $question->delete();
       }
       return back();
    }





}
