<html>

<?php include 'header.php'; ?>

	<body>
		<div id="wrap">
		
		<?php include 'navbar_online.php'; ?>
		<?php include 'add_task_modal.php'; ?>

			<div class="container" id="main">
				<div class="row about">
					<div class="col-sm-8 col-sm-offset-2">
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
										<tr class="success">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Done</td>			
											<td>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>

										<tr class="warning">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Pending</td>			
											<td>
												<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></button>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>

										<tr class="danger">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Missed</td>			
											<td>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>
										<tr class="danger">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Missed</td>			
											<td>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>
										<tr class="danger">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Missed</td>			
											<td>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>
										<tr class="danger">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Missed</td>			
											<td>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>
										<tr class="danger">
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>Missed</td>			
											<td>
												<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
												<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
												<input type="hidden" name="edit_task" value="php value" />
											</td>
										</tr>
										
										
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