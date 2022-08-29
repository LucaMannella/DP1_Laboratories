<?php
	#setcookie("Country", "IT", 0, "/"); 	# expiration after closing the browser
	#setcookie("Country", "IT", time() + (86400 * 30), "/"); 	# expiration after 30 days
	setcookie("Country", "IT", mktime(23, 59, 59, 12, 31, 2010));	#passed expiration date
	#setcookie("Cookie_Name", "Cookie_Value", "Time_UNIX_Timestamp", "subdirectory");	#slash means all the website
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercise 6.2.1 - Page A</title>
	</head>
	<body>
		<h1>ITALIA!!!</h1>
		<p> Do you have already seen <a href="B.php">this</a> other page?!
		<br> And <a href="lab6_2_2.php">this</a> other page?! </p>
		<p><i><a href="http://lukeman.altervista.org">Go back to the Home</a></i></p>
	</body>
</html>