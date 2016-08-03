<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Article;
use App\Models\Category;
use App\Models\Favourite;

class ArticlesController extends Controller
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

   public function list(Request $request)
   {
       
        $type = 'all';
        $page = 'articles';
        $q = $request->get('q');

        if($q) 
        {
            $articles = Article::where('title', 'LIKE', '%' . $q . '%')->latest()->paginate(20);
        } else {
           $articles = Article::latest()->paginate(20);
        }

        return view('app.articles.index', compact('articles', 'type', 'page', 'q')); 
   }
   
   public function listbytype(Request $request, $type)
   {
    
    $articles = array();
    $q = $request->get('q');
    if($type == 'premium') {
      if($q) 
        {
            $articles = Article::where('is_premium', 1)->where('title', 'LIKE', '%' . $q . '%')->latest()->paginate(20);
        } else {
           $articles = Article::where('is_premium', 1)->latest()->paginate(20);    
        }
      
    }
    elseif($type == 'starred') {
       $articles = Favourite::where('user_id', \Auth::user()->id)
                        ->where('type', 2)
                        ->paginate(10);
        
    }
    else {
                 
    }
       $page = 'articles';  
      return view('app.articles.index', compact('articles', 'type', 'page', 'q'));
   } 

 

    
    public function create()
    {
      $page = "articles";
    	return view('admin.articles.new' , compact('page'));
    }
   

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $page = 'articles';
        return view('app.articles.show', compact('article', 'page'));
    }



    public function showadmin($slug)
    { 
          $article = Article::where('slug', $slug)->first();
          $page = 'articles';  
          return view('admin.articles.show', compact('article', 'page'));
    }

     public function store(Request $request)
   { 
    
   	  $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
          'tags' => 'required',
       	]);
       
       $data = $request->all();
       if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
       $data['slug'] = str_slug($request->get('title'));
       $data['user_id'] = \Auth::user()->id;
       Article::create($data);
   	   return redirect('admin/articles');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->first();
         $page = 'articles';
        return view('admin.articles.edit', compact('article', 'page'));
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
          'body' => 'required',
          'tags' => 'required',
         
   	  	]);
       

        $article =  Article::where('slug', $slug)->first();
        
        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));
         if($request->has('is_premium'))
       {
        $data['is_premium'] = 1;
       } else {
        $data['is_premium'] = 0;
       }
        $article->update($data);

        return redirect('admin/articles'); 

    }

    public function delete($slug)
   {
   	   $article = Article::where('slug', $slug)->first();
   	   if($article)
   	   {
   	   	  $article->delete();
   	   }
   	   return redirect('admin/articles');
   }
}
