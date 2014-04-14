<html>
<head>
	<title>Password Reminder</title>
</head>
<body>

	{{ Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'POST')) }}
		{{ Form::email('email') }}
		{{ Form::submit('Send Reminder') }}
	{{ Form::close() }}

</body>
</html>