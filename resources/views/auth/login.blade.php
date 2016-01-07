<!-- resources/views/auth/login.blade.php -->
@extends('themes.Default.master')

@section('head')
@stop

@section('content')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
         {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!} <!-- <button type="submit">Login</button> -->
    </div>
    <div>
        <a class="btn btn-default" href="{{ URL::action('Auth\AuthController@getRegister') }}">Register</a>
    </div>
</form>
@stop

@section('javascript')
@stop