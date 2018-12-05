<?php
	$pageName = "Profile";
	session_start();

	if (isset($_FILES['image'])) {

	$img = $_FILES['image'];
	$imgName = $img['name'];
	$imgTmp = $img['tmp_name'];
	$imgNameNew = uniqid();
	$imgDest = 'uploads/' . $imgNameNew . ".png";
	move_uploaded_file($imgTmp, $imgDest);

	$_SESSION['img'] = $img;
	$_SESSION['imgName'] = $imgName;
	$_SESSION['imgTmp'] = $imgTmp;
	$_SESSION['imgNameNew'] = $imgNameNew;
	$_SESSION['imgDest'] = $imgDest;
	} 

	if (isset($_POST['name'])) {
		$_SESSION['name'] = $_POST['name'];
	}

	if (isset($_POST['email'])) {
		$_SESSION['email'] = $_POST['email'];
	}

	if (isset($_POST['country'])) {
		$_SESSION['country'] = $_POST['country'];
	}
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
						padding: 30px;
						position: absolute;
						width: 80%;
						background-color: #DDD">

				

				<?php if (isset($_SESSION['imgDest'])) {
					  echo "<img class='proimg' height=150px width=150px src='" . $_SESSION['imgDest'] . "'>";} ?>



				<?php if (isset($_SESSION['name'])) {
					echo "<h3>Your Name is: " . $_SESSION['name'] . "</h3><br>";
				} ?>

				<?php if (isset($_SESSION['email'])) {
					echo "<h3>Your Email Addresse is: " . $_SESSION['email'] . "</h3><br>";
				} ?>

				<?php if (isset($_SESSION['country'])) {
					echo "<h3>Your Country is: " . $_SESSION['country'] . "</h3><br>";
				} ?>
			</div>
			<?php include "jsfooter.php"?>
		</body>
	</html>