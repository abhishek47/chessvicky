@extends('layouts.app')


@section('content')

<div class="container">

<div class="container">
     <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                 <h3 style="text-transform: capitalize;"><strong>Leaderboards</strong></h3>
                 <p>This is where you lie around the globe!Leaderboards are according to the skillometers.!</p>
              </div>
              <div class="col-md-4">
      
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

<div class="card-box">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form role="form" class="typeahead" method="GET">
                                        <div class="form-group contact-search m-b-30" >
                                            <input  type="text" name="q" id="user-search" class="form-control" placeholder="Search People..." autocomplete="off">
                                            <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                        </div> <!-- form-group -->
                                    </form>
                                </div>
                                <div class="col-sm-4">
                                    
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th class="hidden-xs">#</th>
                                            <th>Name</th>
                                            <th class="hidden-xs">Email</th>
                                            <th class="hidden-xs">Member Since</th>
                                            <th>Skillometer</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                      

                                     @foreach($profiles as $key => $p)

                                        
                                      
                                        <tr class="{{ $p->user == \Auth::user() ? 'active' : '' }}">
                                            
                                           
                                            <td>
                                                <a href="{{ url('/profile/' . $p->user->username) }}">
                                                {{ ($key+1) + ($perpage * ($pno-1))  }}
                                                </a>
                                            </td>
                                             
                                             <td class="hidden-xs">
                                            	<img src="{{ Gravatar::get($p->user->email) }}" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                            </td>
                                             
                                            <td>
                                               <a href="{{ url('/profile/' . $p->user->username) }}">
                                                {{ $p->user->fullname() }}
                                               </a> 
                                            </td>

                                            <td class="hidden-xs">
                                               <a href="{{ url('/profile/' . $p->user->username) }}">
                                                <a href="#">{{ $p->user->email }}</a>
                                               </a> 
                                            </td>

                                            <td class="hidden-xs">
                                             <a href="{{ url('/profile/' . $p->user->username) }}">
                                                {{ $p->user->created_at->diffForHumans() }}
                                               </a> 
                                            </td>
                                            <td>
                                               {{ $p->skillometer }}
                                            </td>
                                        </tr>
                                      
                                      @endforeach
                                       


                                    </tbody>
                                </table>

                                {{ $profiles->render() }}
                            </div>
                        </div>

   </div>     

   <style type="text/css">
   	  
   </style>                

@stop