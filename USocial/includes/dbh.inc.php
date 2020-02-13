<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "usocial";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

/* Писать артиклы
    <?php
		$sql = "SELECT * FROM articles;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['text'] . "<br>";
			}
		}
	?>

*/