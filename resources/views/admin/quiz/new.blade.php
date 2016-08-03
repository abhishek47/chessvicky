@extends('layouts.admin')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="panel panel-border panel-purple">
             <div class="panel-heading">
                    <h1 class="panel-title">Add New Quiz</h1>
                    
                </div>
                <div class="panel-body">
                     <form class="form-horizontal m-t-20" method="POST" action="{{ url('/admin/quiz') }}">
		                {{ csrf_field() }}
		                @include('partials.errors')

		                 <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="title">Quiz Title :</label>
		                        <input class="form-control" type="text" name="title" required="" placeholder="Title">
		                    </div>
              			  </div>

              			  <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="level">Level :</label>
		                        <select name="level" id="level" class="form-control">
		                        	 <option value="1">Level 1</option>
		                        	 <option value="2">Level 2</option>
		                        	 <option value="3">Level 3</option>
		                        	 <option value="4">Level 4</option>
                                </select>
		                    </div>
              			  </div>

              			  <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="category">Category :</label>
		                        <select name="category" id="category" class="form-control">
		                        	 <option value="0">Basic</option>
		                        	 <option value="1">Intermidiate</option>
		                        	 <option value="2">Advanced</option>
		                        	 <option value="3">Professional</option>
                                </select>
		                    </div>
              			  </div>

              			  <div class="form-group ">
		                    <div class="col-xs-12">
		                        <input type="checkbox" checked name="is_premium" id="is_premium" data-plugin="switchery" data-color="#f05050" data-size="small"/><label for="is_premium">Premium</label>
		                    </div>
		                </div>
                            

                         
                             <div class="form-group text-center m-t-40">
			                    <div class="col-xs-12">
			                        <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">Add Quiz</button>
			                    </div>
			                </div>



                    </form>

                 </div>
                 
            </div>
          </div>
         </div>
       </div>             

   
@stop


@section('scripts')
  
<script type="text/javascript">  
	  $(document).ready(function(){
	    var next = 1;
	    $(".add-more").click(function(e){
	        e.preventDefault();
	        var addto = "#field" + next;
	        var addRemove = "#field" + (next);
	        next = next + 1;
	        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
	        var newInput = $(newIn);
	        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
	        var removeButton = $(removeBtn);
	        $(addto).after(newInput);
	        $(addRemove).after(removeButton);
	        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
	        $("#count").val(next);  
	        
	            $('.remove-me').click(function(e){
	                e.preventDefault();
	                var fieldNum = this.id.charAt(this.id.length-1);
	                var fieldID = "#field" + fieldNum;
	                $(this).remove();
	                $(fieldID).remove();
	            });
	    });
	    

	    
	});
</script>

@stop