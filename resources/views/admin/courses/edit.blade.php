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
                        <input type="checkbox" name="is_premium" id="is_premium" data-plugin="switchery" data-color="#f05050" data-size="small" {{ $course->is_premium ? 'checked' : '' }}/><label for="is_premium">Premium</label>
                    </div>
                </div>  
  

              
                <div class="form-group ">
                    <div class="col-xs-12">
                        <textarea id="body" name="desc">{{ $course->desc }}</textarea>
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




@section('scripts')
    
    <style type="text/css">
      
      .tinymce-content p {
          padding: 0;
          margin: 1px 0;
      }
    </style>
    
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
      <script type='text/javascript'>
       var default_value = 'Hello!'
   </script>
    <script type="text/javascript">
          $(document).ready(function () {
          if($("#body").length > 0){
              tinymce.init({
                  selector: "textarea#body",
                  theme: "modern",
                  height:500,
                  force_br_newlines : true,
                  force_p_newlines : false,
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak ',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools',
    
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | fontsizeselect ',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
  ]
              });
          }
      });
        </script>
@stop