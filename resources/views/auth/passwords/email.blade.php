@extends('auth.layouts.layout')

@section('content')
    <h3 class="box-title m-b-0">Recover Password</h3>
    <small>Enter your email and instructions will be sent to you!</small>
    <form class="form-horizontal m-t-20" action="{{ route('password.email') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Email" name="email">
                @if($errors->has('email'))
                    <small class="help-block">{{ $errors->first('email') }}</small>
                @endif
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