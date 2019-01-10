<?php 
session_start();
include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="nav_style.css"type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
	<div class="sticky-top bg-white" style="z-index: 1">
		<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="active_user.php">
					<img src="/AWS/img/00.png" width="50" height="50">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<div class="navbar-nav ml-auto">
						<a class="nav-link nav-item" href="active_user.php">Log off</a>
					</div>
				</div>
			</div>
		</nav>

		<div>
			<?php if(isset($_SESSION['success'])):?>
				<h4 class ="display-4 mx-auto text-center"><?php echo "Welcome, ".$_SESSION['fname'] . " " .$_SESSION['lname'];?> </h4>
			<?php endif?>
		</div>


		<nav class="bg-white">
			<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
				<a class="nav-item nav-link text-dark" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="true">Gallery</a>
				<a class="nav-item nav-link text-dark " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>

			</div>
		</nav>
	</div>
	
	<div class="container-fluid tab-content" id="nav-tabContent">
		<div class="container-fluid tab-pane show active fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
			<div class="container mt-4"> 
				<div class="row">
					<div class="col-4">
						<img  id="myImg" src="/AWS/img/04.jpg" class="img-fluid myImg mt-3" onclick="modalimg(this)">

						<img src="/AWS/img/03.jpg" class="img-fluid myImg mt-3" alt="..." onclick="modalimg(this)">
						<img src="/AWS/img/04.jpg" class="img-fluid myImg mt-3" alt="..." onclick="modalimg(this)">
						<img src="/AWS/img/05.jpg" class="img-fluid myImg mt-3" alt="..." onclick="modalimg(this)">
						<img src="/AWS/img/06.jpg" class="img-fluid myImg mt-3" alt="..." onclick="modalimg(this)">
					</div>

					<div class="col-4">
						<img src="/AWS/img/07.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
						<img src="/AWS/img/08.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
						<img src="/AWS/img/09.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
						<img src="/AWS/img/10.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
					</div>
					<div class="col-4">
						<img src="/AWS/img/13.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
						<img src="/AWS/img/12.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
						<img src="/AWS/img/11.jpg" class="img-fluid myImg mt-3" alt="..."onclick="modalimg(this)">
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid bg-danger tab-pane fade"  id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<div class="container mt-5">
				<div class="row">
					<div class="col-6 mx-auto">
						<div class="jumbotron bg-light">
							<form>
								<div class="form-group row">
									<label for="name" class="col-2 col-form-label text-dark">Name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="name" placeholder= "<?php echo $_SESSION['fname'] . " " .$_SESSION['lname'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label for="username" class="col-2 col-form-label text-dark">Username</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="username" placeholder="<?php echo $_SESSION['username'];?>">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-2 col-form-label text-dark">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" name="email" placeholder="<?php echo $_SESSION['email'];?>"">
									</div>
								</div>
								<div class="form-group row">
									<label for="bio" class="col-2 col-form-label text-dark">Bio</label>
									<div class="col-sm-10">
										<textarea type="text" class="form-control" name="bio" placeholder="<?php echo $_SESSION['bio'];?>""></textarea>
									</div>
								</div>
								<div>
									<input type="submit" name="submit" class="btn bg-black text-white rounded btn-lg btn-block">
								</div>
							</form>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>



	<!-- The Modal -->
	<div id="myModal" class="modal-pro" style="z-index: 2;">

		<!-- The Close Button -->
		<span class="close">&times;</span>

		<!-- Modal Content (The Image) -->
		<img class="modal-pro-content" id="img01">

		<!-- Modal Caption (Image Text) -->
		<div id="caption"></div>
	</div>

	<script type="text/javascript">
		
		function modalimg(ele){
			var modal = document.getElementById('myModal');
			var id = ele.id;
			var img = ele;
			var modalImg = document.getElementById("img01");



			modal.style.display = "block";
			modalImg.src = img.src;



			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
				modal.style.display = "none";
			}
		}
	</script>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>