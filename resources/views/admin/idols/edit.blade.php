@extends('layouts.admin')


@section('content')
 <div class="container"> 
     <div class="row">
     	 	<div class="panel panel-border panel-purple">
     	 		<div class="panel-heading">
     	 			<h1 class="panel-title">Edit This Idol</h1>
     	 		</div>
     	 		<div class="panel-body">
     	 			<form action="{{ url('/admin/superidols/' . $idol->id . '/update') }}" method="POST">
     	 				{{ csrf_field() }}
                              <div class="form-group">
     	 					<label for="name">Full Name :</label> 
     	 					<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ $idol->name }}">
     	 				</div>
     	 				<div class="form-group">
     	 					<label for="desc">Description :</label> 
     	 				   <textarea class="form-control" name="desc" id="desc" cols="5">{{ $idol->desc }}</textarea>
     	 				</div>
     	 				<div class="form-group">
     	 					<label for="photo_url">Photo Url :</label> 
     	 					<input type="text" class="form-control" name="photo_url" id="photo_url" placeholder="Enter Photo Url" value="{{ $idol->photo_url }}" >
     	 				</div>
     	 				<div class="form-group">
     	 					<label for="username">Username :</label> 
     	 					<input type="text" class="form-control" name="username" id="username" disabled="" placeholder="Enter username" value="{{ $idol->user->username }}">
     	 					<p class="text-muted m-b-15 font-13">Username of an existing user to link this idol to an account.</p>
     	 				</div>
     	 				<div class="form-group">
     	 					<input type="submit" class="btn btn-purple"  value="Update Idol">
     	 				</div>
     	 			</form> 
     	 		</div>
     	 	</div>
     	 </div>
         </div>  
     @stop      