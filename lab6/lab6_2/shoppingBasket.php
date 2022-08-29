<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Basket</title>
        <meta charset="UTF-8">
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>

	<body>
		<?php		
			if(count($_REQUEST)===0) {
				if( (!isset($_COOKIE['cd'])) || (!isset($_COOKIE['dvd'])) || (!isset($_COOKIE['sd'])) || (!isset($_COOKIE['usb'])) ){
					echo "<p>Please before visit this page go ",
						"<a href='lab6_2_7.php'>here</a> and enter your data!</p>";
					die();
				}
				else {
					$cd = $_COOKIE['cd'];
					$dvd = $_COOKIE['dvd'];
					$sd = $_COOKIE['sd'];
					$usb = $_COOKIE['usb'];
				}
			}
			else {
				$cd = $_REQUEST['cd'];
				$dvd = $_REQUEST['dvd'];
				$sd = $_REQUEST['sd'];
				$usb = $_REQUEST['usb'];
			}
			
			if( (!is_numeric($cd))||(!is_numeric($dvd))||(!is_numeric($sd))||(!is_numeric($usb)) ) {
				echo "<p>The fields can contain only numbers!<BR> Please, go ",
				"<a href='lab6_2_7.php'>here</a> and enter your data again.</p>";
				die();
			}
				
			setcookie("cd",	$cd,	0, "/");	setcookie("dvd", $dvd,	0, "/");
			setcookie("sd", $sd,	0, "/");	setcookie("usb", $usb,	0, "/");
			$prizeDvd = $dvd*2;		$prizeSd = $sd*3;	$prizeUsb = $usb*5;
			$tot = $cd + $prizeDvd + $prizeSd + $prizeUsb;
		?> 
		
		<form id="MyForm" method="get" action="confirm.php">
			<p>Do some mistakes? <a href="lab6_2_7.php">Go back</a> and modify your order.</p>
			<p> Your order contains: </p>
			<?php 
				echo "<UL><LI>",
				"<input type='text' id='cd' name='cd' size='5' style='text-align: right;' value='$cd'>",
		    	" Compact Disk </LI>",
				"<LI>",
					"<input type='text' id='dvd' name='dvd' size='5' style='text-align: right;' value='$dvd'>",
				" Digital Versatile Disk </LI>",
				"<LI>", 
					"<input type='text' id='sd' name='sd' size='5' style='text-align: right;' value='$sd'>",
				" Secure Digital </LI>",
				"<LI>",
					"<input type='text' id='usb' name='usb' size='5' style='text-align: right;' value='$usb'>",
				" Universal Serial Bus Drive </LI>",
				"</UL>", 
				"<p>The overall total is = $tot,00 €</p>"; 
			?>
			<div id="Buttons" style="display: inline;">
				<input type="submit" value="Buy" style="width: 100px;">
				<input type="button" value="Update" style="width: 100px;" onclick="javascript: updateForm();">
				<p>If you change something in this page, it is strongly recommended to update before buying! </p>
			</div>
		</form>
		
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
		
		<script type="text/javascript">
		    function updateForm() {
			    form = document.getElementById("MyForm");
			    form.action = "shoppingBasket.php";
			    window.alert("Your data will been update!");
				form.submit();
				return true;
      		}
      	</script>
	</body>
</html>
