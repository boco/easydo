/*

My Custom JS
============

*/

$(function() {
	
	$('#alertMe').click(function(e){
		e.preventDefault(); // to prepre�i preusmeritev linka ali refresh strani
		$('#successAlert').slideDown();
	});
	
	$('a.pop').click(function(e) {
		e.preventDefault();
	});
	
	$('a.pop').popover();
	
	$('[data-toggle="tooltip"]').tooltip();
	
});