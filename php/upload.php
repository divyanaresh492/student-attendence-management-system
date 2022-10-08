<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>

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
	<br>
	<h1 class="text-white bg-dark text-center">
		Register Form For Events
	</h1>
	<div class="col-lg-8 m-auto d-block">
	<form action="upload1.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="user">Username: </label>
			<input type="text" name="username" id="user" class="form-control">
		</div>


		<div class="form-group">
			<label for="file">Profile pic: </label>
			<input type="file" name="file" id="user" class="form-control">
		</div>

		<input type="submit" name="submit" value="Submit" class="btn btn-success">
		
	</form>
	</div>
	
</div>


</body>
</html>