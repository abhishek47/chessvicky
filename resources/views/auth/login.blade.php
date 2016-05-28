@extends('layouts.pages')

@section('content')

@include('pages.header')


<div class="container wrapper" id="login">
    <div class="row">
       <div class="col-md-7" id="left">
           <h2><i class="fa fa-bolt" aria-hidden="true"></i> Welcome Back!!</h2>
           <ul>
              <li>Solve Our Weekly Puzzles</li>
              <li>Challenge Your Friends</li>
              <li>Gain Popularity By Playing</li>
              <li>Learn By Doing!</li>
            </ul>
            <div class=" divider"></div>
       </div>
      
        <div class="col-md-5" id="right">
           
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address : </label>

                            <div >
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password : </label>

                            <div >
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
             
        
    </div>
</div>
</div>
@endsection
