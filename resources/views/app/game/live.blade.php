@extends('layouts.app')

@section('content')

    <style type="text/css">
    	body {
    		padding-top: 125px;
    	}

    	
    </style>
 	
 	<div class="panel panel-border panel-inverse"> 
 		<div class="panel-heading">
 			
 		</div>
 		<div class="panel-body">
 		    <div id="board" style="width: 400px"></div>
      <p>Status: <span id="status"></span></p>
      <p>FEN: <span id="fen"></span></p>
      <p>PGN: <span id="pgn"></span></p>
      </div>
    </div>  
		
    <i id="source" data-val="0" hidden="true"></i>
    <i id="dest" data-val="0" hidden="true"></i>
 		
    </div>
 	</div>
    


@stop


@section('scripts')
   <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
   <script src="/js/chess.js"></script>
   <script src="/js/chessboard-0.3.0.js"></script>
   <script src="/js/utils.js"></script>
   <script src="/js/game.js"></script>
  
@stop