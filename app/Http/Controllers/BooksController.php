<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
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

     public function create()
    {
    	$categories = Category::all();
   	    $page = "books";
    	return view('admin.books.new' , compact('categories', 'page'));
    }

    public function list(Request $request)
   {
        $s = $request->get('s');
        $q = $request->get('q');
        if($s)
        {
            if($s == 'newest')
            {
              $books = Book::latest()->paginate(20);
              $sby = 'newest';
            } else if($s == 'alpha')
            {
              $books = Book::orderBy('title')->paginate(20);
              $sby = 'alpha';
            } else if ($s == 'starred') {
              $ids = array();
              $favs = \Auth::user()->favourites;
              foreach ($favs as $key => $fav) {
                if($fav->type == 0)
                {
                   $ids[] = $fav->item_id;  
                }
               }
               $books = Book::whereIn('id', $ids)->latest()->paginate(20); 
                $sby = 'starred';
             }

            else {

              $books = Book::where('category_id', $s)->latest()->paginate(20);
              $c = Category::find($s);
              $sby = 'topic';
            }
        } else if($q)
        {
           $books = Book::where('title', 'LIKE', '%'. $q . '%')->latest()->paginate(20);
           $sby = 'newest';

        } else 
        {
          $books = Book::latest()->paginate(20);
          $sby = 'newest';
        }
      
      $categories = Category::orderBy('name')->get();
      return view('app.books.index', compact('books', 'sby', 'categories', 'c', 'q')); 

   }

    public function show($slug)
   {
       $book = Book::where('slug', $slug)->first();
      
       $page = 'books';
        return view('app.books.show', compact('book', 'page')); 
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
