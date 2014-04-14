<html>
<head>
	<title>Reset</title>
</head>
<body>

	{{ Form::open(array('action' => 'RemindersController@postReset', 'method' => 'POST')) }}
		{{ Form::hidden('token', $token) }}
		{{ Form::email('email') }}
		{{ Form::password('password') }}
		{{ Form::password('password') }}
		{{ Form::submit('Reset Password') }}
	{{ Form::close() }}

</body>
</html>