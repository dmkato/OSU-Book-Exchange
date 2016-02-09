<?php $headerTitle = "Textbook Site || Textbook Recieved!"; ?>
<?php include("_header.php");?>
<?php
    $uid = checkAuth(true);

if ($stmt = $mysqli->prepare("insert into tbList(tbTitle,tbAuthor,isbn,crn,userName,date) values(?,?,?,?,?,?)")) {
    
	//Set Vars
    $tbTitle = $_REQUEST["tbTitle"];
    $tbAuthor = $_REQUEST["tbAuthor"];
    $isbn = $_REQUEST["isbn"];
    $crn = $_REQUEST["crn"];
    $date = date("m/d");

    /* Bind parameters to prepared statement */
    $stmt->bind_param("ssiiss", $tbTitle, $tbAuthor, $isbn, $crn, $uid, $date);
    $stmt->execute();

  $stmt->close();
    } else {
  printf("Error: %s\n", $mysqli->error);
}
?>

<h3>Saving your submission...</h3></br>
<div class="panel panel-default"><div class="panel-body">
    <p>Thanks for posting your textbook to [Insert whatever we call this site here]!</p>
    <p>When someone wants to buy it, you'll recieve an email alert!</p>
    </br>
    <p><a href="./dataDisplay.php" role="button" class="btn btn-info">View results.</a></p>
</div></div>


<?php include("_footer.php");?>