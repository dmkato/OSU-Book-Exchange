<?php 
	$headerTitle = "The Oregon State Book Exchange || Login"; 
	$loginNav = "active";
?>
<?php include("_header.php");?>
<?php $uid = checkAuth(true);?>                       <!-- Print SESSION vars: print_r($_SESSION) -->

	<h3>Login</h3></br>
	<div class="panel panel-default"><div class="panel-body">
        <p>You're Logged in as <?php echo "$uid"; ?></p>
        <p><a href="logout.php" role="button" class="btn btn-default">logout?</a></p>
    </div></div>

<?php include("_footer.php");?>