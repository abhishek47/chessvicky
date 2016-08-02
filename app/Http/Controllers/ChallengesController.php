<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Challenge;

class ChallengesController extends Controller
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

   public function list()
   {
        $challenges = Challenge::latest()->paginate(20);
        $type = 'all';
        $page = 'challenges';
        return view('app.challenges.index', compact('challenges', 'type', 'page')); 
   }
   


 

    
    public function create()
    {
        $page = "challenges";
    	return view('admin.challenges.new' , compact('page'));
    }
   

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $challenge = challenge::where('slug', $slug)->first();
        $page = "challenges";
        return view('app.challenges.show', compact('challenge', 'page'));
    }

    
    public function check(Request $request, $slug)
    {
    	$challenge = Challenge::where('slug', $slug)->first(); 

        if($challenge)
        {
	    	if($challenge->solution == $request->get('solution'))
	    	{
	    		return 1;
	    	}
    	}

    	return 0;
    }

    

     public function store(Request $request)
   { 
    
   	  $this->validate($request, [
          'title' => 'required',
          'subtitle' => 'required',
          'hint' => 'required',
          'solution' => 'required',
          'chessboard' => 'required',
          'moves' => 'required',
       	]);
       
       $data = $request->all();
       if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
       $data['slug'] = str_slug($request->get('title'));
       Challenge::create($data);
   	   return redirect('admin/challenges');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $challenge = Challenge::where('slug', $slug)->first();
        $page = 'challenges';
        return view('admin.challenges.edit', compact('challenge', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

    	  $this->validate($request, [
          'title' => 'required',
          'subtitle' => 'required',
          'hint' => 'required',
          'solution' => 'required',
          'chessboard' => 'required',
          'moves' => 'required',
       	]);
       

        $challenge =  challenge::where('slug', $slug)->first();
        
        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));
         if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
        $challenge->update($data);

        return redirect('admin/challenges'); 

    }

    public function delete($slug)
   {
   	   $challenge = Challenge::where('slug', $slug)->first();
   	   if($challenge)
   	   {
   	   	  $challenge->delete();
   	   }
   	   return redirect('admin/challenges');
   }
}
