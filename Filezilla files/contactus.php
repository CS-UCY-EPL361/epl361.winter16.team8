<?php
require_once ("database.php");
//connecting with database
$db = new Database();

$sqls = "SELECT * FROM CUSTOMERS";
$sql1s = mysqli_query($conn, $sqls);

$rows = mysqli_fetch_array($sql1s, MYSQL_ASSOC);

//boolean variable true when user is login
$local = "<script>document.write(localStorage.getItem(\"islogin\"))</script>";

$x2 = "";
// if ($local == "true") {
	// //get the email of the user
	// // $email = "<script>document.write(localStorage.getItem(\"email\"))</script>";
	// // $sql = "SELECT * FROM CUSTOMERS WHERE EMAIL='$email'";
	// // $sql1 = mysqli_query($conn, $sql);
// 	
	// // $row = mysqli_fetch_array($sql1, MYSQL_ASSOC);
	// $x2 .= '
		// <div class="container">
			// <div class="row">
				// <div class="col-md-6 col-md-offset-3">
					// <div class="well well-sm">
						// <form class="form-horizontal" action="" method="post">
							// <fieldset>
								// <legend class="text-center">
									// Contact us
								// </legend>
// 		
								// <!-- Name input-->
									// <div class="form-group">
									// <label class="col-md-3 control-label" for="name">Name:</label>
										// <div class="col-md-9">
											// <label class="col-md-3 control-label" for="name">' . $row['NAME'] . '</label>
										// </div>
									// </div>
// 
								// <!--Surname input-->
								// <div class="form-group">
									// <label class="col-md-3 control-label" for="name">Surname:</label>
									// <div class="col-md-9">
										// <label class="col-md-3 control-label" for="name">' . $row['SURNAME'] . '</label>
									// </div>
								// </div>
								// <!--Town -->
									// <div class="form-group">
										// <label class="col-md-3 control-label" for="name">Town:</label>
										// <div class="col-md-9">
											// <label class="col-md-3 control-label" for="name">' . $row['CITY'] . '</label>
										// </div>
									// </div>
// 
									// <!-- Email input-->
									// <div class="form-group">
										// <label class="col-md-3 control-label" for="email">Your E-mail:</label>
										// <div class="col-md-9">
											// <label class="col-md-3 control-label" for="name">' . $row['EMAIL'] . '</label>
										// </div>
									// </div>
// 							
// 						
								// <!-- Message body -->
								// <div class="form-group">
									// <label class="col-md-3 control-label" for="message">Your message:</label>
									// <div class="col-md-9">
										// <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									// </div>
									// </div>
// 	
								// <!-- Form actions -->
								// <div class="form-group">
									// <div class="col-md-12 text-right">
										// <button type="submit" class="btn btn-primary btn-lg">
											// Submit
										// </button>
									// </div>
								// </div>
								// <!--Phone Number-->
								// <div id= "contentRightShort">
								// <p>
								// Phone Number: 25750665
								// <br>
								// Email: patisserie@galactica.com.cy
								// <br>
								// <a href="cityCenter.php"> Our locations </a>
								// </p>
// 
							// </div>
						// </fieldset>
					// </form>
				// </div>
			// </div>
		// </div>
	// ';
// 
	// echo $x2;
	// $x2 = "";
/* } else */ 

	$x2 .= '<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="well well-sm">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<legend class="text-center">
									Contact us
								</legend>

								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>

								<!--Surname input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Surname:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your surname" class="form-control">
									</div>
								</div>
								<!--Town -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Town:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your town" class="form-control">
									</div>
								</div>

								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message:</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 text-right">
										<button type="submit" class="btn btn-primary btn-lg">
											Submit
										</button>
									</div>
								</div>

								<!--Phone Number-->
								<div id= "contentRightShort">
									<p>
										Phone Number: 25750665
										<br>
										Email: patisserie@galactica.com.cy
										<br>
										<a href="cityCenter.php"> Our locations </a>
									</p>

								</div>
							</fieldset>
						</form>
					</div>
				</div>';
	echo $x2;
	$x2="";
/*
$scrstr = "";

$scr = explode('_', $scrstr);
echo '<script>
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {';
		for ($i=0;$i<$rowcount-1;$i++){	
		echo 'if (event.target == modal' . $scr[$i] .') {
			modal' . $scr[$i] . '.style.display = "none";
					} else ';
		}
		echo ' if (event.target == modal' . $scr[$rowcount-1] .'){
						modal' . $scr[$rowcount-1] . '.style.display = "none";
					}
		}</script>';
*/		
?>
