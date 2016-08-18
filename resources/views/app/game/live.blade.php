@extends('layouts.app')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
    <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                
                 <h3 style="text-transform: capitalize;"><strong>PLAY CHESS YOUR FRIENDS!</strong></h3>
                 <p>Play chess with the friend anywhere in the world using just a four digit code!The more better you win the the more points you score in your skillometer.On defeat you lose your points from skillometer.</p>
                 
                <p>
                   <a href="#"  data-toggle="modal" data-target="#con-close-modal" class="btn btn-inverse">
                      <i class="fa fa-plus"></i> Start New Game.
                   </a>
                   <a href="#"  data-toggle="modal" data-target="#con-close-modal" class="btn btn-inverse">
                      <i class="fa fa-sign-in"></i> Join an Existing game.
                   </a>
                 </p> 
              </div>
              <div class="col-md-4">
      
              </div>

        
            </div>
           
         </div>
      </div>
   </div>
   
  
  <div class="panel panel-border panel-inverse"> 
    <div class="panel-heading">
      
    </div>
    <div class="panel-body">
      <div class="col-sm-7 col-md-6">
        <p><b>Computer</b> (<span class="text-primary" id="time1">0:05:00</span>)</p>
        <br>
        <div id="board"></div>
        <br>
        <p><b>{{ Auth::user()->fullname() }}</b> (<span class=" text-primary" id="time2">0:05:00</span>)</p>
       
        
        <!-- -->
      </div>
      <div class="col-sm-5 col-md-6">
        <h3>Moves:</h3>
        <div id="game-data">
          </div>
        <hr>
        <p><strong>Status: </strong><span id="status"></span></p>
        <hr>
       
     
       <!--  <div id="board-buttons">
            <button type="button" class="btn btn-default" id="btnStart"><i class="fa fa-fast-backward fa-lg"></i></button>
            <button type="button" class="btn btn-default" id="btnPrevious"><i class="fa fa-step-backward fa-lg"></i></button>
            <button type="button" class="btn btn-default" id="btnNext"><i class="fa fa-step-forward fa-lg"></i></button>
            <button type="button" class="btn btn-default" id="btnEnd"><i class="fa fa-fast-forward fa-lg"></i></button>
          </div> -->
       
        
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