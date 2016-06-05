<!DOCTYPE html>
<html>
	<head>
		<title>Number Received</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>
	
	<body>	
		<?php
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				echo "It's impossible to have a result using the submit method 'POST'";
				die(-1);
			}
		?>
		<p> 
		<script type="text/javascript">
			var n = splitParams(window.location.search); 
			square_cube(n[0]);
		</script>
		</p>
		<a href="lab6_1_2.html">Go back</a>
	</body>
</html>