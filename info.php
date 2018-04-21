<?php
	
	$formID = rand();
	$orderName = $_POST['order'];
	$orderLocation = $_POST['location'];
	$delivLocation = $_POST['delivery'];
	$comments = $_POST['comments'];
	
	$db_host = '';
	$db_username = 'campuseats';
	$db_password = 'campuseats1';
	$db_name = 'campuseats';
	
	mysql_connect($db_host, $db_username, $db_password);
	mysql_select_db($db_name);
	
	$query = "SELECT * FORM 'campuseats'.'FormsDatabase' WHERE 'formID' = '$SformID'";
	$sqlsearch = mysql_query($query);
	$resultcount = mysql_numrows($sqlsearch);

	if ($resultcount > 0) {
		$formID = rand();
	}
	
	mysql_query("INSERT INTO 'campuseats'.'FormsDatabase' ('formID', 'orderName', 'orderLocation', 'delivLocation', 'comments') 
                               VALUES ('$formID', '$orderName', '$orderLocation', '$delivLocation', '$comments')") 
    or die(mysql_error());  
		
?>