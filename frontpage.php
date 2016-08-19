<?php
/**
 * Template Name: Home
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sby
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();?>

				<div class="slider">
					<div class="top-blue-curve hidden-sm hidden-xs"></div>
					<?php echo do_shortcode('[layerslider id="1"]');?>
				</div>
								
				<?php get_template_part('template-parts/content', 'airline');?>
				<?php get_template_part('template-parts/content', 'parking');?>
				<?php get_template_part('template-parts/content', 'news');?>
				<?php get_template_part('template-parts/content', 'find');

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
