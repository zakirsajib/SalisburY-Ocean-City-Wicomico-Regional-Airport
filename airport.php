<?php
/**
 * Template Name: The Airport
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
			while ( have_posts() ) : the_post();

				

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
