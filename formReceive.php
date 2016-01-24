<?php include("_header.php");?>

<h1>Saving your submission...</h1>

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

<p><a href="./dataEntry.php">Do another...</a></p>

<p><a href="./dataDisplay.php">View results...</a></p>


<?php include("_footer.php");?>