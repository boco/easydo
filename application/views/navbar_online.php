<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		
		<div class="navbar-header">
			<!-- Meni za male ekrane (3 ertice)-->
			<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand" href=<?php echo base_url('index.php/main'); ?>>
				<img src=<?php echo base_url('/images/logo.png'); ?> height="60" width="90" alt="Your logo"/>
			</a>
		</div>
		
		<div class="navbar-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				<li class="">
					<?php echo anchor('main', 'Home'); ?>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">My EasyDo <strong class="caret"></strong></a>

					<ul class="dropdown-menu">
						<li>
							<?php echo anchor('my_profile', 'My Profile'); ?>
						</li>

						<li>
							<?php echo anchor('overview', 'Overview'); ?>
						</li>

						<li>
							<?php echo anchor('task', 'Add DoTask'); ?>
						</li>

						<li>
							<?php echo anchor('activity_chart', 'Activity Chart'); ?>
						</li>
					</ul>
				</li>
				
				<li>
					<?php echo anchor('about_us_online', 'About us'); ?>
				</li>
				
				<li>
					<?php echo anchor('contact_online', 'Contact'); ?>
				</li>

			</ul>

			<form class="navbar-form navbar-left">
      			<div class="form-group">
                    <div class="input-group">
                    	<label for="search" class="sr-only">Search</label>
                        <input type="text" id="search" class="form-control" placeholder="Search" />
                        <span class="input-group-addon green"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                </div>
            </form>

			<div class="nav navbar-nav navbar-right login hidden-xs">
				<?php echo anchor('main/logout', 'Logout', 'class="btn btn-danger"'); ?>
			</div>
			
			<!-- Vidno samo na majhnih napravah < 768px -->
			<div class="well well-small visible-xs">
				<?php echo anchor('main/logout', 'Logout', 'class="btn btn-danger btn-block"'); ?>
			</div>

		</div>
	</div>
</nav>