<html>
	<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<h6>Copyright &copy; 2015</h6>
					</div>
					
					<div class="col-sm-4">
						<h6>About Us</h6>
						<p>Narwhal bespoke Odd Future tofu post-ironic selvage. Church-key gentrify four loko biodiesel squid, tofu cornhole beard you probably haven't heard of them wolf ugh flannel paleo banjo.</p>
					</div>
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="list-unstyled">
							<!-- če si logiran te preusmeri na drugi domač naslov ali pa bom dal nov footer -->
							<li><?php echo anchor('index', 'Home'); ?></li>
							<li><?php echo anchor('my_easydo', 'My EasyDo'); ?></li>
							<li><?php echo anchor('about_us_offline', 'About us'); ?></li>
							<li><?php echo anchor('contact_offline', 'Contact'); ?></li>
						</ul>
					</div>
										
				</div>
			</div>
		</footer>
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="/includes/js/script.js"></script>
</html>