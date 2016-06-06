@extends('layouts.app')

@section('content')
  
  <div class="container">
   
            

         <div class="panel panel-border panel-inverse">
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

          <div class="panel panel-color panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">Video : {{ $video->title }}</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                  <b>Description : </b>
                                </p>
                                <p>
                                    {!! $video->desc !!}
                                </p>
                                <p>
                                  <b>Tags : </b> {{ $video->tags }}
                            </div>
                        </div>  

  </div>

@stop