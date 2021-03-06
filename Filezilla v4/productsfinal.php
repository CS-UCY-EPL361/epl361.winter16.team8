<?php session_start() ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>La Galerie | Cake for Girl 1</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<style>
			body, h1, h2, h3, h4, h5, h6, .w3-wide {
				font-family: "Montserrat", sans-serif;
			}
			body {
				background-color: rgb(25, 25, 25);
				background-image: linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)), url("pictures/askisi1.jpg");
				background-repeat: no-repeat;
				background-size: 100% 100%;
				background-attachment: fixed;
			}
		</style>
	</head>
	
	<body>
		<script src="js/login.js"></script>
		<script src="js/cart.js"></script>

		<div id="coverround" style="padding-bottom:0px">
			<a href="laGalerie.html"><img id="cover" class="img-responsive" alt="cover" src="pictures/cover.jpg"
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
							<a href="laGalerie.html"> <img class="img-rounded" alt="logo"
							src="pictures/logo.jpg" width="100" height="100"> </a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li>
									<a href="Announcements.html">Announcements </a>
								</li>

								<li class="dropdown">
									<a class="dropdown-toggle"
									data-toggle="dropdown" href="Categories.html">Categories <span
									class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a href="birthdaycake.html">Birthday Cakes</a>
										</li>
										<li>
											<a href="weddingCakes.html">Wedding Cakes</a>
										</li>
										<li>
											<a href="christeningCakes.html">Christening Cakes</a>
										</li>
										<li>
											<a href="#">...</a>
										</li>
									</ul>
								</li>

								<li>
									<a href="videos.html">Videos <span
									class="glyphicon glyphicon-film"></span></a>
								</li>

								<li>
									<a href="forum.html">Forum <span
									class="glyphicon glyphicon-pencil"></span></a>
								</li>

								<li>
									<a href="cityCenter.html">Find a Store <span
									class="glyphicon glyphicon-globe"></span></a>
								</li>

								<li>
									<a href="ContactUs.html"> Contact Us <span
									class="glyphicon glyphicon-phone-alt"></span></a>
								</li>

							</ul>

							<div id="signup" class="nav navbar-nav navbar-right btn-group-vertical" role="group">

								<li align="right">
									<a href="SignUp.html"> Sign Up/Login <span
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
			require ("putProducts.php");
			?>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>