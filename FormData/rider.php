<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello Courier</title>
	<script src="../sweetalert/jquery-3.6.0.min.js"></script>
	<script src="../sweetalert/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
<?php
	$Phone = $_POST['Phone'];
	$email = $_POST['email'];
	$file = addslashes(file_get_contents($_FILES["filename_1"]["tmp_name"]));
	$file_1 = addslashes(file_get_contents($_FILES["filename_2"]["tmp_name"]));
	$file_2 = addslashes(file_get_contents($_FILES["filename_3"]["tmp_name"]));

	// Database connection
	$conn = new mysqli('localhost','root','','helloriders');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into riderdetails(Phone, email, filename_1, filename_2, filename_3) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issss", $Phone, $email, $file, $file_1, $file_2);
		$execval = $stmt->execute();
		header( "refresh:5;url=../index.html" ); 
		echo "...redirecting";
		$stmt->close();
		$conn->close();
	}
?>
</body>
</html>