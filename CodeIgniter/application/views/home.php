<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Personal Blog</title>

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
							<li class="active"><a href="<?php echo site_url('home') ?>">Home</a></li>
							<li><a href="<?php echo site_url('about'); ?>">About</a></li>
							<li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
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

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><b>About Website</b></h3>
					</div>
					<div class="panel-body">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="<?php echo base_url('assets/'); ?>img/poltek.png" class="thumbnail">
								<img src="<?php echo base_url('assets/'); ?>img/poltek.png" alt="">
							</a>
						</div>
						<h4>
							<p>This website is made for Framework Programming course for the first project.</p>
							<br>
							<p>The first project is making a static website using <b>Code Igniter</b> and <b>Twitter Bootstrap</b>.</p>
						</h4>
					</div>
				</div>

					<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><b>About Code Igniter</b></h3>
					</div>
					<div class="panel-body">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="<?php echo base_url('assets/'); ?>img/codeigniter.jpg" class="thumbnail">
								<img src="<?php echo base_url('assets/'); ?>img/codeigniter.jpg" alt="">
							</a>
						</div>
						<h4>
							<p>
							&emsp;&emsp;CodeIgniter is loosely based on the popular model–view–controller (MVC) development pattern. While controller classes are a necessary part of development under CodeIgniter, models and views are optional. Codeigniter can be also modified to use Hierarchical Model View Controller (HMVC) which allows developers to maintain modular grouping of Controller, Models and View arranged in a sub-directory format.
							<br><br>
							&emsp;&emsp;CodeIgniter is most often noted for its speed when compared to other PHP frameworks. In a critical take on PHP frameworks in general, PHP creator Rasmus Lerdorf spoke at frOSCon in August 2008, noting that he liked CodeIgniter "because it is faster, lighter and the least like a framework."
							</p>
						</h4>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><b>About Twitter Bootstrap</b></h3>
					</div>
					<div class="panel-body">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="<?php echo base_url('assets/') ?>img/bootstrap.png" class="thumbnail">
								<img src="<?php echo base_url('assets/') ?>img/bootstrap.png" alt="">
							</a>
						</div>
						<h4>
							<p>
								&emsp;&emsp;Bootstrap is a free and open-source front-end web framework for designing websites and web applications. It contains HTML- and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions. Unlike many web frameworks, it concerns itself with front-end development only.
								<br><br>
								Bootstrap is the second most-starred project on GitHub, with more than 107,000 stars and 48,000 forks.
							</p>
						</h4>
					</div>
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