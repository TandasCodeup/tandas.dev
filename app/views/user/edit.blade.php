<html>
<head>
	<title>{{{ $user->email }}} Profile Edit</title>
</head>
<body>

	{{ Form::open(array('action' => array('UserController@update', Auth::user()->id), 'method' => 'PUT')) }}
		{{ Form::text('email', $user->email, array('required' => 'required')) }}
		{{ Form::password('password', null, array('required' => 'required')) }}
		{{ Form::text('firstName', $user->first_name, array('required' => 'required')) }}
		{{ Form::text('lastName', $user->last_name, array('required' => 'required')) }}
		{{ Form::submit('Submit Changes') }}
	{{ Form::close() }}

</body>
</html>