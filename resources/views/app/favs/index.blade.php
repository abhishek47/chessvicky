@extends('layouts.app')


@section('content')
  
  <div class="container">
    <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              	 <h3 style="text-transform: capitalize;"><strong>Favourites</strong></h3>
              </div>
              <div class="col-md-4">
      
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

  	 
    <div class="row">
      
         @foreach($favs as $fav)
            @if($fav->type == 0)
               @include('app.favs.course', [ 'course' => App\Models\Course::find($fav->item_id)])
            @elseif($fav->type == 1)
               @include('app.favs.video', [ 'video' => App\Models\Video::find($fav->item_id)]) 
            @elseif($fav->type == 2)
                @include('app.favs.article', [ 'article' => App\Models\Article::find($fav->item_id)]) 
            @elseif($fav->type == 3) 
                @include('app.favs.book', [ 'book' => App\Models\Book::find($fav->item_id)])     
            @endif
           
          @endforeach 
       

         
      
        </div>
  </div>
  

@stop