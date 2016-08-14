@extends('layouts.app')

@section('content')
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
    <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                
                 <h3 style="text-transform: capitalize;"><strong>PLAY CHESS WITH CHESSVICKY!</strong></h3>
                 <p>Play chess with the computer with levels 0 to 20!The more better you win the the more points you score in your skillometer.On defeat you lose your points from skillometer.</p>
                 
                <p>
                   <a href="#"  data-toggle="modal" data-target="#con-close-modal" class="btn btn-inverse">
                      <i class="fa fa-refresh"></i> Start New Game
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
        <p> <div id="engineStatus">...</div> </p>
        <hr>                        
        <p>
                   <a href="#"  data-toggle="modal" data-target="#con-close-modal" class="btn btn-inverse">
                      <i class="fa fa-refresh"></i> Start New Game
                   </a>
                 </p>
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









        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Choose Game Preferences</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                
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
                                                        <div class="col-xs-6 col-sm-6 col-md-4">
                                                          <input type="number" class="form-control" id="skillLevel" value="5"></input>
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
                                                      <div class="form-group hidden">
                                                        <label for="showScore" class="control-label col-xs-4 col-sm-6 col-md-4">Show score</label>
                                                        <div class="col-xs-4 col-sm-6 col-md-4 hidden">
                                                          <input type="checkbox" class="form-control" id="showScore" checked></input>
                                                        </div>
                                                      </div>
                                                     
                                                    
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="newGame()" data-dismiss="modal">Start Playing</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                 </div>
                            </div><!-- /.modal -->
    


@stop


@section('scripts')
   
    <script src="/js/chess.js"></script>
    <script src="/js/chessboard-0.3.0.js"></script>
    <script src="/js/chessboardjs-themes.js"></script>
    <script src="/js/enginegame.js"></script>
    <script src="/js/smartgame.js"></script>

    <script type="text/javascript">
      $('.myLink').on('click', function(e) {
         e.preventDefault();
        var move = $(this).data('move');
        goToMove(move);
    });
    </script>

    <script type="text/javascript">
      $("#con-close-modal").modal()
    </script>
  
@stop