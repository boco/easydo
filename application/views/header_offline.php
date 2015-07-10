<html>
	<head>
		<!-- Website Title & Description for Search Engine purposes -->
		<title>EasyDo</title>
		<link href="/images/favicon2.ico" rel="icon" type="image/x-icon" />
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="/includes/css/styles.css" rel="stylesheet">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="/includes/js/modernizr-2.6.2.min.js"></script>
		
	</head>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			
			<div class="navbar-header">
				<!-- Meni za male ekrane (3 èrtice)-->
				<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<!-- Logo - drugaačna preusmeritev če si online ali ne-->
				<a class="navbar-brand" href="/"><img src="/images/logo.png" height="60" width="108" alt="Your logo"></a>
			</div>
			
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<?php echo anchor('index', 'Home'); ?>
					</li>
					
					<li>
						<!--<a href="#">About us</a>-->
						<?php echo anchor('about_us_offline', 'About us'); ?>
					</li>
					
					<li>
						<!--<a href="#">Contact</a>-->
						<?php echo anchor('contact_offline', 'Contact'); ?>
					</li>

				</ul>

				<div class="nav navbar-nav navbar-right login hidden-xs">
					<!--<a class="btn btn-success" href="#">Sign up</a>
					<a class="btn btn-primary" href="#">Login</a>-->
					<?php echo anchor('sign_up', 'Sign up', 'class="btn btn-success"'); ?>
					<?php echo anchor('login', 'Login', 'class="btn btn-primary"'); ?>
				</div>
				
				<!-- Vidno samo na majhnih napravah < 768px -->
				<div class="well well-small visible-xs">
					<!--<a class="btn btn-success btn-block" href="#">Sign up</a>
					<a class="btn btn-primary btn-block" href="#">Login</a>-->
					<?php echo anchor('sign_up', 'Sign up', 'class="btn btn-success btn-block"'); ?>
					<?php echo anchor('login', 'Login', 'class="btn btn-primary  btn-block"'); ?>
				</div>
					
			</div>
			
		</div>
	</nav>
</html>