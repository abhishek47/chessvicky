@extends('layouts.admin')

@section('content')

<div class="container">
 	
 <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Books</h1>
                    
                </div>
				  <div class="panel-body">
				   <div class="col-md-9">
				    <p><b>{{ $count }}</b> {{ pluralise('Book', $count ) }} Added.</p> 
				    </div>
				    <div class="col-md-3">
				        <a href="{{ url('/admin/books/new') }}" class="btn btn-purple">
				    		 <i class="glyphicon glyphicon-plus"></i> Add New Book
				    	</a>
				    </div>
				  </div>
			  </div>
  
  <div class="panel panel-success">

				  <div class="panel-body">
				      <b>{{ $categories }}</b> Categories Registerd. 
				      <b><a href="/admin/categories">Add More</a></b>
				  </div>
			  </div>

        {!! $books->render() !!} 

  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Name</th> 
        <th>Description</th> 
        <th>Author</th>
        <th>Topic</th>
        <th>Last Updated</th> 
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach($books as $book)
       <tr> 
         <th scope="row">{{ $book->id }}</th> 
         <td>{{ str_limit($book->title,30) }}</td> 
         <td>{{ str_limit($book->desc, 20) }}</td> 
          <td>{{ str_limit($book->author,30) }}</td> 
         <td>{{ $book->category->name }}</td>
         <td>{{ $book->updated_at }}</td> 
         <td>
           <a href="{{ '/admin/books/' . $book->slug  }}" class="btn  btn-primary btn-xs">View</a>&nbsp;
           <a href="{{ '/admin/books/' . $book->slug . '/edit' }}" class="btn  btn-warning btn-xs">Edit</a>&nbsp;
           <a href="{{ '/admin/books/' . $book->slug . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a>
         </td>
        </tr> 
      @endforeach  
       </tbody> 
   </table>


 </div>    
   
@stop