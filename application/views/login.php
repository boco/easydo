<html>

<?php include 'header.php'; ?>

	<body class="login">
		<div class="container loginTop">
			<?php echo form_open('login/verifyLogin', array('id'=>'forma','class'=>'form-signin')); ?>
				<img class="img-responsive center-block" src=<?php echo base_url('/images/logo.png'); ?>  alt="logo" width="216" height="137" />
				<h2 class="form-signin-heading text-center">Please log in</h2>

				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php echo set_value('email'); ?>" required autofocus>
				<?php echo form_error('email', '<p class="error">', '</p>'); ?>

				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>" required />
				<?php echo form_error('password', '<p class="error">', '</p><br/>'); ?>

				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
			<?php form_close(); ?>
			<p class="text-center go-home">Go to <?php echo anchor('index', 'homepage'); ?></p>
		</div> <!-- /container -->
	</body>
<?php include 'includeJs.php'; ?>
</html>