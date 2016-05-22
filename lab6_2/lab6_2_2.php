<?php
	function printAssociativeArray($array) 
	{
		foreach ($array as $key => $value) {
			echo "<TR><TD>", $key, "</TD><TD>", $value, "</TD></TR>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercise 6.2.2</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>
	<body>
		<?php 
			if(!isset($_COOKIE))
				echo "<p>You do not have a cookies!<br>",
					"You can go <a href='A.php'>here</a> and set one!</p>";
			else {
				echo "<TABLE id='tabella'><TR><TH> Cookie Name </TH><TH> Value </TH></TR>";
				printAssociativeArray($_COOKIE);
				echo "</TABLE><BR>";
				
			}
		?>
		<p>For removing the cookie of the exercise 6.2.1 click <a href="lab6_2_3.php">here</a>.</p>
	</body>
</html>