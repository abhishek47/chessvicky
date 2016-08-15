@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Edit This Article</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/articles/' . $article->slug ) }}">
                {{ csrf_field() }}
                @include('partials.errors')
                <div class="form-group ">

                    <div class="col-xs-12">
                       <label for="title">Title :</label>
                        <input class="form-control" type="text" name="title" required="" placeholder="Article Title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                       <label for="cover_url">Cover Url :</label>
                        <input class="form-control" type="text" name="cover_url"  placeholder="Cover Url" value="{{ $article->cover_url }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input type="checkbox" checked name="is_premium" id="is_premium" data-plugin="switchery" data-color="#f05050" data-size="small"/><label for="is_premium">Premium</label>
                    </div>
                </div>
  

                <div class="form-group ">
                    <div class="col-xs-12">
                        <textarea id="body" name="body">{{ $article->body }}</textarea>
                    </div>
                </div>

                 <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="tags">Tags :</label>
                        <input class="form-control" data-role="tagsinput" type="text" name="tags" placeholder="Add Tags" value="{{ $article->tags }}">
                    </div>
                </div>

                 

              

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Update Article</button>
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