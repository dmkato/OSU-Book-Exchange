<?php $headerTitle = "The Oregon State Book Exchange || Textbook Recieved!"; ?>
<?php include("_header.php");?>
<?php
    $uid = checkAuth(true);
    
    if ($stmt = $mysqli->prepare("insert into tbList(tbTitle,tbAuthor,isbn,crn,userName,date,location) values(?,?,?,?,?,?,?)")) {
        
        //Set Vars
        $tbTitle = $_REQUEST["tbTitle"];
        $tbAuthor = $_REQUEST["tbAuthor"];
        $isbn = $_REQUEST["isbn"];
        $crn = $_REQUEST["crn"];
        $date = date("m/d");
        $location = $_REQUEST["location"];
        
        /* Bind parameters to prepared statement */
        $stmt->bind_param("ssiisss", $tbTitle, $tbAuthor, $isbn, $crn, $uid, $date, $location);
        $stmt->execute();
        
        $stmt->close();
    } else {
        printf("Error: %s\n", $mysqli->error);
        
        //    //Create html page for new listing
        //    $siteId = date("m_d_H-i-s");
        //    $newFile = fopen("listing$date", "w");
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
