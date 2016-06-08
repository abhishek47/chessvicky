@extends('layouts.app')

@section('content')
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
    <div id="search-box">
      <div class="panel panel-default">
         <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              	 <h3 style="text-transform: capitalize;"><strong>Daily Challenges</strong></h3>
              </div>
              <div class="col-md-4">
       
              </div>

        
            </div>
           
         </div>
      </div>
   </div>

   @foreach($challenges as $challenge)
      
			<div class="panel panel-color panel-inverse" >
			       <div class="panel-heading">
			       	   <a href="{{ '/challenges/' . $challenge->slug }}">
			                    <h3 class="panel-title">
                            <strong>
                              @if($challenge->is_premium)
                               <i class="fa fa-lock"></i>
                              @endif  
                                {{ $challenge->title }}
                            </strong></h3>
			                    </a>
			       </div>
			       <div class="panel-body" >
			               <h3 class="text-muted">{{ $challenge->subtitle }}</h3>
			                
			                   <p></p>
			                   <div class="col-lg-5">
			                      <img class="img-responsive" src="{{ $challenge->chessboard }}"> 
			                   	
			                   </div>
			                   <div class="col-lg-7">
			                     <div style="margin: 45px;">
				                   	  <form method="POST" action="{{ url('/challenges/' . $challenge->slug) }}" >
				                   	  	  <div class="form-group">
				                   	  	  	  <label for="p1">
				                   	  	  	  	 Starting Position : 
				                   	  	  	  </label>
				                   	  	  	  <input type="text" name="p1" id="p1-{{ $challenge->id }}" class="form-control" placeholder="Eg: e4">
				                   	  	  </div>

				                   	  	  <div class="form-group">
				                   	  	  	  <label for="p2">
				                   	  	  	  	 Final Position : 
				                   	  	  	  </label>
				                   	  	  	  <input type="text" name="p2" id="p2-{{ $challenge->id }}" class="form-control" placeholder="Eg: c4">
				                   	  	  </div>

				                   	  	  <button type="submit" id="challenge-{{ $challenge->id }}" data-id="{{ $challenge->id }}" data-slug="{{ $challenge->slug }}"  class="btn btn-inverse checkchallenge">Submit Answer</button>
				                   	  </form>
				                   	  <hr>
				                   	  <div class="result" id="result-{{ $challenge->id }}">
				                   	  	  
				                   	  </div>

			                   	  </div>
			                   </div>
			                    
			                  </div>
			             <div class="panel-footer" >

			             	
			                         
			             </div>    
			                 
			                
			               
			           </div> 
			             
			            

   @endforeach
</div> 

@stop

@section('scripts')
 
 <script type="text/javascript">
  $(document).ready(function(){

        $("body").on("click",".checkchallenge",function(e)
              {
              e.preventDefault();
              var cid=$(this).attr("data-id");
              var p1=$('#p1-'+cid).val();
              var p2 = $('#p2-'+cid).val();
              var slug = $(this).attr("data-slug");
             
              var ans = p1 + ' ' + p2;
              var htmldata= '<h4 class="text-success"><b>Congratulations!You have solved the puzzle!</b></h4>';
              var htmldata2 = '<h4 class="text-danger"><b>Sorry!!This is an Incorrect move!</b></h4>' ;
              var dataString = 'cid='+ cid +'&solution='+ans;
              var surl = '/challenges/' + slug;
              $.ajax({
              type: "POST",
              url: surl,
              data: dataString,
              cache: false,
              beforeSend: function(request){ return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));},
              success: function(html)
              { 
                if(parseInt(html) == 1)
                { 
                    $('#result-'+cid).html(htmldata);
                } else {
                	$('#result-'+cid).html(htmldata2);
                }
              }
              });

              return false;
              });


       });
  </script>
@stop