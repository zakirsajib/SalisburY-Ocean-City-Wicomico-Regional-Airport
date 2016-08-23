<div class="sby-news" id="news">
	<div class="container">
		<div class="row">
			<div class="sby-news-heading">
				<h2>SBY News</h2>
			</div>
		</div>		
		<div class="row">
			<div class="news-contents">
				<div class="col-lg-8 col-md-8 col-xs-12">
					<div class="left-col match-height">
						<div id="owl-demo" class="owl-carousel">
							<?php
								$query = new WP_Query( array(
						        'post_type' => 'post',
						        'posts_per_page' => -1,
						        'order' => 'DESC',
						        'orderby' => 'publish_date',
								) );
							if ( $query->have_posts() ) { 	
								while ( $query->have_posts() ) : $query->the_post(); ?>
									<div class="news-posts">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail('full', array('alt'=>get_the_title($post->ID),'class'=>"img-responsive", 'title'=>get_the_title($post->ID))); ?>
										<?php else:?>
											<img class="img-responsive" src="http://placehold.it/450x350" alt="default image" />								<?php endif; ?>
										<h2><?php the_title()?></h2>
										<?php the_content()?>
									</div>
							<?php endwhile;
							 wp_reset_postdata(); } ?>
						</div>	
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="right-col match-height">
						<h4>Recent Posts</h4>
						<div class="sby-news-post">
							<?php echo do_shortcode('[sby-news]') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>