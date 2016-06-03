@extends('layouts.admin')

@section('content')
  
  <div class="container">
  	 <div class="panel panel-color panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Title : {{ $article->title }}</h1>
                    
                </div>
				  <div class="panel-body">
                      
				      {!! $article->body !!}
				      <p>
                      	<b>Author : </b> <a href="">{{ $article->user->fname  . ' ' . $article->user->lname }}</a>
                      </p>
				  </div>
			  </div>
  </div>
   
@stop