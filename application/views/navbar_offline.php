<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		
		<div class="navbar-header">
			<!-- Meni za male ekrane (3 ertice)-->
			<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<!-- Logo - drugaačna preusmeritev če si online ali ne-->
			<a class="navbar-brand" href=<?php echo base_url('/'); ?>>
				<img src=<?php echo base_url('/images/logo.png'); ?> height="60" width="90" alt="Your logo"/>
			</a>
		</div>
		
		<div class="navbar-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				<li>
					<?php echo anchor('index', 'Home'); ?>
				</li>
				<li>
					<!--<a href="#">About us</a>-->
					<?php echo anchor('about_us_offline', 'About us'); ?>
				</li>
				<li>
					<!--<a href="#">Contact</a>-->
					<?php echo anchor('contact_offline', 'Contact'); ?>
				</li>
			</ul>

			<div class="nav navbar-nav navbar-right login hidden-xs">
				<!--<a class="btn btn-success" href="#">Sign up</a>
				<a class="btn btn-primary" href="#">Login</a>-->
				<div class="btn-group">
					<?php echo anchor('sign_up', 'Sign up', 'class="btn btn-success"'); ?>
				</div>
				<div class="btn-group">
					<?php echo anchor('login', 'Login', 'class="btn btn-primary" '); ?>
				</div>
			</div>
			
			<!-- Vidno samo na majhnih napravah < 768px -->
			<div class="well well-small visible-xs">
				<!--<a class="btn btn-success btn-block" href="#">Sign up</a>
				<a class="btn btn-primary btn-block" href="#">Login</a>-->
				<?php echo anchor('sign_up', 'Sign up', 'class="btn btn-success btn-block"'); ?>
				<?php echo anchor('login', 'Login', 'class="btn btn-primary  btn-block"'); ?>
			</div>

		</div>
	</div>
</nav>