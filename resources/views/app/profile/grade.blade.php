@extends('layouts.app')

@section('content')
   
  <div class="container">
    
     <h2 class="text-center">You Answered {{ $correct }} Questions Correct Out Of 5.</h2>
     <h2 class="text-center">You Scored {{ $result }} Points.</h2>
     
     <h3 class="text-center">Your Skillometer</h3>
     <div class="row">
		     <div class="progress ">
		  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skillometer }}"
		  aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width:{{ $skillometer }}">
		    {{ $skillometer . '%'}}
		  </div>
		</div>
		<p>
			This skillometer goes on increasing as you complete different courses, solve daily challenges and quizzes!This decides your XP(i.e Beginner, Amateur, Advanced or Professional)!
		</p>
     </div>
      
      <div>
      	 <a class="btn btn-primary" href="/home">Continue To Dashoard</a>
      </div>
  </div>


@stop