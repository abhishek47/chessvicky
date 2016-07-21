@extends('layouts.app')


@section('content')
 
  <div class="container">
     <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                 <h3 style="text-transform: capitalize;"><strong>SuperIdols On ChessVicky</strong></h3>
                 <p>These great personalities in the world of Chess are here on ChessVicky to help you with your carreer in chess!They would answer you in forum and even in discussions on courses and videos!</p>
              </div>
              <div class="col-md-4">
      
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

    <div class="row">
  	  		  @foreach($idols as $idol)
     	 			<div class="col-lg-3">
                        <div class="card-box p-0">
                            <div class="profile-widget text-center">
                                <div class="bg-inverse bg-profile"></div>
                                <img src="{{ $idol->photo_url }}" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h4>{{ $idol->name }}</h4>
                                <p class="text-muted"><i class="fa fa-user"></i> {{ $idol->user->username }}</p>
                                <a href="/superidols/{{ $idol->id }}" class="btn btn-sm btn-success m-t-20">View Profile</a>
                                <p class="m-t-10 text-muted p-20">{{ str_limit($idol->desc, 100) }}</p>
                                
                            </div>
                        </div>
                    </div>
                      @endforeach  
     	 		</div>
     	 
  </div>

@stop