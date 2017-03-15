<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>All Users</h1>
@if ($users->count()>0)
@foreach ($users as $user)
	<table border="1">
		<tr>
			<td>
			{{  $user->email }}
			</td>
			<td>
			<li>{{ link_to("/vishal/show/{$user->username}", $user->username)}}</li>
			</td>
		</tr>
	</table>
@endforeach
@else
<h2>No users found</h2>
@endif

</body>
</html>