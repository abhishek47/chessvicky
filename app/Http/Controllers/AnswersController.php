<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Answer;
use App\Models\Like;

class AnswersController extends Controller
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $page = "answers";
       return view('answers.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
         $this->validate($request, [
          'body' => 'required',
          
        ]);
       
       $data = $request->all();
       $data['question_id'] = $id;
       $data['user_id'] = \Auth::user()->id;
       Answer::create($data);
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = answer::findOrFail($id);
        $page = 'answers';
        return view('answers.edit', compact('answer', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
          'body' => 'required',
         ]);

        $answer = answer::findOrFail($id);

        $data = $request->all();
        
        $answer->update($data);

        return back();; 

    }

    public function like(Request $request)
    {

        $ansId = $request->get('ansId');

        $question = $request->get('question');

        $ans = Answer::findOrFail($ansId);
        
        $likes = $ans->likes;
        
        $liked = false;

        foreach ($likes as $key => $like) {
        	if($like->user_id == \Auth::user()->id)
        	{
        		$userLike = $like;
        		$liked = true;
        	}
        }
        
        if($liked)
        {
        	$userLike->delete();
            $ans->upvotes = count($ans->likes) - 1;
        } else {
        	$userLike = new Like;
        	$userLike->answer_id = $ansId;
        	$userLike->user_id = \Auth::user()->id ;
        	$userLike->save();
            $ans->upvotes = count($ans->likes) + 1;
        }
       

            
        $ans->save();

        return $ans->upvotes;
    }
    
    public function star($id)
    {
        $answer = Answer::findOrFail($id);

        $answer->starred = 1;

        $answer->save();

        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $answer = answer::findOrFail($id);
       if($answer)
       {
          $answer->delete();
       }
       return back();
    }


}
