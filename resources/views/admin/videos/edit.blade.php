@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Edit This Video</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/videos/' . $video->slug ) }}">
                {{ csrf_field() }}
                @include('partials.errors')
                <div class="form-group ">

                    <div class="col-xs-12">
                        <label for="title" class="">Title : </label>
                        <input class="form-control" type="text" name="title" required="" placeholder="Video Title" value="{{ $video->title }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                         <label for="poster_url" class="">Poster Url : </label>
                        <input class="form-control" type="text" name="poster_url"  placeholder="Cover Url" value="{{ $video->poster_url }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                         <label for="url" class="">Video Url : </label>
                         <input class="form-control" type="text" name="url" placeholder="Video Url" value="{{ $video->url }}" >
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                         <label for="position" class="">Position : </label>
                        <input class="form-control" type="text" name="position"  placeholder="Position" value="{{ $video->position }}">
                    </div>
                </div>
  

                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="desc" class="">Description : </label>
                           
                        <textarea class="form-control" type="text" rows="5" name="desc" placeholder="Video Description">{{ $video->desc }}</textarea>
                    </div>
                </div>

                 <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="tags" class="">Tags : </label>
                        <input class="form-control" data-role="tagsinput" type="text" name="tags" placeholder="Add Tags" value="{{ $video->tags }}">
                    </div>
                </div>

                  <div class="form-group ">
                     <div class="col-xs-12">
                            <label for="course_id" class="">Select Course : </label>
                            <div class="">
                                <select name="course_id" class="form-control">
                                       <option value="0" {{ $video->course_id == 0 ? 'selected' : '' }} >None</option>
                                	  @foreach($courses as $course)
                                      
                                       @if($video->course_id != 0)
                                          <option value="{{ $course->id }}" {{ isSelected($course->id, $video->course->id) }}>{{ $course->title }}</option>
                                       @else 
                                          <option value="{{ $course->id }}">{{ $course->title }}</option>
                                       @endif   
                                    @endforeach   
                                    
                                </select>
                            </div>
                        </div>
                       </div>

              

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Update Video</button>
                    </div>
                </div>

                
            </form> 
                </div>
        </div>
       </div> 
     </div>  
   </div>
@stop