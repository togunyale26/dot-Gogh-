<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
	
	<link rel="stylesheet" href="nav_style.css"type="text/css">

</head>
<body class="bg-black">
	<div class="container">
		<div class="row align-items-center ">
			<div class="col-6 mx-auto">
				<div class="jumbotron text-center bg-white text-white my-5">

					<h1 class="display-4"> 
						<a href="index.php">
							<img src="/AWS/img/00.png" width="100" height="100">
						</a>
					</h1>
					<p class="lead"> Perasonlized art Portfolios</p>
					<?php include 'errors.php'; ?>

					<form action="register.php" method="post">
						<div class="input-group mb-3">
							<input class="form-control" type="text" name="fname" placeholder="First Name" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<input class="form-control" type="text" name="lname" placeholder="Last Name" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<input class="form-control" type="text" name="username" placeholder="@Username" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<input class="form-control" type="text" name="email" placeholder="Email@example.com" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<input class="form-control" type="password" name="password" placeholder="Password" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<input class="form-control" type="password" name="password2" placeholder="Confirm Password" aria-describedby="basic-addon1">
						</div>

						<div class="input-group mb-3">
							<button name="register" type="submit" class="btn bg-black text-white btn-lg btn-block"> Register </button>
						</div>

						<p class="text-secondary">
							Already have an account? <a href="/AWS/login.php" class="text-dark"> Sign In</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
	integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
	crossorigin="anonymous"></script>
	<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
	integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
	crossorigin="anonymous"></script>
	<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
