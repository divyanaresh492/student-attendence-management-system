<?php

$con= mysqli("localhost","root","cyber");

$result=$con->query("SELECT * FROM student");

foreach ($result as $value)
 {
	echo $value['rollno'];
	echo $value['fname'];

}

 ?>