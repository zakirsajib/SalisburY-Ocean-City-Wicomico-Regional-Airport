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
	/*-------------------------------------------------------------------*/
	/*  3. toggle - sby news sidebar
	/*-------------------------------------------------------------------*/
	$j('.post-excerpt').hide();
	$j('.post-title, .post-time').click(function(e){
		e.preventDefault();
		var $this = $j(this).parent().find('.post-excerpt');
		$j(".post-title .post-excerpt").not($this).hide();
		$this.toggle();
	})
		/*-------------------------------------------------------------------*/
	/*  4. Preloader. Requires jQuery jpreloader plugin.
	/*-------------------------------------------------------------------*/

	$j(window).load(function() { // makes sure the whole site is loaded
	  $j('#status').fadeOut(); // will first fade out the loading animation
	  $j('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	  $j('body').delay(350).css({
	    'overflow': 'visible'
	  });
	})
});
