<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div>
		<h2>Register</h2>
	</div>

	<form method="post" action="reg.php">
		<?php 
			include('includes/errors.php');
		?>
		<div>
			<label>Username: </label>
			<input type="text" name="username">
		</div>		
		<div>
			<label>Email: </label>
			<input type="text" name="email">
		</div>		
		<div>
			<label>Password: </label>
			<input type="password" name="password_1">
		</div>		
		<div>
			<label>Confirm password: </label>
			<input type="password" name="password_2">
		</div>		
		<div>
			<button type="submit" name="register">Register</button>
		</div>
		<p>Already a member? <a href="login.php">Sign in</a></p>
	</form>
</body>
</html>