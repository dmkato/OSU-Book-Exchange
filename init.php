<?php include '_header.php';?>

<!-- tbList table-->
<?php
	//Delete table
	$mysqli->query("drop table tbList");

	//Create table
	if (!$mysqli->query("create table tbList(id integer NOT NULL AUTO_INCRIMENT, tbTitle varchar(64), tbAuthor varchar(64), isbn integer, crn integer, userName varchar(64), primary key(id))")){
		printf("Failed ");
	}

	//Insert test names
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, userName) values('Test Title1', 'Test Author', 123456789, 54321, 'Beep')");
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, userName) values('Calculus for losers', 'Professor Dumbledoor', 123456789, 54321, 'Bop')");
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, userName) values('Ween', '400', 70, 54321, 'Boop')");
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, userName) values('Test Title3', 'Test Arthor', 123456789, 54321, 'Beep')");
	
	printf("initialized tblist ");
?>