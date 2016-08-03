      <div class="col-lg-4" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/articles/' . $article->slug
                           }}"><h3 class="panel-title"><i class="fa fa-star"></i> 
                       {{ str_limit($article->title, 35) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                     <div class="blog-post">
                        <p >{!! str_limit($article->body, 120) !!}</p>
                        
                     </div>  
                        <p></p>
                        <p><strong>Author : </strong>{{ $article->user->fname . ' ' . $article->user->lname }}</p>
                        <p><a class="btn btn-default" href="{{ 
                               '/articles/' . $article->slug
                           }}">Read Article</a></p> 
                    </div>
                    <div class="panel-footer">
                            <b>  Article </b>
                            </div>
                </div> 
            </div>