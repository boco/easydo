<html>

<?php include 'header.php'; ?>

<body>
	<?php include 'navbar_offline.php'; ?>
	 
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
					<?php echo anchor('sign_up', 'Sign up for free', 'class="btn btn-lg btn-primary"'); ?>
				</div>
			</div>
		</div>

		<div class="row" id="moreInfo">
			<div class="col-12">
				<div class="row">
					<div class="col-sm-6">
						<div class="well moreInfo">
							<div class="img-center">
								<img src="../images/Alinof.png" alt="Bootstrap 3" class="img-thumbnail" width="200" height="200">
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
								<img src="../images/background.png" alt="Bootstrap 3" class="img-thumbnail" width="400" height="200">
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

<?php include 'footer_offline.php'; ?>
<?php include 'includeJs.php'; ?>
</html>
