      <div class="col-lg-4" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ $video->course_id != 0 ? '/courses/' . $video->course->slug . '/' . $video->slug : '/videos/' . $video->slug }}"><h3 class="panel-title"><i class="fa fa-star"></i>   
                       {{ str_limit($video->title, 35) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p >{{ str_limit($video->desc, 100) }}</p>
                        <p><strong>Course : </strong>{{ $video->course_id != 0 ? $video->course->title : 'None' }}</p>
                       
                       @if($video->course_id == 0)
                           <p><a class="btn btn-default" href="{{ 
                               '/videos/' . $video->slug
                           }}">Watch Video</a></p> 

                       @else
                        <p><a class="btn btn-default" href="{{ 
                               '/courses/' . $video->course->slug . '/' . $video->slug
                           }}">Watch Video</a></p> 
                       @endif    
                    </div>
                    <div class="panel-footer">
                               <b>  Video : </b> {{ $video->tags }} 
                            </div>
                </div> 
            </div>