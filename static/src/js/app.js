$j = jQuery.noConflict();
	$j(document).ready(function() {	
		
	/*-------------------------------------------------------------------*/
	/*  1. Awesome Weather Pro plugin
	/*-------------------------------------------------------------------*/

	$j('.weather-icon').on('click', function(){
		$j('.menu-weather').toggle();
	});
	
	/*-------------------------------------------------------------------*/
	/*  2. smoothScroll jQuery plugin
	/*-------------------------------------------------------------------*/
	smoothScroll.init({
		updateURL: false
	});	
});