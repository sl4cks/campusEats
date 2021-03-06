<!DOCTYPE html>
<html>
<head>
	<title>Campus Eats - Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="campuseats.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:700" rel="stylesheet">
	<script src="js/userAuth.js"></script>
	<style type="text/css">
		body{
			background: url(IMG_8993.JPG);
			height: 100%;
			background-attachment: fixed;
			background-position: center;
	 		background-repeat: no-repeat;
	 		background-size: cover;
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
					<li><a href="#signupmodal" data-toggle="modal" data-target="#signupmodal">Sign Up</a></li>
					<li><a href="#loginmodal" data-toggle="modal" data-target="#loginmodal">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="signupmodal" aria-hidden="true" id="signupmodal">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
        	<h4 class="modal-title" id="exampleModalLongTitle">Sign Up<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">&times;</span>
        	</button></h4>
      	</div>
      	<div class="modal-body">
        	<form action="afterSignUp.php" method="post">
							<div class="form-group">
									<label for="masonNetID">Net ID</label>
									<input type="text" name="netID" class="form-control" id="enterMasonNetID" placeholder="Enter your Mason NetID" maxlength="8" required>
							</div>
							<div class="form-group">
								<label for="createPassword">Password</label>
								<input type="password" name="password" class="form-control" id="createPassword" placeholder="Create a Password" maxlength="12" required>
							</div>
							<div>
								<input type="submit" id="submitform"></input>
							</div>
					</form>
      	</div>
    	</div>
  	</div>
	</div>

	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true" id="loginmodal">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
        	<h4 class="modal-title" id="exampleModalLongTitle">Log In<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">&times;</span>
        	</button></h4>
      	</div>
      	<div class="modal-body">
        	<form>
							<div class="form-group">
									<label for="masonNetID">Net ID</label>
									<input type="text" class="form-control" id="enterMasonNetID" placeholder="Enter your Mason NetID" maxlength="8" required>
							</div>
							<div class="form-group">
								<label for="createPassword">Password</label>
								<input type="password" class="form-control" id="enterPassword" placeholder="Enter Password" maxlength="12" required>
							</div>
							<div>
								<input type="submit" onclick="window.open('choose.php')" id="submitform" href="choose.php"></input>
							</div>
					</form>
      	</div>
    	</div>
  	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
