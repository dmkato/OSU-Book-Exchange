<?php $headerTitle = "Textbook Site || Textbook Recieved!"; ?>
<?php include("_header.php");?>

<h3>Saving your submission...</h3>

<?php
    $onidid = checkAuth(true);

if ($stmt = $mysqli->prepare("insert into tbList(tbTitle,tbAuthor,isbn,crn, userName) values(?,?,?,?,?)")) {
	//Set Vars
    $tbTitle = $_REQUEST["tbTitle"];
    $tbAuthor = $_REQUEST["tbAuthor"];
    $isbn = $_REQUEST["isbn"];
    $crn = $_REQUEST["crn"];

    /* Bind parameters to prepared statement */
    $stmt->bind_param("ssiis", $tbTitle, $tbAuthor, $isbn, $crn, $onidid);
    $stmt->execute();

  $stmt->close();
} else {
  printf("Error: %s\n", $mysqli->error);
}

?>

<div class="panel panel-default"><div class="panel-body"><a href="./dataEntry.php">Do another...</a></div></div>

<div class="panel panel-default"><div class="panel-body"><a href="./dataDisplay.php">View results...</a></div></div>


<?php include("_footer.php");?>