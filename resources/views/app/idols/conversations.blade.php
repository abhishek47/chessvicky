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
                                <a href="/superidols/{{ $idol->id }}" class="btn btn-sm btn-success m-t-20">New Conversation</a>
                                <p class="m-t-10 text-muted p-20">{{ $idol->desc }}</p>
                                
                            </div>
                        </div>
                    </div>

                   <div class="col-lg-8">
                        <form method="post" class="well" enctype="multipart/form-data" action="{{ url('idols/messages') }}"> 
                            {{ csrf_field() }}
                            <input type="hidden" name="reciever_id" value="{{ $idol->user_id }}">
                            <span class="input-icon icon-right">
                                <textarea rows="2" class="form-control" placeholder="Post a new message" name="message"></textarea>
                            </span>
                            <p></p>
                            <span class="input-icon icon-right">
                                <input class="form-control" type="file" name="files[]" multiple="" />
                            </span>
                            <div class="p-t-10 pull-right">
                                <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Post Message</button>
                            </div>
                            <ul class="nav nav-pills profile-pills m-t-10">
                                
                                <li>
                                    <a href="#"><i class=" fa fa-camera"></i></a>
                                </li>
                               <!--  <li>
                                    <a href="#"><i class="fa fa-smile-o"></i></a>
                                </li> -->
                            </ul>

                        </form>
                        <div class="card-box">
                          @foreach($messages as $message)
                            <div class="comment">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <a href="#" title="">{{ $message->user->fname . ' ' . $message->user->lname }}</a><span>about {{ $message->created_at->diffForHumans() }}</span>
                                        </div>
                                       {{ $message->message }}

                                        <div class="m-t-15">
                                            <a href="">
                                                <img src="assets/images/small/img1.jpg" class="thumb-md">
                                            </a>
                                            <a href="">
                                                <img src="assets/images/small/img2.jpg" class="thumb-md">
                                            </a>
                                            <a href="">
                                                <img src="assets/images/small/img3.jpg" class="thumb-md">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="comment-footer">
<!--                                         <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                        <a href="#">Reply</a> -->
                                    </div>
                                </div>

                            </div>
                            @endforeach

                            <div class="m-t-30 text-center">
                                <a href="" class="btn btn-default waves-effect waves-light btn-sm">Load More...</a>
                            </div>
                        </div>
                    </div>
    	</div>
    </div>

@stop

