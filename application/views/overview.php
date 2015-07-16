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

									<li class="active">
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

			<?php include 'add_task_modal.php'; ?>

			<div class="container" id="main">
				<div class="row about">

					<div class="form-group">
				        <div class="col-sm-10 col-sm-offset-1">
				        	<?php echo $this->session->flashdata('task_added'); ?>
				        </div>
				    </div>

					<div class="col-sm-10 col-sm-offset-1">
						<div class="well">
							<h2 class="text-center">Overview</h2>
							<div class="table-responsive">
								<table class="table table-hover">
									<caption class="text-center">Overview of all tasks</caption>
									<thead>
										<tr>
											<th>Task name</th>
											<th>Category</th>
											<th>Created</th>
											<th>Deadline</th>
											<th>Priority</th>
											<th>Status</th>
											<th colspan="3">Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if($tasks){
												foreach($tasks as $row) {
													if($row->completed == 1){
														echo '<tr class="success">';
													}elseif(strtotime(date('Y-m-d')) > strtotime($row->deadline) && $row->completed == 0){
														echo '<tr class="danger">';
													}else{
														echo '<tr class="warning">';
													}
													echo '<td>'.$row->name.'</td>';
													echo '<td>'.$row->category.'</td>';
													echo '<td>'.date('d-m-Y',strtotime($row->created)).'</td>';
													echo '<td>'.date('d-m-Y',strtotime($row->deadline)).'</td>';
													echo '<td>'.$row->priority.'</td>';
													
													if($row->completed == 1){
														echo '<td>Done</td>';
														echo '<td>';

														echo form_open("overview/edit");													
														echo '<input type="hidden" name="edit_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>';
														echo form_close();

														echo form_open("overview/delete");
														echo '<input type="hidden" name="delete_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>';
														echo form_close();			

														echo '</td>';
													}elseif(strtotime(date('Y-m-d')) > strtotime($row->deadline) && $row->completed == 0){
														echo '<td>Missed</td>';
														echo '<td>';

														echo form_open("overview/edit");													
														echo '<input type="hidden" name="edit_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>';
														echo form_close();

														echo form_open("overview/delete");
														echo '<input type="hidden" name="delete_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>';
														echo form_close();
														
														echo '</td>';
													}else{
														echo '<td>Pending</td>';
														echo '<td class="row no-gutters">';

														echo form_open("overview/done",'class="col-sm-4"');													
														echo '<input type="hidden" name="done_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="done" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></button>';
														echo form_close();

														echo form_open("overview/edit",'class="col-sm-4"');
														echo '<input type="hidden" name="edit_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>';
														echo form_close();

														echo form_open("overview/delete",'class="col-sm-4"');
														echo '<input type="hidden" name="delete_task" value="'.$row->task_id.'" />';
														echo '<button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>';
														echo form_close();

														echo '</td>';
													}
													echo '</tr>';
												}
											}
										?>

										<div id="paginacija">PAGINACIJA</div>
									</tbody>
								</table>
							</div>

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