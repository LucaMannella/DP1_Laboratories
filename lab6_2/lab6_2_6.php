<?php ?>
<!DOCTYPE html>
<html lang="en">
	<!--
		Mannella Luca - s222325 - 14/06/2015
		Distributed Programming I (03MQPOV)
		EXERCISE 6.2.6
	-->
	<head>
		<meta charset="UTF-8">
		<title>Exercise 6.2.6</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">			
			function reset(){
				document.getElementById("cd").value = 0;
				document.getElementById("dvd").value = 0;
				document.getElementById("sd").value = 0;
				document.getElementById("usb").value = 0;
			}
		</script>
	</head>
	
	<body>
		<form method="get" action="resultsLab6_2_6.php">
			<table ID="tabella">
				<TR><TH> Product Name </TH><TH> Description </TH><TH> Prize </TH><TH> Quantity </TH></TR>
				<TR>
					<TD> CD </TD><TD> Digital optical disc data storage - 700 MB </TD><TD> 1 € </TD>
					<TD><input type="text" id="cd" name="cd" size="7" style="text-align: right;"
						value=<?php
	    							if( isset($_COOKIE["cd"]) ) 
	    								echo $_COOKIE["cd"];
	    							else echo 0; ?>>
		      	</TD></TR>
				<TR>
					<TD> DVD </TD><TD> Digital Versatile Disc - 4.7 GB </TD><TD> 2 € </TD>
					<TD><input type="text" id="dvd" name="dvd" size="7" style="text-align: right;"
						value=<?php
	    							if( isset($_COOKIE["dvd"]) ) 
	    								echo $_COOKIE["dvd"];
	    							else echo 0; ?>>
		      	</TD></TR>
				<TR> 
					<TD> SD Memory </TD><TD> Secure Digital Memory - 2 GB </TD><TD> 3 € </TD>
					<TD><input type="text" id="sd" name="sd" size="7" style="text-align: right;"
						value=<?php
	    							if( isset($_COOKIE["sd"]) ) 
	    								echo $_COOKIE["sd"];
	    							else echo 0; ?>>
		      	</TD></TR>
				<TR> 
					<TD> USB Memory </TD><TD>  Data storage device that includes flash memory - 4 GB </TD><TD> 5 € </TD>
					<TD><input type="text" id="usb" name="usb" size="7" style="text-align: right;"
						value=<?php
	    							if( isset($_COOKIE["usb"]) ) 
	    								echo $_COOKIE["usb"];
	    							else echo 0; ?>>
		      	</TD></TR>
			</table>
			<br>
			<div id="Buttons" style="display: inline;">
				<input type="submit" value="Get Total" style="width: 100px; position: relative; left: 10%;">
				<input type="button" value="Reset" onclick="javascript: reset();" style="width: 100px; position: relative; left: 10%;">
			</div>
		</form>
		<br>
		<!-- <div id="images">
			<img src="floppy_disk.jpg" alt="Floppy Disk" width="310" height="240" style="margin-top: 10px"/>
			<img src="cd.jpg" alt="CD-R" width="300" height="230" style="margin-top: 20px;"/>
			<img src="dvd.jpg" alt="DVD"  width="320" height="240" style="margin-top: 10px;"/>
		</div>
		
		<div ID="TotalCost" style="visibility: hidden;"> Total Cost: <input type="text" id="TotResult" size="7" style="text-align: right;" disabled> € </div>
		<BR><BR>   -->

		<footer>
			<TABLE ID="Outer" ><TR>
				<TH> <img src="http://security.polito.it/img/polito.gif" alt="PoliTo's Logo"> </TH>
				<TH><div>This website was developed by LM Production&reg;, all rights are reserved.</div>
					<TABLE ID="Inner" style="border-spacing: 10px;" > <TR>
						<TH><a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="CSS Valido!" /></a></TH>
						<TH><a href="https://it.linkedin.com/pub/luca-mannella/a1/859/9a5"> The author </a></TH>
						<TH><a href="mailto:luca.mannella@outlook.it?Subject=Information%20about%20website">Contact me</a></TH>
						<TH><a href="http://validator.w3.org/check?uri=referer"> <img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a></TH>
					</TR></TABLE>
				</TH>
			</TR></TABLE>
		</footer>
	</body>
</html>