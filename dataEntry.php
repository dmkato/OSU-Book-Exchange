<?php
    $headerTitle = "The Oregon State Book Exchange || Post Textbook";
    $dataEntryNav = "active";
    ?>
<?php include("_header.php");?>
<?php
    if (checkAuth(true) != "") {
        ?>

<h3>Post Your Textbook</h3>

<form method="post" action="formReceive.php">
<div class="form-group"><label>Textbook Title:</label>
<input type="text" class="form-control" name="tbTitle"></div>
<div class="form-group"><label>Textbook Author:</label>
<input type="text" class="form-control" name="tbAuthor"></div>
<div class="form-group"><label>ISBN:</label>
<input type="text" class="form-control" name="isbn"></div>
<div class="form-group"><label>CRN:</label>
<input type="text" class="form-control" name="crn"></div>
<div class="form-group"><label>Location:</label>
<select class="form-control" name="location">
<option value="Bloss">Bloss</option>
<option value="Buxton">Buxton</option>
<option value="Callahan">Callahan</option>
<option value="Cauthorn">Cauthorn</option>
<option value="Finley">Finley</option>
<option value="Halsell">Halsell</option>
<option value="Hawley">Hawley</option>
<option value="ILLC">ILLC</option>
<option value="McNary">McNary</option>
<option value="Poling">Poling</option>
<option value="Sackett">Sackett</option>
<option value="Tebeau">Tebeau</option>
<option value="Weatherford">Weatherford</option>
<option value="West">West</option>
<option value="Wilson">Wilson</option>
<option value="NA">N/A</option>
</select></div><div>
<input type="submit" class="btn btn-default"></div>
</form></br>

<?php
    } else {
        printf("Please log in", $mysqli->error);
    }
    ?>
<?php include("_footer.php");?>
