<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>All Users</h1>

	@foreach($users as $user)
		<li>{{ $user->name }}</li>
	@endforeach

	<form method="POST" action="/users">
		{{ csrf_field() }}
		<p>
			<input type="text" name="name" placeholder="Name" required>
		</p>
		<p>
			<input type="email" name="email" placeholder="Email" required>
		</p>
		<p>
			<input type="password" name="password" placeholder="Password" required>
		</p>
		<button type="sumbit">Add User</button>
	</form>

</body>
</html>