<?php
    $headerTitle = "The Oregon State Book Exchange || Account Info";
    $loginNav = "active";
    ?>
<?php include("_header.php");?>
<?php $uid = checkAuth(true);?>

<h3>Account Information</h3></br>
<div class="panel panel-default"><div class="panel-body">
<p>You're logged in as <?php echo "$uid"; ?></p>
<p><a href="logout.php" role="button" class="btn btn-default">logout?</a></p>
</div></div>

<?php include("_footer.php");?>