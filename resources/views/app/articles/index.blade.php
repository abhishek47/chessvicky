@extends('layouts.app')


@section('content')
  
  <div class="container">


<div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              	 <h3 style="text-transform: capitalize;"><strong>{{ isset($type) ? $type . ' ' : ''  }}Articles</strong></h3>
              </div>
              <div class="col-md-4">
               @if($type != 'starred')
                 <form class="form-inline" method="GET" style="display: block;">
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">Search...</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
            <input type="text" id="search-input" name="q" class="form-control"  id="exampleInputAmount" placeholder="Search our articles...">
            
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
      @endif
              </div>

        
            </div>
           
         </div>
      </div>
   </div>
   <div class="row">
    @if($q)
        <h3>Search results for '{{ $q }}'.</h3><br/>
      @endif
      <?php  $key = 0; ?>
    @foreach($articles as $article)
    <?php  $key += 1; ?>
		@if($type != 'starred')
		  <div class="col-lg-4">
			<div class="panel panel-color panel-inverse" >
			       <div class="panel-heading">
			       	   <a href="{{ '/articles/' . $article->slug }}">
			                    <h3 class="panel-title">
                            <strong>
                              @if($article->is_premium)
                               <i class="fa fa-lock"></i>
                              @endif  
                                {{ $article->title }}
                            </strong></h3>
			                    </a>
			       </div>
			       <div class="panel-body" >
			               <p >{{ str_limit($article->body, 150) }}</p>
			                
			              
			                    
			                    
			                  </div>
			             <div class="panel-footer" >

			             	<strong>Written By <a href="#">{{ $article->user->fname . ' ' . $article->user->lname  }}</a>  | {{ $article->created_at->diffForHumans() }} | Tags : </strong> {{ $article->tags }} 
			                                 
			                         
			             </div>    
			                 
			                
			               
			            
			             </div>
			            </div> 
			@else
			   
			    @include('app.favs.article', [ 'article' => App\Models\Article::find($article->item_id)]) 

                
            @endif

            @if($key % 3 === 0)
                      </div>
                      <div class="row">
                   @endif 
           @endforeach 
        </div>
         {!! $articles->render() !!}
  </div>

@stop