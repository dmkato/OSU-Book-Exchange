<html><head>
	<title>$headerTitle</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
</head>
<body class="container">
	<header>
	<div class="page-header">
		<h1>Text Book Site</h1>
	</div>
	</header>
	<nav>
		<ul class="nav nav-tabs" role="tablist">
		<li class="$homeNav"><a href="./home">Home</a></li> 
		<li class="$loginNav"><a href="./login.php">Login</a></li>    
		<li class="$dataEntryNav"><a href="./dataEntry">Data Entry</a></li> 
		<li class="$dataDisplayNav"><a href="./dataDisplay">Data Display</a></li> 
		<li class="$coolFeatureNav"><a href="./coolFeature">Cool Feature</a></li> 
		</ul>
	</nav>
<main>
	
<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'katod-db';
	$dbuser = 'katod-db';
	$dbpass = '51NzgxrL5yIY2fdv';
		
	//Connect
	$mysqli = new mysqli($dbhost, $dbname, $dbpass, $dbuser);
			
	//Check 
	if ($mysqli->connect_error) {
		echo "Cannot connect to database.\n";
	}
?>
