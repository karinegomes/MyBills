@extends('auth.layouts.layout')

@section('content')
    <h3 class="box-title m-b-0">Sign Up</h3> <small>Enter your details below</small>
    <form class="form-horizontal new-lg-form" id="loginform" action="{{ url('register') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                @if($errors->has('name'))
                    <small class="help-block">{{ $errors->first('name') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <small class="help-block">{{ $errors->first('email') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" type="password" name="password" placeholder="Password">
                @if($errors->has('password'))
                    <small class="help-block">{{ $errors->first('password') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                @if($errors->has('password_confirmation'))
                    <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                    Sign Up
                </button>
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>
                    Already have an account? <a href="{{ route('login') }}" class="text-danger m-l-5"><b>Sign In</b></a>
                </p>
            </div>
        </div>
    </form>
@endsection