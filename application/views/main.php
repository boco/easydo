<html>
<?php include 'header.php'; ?>
	<body>
		<?php include 'navbar_online.php'; ?>
		<?php include 'add_task_modal.php'; ?>

		<div class="jumbotron about">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src=<?php echo base_url('/images/Utilities.png');?> class="img-responsive" alt="Just do it" height="350" width="350">
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

<?php include 'footer_online.php'; ?>
<?php include 'includeJs.php'; ?>

</html>