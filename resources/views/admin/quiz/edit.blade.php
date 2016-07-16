@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Edit This Quiz</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/quiz/' . $quiz->slug ) }}">
		                {{ csrf_field() }}
		                @include('partials.errors')

		                 <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="title">Quiz Title :</label>
		                        <input class="form-control" type="text" name="title" value="{{ $quiz->title }}" required="" placeholder="Title">
		                    </div>
              			  </div>

              			  <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="level">Level :</label>
		                        <select name="level" id="level" class="form-control">
		                        	 <option value="1" {{ isSelected(0, $quiz->level) }}>Level 1</option>
		                        	 <option value="2" {{ isSelected(0, $quiz->level) }}>Level 2</option>
		                        	 <option value="3" {{ isSelected(0, $quiz->level) }}>Level 3</option>
		                        	 <option value="4" {{ isSelected(0, $quiz->level) }}>Level 4</option>
                                </select>
		                    </div>
              			  </div>

              			  <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="category">Category :</label>
		                        <select name="category" id="category" class="form-control">
		                        	 <option value="0" {{ isSelected(0, $quiz->category) }} >Basic</option>
		                        	 <option value="1" {{ isSelected(1, $quiz->category) }}>Intermidiate</option>
		                        	 <option value="2" {{ isSelected(2, $quiz->category) }}>Advanced</option>
		                        	 <option value="3" {{ isSelected(3, $quiz->category) }}>Professional</option>
                                </select>
		                    </div>
              			  </div>
                            

                         
                             <div class="form-group text-center m-t-40">
			                    <div class="col-xs-12">
			                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Update Quiz</button>
			                    </div>
			                </div>



                    </form>

                 </div>
                 
            </div>
          </div>
         </div>
       </div>             

   
@stop


