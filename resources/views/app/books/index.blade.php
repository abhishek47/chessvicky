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
              
              <div class="col-md-9">
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

              <div class="col-md-3">
                 <ul class="nav nav-pills">
           
           <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>
                Category  @if(isset($c))
                          {{ ': ' . $c->name }}
                       @elseif($sby == 'starred')
                          {{ ': Starred' }}   
                       @else 
                          {{ ': All Topics' }}   
                       @endif   
                 <span class="caret"></b></span>
              </a>
              <ul class="dropdown-menu">
               <li><a href="/books?s=starred"><i class="fa fa-star"></i> Starred</a></li>
                
                <li><a href="/books">All topics</a></li>
               @foreach($categories as $c)
                            <li><a href="{{ '/books?s=' . $c->id }}">{{ $c->name }}</a></li>

                @endforeach
              </ul>
            </li>
          </ul>
              </div>
            </div>
           
         </div>
      </div>
   </div>

   
      @if($q)
        <h3>Search results for '{{ $q }}'.</h3><br/>
      @endif
       <div class="row">
         @foreach($books as $book)
             <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                            <div class="gal-detail thumb">
                                <a href="{{ url('/books/' . $book->slug ) }}" class="image-popup" title="Screenshot-1">
                                    <img src="{{ $book->cover_url }}" style="height:230px;" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <p></p>
                                <p><strong>{{ str_limit($book->title, 55) }}</strong></p>
                            </div>
                        </div>
          @endforeach 
       
        </div>
         {!! $books->render() !!}  
  </div>
@stop