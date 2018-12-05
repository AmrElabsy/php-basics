<?php
	$pageName = 'Buy & Sell';
	session_start();


	function goodSell($name, $img, $brief, $price, $content) {
		echo "<div class='good'>"
		.
		"<h4>" . $name . "</h4>"
		.
		"<img class='imggood' src='" . $img . "'>"
		.
		"<h5>" . $brief . "</h5>"
		.
		"<span'>" . $price . "</span>"
		.
			 "</div>";


		echo "<article>"
		.
		"<aside>"
		.
		"<h5 style='font-size=36px'>" .	$name . "</h5><br>"
		.
		"<img class='imggood2' src='" . $img . "'><br>"
		.
		"<span style='font-size=16px'>" . $content . "</span><br>"
		.
		"<span'>" . $price . "</span><br>"
		.
		"<Button>Buy</button><br>"
		.
		"<button>Close</button>"
		.
		"</aside>"
		.
		"</article>";
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


						<?php goodSell("Mobile01", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile02", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile03", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile04", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile05", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile06", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile07", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile08", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile09", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile10", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile11", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile12", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>
						
						<?php goodSell("Mobile13", "Images/alogo.png", "a good mobile to use", "50$", "This Mobile Phone is very good, easy to use, Low Price") ?>






			</div>
			<?php include "jsfooter.php" ?>
			<script type="text/javascript" src="JavaScript/JavaScriptbuysell.js"></script>
		</body>
	</html>