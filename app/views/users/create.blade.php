<!DOCTYPE html>
<html>
<head>
	<title>create user</title>
</head>
<body>
<h1>Create New user</h1>

{{ Form::open(array('url' => 'vishal/store')) }}
<div>
	
		{{  Form::label('username', 'Username:')  }}
		{{  Form::input('text', 'username')  }}
		{{ $errors->first('username') }}
	
</div>
<div>

		{{  Form::label('email', 'Email:')  }}
		{{  Form::input('email', 'email')  }}
		{{ $errors->first('email') }}
</div><div>

		{{  Form::label('password', 'Password:')  }}
		{{  Form::input('password', 'password')  }}
		{{ $errors->first('password') }}
</div>
<div>

		{{  Form::submit('createuser')  }}
	<button><a href="<?php echo url('vishal/logout'); ?>" >login</a></button>
	

</div>
		

{{ Form::close()  }}
</body>
</html>