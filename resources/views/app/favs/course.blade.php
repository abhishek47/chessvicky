      <div class="col-lg-4" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/courses/' . $course->slug
                           }}"><h3 class="panel-title"><i class="fa fa-star"></i>  
                       {{ str_limit($course->title, 35) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p >{{ str_limit($course->desc, 100) }}</p>
                        <p><strong>Topic : </strong>{{ $course->category->name }}</p>
                        <p><a class="btn btn-default" href="{{ 
                               '/courses/' . $course->slug
                           }}">View Course</a></p> 

                    </div>
                    <div class="panel-footer">
                              <b> Course : </b> {{ $course->tags }} 
                            </div>
                </div> 
            </div>