<!DOCTYPE html>
<html>
	<head>
		<title>Form Received</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>

	<body>
		<?php
			$name	= $_REQUEST['Name'];
			if ( ($name==="")||(strlen($name) > 30) ) {
				echo "<p>Invalid Name!<BR>A name can have at maximum 30 characters!</p>";
				echo "<a href='lab6_1_4.html'>Go back</a>";
				die(-1);
			}
			
			$age	= $_REQUEST['Age'];
			if( ($age==="")||($age<0)||($age>120) ) {
				echo "<p>Invalid Age!<BR>Age have to be positive and it have to be lower or equal than 120!</p>";
				echo "<a href='lab6_1_4.html'>Go back</a>";
				die(-1);
			}
			
			
			if($age < 10)
				$title = "young boy";
			elseif ($age < 30)
				$title = "young friend";
			else
				$title = "gentleman";
			 
			echo "<p>Hello ".$title." ".$name.", how are you today?</p>";
		?>
		<a href="lab6_1_4.html">Go back</a>	
	</body>
</html>
