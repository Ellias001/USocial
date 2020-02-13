<?php
	include_once 'dbh.inc.php';

	$name = $_POST['name'];
	$uid = $_POST['uid'];
	$content = $_POST['content'];
	$username = $_POST['username'];

	$sql = "INSERT INTO articles (name, uid, content, username) VALUES ('$name', '$uid', '$content', '$username')";
	$result = mysqli_query($conn, $sql);

	header("Location: ../warticle.php?article=success");
?>