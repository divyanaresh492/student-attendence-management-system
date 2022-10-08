<!DOCTYPE html>
<html>
<head>
	<title></title>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container">
		<h1 class="text-center text-white bg-dark">
			Registered Name with Profile</h1>
			<table class="table table-borderedd table-striped table-hover text-center bg-cl">
				
				<thead class="bg-dark text-white">
					<th> Id </th>
					<th> Username </th>
					<th> Profile pic</th>
				</thead>
				<tbody>

					<?php
					$con= mysqli_connect('localhost','root');
					mysqli_select_db($con,'displayupload');

					 if(isset($_POST['submit']))
					 {
						$username = $_POST['username'];
						$files = $_FILES['file'];
						//print_r($username);
						echo "<br>";
						//print_r($files);

						$filename = $files['name'];
						$fileerror = $files['error'];
						$filetmp = $files['tmp_name'];

						$fileext = explode('.', $filename);
						$filecheck = strtolower(end($fileext));

						$fileextstored = array('png','jpg','jpeg');

						if(in_array($filecheck, $fileextstored))
						{
							$destinationfile = 'upload/'.$filename;
							move_uploaded_file($filetmp,$destinationfile);

							$q ="INSERT INTO `imgupload`(`username`, `image`) VALUES ('$username','$destinationfile')";

							$query = mysqli_query($con,$q);

							$displayquery = "select * from imgupload";
							$querydisplay = mysqli_query($con,$displayquery);
							//$row = mysqli_num_rows($querydisplay);
							while ($result=mysqli_fetch_array($querydisplay)) 
							{
								
								?>
								<tr>
									<td><?php echo $result['id']; ?></td>
									<td><?php echo $result['username']; ?></td>
									<td><img src="<?php echo $result['image']; ?>" width="100px" height="100px"></td>

								</tr>
								<?php

							}
						}
							else{
								echo"Extention is not matching";
							}

						}

					?>
				</tbody>
			</table>
			</div>
		</h1>
	</div>

</body>
</html>