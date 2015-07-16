<html>

<?php include 'header.php'; ?>

	<body>
		<div id="wrap">
		
		<?php include 'navbar_online.php'; ?>

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
									<div id="sandbox-container">
									    <div class="input-daterange input-group col-sm-8" id="datepicker">
									    	<input name="taskDeadline" class="input-sm form-control" type="text" placeholder="YYYY-mm-dd">
									    </div> 
									</div>
								</div>

								<!--
									<div class="col-lg-8">
										<input class="form-control" name="taskDeadline" placeholder="YYYY-mm-dd" type="datetime-local" value="<?php echo set_value('taskDeadline'); ?>">
									</div>
								</div>
								-->

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

		<?php include 'footer_online.php'; ?>
	</body>	
<?php include 'includeJs.php'; ?>

</html>