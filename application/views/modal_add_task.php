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
				<?php echo form_open('Task/verifyaddtask', array('id'=>'forma', 'class'=>'form-horizontal')); ?>
					<div class="form-group">
						<label class="col-lg-2 col-lg-offset-1 control-label" for="taskName">Task name</label>
						<div class="col-lg-8">
							<input class="form-control" id="taskName" name="taskName" placeholder="Task name" type="text">
						</div>
					</div>
					<?php echo form_error('taskName', '<p>', '</p>'); ?>
					
					<div class="form-group">
						<label class="col-lg-2 col-lg-offset-1 control-label" for="taskDescription">Description</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="taskDescription" name="taskDescription" placeholder="Description" rows="4"></textarea>
						</div>
					</div>
					<?php echo form_error('taskDescription', '<p>', '</p>'); ?>

					<div class="form-group">
						<label class="col-lg-2 col-lg-offset-1 control-label" for="taskCategory">Category</label>
						<div class="col-lg-8">
							<input list="category" class="form-control" id="taskCategory" name="taskCategory" placeholder="Category" type="text">
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
					<?php echo form_error('taskCategory', '<p>', '</p>'); ?>

					<div class="form-group">
						<label class="col-lg-2 col-lg-offset-1 control-label" for="taskDeadline">Deadline</label>
						<div class="col-lg-8">
							<input class="form-control" id="taskDeadline" name="taskDeadline" placeholder="Deadline" type="text">
						</div>
					</div>
					<?php echo form_error('taskDeadline', '<p>', '</p>'); ?>

					<div class="form-group">
						<label class="col-lg-2 col-lg-offset-1 control-label" for="taskPriority">Priority</label>
						<div class="col-lg-8">
							<input class="form-control" id="taskPriority" name="taskPriority" placeholder="Priority" type="text"><br/>
							<button class="btn btn-success pull-right" type="submit">Confirm</button>
						</div>
					</div>
					<?php echo form_error('taskPriority', '<p>', '</p>'); ?>
				<?php form_close(); ?>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
