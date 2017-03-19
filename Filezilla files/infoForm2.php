<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>La Galerie | Personal Information</title>
		<meta name="description" content="">
		<meta name="author" content="User">

		<meta name="viewport" content="width=device-width initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<link href="css/signup.css" rel="stylesheet">
		<style>
			.w3-sidenav a {
				font-family: "Roboto", sans-serif
			}
			body, h1, h2, h3, h4, h5, h6, .w3-wide {
				font-family: "Montserrat", sans-serif;
			}
			body {
				background-color: rgb(25, 25, 25);
				background-image: linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)), url("pictures/askisi1.jpg");
				background-repeat: repeat-y;
				background-size: 100% 100%;
				background-attachment: fixed;
			}
		</style>
	</head>

	<body onload="isLogin()">
		<script src="js/login.js"></script>
		<div id="coverround" style="padding-bottom:0px">
			<a href="laGalerie.php"><img id="cover" class="img-responsive" alt="cover" src="pictures/cover.jpg"
			height="100%" width="100%"></a>
		</div>
		<div id="mainnav" class="navbar navbar-default">
			<div class="container-fluid">

				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#myNavbar">
								<span class="icon-bar"></span><span class="icon-bar"></span><span
								class="icon-bar"></span>
							</button>
							<a href="laGalerie.php"> <img class="img-rounded" alt="logo"
							src="pictures/logo.jpg" width="100" height="100"> </a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li>
									<a href="Announcements.php">Announcements </a>
								</li>

								<li class="dropdown">
									<a class="dropdown-toggle"
									data-toggle="dropdown" href="Categories.php">Categories <span
									class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a href="birthdaycake.php">Birthday Cakes</a>
										</li>
										<li>
											<a href="weddingCakes.php">Wedding Cakes</a>
										</li>
										<li>
											<a href="christeningCakes.php">Christening Cakes</a>
										</li>
										<li>
											<a href="#">...</a>
										</li>
									</ul>
								</li>

								<li>
									<a href="videos.php">Videos <span
									class="glyphicon glyphicon-film"></span></a>
								</li>
								<li>
									<a href="Forum.php">Forum <span
									class="glyphicon glyphicon-pencil"></span></a>
								</li>

								<li>
									<a href="cityCenter.php">Find a Store <span
									class="glyphicon glyphicon-globe"></span></a>
								</li>

								<li>
									<a href="ContactUs.php"> Contact Us <span
									class="glyphicon glyphicon-phone-alt"></span></a>
								</li>

							</ul>

							<div id="signup" class="nav navbar-nav navbar-right btn-group-vertical" role="group">

								<li align="right">
									<a href="SignUp.php"> Sign Up/Login <span
									class="glyphicon glyphicon-user"></span></a>

									<form class="navbar-form navbar-right btn-group-vertical" role="group">
										<div class="form-group">
											<input type="text" class="form-control"
											placeholder="Search...">
										</div>
										<a href="Search"><span class="glyphicon glyphicon-search"></span></a>
									</form>
								</li>

							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<script>
			window.onscroll = function() {
				var x = document.getElementById("cover").height;
				var y = document.getElementById("mainnav").height;
				y = 2 * y;
				if (document.body.scrollTop > x || document.documentElement.scrollTop > x) {

					document.getElementById("coverround").style = "padding-bottom:150px";
					document.getElementById("mainnav").className = "navbar navbar-fixed-top";
				} else {
					document.getElementById("coverround").style = "padding-bottom:0px";
					document.getElementById("mainnav").className = "navbar navbar-default";
				}
			};
		</script>

	
		<div class="container" id="container1" name="container1">

			<?php
			require ("info2.php");
			?>
		</div>

		</div>
		<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/register.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
