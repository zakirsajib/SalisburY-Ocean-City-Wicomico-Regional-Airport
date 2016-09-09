<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					<?php 
						$slider_number = get_field('slider_number');
						echo do_shortcode('[layerslider id=1]');?>
				</div>
			
			<div class="container">
				<div class="row">
					<div class="single-blog">	
					<?php get_template_part( 'template-parts/content', get_post_format() );
					the_post_navigation();
		
					// If comments are open or we have at least one comment, load up the comment template.
					//if ( comments_open() || get_comments_number() ) :
					//	comments_template();
					//endif;?>
					</div>
				</div>
			</div>

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
