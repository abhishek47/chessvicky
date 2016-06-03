@extends('layouts.admin')

@section('content')
  
  <div class="container">
     <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Course : {{ $course->title }}</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                	<b>Description : </b>
                                </p>
                                <p>
                                    {!! $course->desc !!}
                                </p>
                            </div>
                        </div>	
        <div class="panel panel-border panel-purple">
        	  <div class="panel-heading">
                    <h1 class="panel-title">Course Links</h1>
                    
                </div>
                <div class="panel-body">
                	<p>
                		<b>Banner Link : </b>
                	</p> 
                	<p>
                		<a href="{{ $course->banner_url }}" target="_blank">{{ $course->banner_url }}</a>
                	</p>
                	
                </div>
        </div>       

         <div class="panel panel-border panel-purple">
        	  <div class="panel-heading">
                    <h1 class="panel-title">Course Trailer</h1>
                    
                </div>
                <div class="panel-body">
                	 <video id="my_video_1" class="video-js vjs-default-skin" width="100%" height="600"
      controls preload="none" poster='{{ $course->banner_url }}'
      data-setup='{ "aspectRatio":"640:350", "playbackRates": [1, 1.5, 2] }'>
    <source src="{{ $course->trailer_url }}" type='video/mp4' />
    <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
  </video>
                	
                </div>
        </div>  

         <div class="panel panel-border panel-purple">
        	  <div class="panel-heading">
                    <h1 class="panel-title">Videos</h1>
                    
                </div>
                <div class="panel-body">

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
				         <th scope="row">{{ $video->position }}</th> 
				         <td>{{ str_limit($video->title, 30) }}</td> 
				         <td>{{ str_limit($video->desc, 20) }}</td> 
				         <td>{{ str_limit($video->url, 20) }}</td>
				         <td>{{ $video->duration }}</td>
				         <td>
				          <a href="{{ '/admin/videos/' . $video->slug }}" class="btn  btn-success btn-xs" >Watch</a>
				        <a href="{{ '/admin/videos/' . $video->slug . '/edit' }}" class="btn  btn-warning btn-xs" >Edit</a>&nbsp;<a href="{{ '/admin/videos/' . $video->slug . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a></td>
				         
				        </tr> 

				      @endforeach  
				       </tbody> 
				   </table>
                </div>
        </div>                  
  </div>

@stop