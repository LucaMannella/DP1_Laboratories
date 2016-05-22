<?php		
	if(count($_REQUEST)===0) {
		echo "<!DOCTYPE html><html><head><title>Error!</title></head>",
			"<body><p>Please before visit this page go ", 
			"<a href='lab6_2_4.html'>here</a> and enter your data!</p></body></html>";
		die();
	}
		
	$reqName = $_REQUEST['Name'];
	$reqSurname = $_REQUEST['Surname'];
	if(($reqName==="")||($reqSurname==="")) {
		echo "<!DOCTYPE html><html><head><title>Error!</title></head>",
			"<body><p>Do you have inserted an empty string?! <BR> Go ",
			"<a href='lab6_2_4.html'>here</a> and enter your data again, please!</p></body></html>";
		die();
	}
		
	if (!isset( $_COOKIE[$reqName."-".$reqSurname] )) {
		setcookie($reqName."-".$reqSurname, "visited", 0, "/");
		$firstVisit = true;
	}
	else
		$firstVisit = false;
?>

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
			if($firstVisit)
				echo "<p>It's the first time that you visit my page, uh?</p>";
			else
				echo "<p>Welcome back, dear <strong>$reqName $reqSurname</strong>, to my humble site.</p>";
		?>
		<p> This page have to contains a brief description of an argument that I like so I choose an almost unknow sport: "<strong>Ultimate</strong>"!<BR>
		Here I put the introduction of the Wikipedia's page in Italian; if you want more information about Ultimate you can click on the following Wikipedia's link!<br></p>
		
		<TABLE><TR>
			<TH><div id="links">
				<a href="https://en.wikipedia.org/wiki/Ultimate_(sport)">English Wikipedia Page</a><br><br>
				<a href="https://it.wikipedia.org/wiki/Ultimate_(sport)">Pagina Wikipedia Italiana</a>
			</div></TH>
			<TH><img alt="A player rushes to catch the frisbee" style="display:inline;" 
					src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Rooke_bid.jpg/300px-Rooke_bid.jpg">
			</TH>
		</TABLE>
		
		<p>L'ultimate è uno sport di squadra giocato con il frisbee (un disco di plastica del peso di 175 g). Scopo del gioco è segnare punti passando il disco all'interno dell'area di meta avversaria. I giocatori non possono muoversi, se non sul proprio piede perno, mentre sono in possesso del disco.</p>
		<p>L'ultimate è stato inventato alla fine degli anni sessanta nei campus americani. Si contraddistingue per lo Spirit of the Game (Spirito del Gioco) ed i principi del "fair play", infatti, a qualsiasi livello, anche durante i "World Championship" (Campionati del Mondo) è giocato senza l'ausilio di un arbitro. Tutte le contese vengono risolte sul campo dai giocatori in gioco.</p>
		<p>Originariamente chiamato "Ultimate Frisbee", è ora chiamato semplicemente "Ultimate" perché il nome Frisbee è un marchio registrato dalla Wham-O.</p>
		<a href="lab6_2_4.html">Go back</a>	
	</body>
</html>
