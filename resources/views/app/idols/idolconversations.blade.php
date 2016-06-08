@extends('layouts.app')


@section('content')
  
    <div class="container">
    	<div class="row">
    		  <div class="col-lg-8 col-lg-offset-2">
                        
                        <div class="card-box">
                          @foreach($messages as $message)
                            <div class="comment">
                                <img src="http://coderthemes.com/ubold_1.5/menu_2/assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <a href="#" title="">{{ $message->user->fname . ' ' . $message->user->lname }}</a><span>about {{ $message->created_at->diffForHumans() }}</span>
                                        </div>
                                       {{ $message->message }}

                                        <div class="m-t-15">
                                            <a href="">
                                                <img src="http://coderthemes.com/ubold_1.5/menu_2/assets/images/users/avatar-1.jpg" class="thumb-md">
                                            </a>
                                            <a href="">
                                                <img src="http://coderthemes.com/ubold_1.5/menu_2/assets/images/users/avatar-1.jpg" class="thumb-md">
                                            </a>
                                            <a href="">
                                                <img src="http://coderthemes.com/ubold_1.5/menu_2/assets/images/users/avatar-1.jpg" class="thumb-md">
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

                          
                        </div>
                    </div>
    	</div>
        {!! $messages->render() !!}
    </div>

@stop

