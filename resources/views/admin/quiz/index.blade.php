@extends('layouts.admin')

@section('content')

<div class="container">
 	
 <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Quizzes</h1>
                    
                </div>
				  <div class="panel-body">
				   <div class="col-md-9">
				    <p><b>{{ $count }}</b> {{ pluralise('Quiz', $count ) }} Added.</p> 
				    </div>
				    <div class="col-md-3">
				        <a href="{{ url('/admin/quiz/new') }}" class="btn btn-purple">
				    		 <i class="glyphicon glyphicon-plus"></i> Add New Quiz
				    	</a>
				    </div>
				  </div>
			  </div>
  

  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Title</th> 
        <th>Level</th> 
        <th>Category</th>
        <th>Questions</th>
        <th>Last Updated</th> 
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach($quizzes as $quiz)
       <tr> 
         <th scope="row">{{ $quiz->id }}</th> 
         <td>{{ str_limit($quiz->title,30) }}</td> 
         <td>{{ $quiz->level }}</td> 
          <td>{{ $quiz->category }}</td> 
         <td>{{ count($quiz->questions) }}</td>
         <td>{{ $quiz->updated_at }}</td> 
         <td>
           <a href="{{ '/admin/quiz/' . $quiz->slug  }}" class="btn  btn-primary btn-xs">View</a>&nbsp;
           <a href="{{ '/admin/quiz/' . $quiz->slug . '/edit' }}" class="btn  btn-warning btn-xs">Edit</a>&nbsp;
           <a href="{{ '/admin/quiz/' . $quiz->slug . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a>
         </td>
        </tr> 
      @endforeach  
       </tbody> 
   </table>


 </div>    
   
@stop