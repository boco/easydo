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

		<div id="wrap">
	
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					
					<div class="navbar-header">
						<!-- Meni za male ekrane (3 ertice)-->
						<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<!-- Logo - drugaačna preusmeritev če si online ali ne-->
						<a class="navbar-brand" href="/"><img src="/images/logo.png" height="60" width="90" alt="Your logo"></a>
					</div>
					
					<div class="navbar-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li>
								<?php echo anchor('main', 'Home'); ?>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">My EasyDo <strong class="caret"></strong></a>

								<ul class="dropdown-menu">
									<li>
										<?php echo anchor('my_profile', 'My Profile'); ?>
									</li>

									<li>
										<?php echo anchor('overview', 'Overview'); ?>
									</li>

									<li>
										<a href="#" data-toggle="modal" data-target="#addTaskModal">Add DoTask</a>
									</li>

									<li>
										<?php echo anchor('activity_chart', 'Activity Chart'); ?>
									</li>
								</ul>
							</li>
							
							<li class="active">
								<!--<a href="#">About us</a>-->
								<?php echo anchor('about_us_online', 'About us'); ?>
							</li>
							
							<li>
								<!--<a href="#">Contact</a>-->
								<?php echo anchor('contact_online', 'Contact'); ?>
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
		
			<div class="container" id="main">
				<div class="row about">
					<div class="col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
							<div class="well">
								<h2 class="text-center">About us</h2>
								<p>Like every busy person with a lot of daily’s activities, I look to keep things simple, fast and
								   I want to be focused in my life, that’s why I developed EasyDo. A simple, user friendly, easy to
								   use and effective application, that helps me plan and remember all the things I have to do so I
								   can be even efficient in my life.  As it helps me a lot, I decide to share it with you.</p><br/>
								<p>If you have any idea for improving it, you are welcome, just write us, under the
								<?php echo anchor('contact_offline', 'Contact') ?></p><br/>
							</div>

					</div>

				</div>
			</div>
		</div>
	
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<h6>Copyright &copy; 2015</h6>
					</div>
					
					<div class="col-sm-4">
						<h6>About Us</h6>
						<p>Narwhal bespoke Odd Future tofu post-ironic selvage. Church-key gentrify four loko biodiesel squid, tofu cornhole beard you probably haven't heard of them wolf ugh flannel paleo banjo.</p>
					</div>
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="list-unstyled">
							<li><?php echo anchor('main', 'Home'); ?></li>
							<li><?php echo anchor('about_us_online', 'About us'); ?></li>
							<li><?php echo anchor('contact_online', 'Contact'); ?></li>
						</ul>
					</div>
										
				</div>
			</div>
		</footer>
	
	</body>
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="/includes/js/script.js"></script>
</html>