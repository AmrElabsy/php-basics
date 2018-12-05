<?php
	function active($x)
	{
		global $pageName;
		if ($x == $pageName)
		{
			echo 'class="active"';
		}
	}
?>

	<nav>
		<ul>
			<li><a href="index.php" <?php active("Home")?>>Home</a></li>
			<li><a href="Buy&Sell.php" <?php active("Buy & Sell")?>>Buy & Sell</a></li>
			<li><a href="Profile.php" <?php active("Profile")?>>Profile</a></li>
			<li><a href="SignUpIn.php" <?php active("SignUp/In")?>>Sign Up/In</a></li>

		</ul>
	</nav>