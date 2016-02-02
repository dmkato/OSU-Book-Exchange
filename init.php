<?php include '_header.php';?>

<!-- tbList table-->
<?php
	//Delete table
	$mysqli->query("drop table tbList");

	//Create table
	if (!$mysqli->query("create table tbList(id integer, tbTitle varchar(64), tbAuthor varchar(64), isbn integer, crn integer, userName varchar(64), primary key(id))")){
		printf("Failed");
	}

	//Insert test names
	$mysqli->query("insert into tbList(id, tbTitle, tbAuthor, isbn, crn, userName) values(1, 'Test Title1', 'Test Author', 123456789, 54321, 'Beep')");
	$mysqli->query("insert into tbList(id, tbTitle, tbAuthor, isbn, crn, userName) values(2, 'Calculus for losers', 'Professor Dumbledoor', 123456789, 54321, 'Bop')");
	$mysqli->query("insert into tbList(id, tbTitle, tbAuthor, isbn, crn, userName) values(3, 'Ween', '400', 70, 54321, 'Boop')");
	$mysqli->query("insert into tbList(id, tbTitle, tbAuthor, isbn, crn, userName) values(4, 'Test Title3', 'Test Arthor', 123456789, 54321, 'Beep')");
	
	printf("initialized tblist ");
?>

<!-- userList table-->
<?php
	//Delete table
	$mysqli->query("drop table userList");

	//Create table
	if (!$mysqli->query("create table userList(id integer, userName varchar(64), password varchar(64), primary key(id,userName))")){
		printf("Failed ");
	}
		
	//Insert test name
	$mysqli->query("insert into userList(id, userName, password) values(1, 'Beep', 'Test Password')");
	$mysqli->query("insert into userList(id, userName, password) values(1, 'Boop', 'Test Password')");
	$mysqli->query("insert into userList(id, userName, password) values(1, 'Bop', 'Test Password')");

	printf("initialized userList ");
?>
