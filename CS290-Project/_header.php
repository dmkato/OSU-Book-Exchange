<?php 
ini_set('session.save_path',realpath(dirname($SERVER['DOCUMENT_ROOT']).'./session'));
session_start(); 


function checkAuth($doRedirect) {
	if (isset($_SESSION["uid"]) && $_SESSION["uid"] != "") return $_SESSION["uid"];

	 $pageURL = 'http';
	 if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
	 }
    
    //Problematic for logout
	$ticket = isset($_REQUEST["ticket"]) ? $_REQUEST["ticket"] : "";

	if ($ticket != "") {
		$url = "https://login.oregonstate.edu/cas/serviceValidate?ticket=".$ticket."&service=".$pageURL;
		$html = file_get_contents($url);
		$pattern = '/\\<cas\\:user\\>([a-zA-Z0-9]+)\\<\\/cas\\:user\\>/';
		preg_match($pattern, $html, $matches);
		if ($matches && count($matches) > 1) {
			$uid = $matches[1];
			$_SESSION["uid"] = $uid;
			return $uid;
		} 
	} else if ($doRedirect) {
		$url = "https://login.oregonstate.edu/cas/login?service=".$pageURL;
		echo "<script>location.replace('" . $url . "');</script>";
	} 
	return "";
}


?>

<html><head>
	<title><?php echo $headerTitle; ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
</head>
<body class="container">
	<header>
		<h1>Text Book Site</h1>
	</header>
	<nav>
		<ul class="nav nav-tabs" role="tablist">
		<li class="<?php echo $homeNav?>"><a href="./home">Home</a></li> 
		<li class="<?php echo $loginNav?>"><a href="./login.php">Login</a></li>    
		<li class="<?php echo $dataEntryNav?>"><a href="./dataEntry">Post</a></li>
		<li class="<?php echo $dataDisplayNav?>"><a href="./dataDisplay">Recent Posts</a></li>
		<li class="<?php echo $coolFeatureNav?>"><a href="./coolFeature">Cool Feature</a></li> 
		</ul>
	</nav>
<main>
	
<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'floresc-db';
	$dbuser = 'floresc-db';
	$dbpass = 'q5mePB5iIGP9mFwo';
		
	//Connect
	$mysqli = new mysqli($dbhost, $dbname, $dbpass, $dbuser);
			
	//Check 
	if ($mysqli->connect_error) {
		echo "Cannot connect to database.\n";
	}
    
    //Display errors
    ini_set('display_errors', 'On');
?>


