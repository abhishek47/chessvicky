@extends('layouts.app')

@section('content')
  
  <div class="container">
  	 <div class="panel panel-color panel-inverse">
             <div class="panel-heading">
                    <h1 class="panel-title">Title : {{ $article->title }}</h1>
                    
                </div>
				  <div class="panel-body">
             <p>  <a class="btn btn-sm btn-primary" href="{{ '/favourites/2/' . $article->id }}">
                  @if(isStarred(2, $article->id))
                      <i class="fa fa-star"> Starred</i>
                    @else
                      <i class="fa fa-star-o"> Star</i>   
                    @endif  
                </a>   </p>     
				      {!! $article->body !!}
				     <p><strong>Written By <a href="#">{{ $article->user->fname . ' ' . $article->user->lname  }}</a>  | {{ $article->created_at->diffForHumans() }} | Tags : </strong> {{ $article->tags }} 
                                     
                              </p> 
				  </div>
			  </div>


         <div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//chessvicky.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
   


  </div>
   
@stop