
<?php 
include"connection.php";
/*include"logout.php";*/
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

  <h1>  Admin </h1>


<?php 
include"Display.php";
//error_reporting(0);
?>

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
      <th>Copyright @ by khandari Campus</th>
    </tr>
  </table>

</body>
</html>
