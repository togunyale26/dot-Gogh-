<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/AWS/Home.css"type="text/css">
</head>
<body class="bg-light" style="height: 100%;">


	<!-- The Modal -->
	<div id="myModal" class="modal" style="z-index: 2;">

		<!-- The Close Button -->
		<span class="close">&times;</span>

		<!-- Modal Content (The Image) -->
		<img class="modal-content" id="img01">

		<!-- Modal Caption (Image Text) -->
		<div id="caption"></div>
	</div>

	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom sticky-top border-dark" style="z-index: 1;">
		<div class="navbar-collapse collapse">
			<ul class="nav nav-justified">
				<li><a href="#"  class="text-light" style="float: 0;">Brand</a></li>
			</ul>
		</div>
	</nav>



	<div class="w3-sidebar bg-light border-right w3-animate-left mw-100 fixed" style="width: 20%;" id="sideNav">
		<div class="row container text-center mx-auto mt-3 mw-100">
			<div class="col container text-center mx-auto my-auto">
				<img src="/AWS/images/camera-canon-digital-42066.jpg"  class="w3-circle " style="width:110px; height: 110px;">
			</div>
			<div class="col container text-center mx-auto my-auto">
				<h3 class="mt-2 text-center"> Welcome, </h3>
				<h3><strong class="mt-0 text-center"> Name Here</strong></h3>
			</div>
		</div>
		<hr>
		<div class="container text-center">
			<h5 class="text-center">Dashboard</h5>
		</div>
		<div class="w3-bar-block nav">
			<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu">
				<i class="fa fa-remove fa-fw"></i>  Close Menu</a>
				<a href="#a" class="w3-bar-item w3-button w3-padding text-center active" data-toggle="tab"><i class="fa fa-picture-o fa-fw"></i>Portfolio</a>
				<a href="#b" class="w3-bar-item w3-button w3-padding text-center" data-toggle="tab"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i>Profile</a>
				<a href="#c" class="w3-bar-item w3-button w3-padding text-center" data-toggle="tab"><i class="fa fa-bell fa-fw"></i>Notifications</a>
				<a href="#d" class="w3-bar-item w3-button w3-padding text-center" data-toggle="tab"><i class="fa fa-cog fa-fw"></i>Settings</a>
				<a href="#e" class="w3-bar-item w3-button w3-padding text-center" data-toggle="tab"><i class="fa fa-times-circle-o fa-fw"></i>Log Out</a><br><br>

			</div>
		</div>
	</div>

	<div style="margin-left: 20%;">
		<div class="tab-content">
			<div id="a" class="tab-pane active"> 
				<!-- Header -->
				<div class="text-center border-bottom bg-light" id="myHeader">
					<h1 style="top:0;">Portfolio Gallery</h1>
				</div>
				
				<div class="container mt-4"> 
					<div class="row">
						<div class="col">
							<div class="w3-card mt-2">
								<img  id="myImg" src="/AWS/images/camera-canon-digital-42066.jpg" class="img-fluid myImg" onclick="modalimg(this)">
								<div class="w3-container bg-light">
									<h5 class="text-center"><strong> Title </strong></h5>
									<h5 class="d-flex justify-content-center">At vitae cetero per, sint efficiantur ei vix. Qui et tollit nonumes imperdiet. Ea platonem gubergren mea, pri justo probatus philosophia no, cu his porro affert. Vis ea utinam definitiones.</h5>
								</div>
							</div>
							<div class="w3-card mt-4">
								<img  id="myImg"src="/AWS/images/camera-digicam-digital-camera-39524.jpg" class="img-fluid myImg" onclick="modalimg(this)">
								<div class="w3-container bg-light">
									<h5  id="title" class="text-center"><strong> Title </strong></h5>
									<h5  id="desc" class="d-flex justify-content-center">Tobi Is Awesome .</h5>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="w3-card mt-2" >
								<img id="myImg" src="/AWS/images/r386058_1296x729_16-9.jpg" class="img-fluid myImg" onclick="modalimg(this)">
								<div class="w3-container bg-light">
									<h5 class="text-center"><strong> Title </strong></h5>
									<h5 class="d-flex justify-content-center">At vitae cetero per, sint efficiantur ei vix. Qui et tollit nonumes imperdiet. Ea platonem gubergren mea, pri justo probatus philosophia no, cu his porro affert. Vis ea utinam definitiones.</h5>
								</div>
							</div>
							<div class="w3-card mt-4">
								<img id="myImg" src="/AWS/images/analogue-aperture-black-and-white-614077.jpg" class="img-fluid myImg" onclick="modalimg(this)">
								<div class="w3-container bg-light">
									<h5 class="text-center"><strong> Title </strong></h5>
									<h5 class="d-flex justify-content-center">At vitae cetero per, sint efficiantur ei vix. Qui et tollit nonumes imperdiet. Ea platonem gubergren mea, pri justo probatus philosophia no, cu his porro affert. Vis ea utinam definitiones.</h5>
								</div>
							</div>
						</div>


					</div>


				</div>


			</div>
			<div id="b" class="tab-pane">

				<div class="container">
					<div class="row">
						<div class="col-sm-2 "> <label class="control-label col-sm-2" for="email">Email:</label> </div>
						<div class="col-sm-10 text-center"> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
					</div>
					<div class="container">
						<h2>Horizontal form</h2>
						<form class="form-horizontal" action="/action_page.php">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Email:</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="pwd">Password:</label>
								<div class="col-sm-10">          
									<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label><input type="checkbox" name="remember"> Remember me</label>
									</div>
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</div>
						</form>
					</div>P
				</div>
				<!--
				<form class="d-flex flex-column">
					<div class="container my-auto">
						<div class="form-group row">
							<label for="fname" class="col-sm-2 col-form-label">First Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="fname" placeholder="fname">
							</div>
						</div>
						<div class="form-group row">
							<label for="lname" class="col-sm-2 col-form-label">Last Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="lname" placeholder="lname">
							</div>
						</div>
						<div class="form-group row">
							<label for="username" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group row">
							<label for="bio" class="col-sm-2 col-form-label">Bio</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="bio" placeholder="Bio" rows="4"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
						</div>
					</div>
					<button type="submit"  name="update" class="btn btn-dark btn-block"> Submit </button>
				</form>
			-->
