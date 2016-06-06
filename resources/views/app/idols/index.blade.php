@extends('layouts.app')


@section('content')
 
  <div class="container">
    <div class="row">
  	  		  @foreach($idols as $idol)
     	 			<div class="col-lg-4">
                        <div class="card-box p-0">
                            <div class="profile-widget text-center">
                                <div class="bg-inverse bg-profile"></div>
                                <img src="{{ $idol->photo_url }}" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h4>{{ $idol->name }}</h4>
                                <p class="text-muted"><i class="fa fa-user"></i> {{ $idol->user->username }}</p>
                                <a href="/superidols/{{ $idol->id }}" class="btn btn-sm btn-success m-t-20">My Conversations</a>
                                <p class="m-t-10 text-muted p-20">{{ str_limit($idol->desc, 100) }}</p>
                                
                            </div>
                        </div>
                    </div>
                      @endforeach  
     	 		</div>
     	 
  </div>

@stop