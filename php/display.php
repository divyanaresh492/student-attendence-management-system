<?php 
session_start()
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Display records</title>
	<style>
		h1{
			margin-left: 20px;
			padding: 5px;
			background-color:white;
			color:green;
			width: 7.5%;
			height:35px;
		}
		#btn{
			a:hover {
         color: black;
       }
		}
		
	</style>
</head>
<!-- <center style="margin-top: 50px;"> -->
<body bgcolor="lightgrey">
     <h1> ADMIN </h1>
     <center style="margin-top: 50px;">
	<h2>STUDENTS DATA</h2>
	<hr>
	<br><br>
	<table border="2"cellspacing="7" style="background-color:white;color:black; height:40px; width:70%;">

		<tr>
			<th>Roll No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th colspan="2" align="center">Operations</th>

		</tr>

<?php

//error_reporting(0);
 include'connection.php';
 $query = "SELECT * FROM form";
 $data=mysqli_query($conn,$query);
 $total = mysqli_num_rows($data); 
 
 //echo $total;
 //echo $result['rollno']." ".$result['firstname']." ".$result['lastname']." ".$result['email']." ".$result['password']." ".$result['confirmpassword']." ".$result['r1']." ".$result['state']." ".$result['language'];

 if($total!=0)
 {
 	//$result = mysqli_fetch_assoc($data);
 	while($result = mysqli_fetch_assoc($data))
 	{
 		echo " 
 		<tr>
 		<td>".$result['rollno']."</td>
 		<td>".$result['firstname']."</td>
 		<td>".$result['lastname']."</td>
 		<td>".$result['email']."</td>

 		<td><a href = '#Update.php?rn=$result[rollno] &fn =$result[firstname] &ln = $result[lastname]&em =$result[email]'>Update/Edit</a></td>

 		<td><a href = 'delete.php?rn=$result[rollno]' onclick = 'return checkdelete()'>Delete</a></td>
 		</tr> 		
 		";
 	}
 	//echo " table has records ";
 }
 else
 {
 	echo '<h2 style="color:red"> No records found </h2>';
 }
?>
</table>
<script>
	function checkdelete()
	{
		return Confirm('Are you sure you want to Delete this');
	}
</script>
<script>
	document.getElementBYID('btn');
</script>
<br><br><br>

<center>
	       <a href="logout.php"><button onclick="btn" id="btn" style="width:90px;height:40px; background-color:green; color:white;">logout</button>
	       </a>
	</center>
<!-- <td><a href = 'Update.php?rn=$result[rollno] &fn =$result[firstname] &ln = $result[lastname]&em =$result[email]'>Update/Edit</a></td> -->
</body>
</center>
</html>

