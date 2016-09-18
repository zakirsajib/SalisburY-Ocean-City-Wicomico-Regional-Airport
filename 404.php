<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sby
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="slider">
				<div class="top-blue-curve hidden-sm hidden-xs"></div>
				<?php 
					$slider_number = get_field('slider_number');
					echo do_shortcode('[layerslider id=1]');?>
			</div>
			<div class="container"><div class="row">
			<section class="error-404 not-found col-md-10 col-md-offset-1">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sby' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links above or a search?', 'sby' ); ?></p>

					<?php get_search_form();?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			</div></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
