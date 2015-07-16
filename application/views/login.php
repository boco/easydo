<html>

<?php include 'header.php'; ?>

	<body class="login">
		<div class="container loginTop">
			<?php echo form_open('login/verifyLogin', array('id'=>'forma','class'=>'form-signin')); ?>
				<img class="img-responsive center-block" src=<?php echo base_url('/images/logo.png'); ?>  alt="logo" width="216" height="137" />
				<h2 class="form-signin-heading text-center">Please log in</h2>

				<div class="col-sm-12">
					<label for="email" class="sr-only">Email</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>" />
				</div>
				<div class="col-sm-12">
			    	<span class="text-danger"><?php echo form_error('email'); ?></span>
	    		</div>

				<div class="col-sm-12">
            		<label for="password" class="sr-only">Email</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>" />
                </div>
                <div class="col-sm-12 oddaljenost">
			    	<span class="text-danger"><?php echo form_error('password'); ?></span>
	    		</div>

				<!--<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>-->
				<input id="signup" class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>
				<p class="text-center go-home">Go to <?php echo anchor('index', 'homepage'); ?></p>
			</form>
		</div> <!-- /container -->
	</body>
<?php include 'includeJs.php'; ?>
</html>