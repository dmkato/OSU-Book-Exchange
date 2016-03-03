<?php 	
$headerTitle = "Textbook Site || Recent Posts";
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
echo "<table class='table'>";
echo "<thead>";
echo "<tr>";
echo "<th>Date</th>";
echo "<th>Post</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

//Fill Table With Contents
if ($result = $mysqli->query("select tbTitle,tbAuthor,isbn,crn,userName,date,location from tbList")) {
	while($obj = $result->fetch_object()){
		echo "<tr>";
		echo "<td>".htmlspecialchars($obj->date)."</td>";
		echo "<td><h2>".htmlspecialchars($obj->tbTitle)."</h2>";
		echo "<h4>".htmlspecialchars($obj->tbAuthor)."</h4>";
		echo "<p><span>ISBN: </span>".htmlspecialchars($obj->isbn)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<span>CRN: </span>".htmlspecialchars($obj->crn)."</p>";
		echo "<p><span>Location: </span>".htmlspecialchars($obj->location)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<span>userName: </span>".htmlspecialchars($obj->userName)."</p></td>";
		echo "</tr>";
	}
	$result->close();
}
echo "</table>";
?>	

	<?php include("_footer.php");?>
