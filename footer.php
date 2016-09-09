<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sby
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="site-info center-block">
					<div class="col-md-12 copyright">
		                  <p class="text-grey">&copy; <?php _e(date('Y')); ?> <?php echo get_theme_mod('copyright_text', 'No copyright information has been saved yet.')?> &nbsp;&nbsp;&nbsp;&nbsp;Website by <a href="<?php echo get_theme_mod('credit_url', 'No credit url has been saved yet.')?>" rel="client" target="_blank"><?php echo get_theme_mod('credit_name', 'No credit name has been saved yet.')?></a></p></div>
				</div><!-- .site-info -->
			</div><!-- .row -->
		</div> <!-- .container -->
	</footer><!-- #colophon -->
	
	<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
	
</div><!-- #page -->
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-40384514-6', 'auto');

  ga('send', 'pageview');

 

</script>
<?php wp_footer(); ?>

</body>
</html>
