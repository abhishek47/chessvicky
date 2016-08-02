@extends('layouts.app')


@section('content')
  
      <div class="container">
    	<div class="row">
    		 <div class="col-lg-4">
                       <div class="profile-detail card-box">
                            <div>
                                <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="profile-image">

                                <ul class="list-inline status-list m-t-20">
                                    <li>
                                        <h3 class="text-primary m-b-5">{{ $user->profile->skillometer }}</h3>
                                        <p class="text-muted">Skillometer</p>
                                    </li>

                                    <li>
                                        <h3 class="text-success m-b-5">{{ $user->profile->xp }}</h3>
                                        <p class="text-muted">Leaderboard</p>
                                    </li>
                                </ul>

                                 @if(!loggedInUser($user)) 
                                  <button type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light">Challenge</button>
                                 @endif 
                                <hr>
                                <h4 class="text-uppercase font-600">About Me</h4>
                                <br>

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{ $user->fullname() }}</span></p>

                                    <p class="text-muted font-13"><strong>Username :</strong> <span class="m-l-15">{{ $user->username }}</span></p>

                                    
                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $user->email }}</span></p>

                                    <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">{{ $user->profile->country }}</span></p>

                                    <p class="text-muted font-13"><strong>Birthday :</strong> <span class="m-l-15">{{ $user->birthday }}</span></p>

                                     

                                </div>


                               <!--  <div class="button-list m-t-20">
                                    <button type="button" class="btn btn-facebook waves-effect waves-light">
                                       <i class="fa fa-facebook"></i>
                                    </button>

                                    <button type="button" class="btn btn-twitter waves-effect waves-light">
                                       <i class="fa fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                       <i class="fa fa-linkedin"></i>
                                    </button>

                                    <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                       <i class="fa fa-dribbble"></i>
                                    </button>

                                </div> -->
                            </div>

                        </div>
                    </div>

                   <div class="col-lg-8">
                      <div class="col-lg-6">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-custom">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                       <h4 class="m-t-0 m-b-5"><b>Won</b></h4>
                                       <h5 class="text-muted m-b-0 m-t-0">95 Games</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50"><path d="M 25 0 A 22.5 22.5 0 0 1 46.39877161664096 15.547117626563683 L 25 22.5" fill="#5fbeaa"></path><path d="M 46.39877161664096 15.547117626563683 A 22.5 22.5 0 1 1 24.999999999999996 0 L 25 22.5" fill="#ebeff2"></path></svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-danger">
                                            <i class="fa fa-close"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                       <h4 class="m-t-0 m-b-5"><b>Lost</b></h4>
                                       <h5 class="text-muted m-b-0 m-t-0">85 Games</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50"><path d="M 25 0 A 22.5 22.5 0 0 1 46.39877161664096 15.547117626563683 L 35.69938580832048 19.02355881328184 A 11.25 11.25 0 0 0 25 11.25" fill="#f05050"></path><path d="M 46.39877161664096 15.547117626563683 A 22.5 22.5 0 1 1 24.999999999999996 0 L 24.999999999999996 11.25 A 11.25 11.25 0 1 0 35.69938580832048 19.02355881328184" fill="#ebeff2"></path></svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     
                     <div class="col-lg-6">
                     <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-primary">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                       <h4 class="m-t-0 m-b-5"><b>Drawn</b></h4>
                                       <h5 class="text-muted m-b-0 m-t-0">15 Games</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50"><path d="M 25 0 A 22.5 22.5 0 0 1 46.39877161664096 15.547117626563683 L 25 22.5" fill="#5fbeaa"></path><path d="M 46.39877161664096 15.547117626563683 A 22.5 22.5 0 1 1 24.999999999999996 0 L 25 22.5" fill="#ebeff2"></path></svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="col-lg-6">
                         <div class="card-box">
                            <div class="bar-widget">
                                <div class="table-box">
                                    <div class="table-detail">
                                        <div class="iconbox bg-warning">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                    </div>

                                    <div class="table-detail">
                                       <h4 class="m-t-0 m-b-5"><b>Tournaments</b></h4>
                                       <h5 class="text-muted m-b-0 m-t-0">Played : 15 | Won : 3</h5>
                                    </div>
                                    <div class="table-detail text-right">
                                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45" style="display: none;">1/5</span><svg class="peity" height="45" width="50"><path d="M 25 0 A 22.5 22.5 0 0 1 46.39877161664096 15.547117626563683 L 25 22.5" fill="#5fbeaa"></path><path d="M 46.39877161664096 15.547117626563683 A 22.5 22.5 0 1 1 24.999999999999996 0 L 25 22.5" fill="#ebeff2"></path></svg>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                     

                    <div class="col-lg-12 panel panel-border panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">MEMBER SINCE {{ $user->created_at->diffForHumans() }}</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                     {{ $user->profile->bio }}
                                </p>
                            </div>
                        </div>
                                   
    	</div>
    </div>

@stop

@section('scripts')
  <script type="text/javascript">
   var countryValue = document.getElementById('countryValue');
   var countrySelect = document.getElementById('country');
    countrySelect.value = countryValue.value;
  </script>
@stop