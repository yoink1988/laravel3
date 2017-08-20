@extends('layout.layout')
@section('content')
		<form method="post" action="{{URL::to('auth/register')}}">
		<p>Email <input name="email"/>
		{{{$errors->first('email')}}}
		<p>Name <input name="name"/>
		{{{$errors->first('name')}}}
		<p>Password <input type="password" name="password"/>
			{{{$errors->first('password')}}}
		<p>Confirm password <input type="password" name="confpassword"/>
			{{{$errors->first('confpassword')}}}
		<p><button type="submit">Sign Up</button>

</form>
@endsection