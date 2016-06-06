@extends('layouts.admin')


@section('content')
  <div class="container">
   <div class="panel panel-border panel-purple">
               <div class="panel-heading">
                    <h1 class="panel-title">Course Categories</h1>
                    
                </div>

				  <div class="panel-body">
				   <div class="col-md-9">
				    <h3><b>Categories</b></h3>
				    <b>{{ $count }}</b> {{ pluralise('Category', $count) }} Registered. <br/>
				    </div>
				    <div class="col-md-3">
				        <br/>
				    	
				    </div>
				  </div>
			  </div>
  
  <div class="panel panel-border panel-success">
                 <div class="panel-heading">
                    <h1 class="panel-title">Create New Category</h1>
                    
                </div>  

				  <div class="panel-body">
				       <form class="form-horizontal" style="padding-right: 20px;padding-left: 20px;" method="POST" action="{{ url('/admin/categories') }}">
                       {!! csrf_field() !!}
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				        <label class="col-md-2 control-label">Name :</label>

				        <div class="col-md-5">
				            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

				            @if ($errors->has('name'))
				                <span class="help-block">
				                    <strong>{{ $errors->first('name') }}</strong>
				                </span>
				            @endif
				        </div>
                  <div class="col-md-3">
                  
                      <select class="form-control" name="color" id="color">
                                            <option value="0">Default</option>
                                           <option value="1">Custom</option>
                                           <option value="2">Primary</option>
                                           <option value="3">Info</option>
                                           <option value="4">Success</option>
                                           <option value="5">Warning</option>
                                           <option value="6">Danger</option>
                                           <option value="7">Purple</option>
                                           <option value="8">Pink</option>
                                           <option value="9">Inverse</option> 
                                        </select>

                    @if ($errors->has('color'))
                        <span class="help-block">
                            <strong>{{ $errors->first('color') }}</strong>
                        </span>
                    @endif
                </div>

                        <div class="col-md-2">
				        <button class="btn btn-success" type="submit">Add Category</button>
				        </div>
				    </div>  

                      </form>
				  </div>
			  </div>

  <table class="table table-striped">
    <thead> 
      <tr> 
        <th>#</th> 
        <th>Name</th> 
        <th>Actions</th>
      </tr> 
     </thead> 
     <tbody> 
      @foreach ($categories as $category)
       <tr> 
         <th scope="row">{{ $category->id }}</th> 
         <td>{{ $category->name }}</td> 
         <td>
         <a href="#" class="btn  btn-success btn-xs">Edit</a>
         &nbsp;
         <a href="{{ '/admin/categories/' . $category->id . '/delete' }}" class="btn  btn-danger btn-xs">Delete</a></td>
        </tr>
      @endforeach  
       </tbody> 
   </table>

   {!! $categories->render() !!}

 </div>

@stop