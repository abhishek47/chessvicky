@extends('layouts.app')


@section('content')
 
  <div class="container">
    <div class="row">
  	  <div class="panel panel-border panel-purple">
     	 		<div class="panel-heading">
     	 			<h1 class="panel-title">Our Super Idols</h1>
     	 		</div>
     	 		<div class="panel-body">
     	 		  @foreach($idols as $idol)
     	 			<div class="card-box ">
                            <div class="table-box opport-box ">
                                <div class="table-detail col-md-1">
                                    <img src="{{ $idol->photo_url }}" alt="img" class="img-circle thumb-lg ">
                                </div>

                                <div class="table-detail col-md-8" style="padding-left: 25px;">
                                    
                                     <div class="member-info"  style="padding-top: 15px;">

                                        <h4 class=""><b>{{ $idol->name }} </b></h4>
                                        <p class="text-dark" style="width: 500px;"> <span class="text-muted">{{ $idol->desc }}</span></p>
                                    </div>
                                </div>

                               

                                <div class="table-detail col-md-3">
                                   <br/>
                                    <a href="{{ url('/users/' . $idol->user->username) }}" class="btn btn-sm btn-purple waves-effect waves-light">New Conversation</a>
                                    <a href="mailto:{{ $idol->user->email }}" class="btn btn-sm btn-success waves-effect waves-light">View Conversations</a>
                                </div>

                               
                            </div>
                        </div>
                      @endforeach  
     	 		</div>
     	 	</div>
     	 </div>
     	 </div>
     </div>  	
  </div>

@stop