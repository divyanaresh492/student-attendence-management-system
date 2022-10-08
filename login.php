<?php 
include"connection.php";
//error_reporting(0);
?>





<!DOCTYPE html>
<html>
<head>
  <title>hostel</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
  table
{
    color:black;
   /* border-radius:25px;*/
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
      <img src="./images/page.jpg" width="100%" height="250px">
  <br><br>

  <table class="tab2" width="100%" border="0px" bgcolor="grey"  color="#FFFFF">
    <tr>
      <th width="14.2%"><a href="Index.php" style=":#fffff;">Home</a></th>
      <th width="14.2%"><a href="About.php">About</a></th>
      <th width="14.2%"><a href="Contact.php">Contact</a></th>
      <th width="14.2%"><a href="Gallery.php">Gallery</a></th>
      <th width="14.2%"><a href="Course.php">Courses</a></th>
      <th width="14.2%"><a href="Registrationn.php">Registration</th></a>
      <th width="14.2%"><a href="userLogin.php">Login</a></th>
    </tr> 
  </table>

  <div class="div1">
    <div class="div2">

<br><br><br><br>
<center>
  <h1> LOGIN </h1>
<center>
<form action="" method="POST" >
<br><br><br>


<!-- <table border="2px" align="center" height="30%" width="40%" hspace="200"vspace="150">
 -->  <table>
<tr>
   <td>
       Email ID :<td><input type="text"size="35" placeholder="Email" size="25" name = "Email" required>
   </td>
</tr>
</table>
<br>
<table>
   <tr>
      <td>
          Password :<td><input type="password" size="35"placeholder="Password" size="25" name="pass" required autosave="off">
     </td>
</tr>
</table>
<tr>
  <table border="0px" width="40%">
    <tr>
  <td>
    <br>
  <input type="submit" name="submit" id="btn1"/>
  <br><br>
 <a href="display.php"><font color="black"style="margin-left: 210px;">Registration</font></a>
</td>
</tr>
</table>

</tr>
</table>
</form>
</center>

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

if(isset($_POST['submit']))
{
 $u1 = $_POST['Email'];
 $pass = $_POST['pass'];
 
 $query="SELECT * FROM FORM WHERE EMAIL ='$u1' && Password='$pass'";
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
 echo $total;

if($total==1)
{
  //echo "Login OK";
  header('Location:StudentDisplayData.php');
}
else
{
  echo "<center><font color='white'><h2>Login Failed...</h2></font></center";
}
}

?>