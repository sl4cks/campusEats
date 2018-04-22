<?php
	
	$formID = $_POST['orderNumber'];
	$problemDescription = $_POST['problemdescription'];
	
	$db_host = 'campuseatsdb.cbbdidcdihbq.us-east-1.rds.amazonaws.com'; //server name
	$db_username = 'campuseats';
	$db_password = 'campuseats1';
	$db_name = 'campuseats';
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
	}
	
	$sql = 'SELECT * FROM ProblemReportingDatabase';
	$query = mysqli_query($conn, $sql);
	
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}
	
	$resultcount = mysql_numrows($sqlsearch);

	if ($resultcount > 0) {
		$formID = rand();
	}
	
	mysql_query("INSERT INTO 'ProblemReportingDatabase' ('formID', 'problemDescription') 
                               VALUES ('$formID', '$problemDescription')") 
    or die(mysql_error());  
		
?>