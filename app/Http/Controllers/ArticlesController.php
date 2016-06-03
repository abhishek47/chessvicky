<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Article;

class ArticlesController extends Controller
{
    
    public function create()
    {
        $page = "articles";
    	return view('admin.articles.new' , compact('page'));
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
          'is_premium' => 'required',
   	  	]);
       
       $data = $request->all();
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
          'is_premium' => 'required',
   	  	]);
       

        $article =  Article::where('slug', $slug)->first();
        
        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));

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
   	   return redirect('admin/article');
   }
}
