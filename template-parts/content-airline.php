<div class="airline" id="airline-section">
	<div class="container">
		<div class="row">
			<div class="down-arrow center-block">
				<a data-scroll href="#airline-section"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" alt=""></a>
			</div>
		</div>
	</div>
	<div class="airline-title">
		<div class="container">
			<div class="row">
				<h1><?php the_field('airline_big_heading')?></h1>
			</div>
		</div>
	</div>
				
	<div class="airline-contents">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-xs-12">
					<div class="left-col">
						<?php the_field('airline_left_column')?>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="right-col">
						<div class="american-aa-sidebar">
							<div class="american-heading">
								<a href="<?php the_field('airline_right_column_image_url')?>" target="_blank"><img src="<?php the_field('airline_right_column_image')?>" alt="American Airlines"></a>
							</div>
							<div class="american-contents"><?php the_field('arline_contents')?></div>	
						</div>
<!--
						<div class="sby-news-sidebar">
							<div class="sby-news-heading">
								<div id="element-1" class="element"><h2><?php the_field('sby_news_sidebar_title_one')?></h2></div>
								<div id="element-2" class="element"><h3><?php the_field('sby_news_sidebar_title_two')?></h3></div>
							</div>
							<div class="sby-news-post">
								<?php echo do_shortcode('[sby-news]') ?>
							</div>
						</div>
-->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>