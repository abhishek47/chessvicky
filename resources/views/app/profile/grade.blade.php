@extends('layouts.app')

@section('content')
   
  <div class="container">
   
   <div class="panel panel-border panel-purple">
       <div class="panel-heading">
              <h1 class="panel-title">Quiz Up - Level 1 [ BASIC ]</h1>
              <h3>Total Questions : 5  | Correct Answers : {{ $correct }}</h3>
          </div>
          <div class="panel-body">
               You Scored {{ $result }} Points.
          </div>
  </div>

   <div class="panel panel-border panel-success">
       <div class="panel-heading">
              <h1 class="panel-title">Skillometer</h1>
              
          </div>
          <div class="panel-body">
              <div class="progress progress-lg">
                  <div class="progress-bar  progress-bar-success progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="{{ $skillometer }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skillometer }}%; min-width: 2em;">
                      {{ $skillometer }}% Complete
                  </div>
              </div>
              <p class="text-muted m-t-15 m-b-5 font-13">
                      This skillometer increases as you complete different courses, solve daily challenges, puzzles, quizzes and more.
                      .
                  </p>
          </div>
  </div>

  <div class="panel panel-border panel-purple">
       <div class="panel-heading">
              <h1 class="panel-title">Let's Begin</h1>
              
          </div>
          <div class="panel-body">
                <a href="/home" class="btn btn-purple waves-effect waves-light" id="submit-quiz" >Continue To Dashboard</a>
          </div>
  </div>
    
     <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content p-0 b-0">
                                        <div class="panel panel-color panel-primary">
                                            <div class="panel-heading">
                                                <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 class="panel-title">Good Job!</h3>
                                            </div>
                                            <div class="panel-body">
                                                <p>Voila! you gave your first chess quiz!There's a lot more to come.</p>
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