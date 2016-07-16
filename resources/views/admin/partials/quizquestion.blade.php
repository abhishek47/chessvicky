<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Question</h4>
      </div>
      <div class="modal-body">
       
        <form class="form-horizontal" style="padding-right: 20px;padding-left: 20px;" method="POST" action="{{ url('/admin/quiz/' . $quiz->slug . '/questions') }}">
        {!! csrf_field() !!}
              @include('partials.errors')
             <div class="form-group">
                 <label for="question" control-label>Question : </label>
                 <textarea type="text" class="form-control" name="question" id="question" >{{ old('question') }}</textarea>

                
             </div>

             <div class="form-group">
                 <label for="position" control-label>Position : </label>
                 <input type="text" class="form-control" name="position" id="position" value="{{ old('position') }}"/>

                
             </div>

              <div class="form-group">
                 <label for="points" control-label>Points : </label>
                 <input type="text" class="form-control" name="points" id="points" value="{{ old('points') }}"/>

                
             </div>
                

             <div class="row">   
              <div class="form-group col-md-6">
                 <label for="option_a" control-label>Option A : </label>
                 <input type="text" class="form-control" name="option_a" id="option_a" value="{{ old('option_a') }}"/>

                
             </div>
             &nbsp;

              <div class="form-group  col-md-6">
                 <label for="option_b" control-label>Option B : </label>
                 <input type="text" class="form-control" name="option_b" id="option_b" value="{{ old('option_b') }}"/>

                
             </div>
            </div> 
            
             <div class="row"> 
              <div class="form-group  col-md-6">
                 <label for="option_c" control-label>Option C : </label>
                 <input type="text" class="form-control" name="option_c" id="option_c" value="{{ old('option_c') }}"/>

                
             </div>

              <div class="form-group  col-md-6">
                 <label for="option_d" control-label>Option D : </label>
                 <input type="text" class="form-control" name="option_d" id="option_d" value="{{ old('option_d') }}"/>

                
             </div>
            </div> 

             <div class="form-group">
                 <label for="answer" control-label>Answer : </label>
                 <input type="text" class="form-control" name="answer" id="answer" value="{{ old('answer') }}"/>

                
             </div>

           


        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Question</button>
      </div>
      </form>
    </div>
  </div>
</div>