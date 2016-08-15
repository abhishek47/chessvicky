@extends('layouts.app')

@section('content')

   <div class="container">

      <div class="row">
      	  <div class="col-md-3">
      	  	   	
    <div class="panel panel-border panel-inverse col-xs-12">
             <div class="panel-heading">
                  <h3 class="panel-title">Cover</h3>
              </div>
				  <div class="panel-body">
                      <img src="{{ $book->cover_url }}" style="height: 300px; width: 100%;">
				  </div>

			</div>	  
			 <div class="panel panel-border panel-inverse col-xs-12">
             <div class="panel-heading">
                  <h3 class="panel-title">Get This Book</h3>
              </div>
				  <div class="panel-body">
                      <a href="{{ $book->url }}" target="_blank" class="btn btn-default">Download Or Buy</a>
				  </div>

			</div>	
      	  </div>
      	  <div class="col-md-9">
      	  	 <div class="panel panel-color panel-inverse">
             <div class="panel-heading">
                  <h3 class="panel-title">{{ $book->title }}</h3>
              </div>
				  <div class="panel-body">
				     <p><b>Author : </b> {{ $book->author }}</p>
                     <p>{!! $book->desc !!}</p>
                  <p>   
                      <a class="btn btn-sm btn-primary" href="{{ '/favourites/3/' . $book->id }}">
                  @if(isStarred(3, $book->id))
                      <i class="fa fa-star"> Starred</i>
                    @else
                      <i class="fa fa-star-o"> Star</i>   
                    @endif  
                </a>
               </p> 
				  </div>

			</div>	
      	  </div>
      </div>
   	
   </div>
   
@stop