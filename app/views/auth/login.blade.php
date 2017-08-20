@extends('layout.layout')
@section('content')
<label>Sign In</label>
<form method="post" action="{{URL::to('auth/login')}}">
<p>Email <input name="email"/>
{{$errors->first('email')}}
<p>Password <input type="password" name="password"/>
{{$errors->first('password')}}
<p><button type="submit">Login</button>
</form>
<p>or <a href="{{URL::to('auth/register')}}">Register</a></p>

<p>{{$mess}}</p>
@endsection

