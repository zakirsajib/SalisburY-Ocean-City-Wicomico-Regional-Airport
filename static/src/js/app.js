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
	
	/*-------------------------------------------------------------------*/
	/*  5. Show menu title while hovering on image
	/*-------------------------------------------------------------------*/
	
	$j('.airport-nav li > a').hover( function() {
        $j(this).find('.nav-text').fadeIn(300);
    }, function() {
        $j(this).find('.nav-text').fadeOut(100);
    });
    
    /*-------------------------------------------------------------------*/
	/*  6. Show runway information while hovering on
	/*-------------------------------------------------------------------*/
	
	$j('.runway a, .miles-info-one a, .miles-info-two a').hover( function() {
        $j(this).find('.airport-info').fadeIn(300);
    }, function() {
        $j(this).find('.airport-info').fadeOut(100);
    });
    
    /*-------------------------------------------------------------------*/
	/*  7. 
	/*-------------------------------------------------------------------*/
	$j('.runway a, .miles-info-one a, .miles-info-two a').click(function(e){
		e.preventDefault();
	})
	
	/*-------------------------------------------------------------------*/
	/*  8. Our History...Public Documents show/hide
	/*-------------------------------------------------------------------*/
	$j('.contents-details #a1').css('display','block');
	
	$j(".contents-heading ul > li > a[data-toggle]").on("click", function(e) {
	  	e.preventDefault();  // prevent navigating
	  	var selector = $j(this).data("toggle");  // get corresponding element
	  	$j(".contents-details section").hide();
	  	$j(selector).show();
	  	$j(selector).addClass('animated fadeIn');
	});
	/*-------------------------------------------------------------------*/
	/*  9. Makes the height of all selected elements (".match-height")
	/*  exactly equal. Requires jQuery matchHeight plugin.
	/*-------------------------------------------------------------------*/
	$j('.match-height').matchHeight();
});
