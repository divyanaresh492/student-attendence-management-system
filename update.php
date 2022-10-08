
<?php
include'connection.php';
/*error_reporting(0);
*/
$rn =$_POST['rn'];
$fn =$_POST['fn'];
$ln =$_POST['ln'];
$em =$_POST['em'];

?>





<!DOCTYPE html>
<html>
<head>
  <title>hostel</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
  table
{
    color:black;
}
#btn1{
      background-color:green;
      color:white;
      height:35px;
      width:100px;
      margin-left:200px;
      border-radius: 2px;:2s;
     }
     .btn2
     {
      background-color:grey;
      color:white;
      height:35px;
      width:100px;
      border-radius: 2px;:2s;
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
      <img src="page.jpg" width="100%" height="250px">
  <br><br>

  <table class="tab2" width="100%" border="0px" bgcolor="grey"  color="#FFFFF">
    <tr>
      <th width="14.2%"><a href="Index.php">Home</a></th>
      <th width="14.2%"><a href="About.php">About</a></th>
      <th width="14.2%"><a href="Contact.php">Contact</a></th>
      <th width="14.2%"><a href="Gallery.php">Gallery</a></th>
      <th width="14.2%"><a href="Course.php">Courses</a></th>
      <th width="14.2%"><a href="Registrationn.php">Registration</th></a>
      <th width="14.2%"><a href="login.php">Login</a></th>
    </tr> 
  </table>

  <div class="div1">
    <div class="div2">

<br><br><br><br>
<center>
  <h1>  Update </h1>
<br><br>
<form action="display1.php" method="GET"> 
<table  align="center" border="0" cellspacing="15">
<tr>
<td>Roll No</td>
<td><input type="text" value='<?php  echo "$rn"?>' name="rollno"required>
</td>
</tr>
<tr>
<td>First Name</td><td><input type="text" value='<?php  echo "$fn"?>' name="firstname" required></td>
</tr>
<tr><td>Last Name</td><td><input type="text" value='<?php  echo "$ln"?>' name="lastname" required></td></tr>

<tr><td> Email Address</td><td><input type="text" value='<?php  echo "$em"?>'name="email" required></td></tr>

</table>
</center>
<table  border="0px" style="margin-left: 300px;">
<tr>
<td>
	<a href="display1.php">
		<input type="submit" id="btn1" name="submit" value = "Update Details">
	</a>
</td>
</tr>
</table>
</form>

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
  <table width="100%" height="50px" bgcolor="grey">
    <tr>
      <th>Copyright @ by khandari campus</th>
    </tr>
  </table>
</body>
</html>


<?php
if($_POST['submit'])
{
 $rollno       =  $_POST['rollno'];
 $firtname     =  $_POST['firstname'];
 $lastname     =  $_POST['lastname'];
 $email        =  $_POST['email'];
 
 
 $query = "UPDATE FROM FORM WHERE student ";
 $data = mysqli_query($conn,$query);

 if($data)
 {
 	echo "<script>alert(Record Updated from Database)</script>";
 }
 else
 {
 	echo "Failed to Update Record from Database";
 }
}
 ?>
