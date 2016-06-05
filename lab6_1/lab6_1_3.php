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
		<title>Form Received</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>
	
	<body>
	<a href="lab6_1_3.html">Go back</a><br>
		<TABLE id='tabella'>
		<TR><TH> Input Field </TH><TH> Value </TH></TR>
		<?php 
			printAssociativeArray($_REQUEST);
			echo "<TR><TD><strong> Server Field </strong></TD><TD><strong> Value </strong></TD></TR>";
			printAssociativeArray($_SERVER);
		?>	
		</TABLE>
	</body>
</html>