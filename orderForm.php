<!DOCTYPE html>
<html>
<head>
	<title>Campus Eats - Order</title>
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
	.btn-primary .badge{
		color: #006940;
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
				<a class="navbar-brand" href="index.html"></span>  Campus Eats</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar">
					<li><a href="about.html">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="problemReporting.html">Report Problem</a></li>
					<li><a href="afterLogout.html">Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
    <div class="jumbotron">
			<form>
				<div>
					<button type="button" class="btn btn-primary pull-right">
  					Tokens <span id="tokenCount" class="badge badge-light">4</span>
					</button>
				</div>
			</form>
			<div class="text-center">
      	<h1>Order Form</h1>
			</div>
			<form action="/info.php" method="post">
	      <div class="form-group">
	      	<label for="orderName">Name</label>
	      	<input type="text" class="form-control" name="order" id="orderName" placeholder="What is the name on the order?" required>
	      </div>
	      <div class="form-group">
	      	<label for="orderLocation">Order Location</label>
	      	<input type="text" class="form-control" name="location" id="orderLocation" placeholder="Where did you order from?" required>
	      </div>
	      <div class="form-group">
	      	<label for="deliveryLocation">Delivery Location</label>
	      	<input type="text" class="form-control" name="delivery" id="deliveryLocation" placeholder="Where is this order being delivered?" required>
	      </div>
	      <div class="form-group">
	      	<label for="comments">Comments</label>
	      	<!-- <input type="text" class="form-control" id="comments" placeholder="Is there anything else the courier should know?"> -->
					<textarea class="form-control" name="comments" id="comments" maxlength="200" placeholder="Is there anything else the courier should know?" rows="3"></textarea>
	      </div>
				<div>
					<input type="submit" id="submitform"></input>
				</div>
		</form>
    </div>
		<?php

			$formID = rand();
			$orderName = $_POST['order'];
			$orderLocation = $_POST['location'];
			$delivLocation = $_POST['delivery'];
			$comments = $_POST['comments'];

			$db_host = 'campuseatsdb.cbbdidcdihbq.us-east-1.rds.amazonaws.com'; //server name
			$db_username = 'campuseats';
			$db_password = 'campuseats1';
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

			$resultcount = mysql_numrows($sqlsearch);

			if ($resultcount > 0) {
				$formID = rand();
			}

			mysql_query("INSERT INTO 'campuseats'.'FormsDatabase' ('formID', 'orderName', 'orderLocation', 'delivLocation', 'comments')
		                               VALUES ('$formID', '$orderName', '$orderLocation', '$delivLocation', '$comments')")
		    or die(mysql_error());

		?>
  </div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
