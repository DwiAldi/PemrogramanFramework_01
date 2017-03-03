<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Personal Blog</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css">

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
							<li class="active"><a href="<?php echo site_url('about'); ?>">About</a></li>
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
					<!-- Page Header-->
					<div class="page-header">
					  <h1>Personal Information</h1>
					</div>
					
					<!-- Thumbnails -->
					<div class="row">
					  <div class="col-xs-6 col-md-3">
					    <a href="<?php echo base_url('assets/') ?>img/ncit.jpg" class="thumbnail">
					      <img src="<?php echo base_url('assets/') ?>img/ncit.jpg" alt="...">
					    </a>
					  </div>
						<p>
							<h2><u>Personal Information</u> :</h2>
							<br>
							<pre>Name		:  Muhammad Dwi Aldi Rizaldi</pre>
							<pre>Nationality 	: Indonesia</pre>
							<pre>Residence 	: Jalan Alpaka 49 Malang, Jawa Timur</pre>
							<pre>Education	: College student in Politeknik Negeri Malang</pre>
							<pre>Number ID	: 1541180140</pre>
							<pre>Class		: TI-2B</pre>
							<pre>Telephone Numb. : (+62)8563576959</pre>
							<pre>Hobby		: Nothing interesting so far, but usually play futsal and play some game</pre>

							
						</p>
					</div>
				</div>
			</div>
			
		

		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>