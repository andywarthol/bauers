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

	// Mobile intake form
	$('#toggle_intake').click(function(){
		$('#toggle_intake').remove();
		$('.quick-quote').addClass('active');
		$('#service').focus();
	});

	// Placeholders for dinosaur browsers
	$('input, textarea').placeholder();

	// Browser Detection
	var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
  // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
	var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
	    // At least Safari 3+: "[object HTMLElementConstructor]"
	var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
	var isIE = /*@cc_on!@*/false || !!document.documentMode; // At least IE6
});