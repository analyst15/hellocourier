<!DOCTYPE html>
<html>
<head>
<title>retrieve image</title>
</head>
<body>
    <?php
// database connection
  $conn = mysqli_connect("localhost", "root", "", "helloriders");
// Fetch image from database
	$file = mysqli_query($conn, "SELECT * FROM riderdetails");
     while ($row = mysqli_fetch_array($file)) {     
		
      	echo "<img src='images/".$row['filename_1']."' >";   
      
    } 
?>
</body>
</html>