@extends('layouts.admin')

@section('content')

 <div class="container">
 	<div class="row">
 		<div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-inr text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">7023</h2>
                <div class="text-muted m-t-5">Total Revenue</div>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-users text-custom"></i>
                <h2 class="m-0 text-dark counter font-600">1189</h2>
                <div class="text-muted m-t-5">Registered Users</div>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-user-plus text-purple"></i>
                <h2 class="m-0 text-dark counter font-600">2189</h2>
                <div class="text-muted m-t-5">Unique Visitors</div>
            </div>
        </div>

         <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-white">
                <i class="fa fa-user text-primary"></i>
                <h2 class="m-0 text-dark counter font-600">2189</h2>
                <div class="text-muted m-t-5">Users Online</div>
            </div>
        </div>


 	</div>

 	<div class="row">
 		<div class="col-lg-6">
                        <div class="panel panel-border panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Make An Announcement</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" method="post" action="/notify">
                                        <div class="form-group">
                                            <label for="notifytitle" class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="notifytitle" name="notifytitle" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="notifydesc" class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                               <textarea name="notifydesc" class="form-control" rows="5">
                                               	   
                                               </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="notifylink" class="col-sm-3 control-label">Link</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="notifylink" name="notifylink" placeholder="Link">
                                            </div>
                                        </div>
                                         
                                        
                                        
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                              <button type="submit" class="btn btn-purple waves-effect waves-light">Notify Users!</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>

            <div class="col-lg-6">
                        <div class="panel panel-border panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Push Notification</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" method="post" action="/notify">
                                        <div class="form-group">
                                            <label for="pushtitle" class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="notifytitle" name="notifytitle" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label for="pushdesc" class="col-sm-3 control-label">Message</label>
                                            <div class="col-sm-9">
                                               <textarea name="notifydesc" class="form-control" rows="5">
                                               	   
                                               </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pushtype" class="col-sm-3 control-label">Type</label>
                                            <div class="col-sm-9">
                                                <select name="pushtype" class="form-control">
                                                	<option value="success">Success</option>
                                                	<option value="warning">Warning</option>
                                                	<option value="info">Info</option>
                                                	<option value="danger">Danger</option>
                                                </select>
                                            </div>
                                        </div>
                                         
                                        
                                        
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                              <button type="submit" class="btn btn-info waves-effect waves-light">Send Notification!</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>        


 	</div>
 </div>



@stop