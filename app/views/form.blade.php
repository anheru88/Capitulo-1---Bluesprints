<!DOCTYPE html>
<html lang="en">
<head>
	<title>URL Shortener</title>
	<link rel="stylesheet" href="/assets/css/styles.css" />
</head>
<body>
	<div id="container">
		@if(Session::has('errors'))
		<h3 class="error">{{$errors->first('link')}}</h3>
		@endif
		@if(Session::has('link'))
		<h3 class="success">
			<a href="{{ Session::get('link') }}">'Click here for your shortened URL : {{ Session::get('link') }}'</a>
		</h3>
		@endif
		@if(Session::has('message'))
		<h3 class="error">{{Session::get('message')}}</h3>
		@endif
		<h2>Uber-Shortener</h2>
		{{Form::open(array('url'=>'/','method'=>'post'))}}
		{{Form::text('link',Input::old('link'),	array('placeholder'=> 'Insert your URL here and press enter!'))}}
		{{Form::close()}}
	</div>
</body>
</html>