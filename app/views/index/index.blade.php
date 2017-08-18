<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tinyurl</title>
</head>
<body>
    
    <div>
        <form method="post" action="{{URL::to('/make-url')}}">
        <input name="url"/>
        <button type="submit">Make URL</button>
        @if($errors->first('url'))
        <p>{{{ $errors->first('url') }}}</p>
        @endif
        </form> 
    </div>
@if(Auth::check())
<a href="{{URL::to('auth/logout')}}">Logout</a>
@endif
</body>
</html>
