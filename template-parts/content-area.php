<div class="area" id="area">
	<div class="container">
		<div class="row">
			<div class="area-heading">
				<h2><?php the_field('area_heading')?></h2>
				<div class="lead"><?php the_field('area_subtitle')?></div>
			</div>
		</div>
		<div class="row">
			<div class="area-contents">
				<div class="col-lg-8 col-md-8 col-xs-12">
					<div class="left-col match-height">
						<div id="owl-demo" class="owl-carousel">
							<?php
								$query = new WP_Query( array(
						        'post_type' => 'our_area',
						        'posts_per_page' => -1,
						        'order' => 'DESC',
						        'orderby' => 'publish_date',
								) );
							if ( $query->have_posts() ) { 	
								while ( $query->have_posts() ) : $query->the_post(); ?>
									<div class="area-posts">
										<h3><?php the_title()?></h3>
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail('full', array('
													alt'=>get_the_title($post->ID),
													'class'=>"img-responsive", 
													'title'=>get_the_title($post->ID)
											)); ?>
										<div class="clearfix"></div>
										<?php endif; ?>
										<?php the_content()?>	
									</div>
								<?php endwhile; wp_reset_postdata(); } ?>
						</div>	
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="right-col match-height">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ) {
							dynamic_sidebar( 'sidebar-2' ); 
						}?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>