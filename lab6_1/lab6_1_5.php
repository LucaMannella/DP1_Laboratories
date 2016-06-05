<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Form Received</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>

	<body>
		<?php
			$op1 = $_REQUEST['operand1'];
			$op2 = $_REQUEST['operand2'];
			$operation = $_REQUEST['operation'];
			
			if( !is_numeric($op1)) {
			//if( ($op1==="") || (is_nan($op1)) || (is_null($op1)) ) {
				echo "<p>The first operand is not a valid number!</p>";
				echo "<a href='http://localhost/lab6_1/lab6_1_5.html'>Go back</a>";
				die(-1);
			}	
			if( !is_numeric($op2)) {
			//if( ($op2==="") || (is_nan($op2)) || (is_null($op2)) ) {
				echo "<p>The second operand is not a valid number!</p>";
				echo "<a href='http://localhost/lab6_1/lab6_1_5.html'>Go back</a>";
				die(-1);
			}
			
			switch ($operation) {
				case "+":
					$result = $op1 + $op2;
					break;
					 
				case "−":
					$result = $op1 - $op2;
					break;
				  
				case "×":
					$result = $op1 * $op2;
					break;
				  
				case "÷":
					$result = $op1 / $op2;
					break;
				default:
					$result = 0;
					echo "<p>Operation not recognized!<br><br><a href='http://localhost/lab6_1/lab6_1_5.html'>Go back</a></p>";
					die(-1); 
			}
			echo "<h2>The result of the operation is = ".$result."</h2>";
		?>
		<a href="lab6_1_5.html">Go back</a>	
	</body>
</html>
