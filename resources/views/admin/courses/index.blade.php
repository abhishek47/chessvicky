@extends('layouts.admin')

@section('content')
   
 <div class="container">
 	
 <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Courses</h1>
                    
                </div>
				  <div class="panel-body">
				   <div class="col-md-9">
				    <p><b>{{ $count }}</b> {{ pluralise('Course', $count ) }} Recorded.</p> 
				    </div>
				    <div class="col-md-3">
				        <a href="{{ url('/admin/courses/new') }}" class="btn btn-purple">
				    		 <i class="glyphicon glyphicon-plus"></i> Add New Course
				    	</a>
				    </div>
				  </div>
			  </div>
  
  <div class="panel panel-success">

				  <div class="panel-body">
				      <b>{{ $categories }}</b> Course Categories Registerd. 
				      <b><a href="/admin/categories">Add More</a></b>
				  </div>
			  </div>
  
  {!! $courses->render() !!} 

  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Name</th> 
        <th>Description</th> 
        <th>Topic</th>
        <th>Last Updated</th> 
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach ($courses as $course)
       <tr> 
         <th scope="row">{{ $course->id }}</th> 
         <td>{{ str_limit($course->title,30) }}</td> 
         <td>{{ str_limit($course->desc, 20) }}</td> 
         <td>{{ $course->category->name }}</td>
         <td>{{ $course->updated_at }}</td> 
         <td>
           <a href="{{ '/admin/courses/' . $course->slug  }}" class="btn  btn-primary btn-xs">View</a>&nbsp;
           <a href="{{ '/admin/courses/' . $course->slug . '/edit' }}" class="btn  btn-warning btn-xs">Edit</a>&nbsp;
           <a href="{{ '/admin/courses/' . $course->slug . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a>
         </td>
        </tr> 
      @endforeach  
       </tbody> 
   </table>


 </div>    
@stop