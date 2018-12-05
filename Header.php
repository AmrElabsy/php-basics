<?php

?>


		<header>
			<a href="index.php">
				<img src="Images/alogo.png">
				<h1>Amr El-Absy<br><span>A Web Designer & Developer</span></h1> 
			</a>
			<a href="profile.php">
				<div>
					<?php if (isset($_SESSION['imgDest'])) {
						  	echo "<img src='" . $_SESSION['imgDest'] . "'>";} ?>
					<?php if (isset($_SESSION['name'])) {
							echo "<span class='user'>" . $_SESSION['name'] . "</span>";
					} ?>
				</div>
			</a>
		</header>
