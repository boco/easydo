<html>

<?php include 'header.php'; ?>
<body>
	<?php include 'navbar_online.php'; ?>

	<div class="container " id="wrap">
		<div class="row about" >

			<div class="col-md-12">
				<div class="jumbotron">
				<div class="container">
					<div class="row">

							<h1>Status record</h1>
							<p>How are you doing.</p>

					</div>
					<div class="row">
						<div class="col-sm-3">
							<h1>					
								<span class=" label label-success boxicon">
									<span class="glyphicon glyphicon-ok">
									</span>
								</span>
								&nbsp;7
							</h1>
							<h3>Completed</h3>
						</div>

						<div class="col-sm-3">
							<h1>					
								<span class=" label label-danger boxicon">
									<span class="glyphicon glyphicon-remove">
									</span>
								</span>
								&nbsp;21
							</h1>
							<h3>Uncompleted</h3>
						</div>

						<div class="col-sm-3">
							<h1>					
								<span class=" label label-warning boxicon">
									<span class="glyphicon glyphicon-play">
									</span>
								</span>
								&nbsp;4
							</h1>
							<h3>In progress</h3>
						</div>
						<div class="col-sm-3">
							<h1>					
								<span class=" label label-default boxicon">
									<span class="glyphicon glyphicon-repeat">
									</span>
								</span><b>
								&nbsp;4</b>
							</h1>
							<h3>Total</h3>
						</div>
					</div>
				</div>
		</div>

			</div>

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="well what">
							<h3>
								<div class="pull-right">
									<div class="btn-group">
										<button type="button" class="btn-xs btn-default" aria-label="Edit">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;Edit
										</button>
									</div>
								</div>
								My profile
							</h3>

							<form role="form">
								<dl>
									<dt>
										Email address
									</dt>
									<dd>
										dummy@email.com
									</dd>
									<dt>
										Username
									</dt>
									<dd>
										Dumbster999
									</dd>
								</dl>
							</form>
						</div>
				</div>
				<div class="col-md-6">
					<div class="well what">
						<h3>
							<div class="pull-right">
								<div class="btn-group">
									<button type="button" class="btn-xs btn-default" aria-label="Edit">
										<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;Edit
									</button>
								</div>
							</div>
						Settings</h3>
						<form role="form">
							<dl>
								<dt>
									Displayed daily tasks
								</dt>
								<dd>
									5
								</dd>
								<dt>
									Send email notifications
								</dt>
								<dd>
									NO
								</dd>
							</dl>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="well what">
						<h3>
							<div class="pull-right">
								<div class="btn-group">
									<button type="button" class="btn-xs btn-success" aria-label="Save">
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Save
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn-xs btn-danger" aria-label="Cancel">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Cancel
									</button>
								</div>
							</div>
						My profile</h3>


						<form role="form">
							<div class="form-group">
								<label for="userEmail">
									Email address
								</label>
								<input type="email" class="form-control" id="userEmail" value="dummy@email.com"/> 
							</div>
							<div class="form-group">

								<label for="userUsername">
									Username
								</label>
								<input type="input" class="form-control" id="userUsername"  value="Dumbster999"/>
							</div>
							<div class="form-group">

								<label for="userPassword">
									Password (leave empty if unchanged)
								</label>
								<input type="password" class="form-control" id="userPassword" />
							</div>
							<div class="form-group">

								<label for="userPasswordRepeat">
									Password repeat
								</label>
								<input type="password" class="form-control" id="userPasswordRepeat" />
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="well what">
						<h3>
							<div class="pull-right">
								<div class="btn-group">
									<button type="button" class="btn-xs btn-success" aria-label="Save">
										<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Save
									</button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn-xs btn-danger" aria-label="Cancel">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Cancel
									</button>
								</div>
							</div>
						Settings</h3>


						<form role="form">
							<div class="form-group">
								<label for="userEmail">
									Displayed daily tasks
								</label>
								<input type="number" class="form-control" id="userEmail" value="4"/> 
							</div>
							<div class="form-group">

								<label>
									Send email notifications
								</label>
								<div class="btn-toggle">
									<div class="btn-group">
									    <button class="btn btn-sm btn-default">YES</button>
									    <button class="btn btn-sm btn-primary active">NO&nbsp;</button>
								</div>
								</div>
							</div>

						</form>
					</div>

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