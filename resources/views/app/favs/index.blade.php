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
         <?php  $key = 0; ?>
         @foreach($favs as $fav)
          <?php  $key += 1; ?>
            @if($fav->type == 0)
               @include('app.favs.course', [ 'course' => App\Models\Course::find($fav->item_id)])
               @if(($key)%3 == 0)
                  </div>
                  <div  class="row"> 
               @endif
            @elseif($fav->type == 1)
               @include('app.favs.video', [ 'video' => App\Models\Video::find($fav->item_id)]) 
               @if(($key)%3 == 0)
                  </div>
                  <div  class="row"> 
               @endif
            @elseif($fav->type == 2)
                @include('app.favs.article', [ 'article' => App\Models\Article::find($fav->item_id)]) 
                @if(($key)%3 == 0)
                  </div>
                  <div  class="row"> 
               @endif
            @elseif($fav->type == 3) 
                @include('app.favs.book', [ 'book' => App\Models\Book::find($fav->item_id)])
                @if(($key)%3 == 0)
                  </div>
                  <div  class="row"> 
               @endif  
             @elseif($fav->type == 4) 
                @include('app.favs.forum', [ 'question' => App\Models\Question::find($fav->item_id)])
                @if(($key)%3 == 0)
                  </div>
                  <div  class="row"> 
               @endif        
            @endif
           
          @endforeach 
       

         
      
        </div>
  </div>
  

@stop