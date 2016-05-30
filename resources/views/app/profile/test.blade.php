@extends('layouts.app')

@section('content')
   
  <div class="container">
  	<br><br><br><br>
<form action="/grade" method="post" id="quiz">
             {{ csrf_field() }}
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What country is chess thought to have originated in?</h3>
                     <p class="quiz-progress">1 of 5</p>
                    <div class="options">
                    <div class="mtm answer" >
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela"><span>a</span> Russia</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb"><span>b</span> United States</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc"><span>c</span> China</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld"><span>d</span> India</label>
                    </div>
                    </div>
                   
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Which piece holds the most power on the chess board?</h3>
                    <p class="quiz-progress">2 of 5</p>
                    <div class="options">
                    <div class="mtm answer">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela"><span>a</span> King</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb"><span>b</span> Knight</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc"><span>c</span> Pawn</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld"><span>d</span> Queen</label>
                    </div>
                    </div>
                    
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>How many possible moves are there at the beginning of the game?</h3>
                    <p class="quiz-progress">3 of 5</p>
                    <div class="options">
                    <div class="mtm answer">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela"><span>a</span> 10</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb"><span>b</span> 16</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc"><span>c</span> 20</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld"><span>d</span> 18</label>
                    </div>
                    </div>
                    
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>In what U.S. city was former world champion, Bobby Fischer, born in?</h3>
                    
                    <p class="quiz-progress">4 of 5</p>
                    <div class="options">
                    <div class="mtm answer">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela"><span>a</span> Chicago</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb"><span>b</span> New York
</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc"><span>c</span> Los Angeles</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld"><span>d</span> St. Louis</label>
                    </div>
                    </div>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Which is the only piece that is not allowed to capture the king?</h3>
                    
                    <p class="quiz-progress">5 of 5</p>
                    <div class="options">
                    <div class="mtm answer">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela"><span>a</span> King</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb"><span>b</span> Queen</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc"><span>c</span> Knight</label>
                    </div>
                    <div class="answer">
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld"><span>d</span> Pawn</label>
                    </div class="answer">
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