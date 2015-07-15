<html>

	<head>
		<!-- Website Title & Description for Search Engine purposes -->
		<title>EasyDo</title>
		<link href="/images/favicon2.ico" rel="icon" type="image/x-icon" />
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="/includes/css/styles.css" rel="stylesheet">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="/includes/js/modernizr-2.6.2.min.js"></script>
		
	</head>

	<body class="login">
		<div class="container signUpTop">

			<?php echo form_open('Sign_up/verifySignUp', array('id'=>'forma', 'class'=>'form-signin')); ?>
				<img class="img-responsive center-block logo" src="/images/logo.png" alt="logo" width="216" height="137" />
				<h2 class="form-signin-heading text-center">Please sign up</h2>

				<div class="form-group">
					<div class="input-group">
						<label for="name" class="sr-only">Name</label>
						<span class="input-group-addon red"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo set_value('name'); ?>" required/>
					</div>
				</div>
				<?php echo form_error('name', '<p>', '</p>'); ?>

				<div class="form-group">
                    <div class="input-group">
                    	<label for="email" class="sr-only">Email</label>
                        <span class="input-group-addon green"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="<?php echo set_value('email'); ?>" required/>
                    </div>
                </div>
                <?php echo form_error('email', '<p class="error">', '</p>'); ?>

                <div class="form-group">
                    <div class="input-group">
                    	<label for="password" class="sr-only">Password</label>
                        <span class="input-group-addon blue"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>" required />
                    </div>
                </div>
				<?php echo form_error('password', '<p class="error">', '</p>'); ?>

                <div class="form-group">
                    <div class="input-group">
                    	<label for="repassword" class="sr-only">Retype password</label>
                        <span class="input-group-addon yellow"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Retype password" value="<?php echo set_value('repassword'); ?>" required/>
                    </div>
                </div>
                <?php echo form_error('repassword', '<p class="error">', '</p>'); ?>

				<!--<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>-->
				<input id="signup" class="btn btn-lg btn-primary btn-block" type="submit" value="Sign up"/>
				<p class="text-center go-home">Go to <?php echo anchor('index', 'homepage'); ?></p>
			<?php form_close(); ?>

		</div> <!-- /container -->
	</body>

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="/includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="/includes/js/script.js"></script>

</html>