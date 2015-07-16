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
										<?php echo anchor('task', 'Add DoTask'); ?>
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

			<!-- TUKAJ PRIDE TASK -->
			<div class="container" id="main">
				<div class="row about">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="well">
							<h2 class="text-center">Add DoTask</h2>

							<?php echo form_open('Task/verifyaddtask', array('class'=>'form-horizontal')); ?>
								<div class="form-group">
									<label class="col-lg-3 control-label" for="taskName">Task name</label>
									<div class="col-lg-8">
										<input class="form-control" name="taskName" placeholder="Task name" type="text" value="<?php echo set_value('taskName'); ?>">
									</div>
								</div>
								<div class="form-group">
							    	<div class="col-sm-8 col-sm-offset-3">
							    		<span class="text-danger"><?php echo form_error('taskName'); ?></span>
							    	</div>
					    		</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label" for="taskDescription">Description</label>
									<div class="col-lg-8">
										<textarea class="form-control" name="taskDescription" placeholder="Description" rows="4"><?php echo set_value('taskDescription'); ?></textarea>
									</div>
								</div>
								<div class="form-group">
							    	<div class="col-sm-8 col-sm-offset-3">
							    		<span class="text-danger"><?php echo form_error('taskDescription'); ?></span>
							    	</div>
					    		</div>

								<div class="form-group">
									<label class="col-lg-3 control-label" for="taskCategory">Category</label>
									<div class="col-lg-8">
										<input list="category" class="form-control" name="taskCategory" placeholder="Category" type="text" value="<?php echo set_value('taskCategory'); ?>">
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
							    	<div class="col-sm-8 col-sm-offset-3">
							    		<span class="text-danger"><?php echo form_error('taskCategory'); ?></span>
							    	</div>
					    		</div>

								<div class="form-group">
									<label class="col-lg-3 control-label" for="taskDeadline">Deadline</label>
									<div class="col-lg-8">
										<input class="form-control" name="taskDeadline" placeholder="Deadline" type="datetime-local" value="<?php echo set_value('taskDeadline'); ?>">
									</div>
								</div>
								<div class="form-group">
							    	<div class="col-sm-8 col-sm-offset-3">
							    		<span class="text-danger"><?php echo form_error('taskDeadline'); ?></span>
							    	</div>
					    		</div>

								<div class="form-group">
									<label class="col-lg-3 control-label" for="taskPriority">Priority</label>
									<div class="col-lg-8">
										<input class="form-control" name="taskPriority" placeholder="Priority" type="text" value="<?php echo set_value('taskPriority'); ?>">
										<!-- <button type="submit" class="btn btn-success pull-right" >Confirm</button> -->
									</div>
								</div>
								<div class="form-group">
							    	<div class="col-sm-8 col-sm-offset-3">
							    		<span class="text-danger"><?php echo form_error('taskPriority'); ?></span>
							    	</div>
					    		</div>

					    		<div class="form-group">
									<div class="col-sm-6 col-sm-offset-5">
										<button type="submit" class="btn btn-success">Confirm</button>
									</div>
								</div>
							<?php form_close(); ?>

						</div>
					</div>
				</div>
			</div>

		</div>

	</body>

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