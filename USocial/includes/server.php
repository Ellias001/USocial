<?php	
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'usocial');

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match");
		}

		if (count($errors) == 0) {
			$password = md5($password_1); //security
			$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', 'password');";
			mysqli_query($db, $sql);
		}
	}