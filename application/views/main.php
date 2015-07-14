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
					<a class="navbar-brand" href="/"><img src="/images/logo.png" height="60" width="90" alt="Your logo"></a>
				</div>
				
				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
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
						
						<li>
							<!--<a href="#">About us</a>-->
							<?php echo anchor('about_us_online', 'About us'); ?>
						</li>
						
						<li>
							<!--<a href="#">Contact</a>-->
							<?php echo anchor('contact_online', 'Contact'); ?>
						</li>

					</ul>

					<form class="navbar-form navbar-left">
	          			<div class="form-group">
		                    <div class="input-group">
		                    	<label for="search" class="sr-only">Search</label>
		                        <input type="text" id="search" class="form-control" placeholder="Search" />
		                        <span class="input-group-addon green"><span class="glyphicon glyphicon-search"></span></span>
		                    </div>
		                </div>
	                </form>

					<div class="nav navbar-nav navbar-right login hidden-xs">
						<!--<a class="btn btn-success" href="#">Sign up</a>
						<a class="btn btn-primary" href="#">Login</a>-->
						<?php echo anchor('main/logout', 'Logout', 'class="btn btn-danger"'); ?>
					</div>
					
					<!-- Vidno samo na majhnih napravah < 768px -->
					<div class="well well-small visible-xs">
						<!--<a class="btn btn-success btn-block" href="#">Sign up</a>
						<a class="btn btn-primary btn-block" href="#">Login</a>-->
						<?php echo anchor('main/logout', 'Logout', 'class="btn btn-danger btn-block"'); ?>
					</div>

				</div>
			</div>
		</nav>

		<!-- Modal -->
		<div id="addTaskModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title text-center">Add new DoTask</h3>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="col-lg-2 col-lg-offset-1 control-label" for="taskName">Task name</label>
								<div class="col-lg-8">
									<input class="form-control" id="taskName" placeholder="Task name" type="text">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-lg-2 col-lg-offset-1 control-label" for="taskDescription">Description</label>
								<div class="col-lg-8">
									<textarea class="form-control" id="taskDescription" placeholder="Description" rows="4"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 col-lg-offset-1 control-label" for="taskCategory">Category</label>
								<div class="col-lg-8">
									<input list="category" class="form-control" id="taskCategory" placeholder="Category" type="text">
									<datalist id="category">
										<option value="Home">
										<option value="Book">
										<option value="Movie">
										<option value="Music">
										<option value="Person">
										<option value="Food">
										<option value="Idea">
										<option value="Shopping">
										<option value="School">
										<option value="Job">
										<option value="Other">
									</datalist>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 col-lg-offset-1 control-label" for="taskDeadline">Deadline</label>
								<div class="col-lg-8">
									<input class="form-control" id="taskDeadline" placeholder="Deadline" type="text">
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-2 col-lg-offset-1 control-label" for="taskPriority">Priority</label>
								<div class="col-lg-8">
									<input class="form-control" id="taskPriority" placeholder="Priority" type="text"><br/>
									<button class="btn btn-success pull-right" type="submit">Confirm</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>

		<div class="jumbotron about">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src="/images/Utilities.png" class="img-responsive" alt="Just do it" height="350" width="350">
					</div>
					<div class="col-sm-8">
						<h1>Hello, world! What is on today's schedule? </h1>
						<p>Click below and quickly add some new tasks.</p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#addTaskModal">Add new task</a></p>
					</div>
				</div>
			</div>
		</div>



		<div class="container" id="main">
			<div class="row" id="moreInfo">
				<div class="col-12">
					<div class="row">

						<div class="col-sm-5 col-sm-offset-1">
							<div class="well priority-look">
								<h3>Priority look</h3>
								<ul>
									<li>
										<dt>asd</dt>
										<dd>Priority: asd</dd>
									</li>
									<li>
										<dt>asd</span></dt>
										<dd>Priority: 23</dd>
									</li>
								</ul>
								
							</div>
						</div>

						<div class="col-sm-5">
							<div class="well priority-look">
								<h3>Available tasks:</h3>

								<!-- Slider -->
								<div class="row-fluid">
									<div class="span9" id="slider">

										<!-- Top part of the slider -->
										<div class="row-fluid">
											<div class="span2" id="carousel-bounding-box">
												<div class="carousel slide" id="myCarousel2">
													<!-- Carousel items -->
													<div class="carousel-inner">
														<div class="active item">
															<dl>
																<dt>ime 1</dt>
																<dd>Deadline: asd</dd>
																<dd>Priority: asd</dd>
																<dd>asds</dd>
															</dl>
														</div>
														<div class="item">
															test 2
														</div>
														<div class="item">
															test 3
														</div>
														<div class="item">
															test 4
														</div>
														<div class="item">
															test 5
														</div>
														<div class="item">
															test 6
														</div>
													</div>
												</div>

												<!-- Carousel nav -->
												<div class="carousel-controls-mini ">
													<a data-slide="prev" href="#myCarousel2">
														<span class="glyphicon glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
														<span class="sr-only">Previous</span>
													</a>
													<a class="right" data-slide="next" href="#myCarousel2">
														<span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
														<span class="sr-only">Next</span>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div> <!--/Slider-->

								<!--
								<div class="carousel slide" id="myCarousel2" data-ride="carousel">
								-->			
									<!-- Indicators (krogci na dnu sliderja) -->
									<!--
									<ol class="carousel-indicators">
										<li data-slide-to="0" data-target="#myCarousel2" class="active"></li>
										<li data-slide-to="1" data-target="#myCarousel2"></li>
										<li data-slide-to="2" data-target="#myCarousel2"></li>
									</ol>
									-->
									
									<!-- Wrapper for slides -->
									<!--
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
									-->
									
									<!-- Controls (pušeica levo in desno)-->
									<!--
									<a class="left carousel-control" data-slide="prev" href="#myCarousel2">
										<span class="glyphicon glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" data-slide="next" href="#myCarousel2">
										<span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								-->


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
						<li><?php echo anchor('main', 'Home'); ?></li>
						<li><?php echo anchor('about_us_online', 'About us'); ?></li>
						<li><?php echo anchor('contact_online', 'Contact'); ?></li>
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