@extends('layouts.app')

@section('content')
   
  @include('app.forum.reply') 
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="container">  
   <div class="panel panel-default">
   	   <div class="panel-body">
   	     <div class="row">
   	      <div class="col-md-9">
   	   	   <h2><strong>{{ $question->title }}</strong></h2>
   	   	   <p style="font-size: 16px;">{{ $question->body }}</p>
   	   	    <div class="">
                           <p></p>
                             <p><strong>{{ count($question->answers) }}</strong> Replies</p>
                             <p><strong>Asked By <a href="#">{{ $question->user->fname . ' ' . $question->user->lname }}</a>  | {{ $question->created_at->diffForHumans() }} | Tags : </strong> {{ $question->tags }} 
                                     
                              </p> 
                              <p>
                                <a class="btn btn-primary btn-sm" href="{{ '/favourites/4/' . $question->id }}">
                                  @if(isStarred(4, $question->id))
                                    <i class="fa fa-star"> Starred</i>
                                  @else
                                    <i class="fa fa-star-o"> Star</i>   
                                  @endif  
                                </a> 
                                 @if($question->answered && $question->user->id == Auth::user()->id)
                                 <a class="btn btn-success btn-sm" href="{{ '/questions/' . $question->id . '/unmark/' }}">
                                 
                                    <i class="fa fa-check"> Mark As Unanswered</i>
                                  
                                </a>   
                                 @endif 
                              </p>
                          </div>
   	   	  </div> 
          <div class="col-md-3 hidden-xs hidden-sm">
          	 <!-- <img class="t" src="/images/icons/book.svg" style="height: 120px;margin-top: 45px;margin-left:45px; ">  -->
          </div>          
 
   	     </div> 
   	   </div>
   </div> 

   <div class="panel panel-default"> 
   	   <div class="panel-body">
   	   	   <div class="row">
   	   	   	   <div class="col-md-10">
   	   	   	     @if($question->answered)
                   <h4>This Conversation is marked as <strong>answered</strong>.</h4>
   	   	   	     @else 
   	   	   	   	  <h4>This Conversation is <strong>not</strong> yet marked as <strong>answered</strong>.</h4>
   	   	   	   	 @endif
   	   	   	   </div>
   	   	   	   <div class="col-md-2">

   	   	   	   	  <p>
   	   	   	   	  	<a href="#replyModal" data-toggle="modal" class="btn btn-success"><i class="fa fa-pencil"></i> Write a Reply</a>
   	   	   	   	  </p>
   	   	   	   </div>	
   	   	   </div>
   	   </div>
   </div>

      
                          @foreach($question->answers as $answer)
                            <div class="panel panel-border panel-default">
                                   <div class="panel-body">
                                     <div class="media">
                                        <div class="media-left">
                                          <a href="#">
                                            <img class="media-object img-circle" style="width: 54px; height: 54px; margin-right: 10px; " src="https://www.gravatar.com/avatar/67e83da28694961e22b7408d45b6b232.jpg?s=200&amp;d=mm">
                                          </a>
                                        </div>
                                        <div class="media-body" >
                                         <a href="{{ '/profile/' . $answer->user->username }}">
                                          <h3 class="media-heading"><strong>{{ $answer->user->fullname() }} 
                                          @if($answer->user->isIdol()) 
                                             <span class="idol-mark">Superidol<span>
                                          @endif 
                                          </strong></h3>
                                          </a>
                                          <p >{!! str_limit($answer->body, 500) !!}</p>
                                           
                                        </div>
                                       
                                      </div>
                                     </div> 
                                   
                                   <div class="panel-footer">
                                     <a href="#" class="likeAnswer" id="like-{{ $answer->id }}" data-id="{{ $answer->id }}" data-likes="{{ count($answer->likes) }}" data-question="{{ $question->slug }}"><i class="{{ \Auth::user()->likes($answer->id) ? 'fa fa-thumbs-up' : 'fa fa-thumbs-o-up' }}"></i> {{ count($answer->likes) }}</a>


                                     &nbsp;
                                        @if($question->user->id == Auth::user()->id)
                                <a class="markAnswer" data-id="{{ $answer->id }}" id="mark-{{ $answer->id }}" data-question="{{ $question->id }}" href="{{ '/questions/' . $question->id . '/answered/' . 
                               $answer->id }}">
                                  @if($question->answered && $question->canswer_id == $answer->id)
                                    <i class="fa fa-check"> Answer</i>
                                  @else
                                    <i class="fa fa-check"></i>   
                                  @endif  
                                </a> 
                                @else
                                   @if($question->answered && $question->canswer_id == $answer->id)
                                      <i class="fa fa-check"> Answer</i>
                                   @endif
                                @endif 
                                 
                                  | &nbsp;
                                       {{ $answer->created_at->diffForHumans() }} | Tags : </strong> {{ $answer->tags }} 
                                         
                                        
                                   </div>
                               </div>
                            @endforeach

                          
                        
        
       
</div>
@stop

@section('scripts')
 
 <script type="text/javascript">
  $(document).ready(function(){

        $("body").on("click",".likeAnswer",function(e)
              {
              e.preventDefault();
              var ansId=$(this).attr("data-id");
              var likes=$(this).attr("data-likes");
              var question = $(this).attr("data-question");
             
              var nlikes = parseInt(likes) + 1;
              var htmlData='<i class="fa fa-thumbs-o-up"></i> ' ;
              var htmlData2='<i class="fa fa-thumbs-up"></i> ' ;
              var dataString = 'ansId='+ ansId +'&question='+question;
  
              $.ajax({
              type: "POST",
              url: '/forum/answer/like',
              data: dataString,
              cache: false,
              beforeSend: function(request){ return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));},
              success: function(html)
              { 
                if(parseInt(html) > -1)
                { 
                  if(parseInt(html) < likes)
                  {
                    $("#like-"+ansId).html(htmlData + html);
                  } else 
                  {
                    $("#like-"+ansId).html(htmlData2 + html);
                  }

                   $("#like-"+ansId).attr("data-likes", parseInt(html));
                }
              }
              });

              return false;
              });

        $("body").on("click",".markAnswer",function(e)
              {
              e.preventDefault();
              var ansId=$(this).attr("data-id");
              var question = $(this).attr("data-question");
             
              var htmlData='<i class="fa fa-check"> Answer</i> ' ;
              var htmlData2='<i class="fa fa-check"></i> ' ;
              var dataString = '';
  
              $.ajax({
              type: "GET",
              url: '/questions/' + question + '/answered/' + 
                               ansId,
              data: dataString,
              cache: false,
              beforeSend: function(request){ return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));},
              success: function(html)
              { 
                if(parseInt(html) > -1)
                { 
                    $('.markAnswer').html(htmlData2);
                    $("#mark-"+ansId).html(htmlData);
                  } else 
                  {
                    $("#mark-"+ansId).html(htmlData2);
                  }

              }
              });

              return false;
              });


       });
  </script>
@stop