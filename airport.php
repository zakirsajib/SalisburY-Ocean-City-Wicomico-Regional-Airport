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
			while ( have_posts() ) : the_post();?>
				<div class="airport">
					<div class="top-blue-curve hidden-sm hidden-xs"></div>
					<div class="airport-map">
						<div class="container">
							<div class="row">
								<div class="airport-nav pull-right">
									<ul>
										<li><a data-scroll href="#aviation"><img src="<?php echo get_template_directory_uri(); ?>/img/aviation-icon.png" alt=""><div class="nav-text">General Aviation</div></a></li>
										<li><a data-scroll href="#development"><img src="<?php echo get_template_directory_uri(); ?>/img/business-center-icon.png" alt=""><div class="nav-text">Air Business Center</div></a></li>
										<li><a data-scroll href="#directory"><img src="<?php echo get_template_directory_uri(); ?>/img/directory-icon.png" alt=""><div class="nav-text">Business Directory</div></a></li>
										<li><a data-scroll href="#area"><img src="<?php echo get_template_directory_uri(); ?>/img/area.png" alt=""><div class="nav-text">Our Area</div></a></li>
									</ul>
								</div>
							</div> <!-- .container-->
						</div><!-- .row -->
						<div class="down-arrow center-block">
						<a data-scroll href="#airport-section"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" alt="Down Arrow"></a></div>
					</div><!-- .airport-map -->
				</div><!-- .airport -->
				<?php get_template_part('template-parts/content', 'airport');?>
				<?php get_template_part('template-parts/content', 'aviation');?>
				<?php get_template_part('template-parts/content', 'development');?>

			<?php endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
