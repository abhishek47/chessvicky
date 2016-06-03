@extends('layouts.admin')

@section('content')
   
 <div class="container">
 	
 <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Articles</h1>
                    
                </div>
				  <div class="panel-body">
				   <div class="col-md-9">
				    <p><b>{{ $count }}</b> {{ pluralise('Articles', $count ) }} Written.</p> 
				    </div>
				    <div class="col-md-3">
				        <a href="{{ url('/admin/articles/new') }}" class="btn btn-purple">
				    		 <i class="glyphicon glyphicon-plus"></i> Write New Article
				    	</a>
				    </div>
				  </div>
			  </div>
  
 

  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Title</th> 
        <th>Body</th> 
        <th>Author</th>
        <th>Last Updated</th> 
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach ($articles as $article)
       <tr> 
         <th scope="row">{{ $article->id }}</th> 
         <td>{{ str_limit($article->title,30) }}</td> 
         <td>{{ str_limit($article->body, 20) }}</td> 
         <td>{{ $article->user->fname }}</td>
         <td>{{ $article->updated_at }}</td> 
         <td>
           <a href="{{ '/admin/articles/' . $article->slug  }}" class="btn  btn-primary btn-xs">View</a>&nbsp;
           <a href="{{ '/admin/articles/' . $article->slug . '/edit' }}" class="btn  btn-warning btn-xs">Edit</a>&nbsp;
           <a href="{{ '/admin/articles/' . $article->slug . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a>
         </td>
        </tr> 
      @endforeach  
       </tbody> 
   </table>


 </div>    
@stop