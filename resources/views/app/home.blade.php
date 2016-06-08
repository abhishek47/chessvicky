@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3">
              <div class="">
                        <div class="card-box p-0">
                            <div class="profile-widget text-center">
                                <div class="bg-inverse bg-profile"></div>
                                <img src="http://coderthemes.com/ubold_1.5/menu_2/assets/images/users/avatar-1.jpg" class="thumb-lg img-circle img-thumbnail" alt="img">
                                <h4>{{ $user->fullname() }}</h4>
                                <p class="text-muted"><i class="fa fa-user"></i> {{ $user->username }}</p>
                              

                                <a href="/users/{{ $user->username }}" class="btn btn-sm btn-inverse m-t-20">View Profile</a>
                                <p class="m-t-10 text-muted p-20"></p>
                                
                            </div>
                        </div>
                    </div>
                      <div class="">
                   <div class="panel panel-border panel-inverse">
                       <div class="panel-heading">
                           <h3 class="panel-title">Skillometer</h3>
                       </div>
                       <div class="panel-body">
                             <p class="text-muted">{{ '89%' }}</p>
                                <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                            <span class="sr-only">89% Complete</span>
                                        </div>
                                    </div>
                       </div>
                   </div>
               </div>
               <div class="">
                   <div class="card-box">
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
                        </div>
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
                       {{ str_limit($course->title, 40) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p >{{ str_limit($course->desc, 100) }}</p>
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
