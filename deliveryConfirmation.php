<!DOCTYPE html>
<?php
	$db_host = 'campuseatsdb.cbbdidcdihbq.us-east-1.rds.amazonaws.com'; //server name
	$db_user = 'campuseats';
	$db_pass = 'campuseats1';
	$db_name = 'campuseats';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());
	}

	$sql = 'SELECT * FROM FormsDatabase';
	$query = mysqli_query($conn, $sql);

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
	}
?>
<html>
<head>
	<title>Campus Eats - Delivery Confirmation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="campuseats.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:700" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    	<span class="icon-bar"></span>
			    </button>
				<a class="navbar-brand" href="index.php"></span>  Campus Eats</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar">
					<li><a href="about.php">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="problemReporting.php">Report Problem</a></li>
					<li><a href="afterLogout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
    <div class="jumbotron">
			<div class="text-center">
      	<h1>Delivery Confirmed!</h1>
    	</div>
		</div>
  </div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
