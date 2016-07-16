@extends('layouts.app')

@section('content')
   
  <div class="container">
  
<form action="{{ url('/quiz/' . $quiz->slug) }}" method="post" id="quiz">
             {{ csrf_field() }}
            <ul id="test-questions">
                <li>
                    <div class="panel panel-border panel-inverse">
                         <div class="panel-heading">
                                <h1 class="panel-title">Quiz Up - Level {{ $quiz->level }} [ {{ quizCategory($quiz->category) }} ]</h1>
                                <h3>Questions : {{ count($questions) }}  | Points : {{ $points }}</h3>
                            </div>
                            <div class="panel-body">

                            </div>
                    </div>
                </li>

                @foreach($questions as $question)
                    <li>
                         <div class="panel panel-border panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ $question->position }}. {{ $question->question }}</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        <div class="options col-md-7 col-sm-12">
                        <div class="mtm answer" >
                           <div class="radio radio-info col-xs-6">
                                 <input type="radio" name="question-{{ $question->id }}-answers" id="question-{{ $question->id }}-answers-A" value="A">
                                <label for="question-{{ $question->id }}-answers-A" class="fwrd labela">
                                   <span>A.</span> {{ $question->option_a }}
                                </label>
                            </div>
                          
                        </div>
                        <div class="answer">
                          <div class="radio radio-info col-xs-6">
                            <input type="radio" name="question-{{ $question->id }}-answers" id="question-{{ $question->id }}-answers-B" value="B" />
                            <label for="question-{{ $question->id }}-answers-B" class="fwrd labelb"><span>B.</span> {{ $question->option_b }}</label>
                           </div> 
                        </div>
                        <div class="answer">
                          <div class="radio radio-info col-xs-6">
                            <input type="radio" name="question-{{ $question->id }}-answers" id="question-{{ $question->id }}-answers-C" value="C" />
                            <label for="question-{{ $question->id }}-answers-C" class="fwrd labelc"><span>C.</span> {{ $question->option_c }}</label>
                          </div>  
                        </div>
                        <div class="answer">
                          <div class="radio radio-info col-xs-6">
                            <input type="radio" name="question-{{ $question->id }}-answers" id="question-{{ $question->id }}-answers-D" value="D" />
                            <label for="question-{{ $question->id }}-answers-D" class="fwrd labeld"><span>D.</span> {{ $question->option_d }}</label>
                          </div>  
                        </div>
                        </div>
                                    </p>
                                </div>
                            </div>
                        
                        
                       
                    </li>
               @endforeach
               


               
                <li>
                    <div class="panel panel-border panel-purple">
                    <div class="panel-heading">
                                <h3 class="panel-title">Now its time to see results..</h3>
                            </div>
                            <div class="panel-body">
                               <button type="submit" class="btn btn-purple waves-effect waves-light" id="submit-quiz" >Submit Quiz</button>
                              </div>
                    </div>
                </li>
            </ul>
</form>
        <div class="nomargin"></div>
    </div>
   
 @stop