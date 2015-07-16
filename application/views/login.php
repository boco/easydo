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
		<div class="container loginTop">
			<?php echo form_open('login/verifylogin', array('class'=>'form-signin')); ?>
				<img class="img-responsive center-block logo" src="/images/logo.png" alt="logo" width="216" height="137" />
				<h2 class="text-center">Please login</h2>

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