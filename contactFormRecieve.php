<?php include("_header.php"); ?>

<?php
    if(isset($_POST['submit'])){
        $to = ""; // Sellers ONID email
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $subject = " is Interested in Buying One of Your Books!";   //Get users onid id
        $subject2 = "Message Sent!";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
        
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
    }
    ?>

<h3>Message Sent!</h3></br>
<div class="panel panel-default"><div class="panel-body">
<p>Thank you for using the OSU Book Exchange!</p>
<p><a href="./dataDisplay.php" role="button" class="btn btn-info">View results.</a></p>
</div></div>

<?php include("_footer.php"); ?>