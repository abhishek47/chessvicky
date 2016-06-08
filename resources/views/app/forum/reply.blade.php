<!-- Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Write A Reply</h4>
      </div>
      <div class="modal-body">
       
        <form class="form-horizontal" role="form" method="POST" action="{{ '/questions/' . $question->id . '/answers'  }}">
   {!! csrf_field() !!}

   
    
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        
        <div class="col-md-12">
            <textarea  class="form-control" placeholder="Write your reply" name="body" id="body" rows="10">{{ old('body') }}</textarea>

            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>
    </div> 

    

   

    
    
  


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Reply</button>
      </div>
      </form>
    </div>
  </div>
</div>

