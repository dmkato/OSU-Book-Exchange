<?php include("_header.php");?>

<h3>Saving your submission...</h3>

<?php

if ($stmt = $mysqli->prepare("insert into tbList(id,tbTitle,tbAuthor,isbn,crn) values(?,?,?,?,?)")) {
    $id = $_REQUEST["id"];
    $tbTitle = $_REQUEST["tbTitle"];
    $tbAuthor = $_REQUEST["tbAuthor"];
    $isbn = $_REQUEST["isbn"];
    $crn = $_REQUEST["crn"];

    /* bind parameters to prepared statement */
    $stmt->bind_param("issii", $id, $tbTitle, $tbAuthor, $isbn, $crn);
    $stmt->execute();

  $stmt->close();
} else {
  printf("Error: %s\n", $mysqli->error);
}

?>

<div class="panel panel-default"><div class="panel-body"><a href="./dataEntry.php">Do another...</a></div></div>

<div class="panel panel-default"><div class="panel-body"><a href="./dataDisplay.php">View results...</a></div></div>


<?php include("_footer.php");?>