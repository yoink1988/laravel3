@extends('layout.layout')
@section('content')
        <form method="post" action="{{URL::to('/make-url')}}">
        <input name="url"/>
        <button type="submit">Make URL</button>
        @if($errors->first('url'))
        <p>{{{ $errors->first('url') }}}</p>
        @endif
        </form>
		<a href="{{URL::to('auth/logout')}}">Logout</a>
    </div>
@if(Auth::check())

@endif
@endsection
