<html>
	<?php include 'header.php'; ?>
	<body>
		
		<div class="container " id="wrap">
			<?php include 'navbar_online.php'; ?>

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
										&nbsp;<?php echo $done; ?>
									</h1>
									<h3>Completed</h3>
								</div>

								<div class="col-sm-3">
									<h1>					
										<span class=" label label-danger boxicon">
											<span class="glyphicon glyphicon-remove">
											</span>
										</span>
										&nbsp;<?php echo $failed; ?>
									</h1>
									<h3>Uncompleted</h3>
								</div>

								<div class="col-sm-3">
									<h1>					
										<span class=" label label-warning boxicon">
											<span class="glyphicon glyphicon-play">
											</span>
										</span>
										&nbsp;<?php echo $pending; ?>
									</h1>
									<h3>In progress</h3>
								</div>
								<div class="col-sm-3">
									<h1>					
										<span class=" label label-default boxicon">
											<span class="glyphicon glyphicon-repeat">
											</span>
										</span><b>
										&nbsp;<?php echo $done + $failed + $pending; ?></b>
									</h1>
									<h3>Total</h3>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">

					<!--
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
					-->

					<div class="row">
						<div class="col-md-6">
							<div class="well what">
								
								<?php echo form_open('my_profile/save'); ?>
									<h3>
										<div class="pull-right">
											<div class="btn-group">
												<button type="submit" class="btn-xs btn-success" aria-label="Save">
													<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Save
												</button>
											</div>
											<!--
											<div class="btn-group">
												<button type="button" class="btn-xs btn-danger" aria-label="Cancel">
													<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Cancel
												</button>
											</div>
											-->
										</div>
									My profile</h3>

									<div class="form-group">
										<label for="userEmail">Email address</label>
										<input type="email" class="form-control" name="userEmail" value="<?php echo set_value('userEmail', $email); ?>"/> 
									</div>
									<div class="form-group">
								    	<span class="text-danger"><?php echo form_error('userEmail'); ?></span>
						    		</div>

									<div class="form-group">
										<label for="userName">Name</label>
										<input type="input" class="form-control" name="userName"  value="<?php echo set_value('userName', $name); ?>"/>
									</div>
									<div class="form-group">
								    	<span class="text-danger"><?php echo form_error('userName'); ?></span>
						    		</div>

									<div class="form-group">
										<label for="userPassword">Password (leave empty if unchanged)</label>
										<input type="password" class="form-control" name="userPassword" />
									</div>
									<div class="form-group">
								    	<span class="text-danger"><?php echo form_error('userPassword'); ?></span>
						    		</div>

									<div class="form-group">
										<label for="userPasswordRepeat">Password repeat</label>
										<input type="password" class="form-control" name="userPasswordRepeat" />
									</div>
									<div class="form-group">
								    	<span class="text-danger"><?php echo form_error('userPasswordRepeat'); ?></span>
						    		</div>
								</form>
							</div>
						</div>
						<div class="col-md-6">
							<div class="well what">

								<?php echo form_open('my_profile/settings'); ?>

									<h3>
									<div class="pull-right">
										<div class="btn-group">
											<button type="submit" class="btn-xs btn-success" aria-label="Save">
												<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Save
											</button>
										</div>
										<!--
										<div class="btn-group">
											<button type="button" class="btn-xs btn-danger" aria-label="Cancel">
												<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Cancel
											</button>
										</div>
										-->
									</div>
								Settings</h3>

									<div class="form-group">
										<label for="userSettings">
											Displayed number of daily tasks
										</label>
										<input type="number" class="form-control" name="userSettings" value="<?php echo set_value('userSettings', $settings); ?>"/> 
									</div>
									<div class="form-group">
								    	<span class="text-danger"><?php echo form_error('userSettings'); ?></span>
						    		</div>

									<!--
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
									-->

								</form>
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