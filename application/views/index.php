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

		<div class="container" id="main">
			<div class="carousel slide" id="myCarousel" data-ride="carousel">			
				<!-- Indicators (krogci na dnu sliderja) -->
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#myCarousel" class="active"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active" id="slide1">
						<div class="carousel-caption">
							<h4>Plan ahead</h4>
							<p>Don't like to be unprepared? Plan ahead all your tasks, event and even holidays.</p>
						</div>
					</div>
					
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h4>Works on all devices</h4>
							<p>84% of websites are not accessible on phones and tablets. It's time to join the 16%!</p>
						</div>
					</div>
					
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h4>It's easy. It's simple. It's done!</h4>
							<p>No more forgetting birthdays, upcoming meetings or buying toothpaste.</p>
						</div>
					</div>
				</div>
				
				<!-- Controls (pušeica levo in desno)-->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<div class="row" id="bigCallout">
				<div class="col-12">
									
					<div class="well what img-center">
						<div class="page-header">
							<h1>What is EasyDo <small>and what it can do.</small></h1>
						</div>
						<p class="lead">EasyDo is an online application based on the to-do list sample. With its features it helps you with managing your daily to-dos and tasks. Whether you are shopping or getting ready for the holidays, EasyDo can always help you.</p>
						<!--<a href="#" class="btn btn-large btn-primary">Sign up for free</a>-->
						<?php echo anchor('sign_up', 'Sign up for free', 'class="btn btn-large btn-primary"'); ?>
					</div>
				</div>
			</div>

			<div class="row" id="moreInfo">
				<div class="col-12">
					<div class="row">
						<div class="col-sm-6">
							<div class="well moreInfo">
								<div class="img-center">
									<img src="/images/Alinof.png" alt="Bootstrap 3" class="img-thumbnail" width="200" height="200">
								</div>
								
								<div>
								<h4>All available features this application offers:</h4>
								<ol>
									<li>Manage your to-do list</li>
										<ul>
											<li>Add a task with a defined priority</li>
											<li>Delete tasks</li>
											<li>Edit existing tasks</li>
											<li>Add tasks into categories</li>
											<li>Overview of your tasks</li>
										</ul>
									<li>Daily scheduling</li>
									<li>Notifications that an important task is coming</li>
									<li>See your graph of activity</li>
								</ol>
								</div>
								
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="well">
								<div class="img-center">
									<img src="/images/background.png" alt="Bootstrap 3" class="img-thumbnail" width="400" height="200">
								</div>
								
								<h4>All available features this application offers:</h4>
								<ol>
									<li>Smooth graphic design</li>
									<li>Quick overview of all tasks</li>
									<li>Edit your profile</li>
									<li>Calendar</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<footer>
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
						<li><?php echo anchor('index', 'Home'); ?></li>
						<li><?php echo anchor('about_us_offline', 'About us'); ?></li>
						<li><?php echo anchor('contact_offline', 'Contact'); ?></li>
					</ul>
				</div>
									
			</div>
		</div>
	</footer>
	

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