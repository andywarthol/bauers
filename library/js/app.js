jQuery(document).ready(function($){
	
	// Faster Hamburger Navigation
	var flag = false;
	$('.navbar-toggle').bind( "touchstart", function(e){
	  if (!flag) {
	    flag = true;
	    setTimeout(function(){ flag = false; }, 100);
	    e.preventDefault();
			$('.navbar-collapse').collapse('toggle');
	  }
	  return false
	});

});