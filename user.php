<?php 
session_start();
include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="/AWS/style_profile.css"type="text/css">
</head>
<body  class="bg-light">

	<div class="container-pro">
		<nav class="navbar sticky-top bg-dark navbar-light border-bottom border-secondary navbar-expand-lg">
			<a class="navbar-brand bg" href="#">Fixed top</a>
		</nav>

		<div class="container-pro">
			<div class="container-pro">
				<div class="left-3-pro"></div>
				<div class="right-3-pro"></div>

				<div class="middle-3-pro">
					<div class="top-pro">
						<div class="left-2-pro">

							<div class="center-img-pro">
								<img src="/AWS/images/camera-canon-digital-42066.jpg" >
							</div>

						</div>
						<div class="right-2-pro">
							
							<?php if(isset($_SESSION['success'])):?>
								<h4 class ="full-name-pro mx-auto"><?php echo $_SESSION['fname'] . " " .$_SESSION['lname'];?> </h4>
								<h4 class ="handle-pro"> <?php echo  "@" . $_SESSION['username']; ?>    </h4>
								<p class="bio-pro"> <?php echo nl2br($_SESSION['bio'], false); ?> </p>
							<?php endif?>


						</div>
					</div>

					<nav >
						<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
							<a class="nav-item nav-link text-dark" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="true">Gallery</a>
							<a class="nav-item nav-link text-dark " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
							<a class="nav-item nav-link text-dark" id="nav-settings-tab" data-toggle="tab" href="#nav-settings" role="tab" aria-controls="nav-settings" aria-selected="false"> Add to Portfolio </a>
						</div>
					</nav>
					<div class="container-pro tab-content" id="nav-tabContent">
						<div class="container-pro tab-pane show active fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
							<div class="left-3-pro"></div>
							<div class="right-3-pro"></div>
							<div class="middle-3-pro">
								
								<div class="row-pro">
									<div class="column-pro">
										<?php if (isset($_SESSION['success'])): ?>
											

									</div>
								</div>
							</div>
						</div>
						<div class="container-pro tab-pane fade"  id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="left-3-pro"></div>
							<div class="right-3-pro"></div>
							<div class="middle-3-pro"> 
								<?php include 'errors.php';  
								include 'success.php';?>
								<div class="row">
									<form class="col-md-6" method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 5%;">
										<div class="form-group">
											<label for="fname_up">First Name </label>
											<input type="text" class="form-control" id="fname"  name="fname_up" placeholder="First Name">
										</div>
										<button type="submit"  name="update_fname" class="btn btn-dark btn-block"> Update First Name </button>
									</form>
									<form class="col-md-6" method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 5%;">
										<div class="form-group">
											<label for="lname_up">Last Name </label>
											<input type="text" class="form-control" id="lname"  name="lname_up" placeholder="Last Name">
										</div>
										<button type="submit"  name="update_lname" class="btn btn-dark btn-block"> Update Last Name </button>
									</form>		
								</div>
								<div class="row"> 
									<form class="col-md-6" method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 5%;">
										<div class="form-group">
											<label for="email_up">Email</label>
											<input type="email" class="form-control" id="email_up"  name="email_up" placeholder="Email@example.com">
										</div>
										<button type="submit"  name="update_email" class="btn btn-dark btn-block"> Update Email </button>

									</form>
									<form class="col-md-6" method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 5%;">
										<div class="form-group">
											<label for=username_up">Username</label>
											<input type="text" class="form-control" name="username_up" placeholder="@Username">
										</div>
										<button type="submit"  name="update_username" class="btn btn-dark btn-block"> Update Username </button>

									</form>
								</div>

								<form method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 5%;">
									<div class="row">
										<div class="form-group col-md-6">
											<label for=password_up">Password</label>
											<input type="password" class="form-control" name="password_up" placeholder="Password">
										</div>
										<div class="form-group col-md-6">
											<label for="password2_up">Confirm Password</label>
											<input type="password" class="form-control" name="password2_up" placeholder="Password">
										</div>
									</div>
									<button type="submit"  name="update_password" class="btn btn-dark btn-block"> Update password </button>
								</form>



								<form method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 5%;" id="post-bio">
									<div class="form-group">
										<label for="bio_up"> Bio : </label> 
										<textarea class="form-control" name="bio_up" rows="4" form="post-bio"></textarea>
									</div>
									<button type="submit"  name="update_bio" class="btn btn-dark btn-block"> Update Bio </button>
								</form>


							</div>
						</div>
						<div class="container-pro tab-pane fade" id="nav-settings" role="tabpanel" aria-labelledby="nav-settings-tab">
							<div class="left-3-pro"></div>
							<div class="right-3-pro"></div>
							<div class="middle-3-pro"> 
								<h3 style="text-align: center; margin-top: 5%;"> Upload Image </h3>
								<?php include 'errors.php';  
								include 'success.php';?>
								<form method="post" action="user.php" enctype="multipart/form-data" style="margin-top: 2%;">
									<div class="form-group">
										<input type="file" class="form-control-file" name="image" id="image">
									</div>
									<div class="form-group">
										<label for="exampleFormControlInput1"> Title : </label>
										<input type="text" class="form-control" name="title" >
									</div>
									<div class="form-group">
										<label for="exampleFormControlTextarea1"  > Description : </label>
										<textarea class="form-control" name="description" rows="4"></textarea>
									</div>
									<button type="submit"  name="upload" class="btn btn-dark btn-block"> Upload Image </button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
