@extends('layouts.app')


@section('content')
  
  
  <div class="container">


     <div class="panel panel-color panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">Course : {{ $course->title }}</h3>
                            </div>
                            <div class="panel-body">
                              <p>{{ $course->desc }}</p>
                               <p>
                                  @if($firstvideo)
                                   <a href="{{ url('courses/' . $course->slug . '/' . $firstvideo->slug ) }}" class="btn btn-sm  btn-success">Start Course</a>
                                  @endif 
                                  <a href="#" class="btn btn-sm  btn-warning">Watch Trailer</a>
                                  <a class="btn btn-sm btn-primary" href="{{ '/favourites/0/' . $course->id }}">
                  @if(isStarred(0, $course->id))
                      <i class="fa fa-star"> Starred</i>
                    @else
                      <i class="fa fa-star-o"> Star</i>   
                    @endif  
                </a>
                                </p>
                              
                                
                            </div>
                        </div>	
                         <!--  <div class="col-lg-12">
                        <div class="tabs-vertical-env">
                            <ul class="nav tabs-vertical">
                                <li class="active">
                                    <a href="#v-home" data-toggle="tab" aria-expanded="false">Description</a>
                                </li>
                                <li class="">
                                    <a href="#v-profile" data-toggle="tab" aria-expanded="false">Syllabus</a>
                                </li>
                                <li class="">
                                    <a href="#v-messages" data-toggle="tab" aria-expanded="true">Video Lectures</a>
                                </li>
                                <li class="">
                                    <a href="#v-settings" data-toggle="tab" aria-expanded="false">References</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="v-home">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                </div>
                                <div class="tab-pane" id="v-profile">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>                   
         
                                </div>
                                <div class="tab-pane " id="v-messages">
                                     <table class="table table-hover">
            <thead> 
              <tr> 
                <th>#</th> 
                <th>Title</th> 
                <th>Description</th> 
                <th>Duration</th>
                <th>Actions</th>
              </tr> 
             </thead> 
             <tbody> 
              @foreach ($course->videos as $cvideo)
              
               <tr class="" > 
                 <th scope="row">{{ $cvideo->position }}</th> 
                 <td>{{ str_limit($cvideo->title, 30) }}</td> 
                 <td>{{ str_limit($cvideo->desc, 20) }}</td> 
                 <td>{{ $cvideo->duration }}</td>
                 
                   <td>
                    <a href="{{ url('/courses/' . $course->slug . '/' . $cvideo->slug) }}" class="btn  btn-success btn-xs" >Watch</a>
                  <a href="{{ url('/courses/' . $course->slug . '/' . $cvideo->slug) }}" class="btn  btn-warning btn-xs" >Star</a>&nbsp;
                   </td>
                  
                   
                </tr> 
                
              @endforeach  
               </tbody> 
           </table>
                                </div>
                                <div class="tab-pane" id="v-settings">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
          
          <div class="page-header">
              <h2>Videos</h2>
          </div>

          <?php  $key = 0; ?>
           <div class="row">
         @foreach($course->videos as  $video)
              <?php  $key += 1; ?>
             <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                            <div class="gal-detail thumb">
                                <a href="{{ url('/courses/' . $course->slug . '/' . $video->slug ) }}" class="image-popup" title="Screenshot-1">
                                    <img src="{{ $video->poster_url }}" style="height:230px;" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <p></p>
                                <p><strong>{{ $video->position . '. ' . str_limit($video->title, 40) }}</strong></p>
                                <p><b>Tags : </b> {{ $video->tags }}</p>
                            </div>
                        </div>
                   @if($key % 4 === 0)
                      </div>
                      <div class="row">
                   @endif   
          @endforeach 

  </div>


@stop