<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
<form action="{{ url('users/details') }}" method="post">
<hr>
<div>
	<center>

		<input type="hidden" name="id"></input>
		Name : <input type="text" name="username"></input><br>
		Work_Detail : <input type="text" name="bio"></input><br>
		Title : <input type="text" name="title"></input><br>
		Body : <input type="text" name="body"></input><br>
		<input type="submit" name="submit"></input>
		<table border="1">
			<th>Name of Painter</th>
			<th>Bio</th>
			<th>title</th>
			<th>Body</th>
			@for($i=0;$i<count($data);$i++)
				<tr>
					<td >{{$data[$i]['username']}}</td>
					<td >{{$data[$i]['bio']}}</td>
					<td >{{$data[$i]['title']}}</td>
					<td >{{$data[$i]['body']}}</td>
				</tr>
			@endfor
		</table>
	</center>
</div>
</form>
</body>
</html>