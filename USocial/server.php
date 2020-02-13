<?php	
	$errors = array();
	session_start();

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

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); 	
		}
	}

	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; //здесь было $password = '$password'
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			} else {
				array_push($errors, "Wrong username/password combination");
				header('location: login.php');
			}
		}
	}