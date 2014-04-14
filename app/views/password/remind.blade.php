<html>
<head>
	<title>Password Reminder</title>
</head>
<body>

	{{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'POST')) }}
		{{ Form::email('email') }}
		{{ Form::submit('Send Reset Email') }}
	{{ Form::close() }}

</body>
</html>