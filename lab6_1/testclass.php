<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>lab6.1.1</title>
		<script>
			function reset() {
				cell = document.getElementById("textbox");
				cell.value = "";
			}
		</script>
	</head>
	
	<body>
		<form method="get" action="http://localhost/testing/authentication.php">
		<!-- <form method="get" action="http://localhost/lab6_1/lab6_1_1.php"> --> 
			<p> Write a text string: <input type="text" id="textbox" name="textbox"> </p>
			<input type="submit" value="Send">
			<input type="button" value="Reset" onclick="javascript: reset();">
		</form>
	</body>
</html>