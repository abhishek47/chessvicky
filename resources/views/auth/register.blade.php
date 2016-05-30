

@extends('layouts.auth')

@section('content')



        <div class="animationload">
            <div class="loader"></div>
        </div>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Sign Up to <strong class="text-custom">ChessVicky</strong> </h3>
                   @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <p></p>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="/register">
                          {{ csrf_field() }}   
                        <div class="form-group ">
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="fname" required="" placeholder="First name" value="{{ old('fname') }}">
                            </div>
                            <div class="col-xs-6">
                                <input class="form-control" type="text" name="lname" required="" placeholder="Last name" value="{{ old('lname') }}">
                            </div>
                        </div> 

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="Username" value="{{ old('username') }}">
                            </div>
                        </div>

                        <div class="form-group">
                         <div class="col-xs-12">
                          <div class="radio radio-info col-xs-4">
                             <input type="radio" name="gender" id="gender-male" value="1" checked="">
                            <label for="radio15">
                               Male
                            </label>
                        </div>
                          <div class="radio radio-info col-xs-4">
                            <input type="radio" name="gender" id="gender-female" value="1" >
                            <label for="radio15">
                               Female
                            </label>
                        </div>
                            </div>
                        </div>

                          <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="birthday" required="" placeholder="Birthday(dd/mm/yyyy)" data-mask="99/99/9999" value="{{ old('birthday') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="password_confirmation" type="password" required="" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" checked="checked">
                                    <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-purple btn-block  waves-effect waves-light" type="submit">
                                    Create Account
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        Already have account?<a href="page-login.html" class="text-primary m-l-5"><b>Sign In</b></a>
                    </p>
                </div>
            </div>

        </div>


@endsection


