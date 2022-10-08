<?php

$servername="localhost";
$username="root";
$password="";
$dbname="cyber";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
  // echo"Connection Ok";
}
else
{
 echo "Connection Failed".mysqli_connect_error();
}
?>