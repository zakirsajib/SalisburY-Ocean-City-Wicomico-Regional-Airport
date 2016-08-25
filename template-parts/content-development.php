<div class="development-section" id="development">
	<div class="development-featured-img">
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('development_section_image')?>"></div>
		<h2><?php the_field('development_big_heading')?></h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="development-heading">
				<h2><?php the_field('development_heading')?></h2>
				<div class="col-lg-12">
					<div class="lead"><?php the_field('development_subtitle')?></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-md-4 col-xs-6">
				<div class="first-col match-height">
					<?php the_field('development_left_column_contents')?>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-xs-6">
				<div class="sec-col match-height">
					<?php the_field('development_middle_column_contents')?>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-xs-12">
				<div class="third-col match-height">
					<?php the_field('development_right_column_contents')?>
				</div>
			</div>
		</div>
	</div>
</div>