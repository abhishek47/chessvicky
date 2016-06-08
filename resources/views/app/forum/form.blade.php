<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Start A New Conversation</h4>
      </div>
      <div class="modal-body">
       
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/questions') }}">
   {!! csrf_field() !!}

    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">Title</label>

        <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">

            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">Description</label>

        <div class="col-md-10">
            <textarea  class="form-control" name="body" id="body" rows="10">{{ old('description') }}</textarea>

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
    </div> 

    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">Category</label>

        <div class="col-md-10">
            
            <select class="form-control" name="category_id">
                 @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                   
                   @endforeach 
            </select> 
            
            @if ($errors->has('category_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('category_id') }}</strong>
                </span>
            @endif

        </div>
    </div>

   
     <div class="form-group ">
      <label class="col-md-2 control-label">Tags</label>

        <div class="col-xs-10">
            <input class="form-control" data-role="tagsinput" type="text" name="tags" placeholder="Add Tags">
        </div>
    </div>

  


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Publish Question</button>
      </div>
      </form>
    </div>
  </div>
</div>

