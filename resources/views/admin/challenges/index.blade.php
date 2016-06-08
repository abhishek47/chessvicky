@extends('layouts.admin')

@section('content')
   
 <div class="container">
 	
 <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Challenges</h1>
                    
                </div>
				  <div class="panel-body">
				   <div class="col-md-9">
				    <p><b>{{ $count }}</b> {{ pluralise('Challenge', $count ) }} Added.</p> 
				    </div>
				    <div class="col-md-3">
				        <a href="{{ url('/admin/challenges/new') }}" class="btn btn-purple">
				    		 <i class="glyphicon glyphicon-plus"></i> Add New Challenge
				    	</a>
				    </div>
				  </div>
			  </div>
  
 
  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Title</th> 
        <th>Subtitle</th> 
        <th>Moves</th>
        <th>Last Updated</th> 
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach ($challenges as $challenge)
       <tr> 
         <th scope="row">{{ $challenge->id }}</th> 
         <td>{{ str_limit($challenge->title,30) }}</td> 
         <td>{{ str_limit($challenge->subtitle, 20) }}</td> 
         <td>{{ $challenge->moves }}</td>
         <td>{{ $challenge->updated_at }}</td> 
         <td>
           <a href="{{ '/admin/challenges/' . $challenge->slug . '/edit' }}" class="btn  btn-warning btn-xs">Edit</a>&nbsp;
           <a href="{{ '/admin/challenges/' . $challenge->slug . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a>
         </td>
        </tr> 
      @endforeach  
       </tbody> 
   </table>


 </div>    
@stop