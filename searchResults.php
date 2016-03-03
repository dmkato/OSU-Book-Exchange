<?php
if(!isset($_POST["keyword"])){
	header("Location:dataDisplay.php");
}
$headerTitle = "Textbook Site || Recent Posts";
$dataDisplayNav = "active";	
?>
<?php include("_header.php");?>
	<h3>Found:</h3>
	<form action="searchResults.php" method="post">
	<div>
			<button type="submit" class="btn btn-default">Back To Library</button>
	</div>
	</form>

<?php
//Create Table Head
echo "<table class='table'>";
echo "<thead>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Posted On</th>";
echo "<th>Textbook Title</th>";
echo "<th>Textbook Author</th>";
echo "<th>ISBN</th>";
echo "<th>CRN</th>";
echo "<th>Location</th>";
echo "<th>userName</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

//Fill Table With Contents
if($result=mysqli_query($mysqli,"SELECT * FROM tbList WHERE tbTitle LIKE '%".$_POST["keyword"]."%' or tbAuthor like '%".$_POST["keyword"]."%' or crn like '%".$_POST["keyword"]."%' ")){
	while($obj = $result->fetch_object()){
		echo "<tr>";
		echo "<td>".htmlspecialchars($obj->id)."</td>";
		echo "<td>".htmlspecialchars($obj->date)."</td>";
		echo "<td>".htmlspecialchars($obj->tbTitle)."</td>";
		echo "<td>".htmlspecialchars($obj->tbAuthor)."</td>";
		echo "<td>".htmlspecialchars($obj->isbn)."</td>";
		echo "<td>".htmlspecialchars($obj->crn)."</td>";
		echo "<td>".htmlspecialchars($obj->location)."</td>";
		echo "<td>".htmlspecialchars($obj->userName)."</td>";
		echo "</tr>";
	}
	$result->close();
}
echo "</table>";
?>	

