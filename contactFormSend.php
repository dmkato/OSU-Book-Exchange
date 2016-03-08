<?php
    $headerTitle = "The Oregon State Book Exchange || Contact Seller";
    $dataEntryNav = "active";
    ?>
<?php include("_header.php");?>
<?php
    if (checkAuth(true) != "") {
        ?>

<h3>Contact Seller</h3>

<form method="post" action="contactFormRecieve.php">
    <div class="form-group"><label>First Name: </label>
        <input type="text" class="form-control" name="firstName"></div>
    <div class="form-group"><label>Last Name:</label>
        <input type="text" class="form-control" name="lastName"></div>
    <div class="form-group"><label>Email:</label>
        <input type="text" class="form-control" name="emai"></div>
    <div class="form-group"><label>Message</label>
        <textarea type="text" class="form-control" name="message" rows="5" cols="30"></textarea></div>
    <div><input type="submit" class="btn btn-default"></div>
</form></br>

<?php
    } else {
        printf("Please log in", $mysqli->error);
    }
    ?>
<?php include("_footer.php");?>
