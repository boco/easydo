<html>

<?php include 'header.php'; ?>

	<body>
		<div id="wrap">
		
		<?php include 'navbar_online.php'; ?>

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

		<?php include 'footer_online.php'; ?>
	</body>	
<?php include 'includeJs.php'; ?>
</html>