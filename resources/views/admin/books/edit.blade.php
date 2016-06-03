@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Edit This Book</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/books/' . $book->slug ) }}">
                {{ csrf_field() }}
                @include('partials.errors')
                <div class="form-group ">

                    <div class="col-xs-12">
                        <label for="title" class="">Title : </label>
                        <input class="form-control" type="text" name="title" required="" placeholder="Book Title" value="{{ $book->title }}">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                    <label for="cover_url" class="">Cover Url : </label>
                        <input class="form-control" type="text" name="cover_url"  placeholder="Cover Url" value="{{ $book->cover_url }}">
                    </div>
                </div>

                 <div class="form-group ">
                    <div class="col-xs-12">
                       <label for="url" class="">Download or Buy Url : </label>
                        <input class="form-control" type="text" name="url"  placeholder="Download or Buy Url" value="{{ $book->url }}">
                    </div>
                </div>


                <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="author" class="">Author : </label>
                        <input class="form-control" type="text" name="author" placeholder="Author" value="{{ $book->author }}" >
                    </div>
                </div>
  

                <div class="form-group ">
                    <div class="col-xs-12">
                       <label for="desc" class="">Description : </label>
                        <textarea class="form-control" type="text" rows="5" name="desc" placeholder="Book Description">{{ $book->desc }}</textarea>
                    </div>
                </div>

                 <div class="form-group ">
                    <div class="col-xs-12">
                        <label for="tags" class="">Tags : </label>
                        <input class="form-control" data-role="tagsinput" type="text" name="tags" placeholder="Add Tags" value="{{ $book->tags }}">
                    </div>
                </div>

                  <div class="form-group ">
                     <div class="col-xs-12">
                            <label for="category_id" class="">Category : </label>
                            <div class="">
                                <select name="category_id" class="form-control">
                                	  @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ isSelected($category->id, $book->category->id) }}>{{ $category->name }}</option>
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                       </div>

              

                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Update Book</button>
                    </div>
                </div>

                
            </form> 
                </div>
        </div>
       </div> 
     </div>  
   </div>
@stop