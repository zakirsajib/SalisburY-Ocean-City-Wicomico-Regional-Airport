<div class="directory-section" id="directory">
	<div class="directory-featured-img">
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('directory_section_image')?>"></div>
		<h2><?php the_field('directory_big_heading')?></h2>
	</div>
	<div class="directory-contents">	
		<div class="container">
			<div class="row">
				<div class="directory-heading">
					<h2><?php the_field('directory_heading')?></h2>
				</div>
			</div>
		</div>
		<div class="container">	
			<div class="row">
				<?php
				if( have_rows('directory_information') ):
				    while ( have_rows('directory_information') ) : the_row();?>
						<div class="col-lg-3 col-md-3 col-xs-12">
							<div class="first-col match-height">
								<?php the_sub_field('business_directory'); ?>
							</div>
						</div>
				    <?php endwhile;
				else :
				
				endif;
				?>
			</div>
		</div>
	</div>
</div>