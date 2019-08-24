
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php include 'header.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>REGISTER HERE</center></h1></div>

	<div class="container-fluid padding light" style="padding-bottom: 5px;">
		<div class="col-md-6 col-md-offset-3 register">
			<form method="post" name="myForm" action="login.php">
 

 			

			<div class="form-group" >
				<input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="text" name="lname" class="form-control" placeholder="Last Name" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="E-mail" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="password" name="pass" class="form-control" placeholder="Password" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="password" name="rpass" class="form-control" placeholder="Retype Password" autocomplete="off">
			</div>

		<button type="submit" class="btn btn-default" name="register" >Register</button><br>
	
		</form>
		</div>
	</div>

<br><br>


	<?php 

	$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(strpos($fullUrl, "register=empty") == true){
		print "<p class='errorMsg'>**Please fill in all the fields</p>";
	}
		
	
	if(strpos($fullUrl, "register=namemustbetext") == true){
		print "<p class='errorMsg'>**Name must be text</p>";
	}
	if(strpos($fullUrl, "register=passwordInvalid") == true){
		print "<p class='errorMsg'>**Password must contain only letters and numbers</p>";
	}
	if(strpos($fullUrl, "register=PasswordLength") == true){
		print "<p class='errorMsg'>**Password must be between 6 and 12 characters</p>";
	}
	
	if(strpos($fullUrl, "register=invalidEmail") == true){
		print "<p class='errorMsg'>**Please enter valid email</p>";
	}
	if(strpos($fullUrl, "register=EmailTaken") == true){
		print "<p class='errorMsg'>**Email is already taken.</p>";
	}	
	
	if(strpos($fullUrl, "register=NotMatch") == true){
		print "<p class='errorMsg'>**Password doesnot match</p>";
	}



	 ?>




</body>
</html>
