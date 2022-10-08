<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<meta http-equiv="Refresh" content="5";url="http://localhost/hostel%20management%20system/hostel%20management%20system/display.php">
</body>
</html>

<?php
  include 'connection.php';
 error_reporting(0);

 $rollno=$_GET['rn'];

 $query = "DELETE FROM FORM WHERE ROLLNO ='$rollno'";
 $data = mysqli_query($conn,$query);

 if($data)
 {
 	echo "<script>alert('Record Deleted from Database')</script>";
 	header('Location:display.php');
  /* <meta http-equiv="Refresh" content-"5";url="http://localhost/hostel%20management%20system/hostel%20management%20system/display.php.php">*/
}

 else
 {
 	echo "<font color = 'red'>Failed to Delete Record from Database</font>";
 }
?>