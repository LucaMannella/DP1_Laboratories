<!DOCTYPE html>
<html>
	<head>
		<title>Text Received</title>
	</head>
	
	<body>
		<h1>Text received</h1>
		<?php
			if($_SERVER['REQUEST_METHOD'] === 'GET')
				$text	= $_GET['textbox'];
			else
				$text	= $_POST['textbox'];
			
			echo "<p>$text</p>";
		?>
		<a href="lab6_1_1.html">Go back</a>
	</body>
</html>