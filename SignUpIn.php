<?php
	$pageName = "SignUp/In";
	session_start();


?>

<!DOCTYPE html>
	<html>
		<head>
			<?php include "head.php" ?>
		</head>
		<body>
			<?php include "header.php" ?>
			<?php include "navbar.php" ?>
			<div style="margin: 180px 10%;
						padding: 15px;
						position: absolute;
						width: 80%;
						background-color: #DDD">


			<div class="SU" id="SU">Sign Up</div>
			<div class="SI" id="SI">Sign In</div>
			<br><br>
			<form method="post" id="SignUp" enctype="multipart/form-data" action="Profile.php">
				<input required type="text"		name="name" placeholder="Enter Your User Name">
				<br>
				<input required type="email" 	name="email" placeholder="Enter Your Email Address">
				<br>
				<input required type="password"	name="pass" placeholder="Enter Your Password">
				<br>
				<input required type="password" name="repass" placeholder="Enter Your Password Again">
				<br>				
			    <input required type="file" 	name="image" id="image" value="Upload Your Photo" accept="image/*">
				<br>
				<select placeholder="Select Your Country" name="country">
					<option value="Egypt"		>	Egypt			</option>
					<option value="USA"			>	USA				</option>
					<option value="England"		>	England			</option>
					<option value="Sudan"		>	Sudan			</option>
					<option value="Qatar"		>	Qatar			</option>
					<option value="Saudi Arabia">	Saudi Arabia	</option>
					<option value="Algeria"		>	Algeria			</option>
					<option value="Moroco"		>	Moroco			</option>
					<option value="South Africa">	South Africa	</option>
					<option value="Canada"		>	Canada			</option>
				</select>
				<br>
				<input type="submit" value="Sign Up">
			</form>
			
			<form method="post" id="SignIn" style="display: none;" action="Profile.php">
				<input type="text" 		name="name" placeholder="Enter Your User Name" required>
				<input type="password" 	name="Pass" placeholder="Enter Your Password"  required>
				<input type="submit" value="Sign In">
			</form>
			
			</div>

			<?php include "jsfooter.php" ?>
			<script type="text/javascript" src="JavaScript/JavaScript.js"></script>
		</body>
	</html>