jQuery(document).ready(function($){
	$('.navbar-toggle').bind( "touchstart", function(e){
		e.preventDefault();
		$('.navbar-collapse').collapse('toggle');
	});
});