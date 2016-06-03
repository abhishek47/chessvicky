@extends('layouts.admin')

@section('content')

   <div class="container">

      <div class="row">
      	  <div class="col-md-3">
      	  	   	
    <div class="panel panel-border panel-purple col-xs-12">
             <div class="panel-heading">
                  <h1 class="panel-title">Cover</h1>
              </div>
				  <div class="panel-body">
                      <img src="{{ $book->cover_url }}" style="height: 300px; width: 100%;">
				  </div>

			</div>	  
			 <div class="panel panel-border panel-purple col-xs-12">
             <div class="panel-heading">
                  <h1 class="panel-title">Get This Book</h1>
              </div>
				  <div class="panel-body">
                      <a href="{{ $book->url }}" target="_blank" class="btn btn-purple">Download Or Buy</a>
				  </div>

			</div>	
      	  </div>
      	  <div class="col-md-9">
      	  	 <div class="panel panel-color panel-purple">
             <div class="panel-heading">
                  <h1 class="panel-title">{{ $book->title }}</h1>
              </div>
				  <div class="panel-body">
				     <p><b>Author : </b> {{ $book->author }}</p>
                     <p>{{ $book->desc }}</p>
				  </div>

			</div>	
      	  </div>
      </div>
   	
   </div>
   
@stop