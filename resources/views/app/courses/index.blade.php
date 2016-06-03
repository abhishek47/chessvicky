@extends('layouts.app')


@section('content')
   <div class="container">  
   <div class="panel panel-border panel-primary">
      <div class="panel-heading">
      	  <h1 class="panel-title">Welcome to our Library.</h1>
      </div>
   	   <div class="panel-body">
   	     <div class="row">
   	      <div class="col-md-9">
   	   	  
   	   	   <p style="font-size: 16px;color:#000;text-align:justify">This is place where you can learn all about chess from our beginner to pro well managed courses.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   	   	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   	   	   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   	   	   consequat. </p>
   	   	  </div> 
          <div class="col-md-3 hidden-xs hidden-sm">
          	
          </div>          
 
   	     </div> 
   	   </div>
   </div> 

   <div id="search-box">
   	  <div class="panel panel-border panel-primary">
   	    <div class="panel-heading">
      	  <h1 class="panel-title">Filter Courses.</h1>
      </div>
   	  	 <div class="panel-body">
   	  	    <div class="row">
   	  	    	<div class="col-md-7">
   	  	    		 <form class="form-inline" style="display: block;">
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputAmount">Search...</label>
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-search"></i></div>
			      <input type="text" id="search-input" class="form-control"  id="exampleInputAmount" placeholder="Search our library...">
			      
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Search</button>
			</form>
   	  	    	</div>

   	  	    	<div class="col-md-5">
   	  	    		 <ul class="nav nav-pills hidden-xs">
					  <li role="presentation" class="{{ active('newest', $sby) }}" ><a href="/courses?s=newest"><b>Newest</b></a></li>
					  <li role="presentation" class="{{ active('alpha', $sby) }}"><a href="/courses?s=alpha"><b>Aplhabetical</b></a></li>
					 <li role="presentation" class="dropdown">
					    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>
					      Topic  @if(isset($c))
                          {{ ': ' . $c->name }}
                       @elseif($sby == 'starred')
                          {{ ': Starred' }}   
                       @else 
                          {{ ': All Topics' }}   
                       @endif   
                 <span class="caret"></b></span>
					    </a>
					    <ul class="dropdown-menu">
               <li><a href="/courses?s=starred"><i class="fa fa-star"></i> Starred</a></li>
                
					      <li><a href="/courses">All topics</a></li>
               @foreach($categories as $c)
                            <li><a href="{{ '/courses?s=' . $c->id }}">{{ $c->name }}</a></li>

					      @endforeach
					    </ul>
					  </li>
					</ul>
   	  	    	</div>
   	  	    </div>
   	  	 	 
   	  	 </div>
   	  </div>
   </div>

    <div class="row">
      {!! $courses->render() !!}
         @foreach($courses as $course)
            <div class="col-lg-4" >

                <div class="panel panel-color panel-primary" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/courses/' . $course->slug
                           }}"><h3 class="panel-title"> 
                       {{ $course->title }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p >{{ str_limit($course->desc, 100) }}</p>
                        <p><strong>Topic : </strong>{{ $course->category->name }}</p>
                       
                        <p><a class="btn btn-success" href="{{ 
                               '/courses/' . $course->slug
                           }}">View Course</a></p> 
                    </div>
                    <div class="panel-footer">
                               {{ $course->tags }}
                            </div>
                </div> 
            </div>
          @endforeach 
        {!! $courses->render() !!}  
        </div>
  </div>
@stop