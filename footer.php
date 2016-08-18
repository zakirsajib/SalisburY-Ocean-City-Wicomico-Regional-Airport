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
		<div class="container"><div class="row">
		<div class="site-info center-block">
			<div class="col-md-7 copyright">
                  <p class="text-grey">&copy; <?php _e(date('Y')); ?> <?php echo get_theme_mod('copyright_text', 'No copyright information has been saved yet.')?></p>
            </div>
			<div class="col-md-5 credit">Website by <a href="<?php echo get_theme_mod('credit_url', 'No credit url has been saved yet.')?>" rel="client" target="_blank"><?php echo get_theme_mod('credit_name', 'No credit name has been saved yet.')?></a>
		</div><!-- .site-info -->
		</div><!-- .row -->
		</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
