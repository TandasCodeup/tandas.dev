@extends('layouts.master')


@section('content')

	{{ Form::open(array('action' => 'HomeController@doLogin', 'form-signin')) }}
    <br>  
    {{ Form::text('email', null, array('class' => 'form-control' , 'placeholder' => 'Email address', 'required' => 'required')) }}
    <br>
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
    <br>
    <center>enter<label>{{ Form::checkbox('name', 'value', 'true') }} Remember Me</label></center>
    <br>
    {{ Form::submit('Login',  array('class' => 'btn btn-sm btn-info btn-block')) }}
    {{ Form::close() }}
    <br>
    <center><a id= "fg" href="#">Forgot password?</a></center>               


@stop()