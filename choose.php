<!DOCTYPE html>
<html>
<head>
	<title>Campus Eats - Choose</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="campuseats.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:700" rel="stylesheet">
	<style>
		.btn-primary{
			font-size: 32px;
			padding-left: 50px;
	  	padding-right: 50px;
	  	padding-top: 50px;
	  	padding-bottom: 50px;
			margin-top: 5em;
			margin-bottom: 5em;
		}

		.btn-primary:active{
			background-color: #006940;
		  border-color: #015132;
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
					<li><a href="problemReporting.php">Report Problem</a></li>
					<li><a href="afterLogout.php">Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
			<div class="col-lg-6 col-sm-6 text-center"><a href="orderForm.php" type="button" class="btn btn-primary">Order</a></div>
			<div class="col-lg-6 col-sm-6 text-center"><a href="deliveryForm.php" type="button" class="btn btn-primary">Deliver</a></div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
