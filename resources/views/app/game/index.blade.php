@extends('layouts.app')

@section('content')

 <div class="container">
 	
 	<div class="panel panel-border panel-inverse"> 
 		<div class="panel-heading">
 			
 		</div>
 		<div class="panel-body">
 		  <div class="row">
 		  	 <div class="col-lg-8">
 		  	 	<div id="board" style="width: 400px"></div>
 

 		  	 </div>
 		  </div>
 			<i id="source" data-val="0" hidden="true"></i>
            <i id="dest" data-val="0" hidden="true"></i>
		
 		</div>
 	</div>

	

 
 </div>

@stop


@section('scripts')

   <script src="/js/chessboard-0.3.0.js"></script>
      <script src="/js/chess.js"></script>
    <script src="/js/game.js"></script>
@stop