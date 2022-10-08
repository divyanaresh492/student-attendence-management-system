
<?php
 include("connection.php");
 error_reporting(0);
?>





<!DOCTYPE html>
<html>
<head>
	<title>hostel</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<style>
	.regist
{
      color: black;
	  border-radius:25px;
}

#button1
{
 background-color:green;
 color:white;
 height:35px;
 width:100px;
 border-radius:25px;
}
a:hover {
  color: black;
}
h3{
	margin:5px;
	padding: 3px;
	color: green;
	top:50px;
	text-align: center;

}
</style>
</head>
<body>
	<table class="tab1" width=" 100%" height="30px">
		<tr style="color:grey;">
			<td>
				<center>
			<h1 style="color:black;">Hostel management system
			</h1>
		</center>
			<td>
		</tr>
	</table>
	<br>
      <img src="./images/page.jpg" width="100%" height="250px">
	<br><br>

	<table class="tab2" width="100%" border="0px" bgcolor="grey"  color="#FFFFF">
		<tr>
			<th width="14.2%"><a href="Index.php" style=":#fffff;">Home</a></th>
			<th width="14.2%"><a href="About.php">About</a></th>
			<th width="14.2%"><a href="Contact.php">Contact</a></th>
			<th width="14.2%"><a href="Gallery.php">Gallery</a></th>
			<th width="14.2%"><a href="Course.php">Courses</a></th>
			<th width="14.2%"><a href="#Registrationn.php">Registration</th></a>
			<th width="14.2%"><a href="userLogin.php">Login</a></th>
		</tr>	
	</table>

	<div class="div1">
		<div class="div2">

<br><br>
<center>
	<h1>REGISTRATION FORM</h1>
	<br><br>
	<p><a href="userLogin.php">Login</a></p>
<br>

<form action="" method="POST" autocomplete="off"> 
<table  align="center" border="0px" cellspacing="15">
<tr>
<td>
Roll No</td><td><input type="text" placeholder="Roll No" name="rollno" required>
</td>
</tr>
<tr>
<td>
First Name</td><td><input type="text" placeholder="First name" name="firstname" required>
</td>
</tr>
<tr><td>Last Name</td><td><input type="text" placeholder="Last name" name="lastname" required></td></tr>

<tr><td> Email Address</td><td><input type="text" placeholder="Email Address" name="email" required></td></tr>

<tr><td>Password</td><td><input type="password"placeholder="Password" name="password" required></td></tr>

<tr><td>Confirm password</td><td><input type="password" placeholder="Confirm Password" name="confirmpassword" required></td></tr>

<tr>
<td>
Gender<td><input type="radio" name="r1" value="male"required>
Male<input type="radio" name="r1" value="female"required >Female
</td>
</tr>

<tr><td>state</td>
	<td>
<select name="state">
	<option value="select">Select</option>
	<option>Agra</option>
	<option>Delhi</option>
	<option>Punjab</option>
	<option>haryana</option>
</select>
</td>
</tr>

<tr>
<td>
Languages Known
<td>
	
Hindi<input type="checkbox" value="hindi" name="language[]">
English<input type="checkbox" value="english" name="language[]">
Panjabi<input type="checkbox" value="panjabi" name="language[]">

</td>
</tr>

<tr>
<td align="center" colspan="2">
	<a href=" "><input type="Submit" id="button1" name="submit"></a>
</td>
</tr>
</table>
</center>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
 $rn       =  $_POST['rollno'];
 $fn       =  $_POST['firstname'];
 $ln       =  $_POST['lastname'];
 $em       =  $_POST['email'];
 $pwd      =  $_POST['password'];
 $conpwd   =  $_POST['confirmpassword'];
 $gender   =  $_POST['r1'];
 $state    =  $_POST['state'];
 $language =  $_POST['language'];
 $chkstr   =  implode(",",$language);

 //echo "$chkstr<br>";
 if($rn!="" && $fn!="" && $ln!="" && $em!="" && $pwd!="" && $conpwd!="" && $gender!="" && $state!="" && $chkstr!="")
 {
 $query="INSERT INTO form VALUES('$rn','$fn ','$ln','$em','$pwd','$conpwd','$gender','$state','$chkstr')";
 $data=mysqli_query($conn,$query);
 
 if($data)
 { 
 	 echo"<h3>Registration Successfully!<h3>";
 	/*header('location:Registrationn.php');*/
 }
}

 else
 {
	 echo"Failed to insert data into database";
 }
}
?>
			</p>
			
		
		</div>
			<div class="div3">
				<div class="div4">
				<center>
					<br><br><br><br><br><br><br><br>
					<h2>College Updates</h2>
				<marquee width="40%" direction="up" height="100%">	
				<h4>Campus Drive</h4><br>
				<h4>News</h4><br>
				<h4>sports fest</h4><br>
				<h4>Admition 2022</h4><br>
				<h4 width="100%">Student Development Programme</h4><br>
				<h4>Weekend Event</h4><br>
			</marquee>
			</center>
			</div>	
		</div>
	</div>
	<br><br>
	<table width="100%" height="50px" bgcolor="grey">
		<tr>
			<th>Copyright @ by khandari campus</th>
		</tr>
	</table>

</body>
</html>