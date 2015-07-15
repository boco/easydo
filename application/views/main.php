<html>
<?php include 'header.php'; ?>
<body>
	<?php include 'navbar_online.php'; ?>
	<?php include 'add_task_modal.php'; ?>


	<div id="wrap">
		<div class="about">
		<div class="jumbotron">
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
		</div>
		<div class="container">
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
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<?php include 'footer_online.php'; ?>
</body>

<?php include 'includeJs.php'; ?>

</html>