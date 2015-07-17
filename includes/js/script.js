$(document).ready(function () {	

	$("#datepicker").datepicker({ dateFormat: 'dd.mm.yy' });
	
    $('#searchbar').tipuedrop({
		'mode': 'json',
		'show': 10,
		'contentLocation': '/results.json'
	});
	
});