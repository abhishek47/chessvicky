@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
              <div class="">
                        <div class="card-box p-0">
                            <div class="profile-widget text-center">
                                <div class="bg-inverse bg-profile"></div>
                                <img src="{{ Gravatar::get($user->email) }}" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h4>{{ $user->fullname() }}</h4>
                                <p class="text-muted"><i class="fa fa-user"></i> {{ $user->username }}</p>
                              

                                <a href="{{ url('/profile/' . $user->username) }}" class="btn btn-sm btn-inverse m-t-20">View Profile</a>
                                <p class="m-t-10 text-muted p-20"></p>
                                
                            </div>
                        </div>
                    </div>
                      <div class="">
                   <div class="panel panel-border panel-inverse">
                       <div class="panel-heading">
                           <h3 class="panel-title">Skillometer <i class="fa fa-info" style="cursor: pointer; cursor: hand;" data-toggle="tooltip" title="This is a value that define your skills on ChessVicky.This increases as you complete different courses and daily challenges and more.!"></i></h3>
                       </div>
                       <div class="panel-body">
                             <p class="text-muted" style="font-size: 24px;"><i class="fa fa-arrow-circle-right"></i> {{ $user->profile->skillometer }}</p>
                                
                       </div>
                   </div>
               </div>
               <div class="">
                   <div class="panel panel-border panel-inverse">
                       <div class="panel-heading">
                           <h3 class="panel-title">Leaderboard Rank <i class="fa fa-info" style="cursor: pointer; cursor: hand;" data-toggle="tooltip" title="This is where you lie around the globe!Leaderboards are according to the skillometers."></i></h3>
                       </div>
                       <div class="panel-body">
                             <p class="text-muted" style="font-size: 24px;"><i class="fa fa-arrow-circle-right"></i> {{ getRankOfCurrentUser() }}</p>
                                
                       </div>
                   </div>
               </div>
               <div class="">
                   <!-- <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title"><b>Achivements <span class="text-muted">(154)</span></b></h4>

                            <div class="friend-list">
                                <a href="#">
                                    <img src="assets/images/users/avatar-1.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#">
                                    <img src="assets/images/users/avatar-2.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#">
                                    <img src="assets/images/users/avatar-3.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#">
                                    <img src="assets/images/users/avatar-4.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#">
                                    <img src="assets/images/users/avatar-5.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#">
                                    <img src="assets/images/users/avatar-6.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#">
                                    <img src="assets/images/users/avatar-7.jpg" class="img-circle thumb-md" alt="friend">
                                </a>

                                <a href="#" class="text-center">
                                    <span class="extra-number">+89</span>
                                </a>
                            </div>
                        </div> -->
               </div>
            </div>
               <div class="col-lg-9">
                    <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                 <h3 style="text-transform: capitalize;"><strong>Featured Courses</strong></h3>
              </div>
              <div class="col-md-4">
      
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

          @foreach($courses as $course)
            <div class="col-lg-6" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/courses/' . $course->slug
                           }}"><h3 class="panel-title"> 
                           @if($course->is_premium)
                               <i class="fa fa-lock"></i>
                              @endif  
                       {{ str_limit($course->title, 40) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <div class="blog-post">
                        <p >{!! str_limit($course->desc, 150) !!}</p>
                       </div> 
                        <p><strong>Topic : </strong>{{ $course->category->name }}</p>
                       
                        <p><a class="btn btn-default" href="{{ 
                               '/courses/' . $course->slug
                           }}">View Course</a></p> 
                    </div>
                    <div class="panel-footer">
                               {{ $course->tags }}
                            </div>
                </div> 
            </div>
          @endforeach 
                     
               </div>     
             
    </div>
</div>

@endsection
