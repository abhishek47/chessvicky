@extends('layouts.app')

@section('content')
   
  <div class="container">
  	<br><br><br><br>
<form action="/grade" method="post" id="quiz">
             {{ csrf_field() }}
            <ul id="test-questions">
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
                                <h3 class="panel-title">2. What country is chess thought to have originated in?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-1-answers" id="gender-malequestion-1-answers-A" value="A">
                            <label for="question-1-answers-A" class="fwrd labela">
                               <span>A.</span> Male
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
                     <div class="panel panel-border panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">3. What country is chess thought to have originated in?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
                            <label for="question-1-answers-A" class="fwrd labela">
                               <span>A.</span> Male
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
                     <div class="panel panel-border panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">4. What country is chess thought to have originated in?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
                            <label for="question-1-answers-A" class="fwrd labela">
                               <span>A.</span> Male
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
                     <div class="panel panel-border panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">5. What country is chess thought to have originated in?</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <div class="options col-xs-7">
                    <div class="mtm answer" >
                       <div class="radio radio-info col-xs-6">
                             <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
                            <label for="question-1-answers-A" class="fwrd labela">
                               <span>A.</span> Male
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
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it’s time to see your results...</h3>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
</form>
        <div class="nomargin"></div>
    </div>
   
  </div> 
@stop