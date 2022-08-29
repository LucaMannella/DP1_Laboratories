<?php 
	if (!isset( $_COOKIE["access_number"] ))
	{
		$acc = 1;
		setcookie("access_number", 1, 0, "/");
	}
	else {
		$acc = $_COOKIE["access_number"];
		$acc++;
		setcookie("access_number", $acc, 0, "/");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>lab6.2.5 - Joke</title>
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="functions.js"></script>
	</head>

	<body>
		<?php if($acc < 3): ?>
			<p> This page have to contains a joke so I choose randomly this one from: <a href="http://barzellette.a-jokes.com/extracomunitari.htm">this site</a>!</p>
			<p> Un giornalista intervista Bossi: <BR>
			- Se Lei un domani diventasse il capo del governo, risolverebbe per primo il problema dei terroni o quello degli extracomunitari. <BR>
			- Quello degli extracomunitari. <BR>
			- ??? <BR>
			- Prima il dovere e poi il piacere.</p>
		<?php else: ?>
			<p> I'm sorry but you can't read joke anymore! :( </p>
		<?php endif ?>
			<input type="button" value="exit" onClick="location.href='ONE.html'">
	</body>
</html>
