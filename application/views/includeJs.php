	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="https://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write(<?php echo '\'<script src="'.base_url('/includes/js/script.js').'"><\/script>\''; ?>)</script>
	
	<!-- Bootstrap JS -->
	<script src=<?php echo base_url('/bootstrap/js/bootstrap.min.js');?>></script>
	
	<!-- Custom JS -->
	<script src=<?php echo base_url('/includes/js/script.js');?>></script>