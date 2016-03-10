<?php
    $headerTitle = "The Oregon State Book Exchange || Recent Posts";
    $dataDisplayNav = "active";
    ?>
<?php include("_header.php");?>

<h3>Library</h3>
<form action="searchResults.php" method="post">
<div>
<input type="text" name="keyword" class="form-control" placeholder="Search" />
</div>
</form>
<?php
    //Create Table Head
    echo "<table class='table' id='postTable'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Date</th>";
    echo "<th>Post</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    //Fill Table With Contents
    if ($result = $mysqli->query("select tbTitle,tbAuthor,isbn,crn,date,location,userName from tbList ORDER BY id DESC LIMIT 30")) {
        while($obj = $result->fetch_object()){
            echo "<tr>";
            echo "<td>".htmlspecialchars($obj->date)."</td>";
            echo "<td><h2>".htmlspecialchars($obj->tbTitle)."</h2>";
            echo "<h4>".htmlspecialchars($obj->tbAuthor)."</h4>";
            echo "<p><span>ISBN: </span>".htmlspecialchars($obj->isbn)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<span>CRN: </span>".htmlspecialchars($obj->crn)."</p>";
            echo "<p><span>Location: </span>".htmlspecialchars($obj->location)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<form action='contactFormSend.php' method='post'>";
            echo "  <input type='hidden' name='sellerId' value='".$obj->userName."'/>";
            echo "<input type='submit' class='btn btn-default' value='Contact Seller'/>";
            echo "</form></p></td>";
            echo "</tr>";
        }
        $result->close();
    }
    echo "</table>";
    ?>
<button class="btn btn-info btn-block" onclick="showMorePosts()">Show More</button>
</br>

<?php include("_footer.php");?>
