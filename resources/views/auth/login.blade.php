@extends('auth.layouts.layout')

@section('content')
    <h3 class="box-title m-b-0">Sign In</h3>
    <small>Enter your details below</small>
    <form class="form-horizontal new-lg-form" id="loginform" method="post" action="{{ url('login') }}">
        {{ csrf_field() }}
        <div class="form-group  m-t-20 {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <label>Email Address</label>
                <input name="email" class="form-control" type="text" placeholder="Email">
                @if($errors->has('email'))
                    <small class="help-block">{{ $errors->first('email') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
                @if($errors->has('password'))
                    <small class="help-block">{{ $errors->first('password') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox checkbox-info pull-left p-t-0">
                    <input id="checkbox-signup" type="checkbox" name="remember_token">
                    <label for="checkbox-signup"> Remember me </label>
                </div>
                <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                            class="fa fa-lock m-r-5"></i> Forgot pwd?</a></div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
                        type="submit">Log In
                </button>
            </div>
        </div>
        {{--<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"
                                       title="Login with Facebook"> <i aria-hidden="true"
                                                                       class="fa fa-facebook"></i> </a> <a
                            href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"
                            title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                </div>
            </div>
        </div>--}}
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a>
                </p>
            </div>
        </div>
    </form>
    <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
            <div class="col-xs-12">
                <h3>Recover Password</h3>
                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Email">
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                        type="submit">Reset
                </button>
            </div>
        </div>
    </form>
@endsection