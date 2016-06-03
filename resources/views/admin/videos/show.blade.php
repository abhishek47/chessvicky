@extends('layouts.admin')

@section('content')
  
  <div class="container">
     <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Video : {{ $video->title }}</h3>
                            </div>
                            <div class="panel-body">
                                <p><b>Course : </b> {{ $video->course->title }} </p>
                                <p>
                                	<b>Description : </b>
                                </p>
                                <p>
                                    {!! $video->desc !!}
                                </p>
                            </div>
                        </div>	
            

         <div class="panel panel-border panel-purple">
        	  <div class="panel-heading">
                   
                </div>
                <div class="panel-body">
                	 <video id="my_video_1" class="video-js vjs-default-skin" width="100%" height="600"
      controls preload="none" poster='{{ $video->cover_url }}'
      data-setup='{ "aspectRatio":"640:350", "playbackRates": [1, 1.5, 2] }'>
    <source src="{{ $video->url }}" type='video/mp4' />
    <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
  </video>
                	
                </div>
        </div>  

         <div class="panel panel-border panel-purple">
        	  <div class="panel-heading">
                    <h1 class="panel-title">Other Videos From This Course</h1>
                    
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
				      @foreach ($video->course->videos as $video)
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