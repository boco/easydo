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

	<body>
	
		<div class="container" id="main">

			<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- Meni za male ekrane (3 črtice)-->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<!-- Logo - drugaačna preusmeritev če si online ali ne-->
					<a class="navbar-brand" href="/"><img src="/images/logo.png" height="60" width="108" alt="Your logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<?php echo anchor('main', 'Home'); ?>
							</li>

							<li>
								<!--<a href="#">About us</a>-->
								<?php echo anchor('my_easydo', 'My EasyDo'); ?>
							</li>
							
							<li>
								<!--<a href="#">About us</a>-->
								<?php echo anchor('about_us_online', 'About us'); ?>
							</li>
							
							<li>
								<!--<a href="#">Contact</a>-->
								<?php echo anchor('contact_online', 'Contact'); ?>
							</li>

						</ul>

						<div class="pull-right login hidden-sm">
							<?php echo anchor('main/logout', 'Log out', 'class="btn btn-danger"'); ?>
						</div>
						
						<!-- Vidno samo na majhnih napravah < 768px -->
						<div class="well well-small visible-sm">
							<?php echo anchor('main/logout', 'Log out', 'class="btn btn-danger"'); ?>
						</div>
							
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>