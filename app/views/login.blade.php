<!doctype html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>

		<div class="form-group">
			{{ Form::textField('username', 'Username', false, Input::old('username'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>

		<div class="form-group">
			{{ Form::passwordField('password', 'Password', array('required' => 'required', 'class' => 'form-control')) }} 
		</div>

		<p>{{ Form::submit('Login') }}</p>
	{{ Form::close() }}
</body>
</html>