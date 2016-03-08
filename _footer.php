<!doctype html>
</main><footer>
<?php mysqli_close($mysqli);?>

<div class="panel panel-default"><div class="panel-body">
<?php echo "Updated: ".date("F j, Y");?>
&nbsp
<button class="btn btn-default"onclick="location.href='logout.php'">Logout</button>
</div></div>
</footer></body>