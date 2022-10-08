<?php
 include("connection.php");
 error_reporting(0);
?>

<!doctype html>
<head>
<title>Sign up form</title>

<style>
table
{
      color:white;
	  background-color:black;
	  border-radius:25px;
}

#btn
{
 background-color:green;
 color:white;
 height:35px;
 width:100px;
 border-radius:25px;
}


</style>
</head>
<body background="1.jpg">
<br><br><br><br><br><br>

<form action="" method="POST"> 
<table  align="center" border="0" bgcolor="black" cellspacing="15">
<tr>
<td>
Roll No<td><input type="text" placeholder="Roll No" name="rollno"required>
</td>
</tr>
<tr>
<td>
First Name<td><input type="text" placeholder="First name" name="firstname" required>
</td>
</tr>
<tr>
<td>
Last Name<td><input type="text" placeholder="Last name" name="lastname" required></td></tr>
<tr>
<td> 
Email Address<td><input type="text" placeholder="Email Address" name="email" required></td></tr>
<tr>
<td>
Password<td><input type="text"placeholder="Password" name="password" required></td></tr>
<tr>
<td>
Confirm password<td><input type="text" placeholder="Confirm Password" name="confirmpassword" required></td></tr>
<tr>
<td>
Gender<td><input type="radio" name="r1" value="male"required>
Male<input type="radio" name="r1" value="female" required>Female</td></tr>
<tr>
<td align="center" colspan="2"><a href="login form self.html"><input type="Submit" id="btn" name="submit"></a></td>
</tr>
</table>
</form>
</body>
</html>


<?php 
if($_POST['submit'])
{
 $rn=$_POST['rollno'];
 $fn=$_POST['firstname'];
 $ln=$_POST['lastname'];
 $em=$_POST['email'];
 $pwd=$_POST['password'];
 $conpwd=$_POST['confirmpassword'];
 $gender=$_POST['r1'];
  
 
  
  if($rn!="" && $fn!="" && $ln!="" && $em!="" && $pwd!="" && $conpwd!="" $gender!="")
  {	  
 $query="INSERT INTO STUDENT VALUE('$rn','$fn','$ln','$em','$pwd','$conpwd','$gender')";
 $data=mysqli_query($conn,$query);
 
 if($data)
 { 
 echo " data inserted into Database";
 }
  }
}
 else
 {
	 echo "Failed to insert data into database"; 
 }
 
?>
