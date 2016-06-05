<!DOCTYPE html>
<html>
	<head>
		<title>Number Received</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>
	
	<body>
		<?php
			$n = $_REQUEST['number'];
			
			if(!isset( $_REQUEST['number'] )) {
				echo "<p>There is no number set!</p>";
				die(-1);
			}
			
			if(( is_nan($n) )||( is_null($n) )||( $n==="" )||( $n<1 )) {
				document.write("<p>Input error!<BR>" +n+" is not a positive number!<BR></p>");
				die(-1);
			}
			
			echo "<h4>Entered number = ", $n;
			echo "<TABLE id='tabella'>";
			echo "<TR> <TH>Value</TH> <TH>Power of 2</TH> <TH>Power of 3</TH> </TR>";
			for($i=1; $i<=$n; $i++) {
				$quadrato = $i*$i;
				$cubo = $quadrato*$i;
				echo "<TR><TD>", $i, "</TD><TD>", $quadrato, "</TD><TD>", $cubo, "</TD></TR>";
			}
			echo "</TABLE><BR>";
		?>
		<a href="lab6_1_2_noJS_.html">Go back</a>
	</body>
</html>