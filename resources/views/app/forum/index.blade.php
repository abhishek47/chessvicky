@extends('layouts.app')

@section('content')
  
  @include('app.forum.form');

  <div class="container">
     
    <div class="panel panel-default">
       <div class="panel-body">
         <div class="row">
          <div class="col-md-9">
           @if(!isset($user))
             <h2><strong>ChessVicky - Discussions</strong></h2>
             <p style="font-size: 20px;"> <b>{{ count($questions) }} {{ pluralise('conversation', count($questions) ) }}</b> - and counting.</p>
           @else 
              <h2><strong>Your Conversations</strong></h2>
               <p style="font-size: 20px;"> <b>{{ count($questions) }} {{ pluralise('conversation', count($questions) ) }}</b>.</p>
           @endif  
           <p>
             <a class="btn btn-success" href="#createModal" data-toggle="modal">New Conversation</a>
           </p>
          </div> 
          <div class="col-md-3 hidden-xs hidden-sm">
           <!--   <img class="t" src="/images/icons/letter.svg" style="height: 100px;margin-top: 5px;margin-left:45px; ">  -->
          </div>          
 
         </div> 
       </div>
   </div> 
  
  <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-9">
                 <form class="form-inline" method="GET" style="display: block;">
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">Search...</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
            <input type="text" id="search-input" class="form-control"  name="q" id="exampleInputAmount" placeholder="Search conversations...">
            
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
              </div>

              <div class="col-md-3">
                 <ul class="nav nav-pills">
               <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>
                Category  @if(isset($c))
                          {{ ': ' . $c->name }}
                       @elseif($sby == 'starred')
                          {{ ': Starred' }}   
                       @else 
                          {{ ': All Topics' }}   
                       @endif   
                 <span class="caret"></b></span>
              </a>
              <ul class="dropdown-menu">
               <li><a href="/forum?s=starred"><i class="fa fa-star"></i> Starred</a></li>
               
                @if(!isset($user)) 
                 <li><a href="/forum">All topics</a></li>
                @else
                 <li><a href="/forum/{{ \Auth::user()->username }}">All topics</a></li> 
               @endif  
               @foreach($categories as $c)
                           <li><a href="{{ '?s=' . $c->id }}">{{ $c->name }}</a></li>
                             

                @endforeach
              </ul>
            </li>
          </ul>
              </div>
            </div>
           
         </div>
      </div>
   </div>
         @if($q)
        <h3>Search results for '{{ $q }}'.</h3><br/>
      @endif
         @foreach($questions as $question)
                   <div class="panel panel-border panel-default">
                                   <div class="panel-body">
                                     <div class="media">
                                       
                                        <div class="media-body" >
                                         <a href="{{ '/questions/' . $question->slug }}">
                                          <h3 class="media-heading"><strong>
                                           @if($question->answered)
                                              <i style="color: green; font-size: 18px;" class="fa fa-check"></i>
                                            @endif 
                                          {{ $question->title }}</strong>
                                            
                                          </h3>
                                          </a>
                                          <p >{!! str_limit($question->body, 500) !!}</p>
                                           <p><strong>Topic : </strong> {{ $question->category->name }}</p>
                                        </div>
                                       
                                      </div>
                                     </div> 
                                   
                                   <div class="panel-footer">
                                       <strong>{{ count($question->answers) }}</strong> Replies | 
                                       {{ $question->created_at->diffForHumans() }} by <a href="#">{{ $question->user->username }}</a> | Tags : </strong> {{ $question->tags }} 
                                         
                                        
                                   </div>
                               </div>
                 @endforeach 
                 {!! $questions->render() !!}
 



   </div>


@stop