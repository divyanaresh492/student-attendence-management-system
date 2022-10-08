<!DOCTYPE html>
<html>
<head>
	<title>hostel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
      <!-- <img src="./images/page.jpg" width="100%" height="250px"> -->
      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./images/page.jpg" style="width:100%"height="300px">
 <!--  <div class="text">Caption Text</div> -->
</div>
      <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./images/bed.jpg" style="width:100%"height="300px">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./images/iim.jpg" style="width:100%"height="300px">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) 
  {
  	slideIndex = 1;
  }    
  for (i = 0; i < dots.length; i++)
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br>
	<br><br>

	<table class="tab2" width="100%" border="0px" bgcolor="grey" height="40px" color="#FFFFF">
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
			<br><br>
			<img src="./images/IET.jpg" width="90%" height="93%" border="0px">
		</div>
			<div class="div3">
				<div class="div4">
				<center>
					<br><br><br><br><br><br><br><br><br><br>
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