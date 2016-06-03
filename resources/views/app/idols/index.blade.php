@extends('layouts.app')


@section('content')
 
  <div class="container">
    <div class="row">
  	  		  @foreach($idols as $idol)
     	 			<div class="col-lg-4">
                        <div class="card-box p-0">
                            <div class="profile-widget text-center">
                                <div class="bg-custom bg-profile"></div>
                                <img src="{{ $idol->photo_url }}" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h4>{{ $idol->name }}</h4>
                                <p class="text-muted"><i class="fa fa-user"></i> {{ $idol->user->username }}</p>
                                <a href="#" class="btn btn-sm btn-purple m-t-20">Follow</a>
                                <a href="#" class="btn btn-sm btn-success m-t-20">My Conversations</a>
                                <p class="m-t-10 text-muted p-20">{{ $idol->desc }}</p>
                                <ul class="list-inline widget-list clearfix">
                                    <li class="col-md-4"><span>2.109</span>Followers</li>
                                    <li class="col-md-4"><span>596</span>Conversations</li>
                                    <li class="col-md-4"><span>902</span>Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      @endforeach  
     	 		</div>
     	 
  </div>

@stop