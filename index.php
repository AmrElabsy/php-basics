<?php
	$pageName = "Home";
	session_start();

	if (isset($_POST['logout']))
	{
		session_unset();
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

				<form action="index.php" method="post">
					<input type="submit" name="logout" value="logout">
				</form>

			</div>
		</body>
	</html>