@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Write A New Article</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/challenges') }}">
                {{ csrf_field() }}
                @include('partials.errors')
                <div class="form-group ">

                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="title" required="" placeholder="Title">
                    </div>
                </div>

                 <div class="form-group ">

                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="subtitle" required="" placeholder="SubTitle">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="chessboard"  placeholder="Chessboard Url">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input type="checkbox" checked name="is_premium" id="is_premium" data-plugin="switchery" data-color="#f05050" data-size="small"/><label for="is_premium">Premium</label>
                    </div>
                </div>
  
                <div class="form-group ">

                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="solution" required="" placeholder="Solution PGN">
                    </div>
                </div>

                  <div class="form-group ">

                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="hint" required="" placeholder="Hint">
                    </div>
                </div>

                  <div class="form-group ">

                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="moves" required="" placeholder="No. Of Moves">
                    </div>
                </div>
             
                

                 

              

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Publish Challenge</button>
                    </div>
                </div>

                
            </form> 
                </div>
        </div>
       </div> 
     </div>  
   </div>
@stop
