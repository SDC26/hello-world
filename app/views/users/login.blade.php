<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	{{ Form::open(array('url' => 'vishal/logincheck')) }}
<div>

		{{  Form::label('email', 'Email:')  }}
		{{  Form::input('email', 'email')  }}
		{{ $errors->first('email') }}
</div>
<div>

		{{  Form::label('password', 'Password:')  }}
		{{  Form::input('password', 'password')  }}
		{{ $errors->first('password') }}
</div>
<div>

		{{  Form::submit('login')  }}
		<button><a href="<?php echo url('vishal/create'); ?>" >Register</a></button>

</div>
{{ Form::close()  }}
</body>
</html>