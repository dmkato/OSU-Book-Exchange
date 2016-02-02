<?php 	
	$headerTitle = "Textbook Site || Available Books"; 
	$dataDisplayNav = "active";	
?>
<?php include("_header.php");?>
	<h3>Data Display</h3>
		
	<?php
		//Create Table Head
	echo "<table class='table'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Textbook Title</th>";
	echo "<th>Textbook Author</th>";
	echo "<th>ISBN</th>";
	echo "<th>CRN</th>";
	echo "<th>userName</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
		
		//Fill Table With Contents
		if ($result = $mysqli->query("select id,tbTitle,tbAuthor,isbn,crn,userName from tbList")) {
			while($obj = $result->fetch_object()){
				echo "<tr>";
				echo "<td>".htmlspecialchars($obj->id)."</td>";
				echo "<td>".htmlspecialchars($obj->tbTitle)."</td>";
				echo "<td>".htmlspecialchars($obj->tbAuthor)."</td>";
				echo "<td>".htmlspecialchars($obj->isbn)."</td>";
				echo "<td>".htmlspecialchars($obj->crn)."</td>";
				echo "<td>".htmlspecialchars($obj->userName)."</td>";
				echo "</tr>";
			}
			$result->close();
		}
		echo "</table>";
		?>	
	
	<?php include("_footer.php");?>
