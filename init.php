<?php include '_header.php';?>

<?php
	//Delete table
	$mysqli->query("drop table tbList");

	//Create table
	if (!$mysqli->query("create table tbList(id integer, tbTitle varchar(64), tbAuthor varchar(64), isbn integer, crn integer, primary key(id))")){
		printf("Failed");
	}
		
	//Insert team mebmber names
	$mysqli->query("insert into tbList(id, tbTitle, tbAuthor, isbn, crn) values(1, 'Test Title', 'Test Author', 123456789, 54321)");

	printf("initialized");
?>