<!--
			<div class="container h-100">
				<div class="row align-items-center h-100">
					<div class="col mx-auto">
						<div class="jumbotron text-center bg-light" style="margin-top: 5%;">
							<h1 class="display-4">Profile</h1>

							<form class="d-flex flex-column">
								<div class="container my-auto">
									<div class="form-group row">
										<label for="name" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="name" placeholder="fname">
										</div>
									</div>
									<div class="form-group row">
										<label for="username" class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
									</div>
									<div class="form-group row">
										<label for="bio" class="col-sm-2 col-form-label">Bio</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="bio" placeholder="Bio" rows="4"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" name="email" placeholder="Email">
										</div>
									</div>
								</div>
								<button type="submit"  name="update" class="btn btn-dark btn-block"> Submit </button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		-->


	</div>
	<div id="c" class="tab-pane bg-primary"> Hello</div>
	<div id="d" class="tab-pane bg-danger"> Hello</div>
</div>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script>
	function modalimg(ele){
		var modal = document.getElementById('myModal');
		var id = ele.id;
		var img = ele;
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");


		var title = ele.nextSibling;
		title = title.nextSibling;


		modal.style.display = "block";
		modalImg.src = img.src;
		captionText.innerHTML = title.innerHTML;



		var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
				modal.style.display = "none";
			}



		}

		function modal2(ele){
			var modal = document.getElementById('myModal');
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");

			var img = ele.getElementById("myImg");
			var title = ele.parentElement.getElementById("title");
			img.onclick()
			modal.style.display = "block";
			modalImg.src = img.src;
			captionText.innerHTML = this.alt;

			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
				modal.style.display = "none";
			}
		}

	</script>

</body>
</html>


<!-- 



div class="container row text-center">
			<div class="col text-center my-3">
				<img src="/AWS/images/camera-canon-digital-42066.jpg"  class="w3-circle mh-100" style="width:200px; height: 200px;">
				<div class="row text-center mt-3"> Welcome,</div>
			</div>
		</div>





	<nav class="w3-sidebar w3-collapse bg-light w3-animate-left border" style="z-index:3;width:20%;" id="mySidebar"><br>
		<div class="container row mx-auto">
			<div class="col mx-auto text-center">
				<img src="/AWS/images/camera-canon-digital-42066.jpg"  class="w3-circle" style="width:100px">
			</div>
			<div class="col float-left">
				<div class="row text-center"> Welcome,</div>
				<div class="row text-center"><strong class="text-center">Mike</strong><br></div>
			</div>
		</div>
		<hr>
		<div class="container">
			<h5>Dashboard</h5>
		</div>
		<div class="w3-bar-block">
			<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu">
				<i class="fa fa-remove fa-fw"></i>  Close Menu</a>
			<a href="#dog" class="w3-bar-item w3-button w3-padding"><i class="fa fa-picture-o fa-fw"></i>  Portfolio</a>
			<a href="#cat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i>  Profile</a>
			<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Notifications</a>
			<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a>
			<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-times-circle-o fa-fw"></i>  Log Out</a><br><br>

		</div>
	</nav>


	<div class="container bg-success"  style="margin-left: 25% ">
		hello
	</div>
-->