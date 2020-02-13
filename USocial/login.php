<?php
	include('server.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div>
		<h2>Login</h2>
	</div>

	<form method="post" action="loign.php">
		<?php 
			include('errors.php');
		?>
		<div>
			<label>Username: </label>
			<input type="text" name="username">
		</div>		
		<div>
			<label>Password: </label>
			<input type="password" name="password">
		</div>		
		<div>
			<button type="submit" name="login">Login</button>
		</div>
		<p>Not yet a member? <a href="reg.php">Sign up</a></p>
	</form>
</body>
</html>