@extends('layouts.app')

@section('content')

    <style type="text/css">
    	body {
    		padding-top: 125px;
    	}

    	#board {
    		width: 70%;
    	}

    	@media (max-width: 762px)
    	{
	    	#board {
	    		width: 90%;
	    	}	
    	}
    </style>
 	
 	<div class="panel panel-border panel-inverse"> 
 		<div class="panel-heading">
 			
 		</div>
 		<div class="panel-body">
 		  <div class="col-sm-7 col-md-6">
        <span class="h3" id="time1">0:05:00</span>
        <div id="board"></div>
        <span class="h3" id="time2">0:05:00</span>
        <hr>
        <div id="engineStatus">...</div>
      </div>
      <div class="col-sm-5 col-md-6">
        <h3>Moves:</h3>
        <div id="pgn"></div>
        <hr>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="timeBase" class="control-label col-xs-4 col-sm-6 col-md-4">Base time (min)</label>
            <div class="col-xs-4 col-sm-6 col-md-4">
              <input type="number" class="form-control" id="timeBase" value="5"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="timeInc" class="control-label col-xs-4 col-sm-6 col-md-4">Increment (sec)</label>
            <div class="col-xs-4 col-sm-6 col-md-4">
              <input type="number" class="form-control" id="timeInc" value="2"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="skillLevel" class="control-label col-xs-4 col-sm-6 col-md-4">Skill Level (0-20)</label>
            <div class="col-xs-4 col-sm-6 col-md-4">
              <input type="number" class="form-control" id="skillLevel" value="20"></input>
            </div>
          </div>
          <div class="form-group">
            <label for="color" class="control-label col-xs-4 col-sm-6 col-md-4">I play</label>
            <div class="col-xs-4 col-sm-6 col-md-4">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active" id="color-white"><input type="radio" name="color">White</label>
                <label class="btn btn-inverse" id="color-black"><input type="radio" name="color">Black</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="showScore" class="control-label col-xs-4 col-sm-6 col-md-4">Show score</label>
            <div class="col-xs-4 col-sm-6 col-md-4">
              <input type="checkbox" class="form-control" id="showScore" checked></input>
            </div>
          </div>
          <div class="form-group">
            <label for="color" class="control-label col-xs-4 col-sm-6 col-md-4"></label>
            <div class="col-xs-4 col-sm-6 col-md-4">
              <button type="button" class="btn btn-primary" onclick="newGame()">New Game</button>
            </div>
          </div>
        </form>
        
      </div>
		<i id="source" data-val="0" hidden="true"></i>
            <i id="dest" data-val="0" hidden="true"></i>
 		</div>
 	</div>
    


@stop


@section('scripts')
   
    <script src="/js/chess.js"></script>
    <script src="/js/chessboard-0.3.0.js"></script>
    <script src="/js/enginegame.js"></script>
    <script src="/js/smartgame.js"></script>
  
@stop