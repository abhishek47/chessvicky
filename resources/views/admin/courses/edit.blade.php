@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Edit This Course</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/courses/' . $course->slug ) }}">
                {{ csrf_field() }}
                @include('partials.errors')
                <div class="form-group ">

                    <div class="col-xs-12">
                        <label for="title" class="">Title : </label>
                        <input class="form-control" type="text" name="title" required="" placeholder="Course Title" value="{{ $course->title }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="banner_url" class="">Banner Url : </label>
                        <input class="form-control" type="text" name="banner_url"  placeholder="Banner Url" value="{{ $course->banner_url }}" >
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="trailer_url" class="">Trailer Url : </label>
                        <input class="form-control" type="text" name="trailer_url" placeholder="Trailer Url"  value="{{ $course->trailer_url }}">
                    </div>
                </div>
  

                <div class="form-group ">
                    <div class="col-xs-12">
                       <label for="desc" class="">Description : </label>
                        <textarea class="form-control" type="text" rows="5" name="desc" placeholder="Course Description">{{ $course->desc }}</textarea>
                    </div>
                </div>

                 <div class="form-group ">
                    <div class="col-xs-12">
                       <label for="tags" class="">Tags : </label>
                        <input class="form-control" data-role="tagsinput" type="text" name="tags" placeholder="Add Tags" value="{{ $course->tags }}">
                    </div>
                </div>

                  <div class="form-group ">
                     <div class="col-xs-12">
                            <label for="category_id" class="">Category : </label>
                            <div class="">
                                <select name="category_id" class="form-control">
                                	  @foreach($categories as $category)
                                       <option value="{{ $category->id }}" {{ isSelected($category->id, $course->category->id) }}>{{ $category->name }}</option>
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                       </div>

              

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Update Course</button>
                    </div>
                </div>

                
            </form> 
                </div>
        </div>
       </div> 
     </div>  
   </div>
@stop