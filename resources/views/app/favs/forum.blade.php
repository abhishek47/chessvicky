      <div class="col-lg-4" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/questions/' . $question->slug
                           }}"><h3 class="panel-title"><i class="fa fa-star"></i> 
                           
                          {{ str_limit($question->title, 35) }} 
                           @if($question->answered)
                                              <i style="color: green; font-size: 18px;" class="fa fa-check"></i>
                                            @endif 
                       
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p >{{ str_limit($question->body, 100) }}</p>
                        <p><strong>Asked By : </strong> <a href="{{ url('/profile/' .  $question->user->username) }}">{{ $question->user->username }}</a> </p>
                       
                        <p><a class="btn btn-default" href="{{ 
                               '/questions/' . $question->slug
                           }}">View Question</a></p> 
                    </div>
                    <div class="panel-footer">
                            <b>  Topic : {{ $question->category->name }} </b>
                            </div>
                </div> 
            </div>