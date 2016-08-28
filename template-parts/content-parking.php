<div class="parking" id="parking">
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="parking-col match-height">
						<?php the_field('services_one')?>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="transportation-col match-height">
						<?php the_field('services_two')?>
					</div>
				</div>
	
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="taxi-col match-height">
						<?php the_field('services_three')?>
					</div>
				</div>
	
			</div>
		</div>
	</div>
</div>

<style>
	.parking{
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center bottom;
		background-attachment: fixed;
		background-image: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php the_field('parking_background_image')?>);
		background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php the_field('parking_background_image')?>);
		background-image: -o-linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php the_field('parking_background_image')?>);
		background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php the_field('parking_background_image')?>);
		background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php the_field('parking_background_image')?>);
		background-image: -webkit-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php the_field('parking_background_image')?>);
	}
</style>