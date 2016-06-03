@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Add A New Video</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/videos') }}">
                {{ csrf_field() }}
                @include('partials.errors')
                <div class="form-group ">

                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="title" required="" placeholder="Video Title" value="{{ old('title') }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="poster_url"  placeholder="Cover Url" value="{{ old('poster_url') }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="url" placeholder="Video Url" value="{{ old('url') }}" >
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="position"  placeholder="Position" value="{{ old('position') }}">
                    </div>
                </div>
  

                <div class="form-group ">
                    <div class="col-xs-12">
                        <textarea class="form-control" type="text" rows="5" name="desc" placeholder="Video Description">{{ old('desc') }}</textarea>
                    </div>
                </div>

                 <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" data-role="tagsinput" type="text" name="tags" placeholder="Add Tags" value="{{ old('tags') }}">
                    </div>
                </div>

                  <div class="form-group ">
                     <div class="col-xs-12">
                            <label for="course_id" class="">Select Course : </label>
                            <div class="">
                                <select name="course_id" class="form-control">
                                	  @foreach($courses as $course)
                                       <option value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                       </div>

              

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Add Video</button>
                    </div>
                </div>

                
            </form> 
                </div>
        </div>
       </div> 
     </div>  
   </div>
@stop