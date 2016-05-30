@extends('layouts.app')

@section('content')
   
  <div class="container">
  	
 <h1 class="transparent index-headline">Let's Give a Small Test!</h1>
<form action="/grade" method="post" id="quiz">
             {{ csrf_field() }}
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>What country is chess thought to have originated in??</h3>
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">a. Russia</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">b. United States</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">c. China</label>
                    </div>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D" class="fwrd labeld">d. India</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Which piece holds the most power on the chess board?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">a. King</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">b. Knight</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">c. Pawn</label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D" class="fwrd labeld">d. Queen</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>How many possible moves are there at the beginning of the game?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">a. 10</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">b. 16</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">c. 20</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D" class="fwrd labeld">d. 18</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>In what U.S. city was former world champion, Bobby Fischer, born in?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">a. Chicago</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">b. New York
</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">c. Los Angeles</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D" class="fwrd labeld">d. St. Louis</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Which is the only piece that is not allowed to capture the king?</h3>
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">a. King</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">b. Queen</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">c. Knight</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D" class="fwrd labeld">d. Pawn</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
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