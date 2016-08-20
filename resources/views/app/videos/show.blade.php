@extends('layouts.app')

@section('content')
  
  <div class="container">
   
             <div class="panel panel-color panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">Video : {{ $video->title }}</h3>
                            </div>
                            <div class="panel-body">
                                <p><b>Course : </b> <a href="{{ url('/courses/'. $course->slug ) }}"> {{ $video->course->title }} </a></p>
                                <p>
                                  <b>Description : </b>
                                </p>
                                <p>
                                    {!! $video->desc !!}
                                </p>
                                <p>
                                    <a class="btn btn-sm btn-primary" href="{{ '/favourites/1/' . $video->id }}">
                  @if(isStarred(1, $video->id))
                      <i class="fa fa-star"> Starred</i>
                    @else
                      <i class="fa fa-star-o"> Star</i>   
                    @endif  
                </a>
                                </p>
                            </div>
                        </div>  


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

         
         <div class="panel panel-border panel-inverse">
        	  <div class="panel-heading">
                    <h3 class="panel-title">Other Videos From This Course</h3>
                    
                </div>
                <div class="panel-body">
                                
          <table class="table table-hover">
            <thead> 
              <tr> 
                <th>#</th> 
                <th>Title</th> 
                <th>Description</th> 
               <!--  <th>Duration</th> -->
                <th>Actions</th>
              </tr> 
             </thead> 
             <tbody> 
              @foreach ($video->course->videos as $cvideo)
              
               <tr class="{{ $cvideo->id == $video->id ? 'success' : '' }}" > 
                 <th scope="row">{{ $cvideo->position }}</th> 
                 <td>
                   @if($cvideo->id == $video->id)
                     {{ str_limit($cvideo->title, 30) }}
                   @else 
                     <a href="{{ url('/courses/' . $course->slug . '/' . $cvideo->slug) }}">
                       {{ str_limit($cvideo->title, 30) }}
                     </a>
                   @endif  
                 </td> 
                 <td>{{ str_limit($cvideo->desc, 20) }}</td> 
                <!--  <td>{{ $cvideo->duration }}</td> -->
                  @if($cvideo->id != $video->id)  
                   <td>
                    <a href="{{ url('/courses/' . $course->slug . '/' . $cvideo->slug) }}" class="btn  btn-success btn-xs" >Watch Now</a>
                 <!--  <a href="{{ url('/courses/' . $course->slug . '/' . $cvideo->slug) }}" class="btn  btn-warning btn-xs" >Watch Later</a>&nbsp; -->
                   </td>
                  @else 
                    <td>
                       --
                    </td>
                  @endif  
                </tr> 
                
              @endforeach  
               </tbody> 
           </table>
              
                </div>
        </div> 

         <div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//chessvicky.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
   

          
  </div>

@stop