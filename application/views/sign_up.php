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

			<form class="form-signin">
				<img class="img-responsive center-block logo" src="/images/logo.png" alt="logo" width="216" height="137" />
				<h2 class="form-signin-heading text-center">Please sign up</h2>

				<div class="form-group">
					<div class="input-group">
						<label for="inputName" class="sr-only">name</label>
						<span class="input-group-addon red"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" id="inputName" class="form-control" placeholder="Name" required/>
					</div>
				</div>

				<div class="form-group">
                    <div class="input-group">
                    	<label for="inputEmail" class="sr-only">Email</label>
                        <span class="input-group-addon green"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                    	<label for="inputPassword" class="sr-only">Password</label>
                        <span class="input-group-addon blue"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                    	<label for="inputRetypePassword" class="sr-only">Retype password</label>
                        <span class="input-group-addon yellow"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" id="inputRetypePassword" class="form-control" placeholder="Retype password" />
                    </div>
                </div>

                 <!--<div class="form-group">
                    <div class="input-group datePicker">
                    	<label for="dateBirth" class="sr-only">Date of birth</label>
                        <span class="input-group-addon yellow"><span class="glyphicon glyphicon-calendar"></span></span>
                        <input type="text" id="dateBirth" class="form-control" placeholder="Date of birth" />
                    </div>
                </div>-->

				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
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