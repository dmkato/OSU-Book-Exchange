<?php include '_header.php';?>

<!-- tbList table-->
<?php
	//Delete table
	$mysqli->query("drop table tbList");

	//Create table
	if (!$mysqli->query("create table tbList(id int auto_increment, tbTitle varchar(64), tbAuthor varchar(64), isbn int, crn int, date varchar(64), userName varchar(64), primary key(id))")){
		printf("Failed ");
	}

//	//Insert test names
    $time = date("m/d");    //date("m/d H:i") <- for time and date
    echo $time."    ";
    
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, date, userName) values('Test Title1', 'Test Author', 123456789, 54321, '$time', 'Beep')");
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, date, userName) values('Calculus for losers', 'Professor Dumbledoor', 123453789, 54321, '$time', 'Bop')");
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, date, userName) values('Ween', '400', 70, 54320, '$time', 'Boop')");
	$mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, date, userName) values('Test Title3', 'Test Arthor', 123452789, 54621, '$time', 'Beep')");
	
	printf("initialized tblist ");
?>