      <div class="col-lg-4" >

                <div class="panel panel-color panel-inverse" >
                    <div class="panel-heading">
                      <a href="{{ 
                               '/books/' . $book->slug
                           }}"><h3 class="panel-title"><i class="fa fa-star"></i>  
                       {{ str_limit($book->title, 35) }}
                    </h3></a>
                    </div>
                    <div class="panel-body">
                        <p >{{ str_limit($book->desc, 100) }}</p>
                        <p><strong>Topic : </strong>{{ $book->category->name }}</p>
                       
                        <p><a class="btn btn-default" href="{{ 
                               '/books/' . $book->slug
                           }}">Get Book</a></p> 
                    </div>
                    <div class="panel-footer">
                            <b>  Book </b>
                            </div>
                </div> 
            </div>