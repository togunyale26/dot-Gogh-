<?php 
session_start();
include('server.php');?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
<link rel="stylesheet" href="/AWS/homestyle.css"
	type="text/css">

</head>
<body class="bg-light">
	<div class="container h-100 sticky-bottom">
		<div class="row align-items-center h-100">
			<div class="col-6 mx-auto">
				<div class="jumbotron text-center" style="margin-top: 10%;">
					<h1 class="display-4">VanStore</h1>
					<p class="lead">Personalized Art Portfolios!</p>
					<p class="lead">
					<form id="NewUser" action="login.php" method="post">
					<?php include 'errors.php';?>
						<div class="input-group mb-3">
						
							<input name="username" id="username" type="text" class="form-control"
								placeholder="@username" aria-label="email"
								aria-describedby="basic-addon1" >
						</div>
						<div class="input-group mb-3">
							<input name="password" id="password" type="password"
								class="form-control" placeholder="password"
								aria-label="password" aria-describedby="basic-addon1" >
						</div>
						
						<div class="input-group mb-3">
							<button name="login" type="submit" class="btn btn-dark btn-lg btn-block"> Log In </button>
						</div>
						<p> Don't have an account? <a href="register.php"> Register Here</a></p>
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



