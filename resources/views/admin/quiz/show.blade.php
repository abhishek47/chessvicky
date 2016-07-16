@extends('layouts.admin')

@section('content')
  
  <div class="container">
     <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Quiz : {{ $quiz->title }}</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                	<b>Level : </b>
                                </p>
                                <p>
                                    {{ $quiz->level }}
                                </p>
                                <p>
                                    <b>Category : </b>
                                </p>
                                <p>
                                    {{ quizCategory($quiz->category) }}
                                </p>
                            </div>
                        </div>	
       

        
         <div class="panel panel-border panel-purple">
        	  <div class="panel-heading">
                    <h1 class="panel-title">Questions</h1>
                    
                </div>
                <div class="panel-body">
                  <div class="col-md-3">
                        <a data-toggle="modal" data-target="#createModal" class="btn btn-sm btn-purple">
                             <i class="glyphicon glyphicon-plus"></i> Add Question
                        </a>
                    </div>
                    <br/> <br/> <br/>
				  <table class="table table-striped">
				    <thead> 
				      <tr> 
				        <th>#</th> 
				        <th>Question</th> 
				        <th>Points</th> 
				        <th>Quiz Title</th>
				        <th>Answer</th>
				        <th>Actions</th>
				      </tr> 
				     </thead> 
				     <tbody> 
				      @foreach ($quiz->questions as $question)
				       <tr> 
				         <th scope="row">{{ $question->position }}</th> 
				         <td>{{ str_limit($question->question, 30) }}</td> 
				         <td>{{ $question->points }}</td> 
				         <td>{{ str_limit($question->quiz->title, 30) }}</td>
				         <td>{{ $question->answer }}</td>
				         <td>
				          <a data-toggle="modal" data-target="#editModal-{{ $question->id }}" class="btn  btn-warning btn-xs" >Edit</a>&nbsp;<a href="{{ '/admin/quiz/' . $quiz->slug . '/' .  $question->id   .'/delete' }}" class="btn  btn-danger btn-xs">Delete</a></td>
				         
				        </tr> 
                         @include('admin.partials.quizquestionedit' , ['question' => $question]);
				      @endforeach  
				       </tbody> 
				   </table>
                </div>
        </div>                  
  </div>
   
   @include('admin.partials.quizquestion')

@stop