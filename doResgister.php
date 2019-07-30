<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
	<?php 
		$name = $_POST["txtName"];
		$course = $_POST["cbCourse"];
		$Birthday = $_POST["Birth"];
		$gender = $_POST["gender"];
		$fav_book = $_POST["book"];
		$fav_car = $_POST["car"];
		$fav = $fav_book . "," . $fav_car;
		include 'Createconnection.php';
		$stmt = $conn->prepare("INSERT INTO RegisterCourse (studentname, course, dob, gender, fav)
		VALUES (?,?,?,?,?)");
		$stmt->bind_param("sssss", $name, $course, $Birthday, $gender, $fav);
		$stmt->execute();
		$conn->close();
	 ?>
	 <h2>Thank you <?php echo $name ?> has <?php echo $Birthday ?> for registering <?php echo $course ?></h2>
	 <h2>
	 	<ul>
	 		<li>
	 			<?php echo $gender ?>
	 		</li>
	 		<li>
	 			<?php echo $fav_book ?>
	 		</li>
	 		<li>
	 			<?php echo $fav_car ?>
	 		</li>	 		
	 	</ul>
	 </h2>
	 <a href="Register.php">Back</a>
</body>
</html>