<?php 
	$username = 'root1999';
	$password = 'sadhh123';
	$dbname = 'gwcoursesa';
	$servername = 'db4free.net';
	$port = 3306;

	$conn = new mysqli($servername . ":" . $port , $username, $password, $dbname);

	if ($conn->connect_error) {
		die("connection failes: " . $conn->connect_error);
	}
	echo "asdasd";
 ?>