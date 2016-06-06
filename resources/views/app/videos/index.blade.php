@extends('layouts.app')


@section('content')
   <div class="container">  
   <!-- <div class="panel panel-border panel-primary">
      <div class="panel-heading">
      	  <h1 class="panel-title">Welcome to our Library.</h1>
      </div>
   	   <div class="panel-body">
   	     <div class="row">
   	      <div class="col-md-12">
   	   	  
   	   	   <p style="font-size: 16px;color:#000;text-align:justify">This is place where you can learn all about chess from our beginner to pro well managed books.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   	   	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   	   	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   	   	   consequat. </p>
   	   	  </div> 
      
   	     </div> 
   	   </div>
   </div>  -->

 
<div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                 <h3 style="text-transform: capitalize;"><strong>Videos</strong></h3>
              </div>
              <div class="col-md-4">
                 <form class="form-inline" style="display: block;">
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">Search...</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
            <input type="text" id="search-input" class="form-control"  id="exampleInputAmount" placeholder="Search our articles...">
            
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

  
      @if(isset($q))
        <h3>Search results for '{{ $q }}'.</h3><br/>
      @endif
      {!! $videos->render() !!}
      <?php  $key = 0; ?>
           <div class="row">
         @foreach($videos as  $video)
              <?php  $key += 1; ?>
             <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                            <div class="gal-detail thumb">
                                <a href="{{ url('/videos/' . $video->slug ) }}" class="image-popup" title="Screenshot-1">
                                    <img src="{{ $video->poster_url }}" style="height:230px;" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <p></p>
                                <p><strong>{{ str_limit($video->title, 40) }}</strong></p>
                                <p><b>Tags : </b> {{ $video->tags }}</p>
                            </div>
                        </div>
                   @if($key % 4 === 0)
                      </div>
                      <div class="row">
                   @endif   
          @endforeach 
        {!! $videos->render() !!}  
        
  </div>
@stop