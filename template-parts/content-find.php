<div class="find-us" id="find">
	<div class="container">
		<div class="row">
			<h1><?php the_field('find_us_big_heading')?></h1>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-xs-12">
				<div class="directions match-height">
					<h2><?php the_field('find_us_left_column_title')?></h2>
					<div class="lead"><?php the_field('find_us_left_column_subtitle')?></div>
					<?php 
						$map_id = get_field('wp_google_map_id_number');
						echo do_shortcode('[wpgmza id='.$map_id.']')?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="contact match-height">
					<h2><?php the_field('find_us_right_column_title')?></h2>
					<div class="lead">
						<?php the_field('find_us_address')?>
					</div>
					<?php 
						$ninja_form_id = get_field('ninja_form_contact_id');
						if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( $ninja_form_id ); }?>
				</div>
			</div>
		</div>
	</div>
</div>