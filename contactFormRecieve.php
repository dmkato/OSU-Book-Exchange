<?php include("_header.php"); ?>

<?php
    if(isset($_POST['submit'])){
        $to = $_POST['sellerId']."@oregonstate.edu"; // Sellers ONID email
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $subject = "Someone is Interested in Buying One of Your Books!";   //Get users onid id
        $message = $first_name." ". $last_name." wrote the following:"."\n\n".$_POST['message'];
        
        mail($to,$subject,$message);
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
    }
    ?>

<h3>Message Sent!</h3></br>
<div class="panel panel-default"><div class="panel-body">
<p>Thank you for using the OSU Book Exchange!</p>
<p><a href="./dataDisplay.php" role="button" class="btn btn-info">View More Posts.</a></p>
</div></div>

<?php include("_footer.php"); ?>