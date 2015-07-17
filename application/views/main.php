<html>
<?php include 'header.php'; ?>
	<body>
		<?php include 'navbar_online.php'; ?>

		<div id="wrap">
			<div class="about">
				<div class="jumbotron">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<img src=<?php echo base_url('/images/Utilities.png');?> class="img-responsive" alt="Just do it" height="350" width="350">
							</div>
							<div class="col-sm-8">
								<h1>Hello, <?php echo $name; ?>! What is on today's schedule? </h1>
								<p>Click below and quickly add some new tasks.</p>
								<p><?php echo anchor('task', 'Add a new task','class="btn btn-primary btn-lg"'); ?></p>
							</div>
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
										<?php
											if($tasks){
												
												$i=0;
												foreach($tasks as $row){ 
												if($i==$settings) break;
										?>
										<li>
											<dt><?php echo $row->name; ?></dt>
											<dd>Priority: <?php echo $row->priority; ?></dd>
										</li>
										<?php
												$i++;
												}
											}else{
												echo '<p>Add some new tasks</p>';
											}
										?>
									</ul>
								</div>
							</div>

							<div class="col-sm-5">
								<div class="well priority-look">
									<h3>Task details:</h3>

									<!-- Slider -->
									<div class="row-fluid">
										<div class="span9" id="slider">
											<!-- Top part of the slider -->
											<div class="row-fluid">
												<div class="span2" id="carousel-bounding-box">
													<div class="carousel slide" id="myCarousel2">
														<!-- Carousel items -->
														<div class="carousel-inner">

															<?php
																if($tasks){
																	$i=0;
																	foreach($tasks as $row){ 
																		if($i==$settings) break;

																		if($i == 0){
																			echo '<div class="active item">';
																		}else{
																			echo '<div class="item">';
																		}
															?>
																	<dl>
																		<dt><?php echo $row->name; ?></dt>
																		<dd>Deadline: <?php echo date('d.m.Y',strtotime($row->deadline)); ?></dd>
																		<dd>Priority: <?php echo $row->priority; ?></dd>
																		<dd><?php echo $row->description; ?></dd>
																	</dl>
																</div>
															<?php
																		$i++;
																	}
																}else{
																	echo '<p>Add some new tasks</p>';
																}
															?>	
														</div>
													</div> <!-- myCarousel2 -->
												</div> <!-- carousel-bounding-box -->

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
											</div> <!-- row fluid -->
										</div> <!-- span9 -->
									</div> <!-- row fluid -->
								</div><!-- well priority -->	
							</div> <!-- col-sm-5 -->

						</div> <!-- row -->
					</div> <!-- col-12 -->
				</div> <!-- row -->
			</div>  <!-- container -->
		</div>

		<?php include 'footer_online.php'; ?>
		<?php include 'includeJs.php'; ?>

	</body>

	

</html>