@extends('layouts.admin')

@section('content')
   

<div class="container">


<div class="panel panel-border panel-purple">
    <div class="panel-heading">
                    <h1 class="panel-title">Videos</h1>
                    
                </div>

				  <div class="panel-body">
				   <div class="col-md-9">
				    <p><b>{{ $count }}</b> {{ pluralise('Videos', $count) }} Uploaded. </p>
				    </div>
				    <div class="col-md-3">
				       <a href="{{ url('/admin/videos/new') }}" class="btn btn-purple" >
				    		 <i class="glyphicon glyphicon-plus"></i> Upload New Video
				    	</a>
				    </div>
				  </div>
			  </div>
  


  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Title</th> 
        <th>Description</th> 
        <th>Video Url</th>
        <th>Duration</th>
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach ($videos as $video)
       <tr> 
         <th scope="row">{{ $video->id }}</th> 
         <td>{{ str_limit($video->title, 30) }}</td> 
         <td>{{ str_limit($video->desc, 20) }}</td> 
         <td>{{ str_limit($video->url, 20) }}</td>
         <td>{{ $video->duration }}</td>
         <td>
         <a href="{{ url('/admin/videos/' . $video->slug  )}}" class="btn  btn-success btn-xs" >Watch</a>&nbsp;
        <a href="{{ url('/admin/videos/' . $video->slug . '/edit' )}}" class="btn  btn-warning btn-xs" >Edit</a>&nbsp;<a href="{{ url('/admin/videos/' . $video->slug . '/delete' )}}" class="btn  btn-danger btn-xs">Delete</a></td>
        </tr> 

      @endforeach  
       </tbody> 
   </table>

   {!! $videos->render() !!}

   @include('admin.partials.videoform')


@stop

@section('js')
  @if(!$errors->isEmpty())
    <script type="text/javascript">
      $('#createModal').modal();
    </script>
  @endif

 </div>
  
@stop