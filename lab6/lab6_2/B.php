<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercise 6.2.1 - Page B</title>
	</head>
	<body>
		<?php 
			if(!isset($_COOKIE['Country']))
				echo "<p>You do not have a cookie! I don't know where are you from!<br>",
					"Please go <a href='A.php'>here</a> and set them!<br>",
					"<a href='lab6_2_3.php'>This</a> page probably does not set them!</p>";
			else {
				echo "<p>Oh! You come from <strong>", $_COOKIE['Country'], "</strong>, nice place!<br>",
					"If you want to set again your cookie go <a href='A.php'>here</a>!<br>",
					"If you want to try to remove your cookie go <a href='lab6_2_3.php'>here</a>!</p>";
			}
		?>
	</body>
</html>