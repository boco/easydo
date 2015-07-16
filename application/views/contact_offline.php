<html>
<?php include 'header.php'; ?>
	<body>
		<div id="wrap">
			<?php include 'navbar_offline.php'; ?>
		
			<div class="container" id="main">
				<div class="row about">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="well">
							<h2 class="text-center">Contact</h2>

							<?php echo form_open('contact_offline/verifycontact', array('class'=>'form-horizontal')); ?>
							    <div class="form-group">
							        <label for="name" class="col-sm-2 control-label">Name</label>
							        <div class="col-sm-9">
							            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>" >
							        </div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-9 col-sm-offset-2">
							    		<span class="text-danger"><?php echo form_error('name'); ?></span>
						    		</div>
					    		</div>
							    <!--<?php echo form_error('name', '<p>', '</p>'); ?>-->

							    <div class="form-group">
							        <label for="email" class="col-sm-2 control-label">Email</label>
							        <div class="col-sm-9">
							            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo set_value('email'); ?>">
							        </div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-9 col-sm-offset-2">
							    		<span class="text-danger"><?php echo form_error('email'); ?></span>
							    	</div>
					    		</div>

							    <div class="form-group">
							        <label for="message" class="col-sm-2 control-label">Message</label>
							        <div class="col-sm-9">
							            <textarea class="form-control" rows="4" id="message" name="message" placeholder="Your message..."><?php echo set_value('message'); ?></textarea>
							        </div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-9 col-sm-offset-2">
							    		<span class="text-danger"><?php echo form_error('message'); ?></span>
							    	</div>
					    		</div>

							    <div class="form-group">
							        <label for="sum" class="col-sm-2 control-label">2 + 3 = ?</label>
							        <div class="col-sm-9">
							            <input type="text" class="form-control" id="sum" name="sum" placeholder="Your Answer" value="<?php echo set_value('sum'); ?>">
							        </div>
							    </div>
							    <div class="form-group">
							    	<div class="col-sm-9 col-sm-offset-2">
							    		<span class="text-danger"><?php echo form_error('sum'); ?></span>
							    	</div>
					    		</div>

							    <div class="form-group">
							        <div class="col-sm-9 col-sm-offset-2">
							            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							        </div>
							    </div>
							    
							    <div class="form-group">
							        <div class="col-sm-9 col-sm-offset-2">
							        	<?php echo $this->session->flashdata('msg'); ?>
							        </div>
							    </div>
							<?php form_close(); ?>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	
		<?php include 'footer_offline.php'; ?>
	</body>

<?php include 'includeJs.php'; ?>
</html>