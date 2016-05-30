@extends('layouts.app')

@section('content')
   
  <div class="container">
  
<form action="/grade" method="post" id="quiz">
              {{ csrf_field() }}  
            <ul id="test-questions">
                <li>
                    <div class="panel panel-border panel-purple">
                         <div class="panel-heading">
                                <h1 class="panel-title">Quiz Up - Level 1 [ BASIC ]</h1>
                                <h3>Questions : 5  | Points : 50</h3>
                            </div>
                            <div class="panel-body">

                            </div>
                    </div>
                </li>
                <li>
                     <div class="panel panel-border panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">1. What country is chess thought to have originated in?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
                            <label for="question-1-answers-A" class="fwrd labela">
                               <span>A.</span> Russia
                            </label>
                        </div>
                      
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb"><span>B.</span> United States</label>
                       </div> 
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc"><span>C.</span> China</label>
                      </div>  
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld"><span>D.</span> India</label>
                      </div>  
                    </div>
                    </div>
                                </p>
                            </div>
                        </div>
                    
                    
                   
                </li>

                <li>
                     <div class="panel panel-border panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">2. Which piece holds the most power on the chess board?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A">
                            <label for="question-2-answers-A" class="fwrd labela">
                               <span>A.</span> King
                            </label>
                        </div>
                      
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb"><span>B.</span> Queen</label>
                       </div> 
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc"><span>C.</span> Knight</label>
                      </div>  
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld"><span>D.</span> Pawn</label>
                      </div>  
                    </div>
                    </div>
                                </p>
                            </div>
                        </div>
                    
                    
                   
                </li>

                <li>
                     <div class="panel panel-border panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">3. How many possible moves are there at the beginning of the game?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A">
                            <label for="question-3-answers-A" class="fwrd labela">
                               <span>A.</span> 10
                            </label>
                        </div>
                      
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb"><span>B.</span> 16</label>
                       </div> 
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc"><span>C.</span> 20</label>
                      </div>  
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld"><span>D.</span> 18</label>
                      </div>  
                    </div>
                    </div>
                                </p>
                            </div>
                        </div>
                    
                    
                   
                </li>

                <li>
                     <div class="panel panel-border panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">4. Which is the only piece that is not allowed to capture the king?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A">
                            <label for="question-4-answers-A" class="fwrd labela">
                               <span>A.</span> Queen
                            </label>
                        </div>
                      
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb"><span>B.</span> Knight</label>
                       </div> 
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc"><span>C.</span> King</label>
                      </div>  
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld"><span>D.</span> Pawn</label>
                      </div>  
                    </div>
                    </div>
                                </p>
                            </div>
                        </div>
                    
                    
                   
                </li>

                <li>
                     <div class="panel panel-border panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">5. Which is the only piece allowed to jump over another piece?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A">
                            <label for="question-5-answers-A" class="fwrd labela">
                               <span>A.</span> Knight
                            </label>
                        </div>
                      
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb"><span>B.</span> Rook</label>
                       </div> 
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc"><span>C.</span> Pawn</label>
                      </div>  
                    </div>
                    <div class="answer">
                      <div class="radio radio-info col-xs-6">
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld"><span>D.</span> King</label>
                      </div>  
                    </div>
                    </div>
                                </p>
                            </div>
                        </div>
                    
                    
                   
                </li>


               
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
   
  </div> 

 
 
 <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content p-0 b-0">
                                        <div class="panel panel-color panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 class="panel-title">Welcome to ChessVicky!</h3>
                                            </div>
                                            <div class="panel-body">
                                                <p>You are now logged in!Now, you have to give a simple 5 questions quiz on chess to begin with your account!Don't worry it is not necessary to be 100% right.</p>
                                                <br/>
                                                <button type="button" data-dismiss="modal" class="btn btn-purple waves-effect waves-light" id="submit-quiz" >Continue</button>
                              </div>
                                            </div>
                                        </div>

                                    </div><!-- /.modal-content -->

                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
     
  </div>


@stop

@section('scripts')
<script type="text/javascript">
  $('#panel-modal').modal('show');
</script> 
@stop

