@extends('layouts.app')

@section('content')

 <div class="container">
 	
 	<div class="panel panel-border panel-inverse"> 
 		<div class="panel-heading">
 			
 		</div>
 		<div class="panel-body">
 		  <div class="row">
 		  	 <div class="col-lg-8">
 		  	 	<div id="board" style="width: 500px"></div>
 		  	 </div>
 		  </div>
 			 
			<p>Status: <span id="status"></span></p>
			<p>FEN: <span id="fen"></span></p>
			<p>PGN: <span id="pgn"></span></p>
 		</div>
 	</div>

	

 
 </div>

@stop


@section('scripts')
 
   <script type="text/javascript" src="js/chessboard-0.3.0.js"></script>
    <script src="js/chess.js"></script> 
     <script src="js/game.js"></script>
  
@stop