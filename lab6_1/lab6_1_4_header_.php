<?php 	
	function badRequest() {
		switch($_SERVER['REQUEST_METHOD']) {
	    	case 'GET':
	      		$url = "get.html";
	      		break;
	    	case 'POST':
	      		$url = "post.html";
	      		break;
	    }
	    
	    header('HTTP/1.1 307');
	    header('Location: ' . $url);
	    die;
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
		<?php
			$name	= $_REQUEST['Name'];
			if ( ($name==="")||(strlen($name) > 30) )
				badRequest();
			
			$age	= $_REQUEST['Age'];
			if( ($age==="")||($age<0)||($age>120) )
				badRequest();
			
			
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