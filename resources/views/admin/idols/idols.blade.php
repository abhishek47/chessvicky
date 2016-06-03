@extends('layouts.admin')

@section('content')

  <div class="container"> 
     <div class="row">
     	 <div class="col-md-3">
     	 	<div class="panel panel-border panel-purple">
     	 		<div class="panel-heading">
     	 			<h1 class="panel-title">Add New Idol</h1>
     	 		</div>
     	 		<div class="panel-body">
     	 			<form action="{{ url('/admin/superidols/store') }}" method="POST">
     	 				{{ csrf_field() }}
     	 				<div class="form-group">
     	 					<label for="name">Full Name :</label> 
     	 					<input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
     	 				</div>
     	 				<div class="form-group">
     	 					<label for="desc">Description :</label> 
     	 				   <textarea class="form-control" name="desc" id="desc" cols="5"></textarea>
     	 				</div>
     	 				<div class="form-group">
     	 					<label for="photo_url">Photo Url :</label> 
     	 					<input type="text" class="form-control" name="photo_url" id="photo_url" placeholder="Enter Photo Url">
     	 				</div>
     	 				<div class="form-group">
     	 					<label for="username">Username :</label> 
     	 					<input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
     	 					<p class="text-muted m-b-15 font-13">Enter username of an existing user to link this idol to an account.</p>
     	 				</div>
     	 				<div class="form-group">
     	 					<input type="submit" class="btn btn-purple"  value="Add Idol">
     	 				</div>
     	 			</form> 
     	 		</div>
     	 	</div>
     	 </div>
     	 <div class="col-md-9">
     	 	<div class="panel panel-border panel-purple">
     	 		<div class="panel-heading">
     	 			<h1 class="panel-title">Our Super Idols</h1>
     	 		</div>
     	 		<div class="panel-body">
     	 		  @foreach($idols as $idol)
     	 			<div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="{{ $idol->photo_url }}" alt="img" class="img-circle thumb-lg m-r-15">
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>{{ $idol->name }} </b></h4>
                                        <p class="text-dark m-b-5" style="width: 300px;"> <span class="text-muted">{{ $idol->desc }}</span></p>
                                    </div>
                                </div>

                               

                                <div class="table-detail">
                                    <a href="{{ url('/users/' . $idol->user->username) }}" class="btn btn-sm btn-primary waves-effect waves-light">Profile</a>
                                    <a href="#" class="btn btn-sm btn-purple waves-effect waves-light">Call</a>
                                    <a href="mailto:{{ $idol->user->email }}" class="btn btn-sm btn-success waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="{{ url('/admin/superidols/' . $idol->id . '/edit') }}" class="table-action-btn"><i class="fa fa-edit"></i></a>
                                    <a href="{{ url('/admin/superidols/' . $idol->id . '/delete') }}" class="table-action-btn"><i class="fa fa-close"></i></a>
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