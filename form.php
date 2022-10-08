<?php
 include("connection.php");
 error_reporting(0);
?>

<!doctype html>
<head>
<title>Sign up form</title>

<style>
.regist
{
      color: black;
	  border-radius:25px;
}

#button
{
 background-color:green;
 color:white;
 height:35px;
 width:100px;
 border-radius:25px;
}

</style>
</head>
<body>
	<a href="index.php"><button>Home</button></a>

<br><br><br><br>
<center><h1>Registration Form</h1></center>
<br>

<form action="" method="POST" autocomplete="on"> 
<table  align="center" border="0px" cellspacing="15" class="regist">
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
<td align="center" colspan="2"><a href=" "><input type="Submit" id="button" name="submit"></a></td>
</tr>
</table>
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

  /*echo "<h4>data inserted into Database</h4>";*/
  header('location:login.php');
 }
}

 else
 {
	 echo"Failed to insert data into database";
 }
}

?>

