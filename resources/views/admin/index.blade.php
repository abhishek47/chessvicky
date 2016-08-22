@extends('layouts.admin')

@section('content')

 <div class="container">
 	<div class="row">
 		<div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-inr text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">7023</h2>
                <div class="text-muted m-t-5">Total Revenue</div>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-users text-custom"></i>
                <h2 class="m-0 text-dark counter font-600">{{ $userscount }}</h2>
                <div class="text-muted m-t-5">Registered Users</div>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-user-plus text-purple"></i>
                <h2 class="m-0 text-dark counter font-600">2189</h2>
                <div class="text-muted m-t-5">Unique Visitors</div>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-user text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">{{ $onlineusers }}</h2>
                <div class="text-muted m-t-5">Users Online</div>
            </div>
        </div>


 	</div>

 	<div class="row">
 		<div class="col-lg-12">
                        <div class="panel panel-border panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Make An Announcement</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" method="post" action="/admin/notify">
                                         {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="notifytitle" class="col-sm-3 control-label">Subject</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="notifytitle" name="title" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="notifydesc" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                               <textarea name="content" id="body" class="form-control" rows="5">
                                                   
                                               </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="notifylink" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="notifylink" name="link" placeholder="Link">
                                            </div>
                                        </div>
                                         
                                        
                                        
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                              <button type="submit" class="btn btn-purple waves-effect waves-light">Notify Users!</button>
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
                  height:300,
                  plugins: [
                      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                      "save table contextmenu directionality emoticons template paste textcolor"
                  ],
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l ink image | print preview media fullpage | forecolor backcolor emoticons",
                  style_formats: [
                      {title: 'Bold text', inline: 'b'},
                      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                      {title: 'Example 1', inline: 'span', classes: 'example1'},
                      {title: 'Example 2', inline: 'span', classes: 'example2'},
                      {title: 'Table styles'},
                      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                  ]
              });
          }
      });
        </script>
@stop