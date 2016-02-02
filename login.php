<?php 
	$headerTitle = "Textbook Site || Login"; 
	$loginNav = "active";
?>
<?php include("_header.php");?>
<?php 
	$onidid = checkAuth(true)
		
	//Check For Onid ID in SQL to Retrieve account info
	
	?>
	<h3>Login</h3></br>

	<div class="panel panel-default"><div class="panel-body">You're Logged in as <?php echo "$onidid"; ?></div></div>

<?php include("_footer.php");?>