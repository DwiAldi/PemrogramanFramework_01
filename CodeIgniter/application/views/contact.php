<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Personal Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Welcome !</h1>
				<p>This is my very very first website using Code Igniter, Feel free to look and enjoy your time !</p>
				<p>
					
				</p>
			</div>
		</div>
		<div class="container-fluid">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<p class="navbar-brand">Personal Blog</p>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url('home') ?>">Home</a></li>
							<li><a href="<?php echo site_url('about'); ?>">About</a></li>
							<li class="active"><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="glyphicon glyphicon-triangle-bottom" data-toggle="dropdown"></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url('home'); ?>">Home</a></li>
									<li><a href="<?php echo site_url('about') ?>">About</a></li>
									<li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
									<li><a href="https://plus.google.com/118372793080003126665" target="_blank">Visit Me</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>

			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title"><span class="glyphicon glyphicon-envelope"></span> Contact Me</h3>
				  </div>
				  	<div class="panel-body">
				  		<h4>Name</h4>
				    	<div class="input-group">
					  		<span class="input-group-addon" id="basic-addon1">@</span>
					  		<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
							</div>
						
						&nbsp
						<h4>Website (Optional)</h4>
					    <div class="input-group">
						  <span class="input-group-addon" id="basic-addon1">@</span>
						  <input type="text" class="form-control" placeholder="Website Address" aria-describedby="basic-addon1">
						</div>

						&nbsp
						<h4>Text</h4>
					    <textarea name="Isi" id="" cols="50" rows="10"></textarea>
<br><br>
					    &nbsp
					   <div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default" align="right">Send</button>
						</div>

				  </div>
			</div>

		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>