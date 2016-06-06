@extends('layouts.app')

@section('content')
  
  <div class="container">
  	 <div class="panel panel-color panel-inverse">
             <div class="panel-heading">
                    <h1 class="panel-title">Title : {{ $article->title }}</h1>
                    
                </div>
				  <div class="panel-body">
             <p>  <a class="btn btn-sm btn-primary" href="{{ '/favourites/2/' . $article->id }}">
                  @if(isStarred(2, $article->id))
                      <i class="fa fa-star"> Starred</i>
                    @else
                      <i class="fa fa-star-o"> Star</i>   
                    @endif  
                </a>   </p>     
				      {!! $article->body !!}
				     <p><strong>Written By <a href="#">{{ $article->user->fname . ' ' . $article->user->lname  }}</a>  | {{ $article->created_at->diffForHumans() }} | Tags : </strong> {{ $article->tags }} 
                                     
                              </p> 
				  </div>
			  </div>
  </div>
   
@stop