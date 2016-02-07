<?php 
	$headerTitle = "Textbook Site || Login"; 
	$loginNav = "active";
?>
<?php include("_header.php");?>
<?php 
    $onidid = checkAuth(true);
		
	//Check For Onid ID in SQL to Retrieve account info
	
	?>
	<h3>Login</h3></br>

	<div class="panel panel-default"><div class="panel-body">
        <p>You're Logged in as <?php echo "$onidid"; ?></p>

        <p><button onclick="location.href = 'logout.php';" type="button" class="btn btn-default">logout?</button></p>

        <!-- find out how to 'On Click' in javascript to add 'active' class on press -->
    </div></div>

<?php include("_footer.php");?>