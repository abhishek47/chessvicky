<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
{
     public function create()
    {
    	$categories = Category::all();
   	    $page = "books";
    	return view('admin.books.new' , compact('categories', 'page'));
    }




    public function showadmin($slug)
    { 
          $book = Book::where('slug', $slug)->first();
         $page = 'books';  
          return view('admin.books.show', compact('book', 'page'));
    }

     public function store(Request $request)
   {
   	  $this->validate($request, [
          'title' => 'required',
          'desc' => 'required',
          'category_id' => 'required',
          'author' => 'required',
          'url' => 'required',
          'tags' => 'required'
   	  	]);
       
       $data = $request->all();
       $data['slug'] = str_slug($request->get('title'));

   	   Book::create($data);
   	   return redirect('admin/books');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();
        $page = 'books';
        return view('admin.books.edit', compact('book', 'page', 'categories'));
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
          'desc' => 'required',
          'category_id' => 'required',
          'tags' => 'required'
   	  	]);

        $book =  book::where('slug', $slug)->first();
        
        $data = $request->all();
        $data['slug'] = str_slug($request->get('title'));

        $book->update($data);

        return redirect('admin/books'); 

    }

    public function delete($slug)
   {
   	   $book = book::where('slug', $slug)->first();
   	   if($book)
   	   {
   	   	  $book->delete();
   	   }
   	   return redirect('admin/books');
   }
}
