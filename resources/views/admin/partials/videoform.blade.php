<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload New Video</h4>
      </div>
      <div class="modal-body">
       
        <form class="form-horizontal" style="padding-right: 20px;padding-left: 20px;" method="POST" action="{{ url('/admin/videos') }}">
        {!! csrf_field() !!}

             <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                 <label for="title" control-label>Title : </label>
                 <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>

                  @if ($errors->has('title'))
                      <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
                      </span>
                  @endif
             </div>

             <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                 <label for="description" control-label>Description : </label>
                 <textarea class="form-control" name="description" id="description" rows="5">{{ old('description') }}</textarea>

                  @if ($errors->has('description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('description') }}</strong>
                      </span>
                  @endif
             </div>

               <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                 <label for="video_url" control-label>Embed Code : </label>
                 <textarea class="form-control" name="url" id="url" rows="5">{{ old('url') }}</textarea>

                  @if ($errors->has('url'))
                      <span class="help-block">
                          <strong>{{ $errors->first('url') }}</strong>
                      </span>
                  @endif
             </div>

             <div class="form-group{{ $errors->has('cover_url') ? ' has-error' : '' }}">
                 <label for="video_url" control-label>Cover Url : </label>
                 <input class="form-control" name="cover_url" id="cover_url" type="text" " value="{{ old('cover_url') }}" />
                  @if ($errors->has('cover_url'))
                      <span class="help-block">
                          <strong>{{ $errors->first('cover_url') }}</strong>
                      </span>
                  @endif
             </div>

              <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                 <label for="course_id" control-label>Select Course : </label>
                  <select class="form-control" name="course_id">
                   @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                   
                   @endforeach  
                  </select> 

                   @if ($errors->has('course_id'))
                      <span class="help-block">
                          <strong>{{ $errors->first('course_id') }}</strong>
                      </span>
                  @endif
             </div>

              <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                 <label for="duration" control-label>Video Duration : </label>
                 <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration') }}"/>

                  @if ($errors->has('duration'))
                      <span class="help-block">
                          <strong>{{ $errors->first('duration') }}</strong>
                      </span>
                  @endif
             </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Video</button>
      </div>
      </form>
    </div>
  </div>
</div>