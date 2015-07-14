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
									<?php echo anchor('index', 'Home'); ?>
								</li>
								
								<li>
									<!--<a href="#">About us</a>-->
									<?php echo anchor('about_us_offline', 'About us'); ?>
								</li>
								
								<li class="active">
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
				<div class="row about">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="well">
							<h2 class="text-center">Contact</h2>

							<form class="form-horizontal" role="form" method="post" action="index.php">
							    <div class="form-group">
							        <label for="name" class="col-sm-2 control-label">Name</label>
							        <div class="col-sm-9">
							            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="email" class="col-sm-2 control-label">Email</label>
							        <div class="col-sm-9">
							            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="message" class="col-sm-2 control-label">Message</label>
							        <div class="col-sm-9">
							            <textarea class="form-control" rows="4" name="message"></textarea>
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
							        <div class="col-sm-9">
							            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							        </div>
							    </div>
							    <div class="form-group">
							        <div class="col-sm-9 col-sm-offset-2">
							            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							        </div>
							    </div>
							    <div class="form-group">
							        <div class="col-sm-9 col-sm-offset-2">

 										<!-- <?php echo $result; ?> -->
							        </div>
							    </div>
							</form>



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
							<li><?php echo anchor('index', 'Home'); ?></li>
							<li><?php echo anchor('about_us_offline', 'About us'); ?></li>
							<li><?php echo anchor('contact_offline', 'Contact'); ?></li>
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