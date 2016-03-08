<?php include '_header.php';?>

<!-- tbList table-->
<?php
	//Delete table
	$mysqli->query("drop table tbList");

	//Create table
	if (!$mysqli->query("create table tbList(id int auto_increment, tbTitle varchar(64), tbAuthor varchar(64), isbn int, crn int, date varchar(64), userName varchar(64),location varchar(64), primary key(id))")){
		printf("Failed ");
	}

	//Set and display time
    $time = date("m/d");    //date("m/d H:i") <- for time and date
    echo $time."    ";
    
    //Insert 1000 test Textbooks
    for ($x = 0; $x < 1000; $x++) {
        $mysqli->query("insert into tbList(tbTitle, tbAuthor, isbn, crn, date, userName, location) values('Title', 'Author', 10000 + $x, $x * 7, '$time', 'Beep', 'Bloss')");
    }
    
	printf("initialized tblist ");
?>