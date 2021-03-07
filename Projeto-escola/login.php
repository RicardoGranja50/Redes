<!DOCTYPE html>
	<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Login</title>
	</head>
	<body>
		<h1>Login</h1>
		<form method="post" action="processa_login.php">
			<div class="container-fluid">
				<label>Nome Utilizador</label><input type="text" name="user_name" required><br>
				<label>Palavra-passe</label><input type="text" name="password" required><br>
			<div>
			<input type="submit" name="login"><br>
			<a href="register.php">Register</a>
		</form>
	</body>
</html>