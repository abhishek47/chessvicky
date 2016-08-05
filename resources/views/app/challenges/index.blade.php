@extends('layouts.app')

@section('content')
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
    <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
               @if($type == 'premium')
                 <h3 style="text-transform: capitalize;"><strong>Premium Challenges</strong></h3>
                 <p>These challenges are updated once in a week and completing these challenges let you win cash prizes!These are conditions in which one move can check mate the opponent.Think of the move and win the game.</p>
               @else  
                 <h3 style="text-transform: capitalize;"><strong>CHECKMATE IN ONE MOVE!</strong></h3>
                 <p>These are conditions in which one move can check mate the opponent.Think of the move and win the game.The faster you crack the challenge the more points you get in your skillometer!</p>
               @endif  
                 
                 <p>
                   <a href="/challenges" class="btn btn-inverse">
                      <i class="fa fa-refresh"></i> Try New Challenge
                   </a>
                 </p>
              </div>
              <div class="col-md-4">
      
              </div>

        
            </div>
           
         </div>
      </div>
   </div>


      
			<div class="panel panel-color panel-inverse" >
			       <div class="panel-heading">
			       	   <a >
			                    <h3 class="panel-title">
                            <strong>
                              @if($challenge->is_premium)
                               <i class="fa fa-lock"></i>
                              @endif  
                                {{ $challenge->title }}
                            </strong></h3>
			                    </a>
			       </div>
			       <div class="panel-body" >
			                
			                   <p></p>
			                   <div class="col-lg-5">
			                      <div id="board" style="width: 400px"></div>
			                   	 
			                   </div>
			                   <div class="col-lg-7">
			                     <div style="margin: 45px;">
				                   	     <h3>{{ $challenge->subtitle }}</h3>
				                   	  	 <h4>Playing wrong move will snap the piece back to its orignal position!</h4> 
                                  <p><strong>Status: </strong><span id="status"></span></p>
                                 <p><strong>Points : </strong> {{ $challenge->points }}</p>
                                  <p class="text-muted"><a href="javascript:void(0);" onclick="showHint()"><strong><i class="fa fa-lightbulb-o"></i> Take Hint (-10 Points)</strong></a></p>
                                  <p id="hint" class="hidden"><strong>Hint : {{ $challenge->hint }}</strong></p>
				                   	  </div>

			                   	  </div>
			                   </div>
			                    
			                  </div>
			             <div class="panel-footer" >

                          <i id="source" data-val="0" hidden="true"></i>
                          <i id="dest" data-val="0" hidden="true"></i>
    
                           <i id="cId" data-val="{{ $challenge->id }}" hidden="true"></i>
                            <i id="points" data-val="{{ $challenge->points }}" hidden="true"></i>
                           <i id="moves" data-val="{{ $challenge->moves }}" hidden="true"></i>
                           <i id="fen" data-val="{{ $challenge->chessboard }}" hidden="true"></i>
                           <i id="solution" data-val="{{ $challenge->solution }}" hidden="true"></i>
			             	
			                         
			             </div>    
			                 
			                
			               
			           </div> 
			             
			            

</div> 

@stop

@section('scripts')

 <script type="text/javascript">
     function showHint() {

          console.log("Hint Clicked");
          $("#hint").removeClass('hidden');
          return false;
      }

 </script>

 <script src="/js/chess.js"></script>
 <script src="/js/chessboard-0.3.0.js"></script>
 <script src="/js/challenge.js"></script>
  

 
@stop