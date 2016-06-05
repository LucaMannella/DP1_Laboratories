<!DOCTYPE html>
<html>
	<head>
    	<meta charset="UTF-8">
		<title>Confirm your purchase</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>

	<body>
		<?php		
			if(count($_REQUEST)===0) {
				echo "<p>Please before visit this page go ", 
					"<a href='lab6_2_7.php'>here</a> and enter your data!</p>";
				die();
			}
			
			$cd = $_REQUEST['cd'];
			$dvd = $_REQUEST['dvd'];
			$sd = $_REQUEST['sd'];
			$usb = $_REQUEST['usb'];
			
			if( (!is_numeric($cd))||(!is_numeric($dvd))||(!is_numeric($sd))||(!is_numeric($usb)) ) {
				echo "<p>The fields can contain only numbers!<BR> Go ",
				"<a href='lab6_2_7.php'>here</a> and enter your data again, please!</p>";
				die();
			}
			
			$prizeDvd = $dvd*2;		$prizeSd = $sd*3;	$prizeUsb = $usb*5;
			$tot = $cd + $prizeDvd + $prizeSd + $prizeUsb;
		
			echo "<p> Your order contains:";
			echo "<UL><LI> $cd Compact Disk: $cd €</LI>";
			echo "<LI> $dvd Digital Versatile Disk: $prizeDvd €</LI>";
			echo "<LI> $sd Secure Digital: $prizeSd €</LI>";
			echo "<LI> $usb Universal Serial Bus Drive: $prizeUsb €</LI></UL>";
			echo "The overall total is = $tot,00 €</p>";
			echo "<p><strong>Your order was confirmed!</strong><BR>",
				"You will receive your goods as soon as possible! Thank you very much for choosing us!</p>"
		?>
		
		<p>Do you want to buy more? <a href="lab6_2_7.php">Go back</a> and choose whatever you want!</p>
		
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
<?php
	//delete all cookies: set the expiration date to one hour ago
  	setcookie('cd', "0", time() - 3600);
	setcookie('dvd',"0", time() - 3600);
	setcookie('sd', "0", time() - 3600);
	setcookie('usb',"0", time() - 3600);
?>