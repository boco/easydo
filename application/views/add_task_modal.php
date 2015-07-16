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
							<input class="form-control" name="taskPriority" placeholder="Priority" type="text" value="<?php echo set_value('taskPriority'); ?>"><br/>
							<!-- <button type="submit" class="btn btn-success pull-right" >Confirm</button> -->
						</div>
					</div>
					<div class="form-group">
				    	<div class="col-sm-8 col-sm-offset-3">
				    		<span class="text-danger"><?php echo form_error('taskPriority'); ?></span>
				    	</div>
		    		</div>

					<div class="form-group">
			    		<div class="col-lg-8 col-lg-offset-3">
							<button type="submit" class="btn btn-success pull-right" >Confirm</button>
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
