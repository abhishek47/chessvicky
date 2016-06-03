<!-- Modal -->
<div class="modal fade" id="editModal-{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit This Video</h4>
      </div>
      <div class="modal-body">
       
        <form class="form-horizontal" style="padding-right: 20px;padding-left: 20px;" method="POST" action="{{ '/videos/' . $video->id . '/update' }}">
        {!! csrf_field() !!}

             <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                 <label for="title" control-label>Title : </label>
                 <input type="text" class="form-control" name="title" id="title" value="{{ $video->title }}"/>

                  @if ($errors->has('title'))
                      <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
                      </span>
                  @endif
             </div>

             <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                 <label for="description" control-label>Description : </label>
                 <textarea class="form-control" name="description" id="description" rows="5">{{ $video->description }}</textarea>

                  @if ($errors->has('description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('description') }}</strong>
                      </span>
                  @endif
             </div>

             <div class="form-group{{ $errors->has('video_url') ? ' has-error' : '' }}">
                 <label for="video_url" control-label>Embed Code : </label>
                 <textarea class="form-control" name="video_url" id="video_url" rows="5">{{ $video->video_url }}</textarea>

                  @if ($errors->has('video_url'))
                      <span class="help-block">
                          <strong>{{ $errors->first('video_url') }}</strong>
                      </span>
                  @endif
             </div>

              <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                 <label for="course_id" control-label>Select Course : </label>
                  <select class="form-control" name="course_id">
                   @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ isSelected($course->id, $video->course->id) }}>{{ $course->name }}</option>
                   
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
                 <input type="text" class="form-control" name="duration" id="duration" value="{{ $video->duration }}"/>

                  @if ($errors->has('duration'))
                      <span class="help-block">
                          <strong>{{ $errors->first('duration') }}</strong>
                      </span>
                  @endif
             </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Video</button>
      </div>
      </form>
    </div>
  </div>
</div>