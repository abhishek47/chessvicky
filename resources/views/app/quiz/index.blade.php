@extends('layouts.app')


@section('content')
  
  <div class="container">
    
<div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                 <h3 style="text-transform: capitalize;"><strong>Quizzes</strong></h3>
              </div>
              <div class="col-md-4" style="margin-top: 10px;">
                <ul class="nav nav-pills" >

                   <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>
                      Level  @if(isset($level) && $level != 'all')
                                {{ ': ' . $level }}
                             @else 
                                {{ ': All' }}   
                             @endif   
                       <span class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu">

                      <li><a href="{{ url('/quiz/level:all' . '/cat:' . $cat ) }}">All Levels</a></li>
                     <li><a href="{{ url('/quiz/level:'. 1 . '/cat:' . $cat  ) }}"> Level 1</a></li>
                     <li><a href="{{ url('/quiz/level:'. 2 . '/cat:' . $cat  ) }}"> Level 2</a></li>
                     <li><a href="{{ url('/quiz/level:'. 3 . '/cat:' . $cat  ) }}"> Level 3</a></li>
                     <li><a href="{{ url('/quiz/level:'. 4 . '/cat:' . $cat  ) }}"> Level 4</a></li>
                      
                     
                    </ul>
                  </li>
                 <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>
                      Category  @if(isset($cat) && $cat != 'all')
                                {{ ':' . quizCategory($cat) }}
                             @else 
                                {{ ': All' }}   
                             @endif   
                       <span class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/quiz/level:' . $level . '/cat:' . 'all'  ) }}">All Categories</a></li>
                     <li><a href="{{ url('/quiz/level:'. $level . '/cat:' . 0  ) }}"> Basic</a></li>
                     <li><a href="{{ url('/quiz/level:'. $level . '/cat:' . 1  ) }}"> Intermidiate</a></li>
                     <li><a href="{{ url('/quiz/level:'. $level . '/cat:' . 2  ) }}"> Advanced</a></li>
                     <li><a href="{{ url('/quiz/level:'. $level . '/cat:' . 3  ) }}"> Professional</a></li>
                      
                     
                    </ul>
                  </li>
               </ul>
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

  	 
    <div class="row">
          
          @foreach($quizzes as $quiz)
                <div class="col-lg-4" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/quiz/' . $quiz->slug
                           }}"><h3 class="panel-title"> 
                       {{ str_limit($quiz->title, 35) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p ><strong>Level : </strong> {{ $quiz->level }} &nbsp;<strong>Questions : </strong> {{ count($quiz->questions) }}</p>
                        <p><strong>Category : </strong>{{ quizCategory($quiz->category) }}</p>
                       
                        <p><a class="btn btn-default" href="{{ 
                               '/quiz/' . $quiz->slug
                           }}">Take Quiz</a></p> 
                    </div>
                    <div class="panel-footer">
                            <b>  Points : {{ getQuizPoints($quiz) }} </b>
                            </div>
                </div> 
            </div>
          
          @endforeach
         
      
        </div>
  </div>
  

@stop