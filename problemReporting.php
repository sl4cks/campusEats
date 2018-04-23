<!DOCTYPE html>
<?php

	$formID = $_POST['orderNumber'];
	$problemDescription = $_POST['problemdescription'];

	$db_host = 'campuseatsdb.cbbdidcdihbq.us-east-1.rds.amazonaws.com'; //server name
	$db_user = 'campuseats';
	$db_pass = 'campuseats1';
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

	$resultcount = mysqli_numrows($sqlsearch);

	if ($resultcount > 0) {
		$formID = rand();
	}

	mysqli_query($conn, "INSERT INTO ProblemReportingDatabase (formID, problemDescription)
                               VALUES ('$formID', '$problemDescription')")
    or die(mysqli_error($conn));
		$conn->close();
?>
<html>
<head>
	<title>Campus Eats - Problem Reporting</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="campuseats.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:700" rel="stylesheet">
	<style>
		#submitform{
			margin-top: 5px;
			margin-bottom: 5px;
		}
		.jumbotron{
			padding-bottom: 20px;
		}
	</style>
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
					<li><a href="index.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
    <div class="jumbotron">
      <h1>Report Problem</h1>
      <form>
      <div class="form-group">
        <label for="orderNumber">Order Number</label>
        <input type="text" class="form-control" id="orderNumber" placeholder="What is the number of the order you had a problem with?" maxlength="10" required></input>
      </div>
      <div class="form-group">
        <label for="description">Description of Problem</label>
				<textarea class="form-control" id="problemdescription" rows="3" placeholder="What was the problem with your order?" required></textarea>
      </div>
			<div>
				<input type="submit" id ="submitform"></input>
			</div>
		</form>
    </div>
  </div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
