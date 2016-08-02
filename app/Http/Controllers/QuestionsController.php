<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Question;

class QuestionsController extends Controller
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
       $page = "forum";
       return view('questions.create', compact('page'));
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
          'body' => 'required',
          'tags' => 'required'
        ]);
       
       $data = $request->all();
       $data['slug'] = str_slug($request->get('title'));
       $data['user_id'] = \Auth::user()->id;
       Question::create($data);
       \Session::flash('forum','message');
       return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $question = Question::with(['answers' => function ($query) {
                $query->orderBy('created_at', 'desc');

            }])->where('slug', $slug)->first();

        if($question)
        {
            $page = 'forum';
           return view('app.forum.show', compact('question', 'page'));

        } else {
           \App::abort(404);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $page = 'questions';
        return view('questions.edit', compact('question', 'page'));
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
          'title' => 'required',
          'description' => 'required',
          'tags' => 'required'
        ]);

        $question = Question::findOrFail($id);

        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));
       
        $question->update($data);

        return back(); 

    }





    public function answered($id, $ansid)
    {
         $question = Question::findOrFail($id);


        
         $question->answered = 1;

         $question->canswer_id = $ansid;

         $question->save();

         return back();
    }

    public function unmark($id)
    {
         $question = Question::findOrFail($id);


        
         $question->answered = 0;

         $question->canswer_id = -1;

         $question->save();

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
        $question = Question::findOrFail($id);
       if($question)
       {
          $question->delete();
       }
       return back();
    }
}
