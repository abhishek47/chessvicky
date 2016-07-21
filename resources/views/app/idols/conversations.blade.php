@extends('layouts.app')


@section('content')
  
    <div class="container">
    	<div class="row">
    		 <div class="col-lg-4">
                        <div class="card-box p-0">
                            <div class="profile-widget text-center">
                                <div class="bg-inverse bg-profile"></div>
                                <img src="{{ $idol->photo_url }}" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h4>{{ $idol->name }}</h4>
                                <p class="text-muted"><i class="fa fa-user"></i> {{ $idol->user->username }}</p>
                                
                                <p class="m-t-10 text-muted p-20">{{ $idol->desc }}</p>
                                
                            </div>
                        </div>
                    </div>

                   <div class="col-lg-8">
                        
                    </div>
    	</div>
    </div>

@stop

