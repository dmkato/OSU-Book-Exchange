<?php 
	$headerTitle = "Textbook Site || Submit Textbook"; 
	$dataEntryNav = "active";
?>
<?php include("_header.php");?>
<?php 
if (checkAuth(true) != "") {
	?>

	<h3>Data Entry</h3>
		
	<form method="post" action="formReceive.php">
		<div class="form-group"><label>Textbook Title:</label>
			<input type="text" class="form-control" name="tbName"></div>
		<div class="form-group"><label>Textbook Author:</label>
			<input type="text" class="form-control" name="tbAuthor"></div>
		<div class="form-group"><label>ISBN:</label>
			<input type="text" class="form-control" name="isbn"></div>
		<div class="form-group"><label>CRN:</label>
			<input type="text" class="form-control" name="crn"></div><div>
				
	<input type="submit" class="btn btn-default"></div>
</form></br>
<?php		
} else {
	printf("Error: %s\n", $mysqli->error);
}	
?>	
<?php include("_footer.php");?>