<div class="airline" id="airport-section">
	<div class="airport-title">
		<div class="container">
			<div class="row">
				<h1><?php the_field('airport_big_heading')?></h1>
			</div>
			<div class="row">
				<div class="condense">
					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="runway">
							<a href="#">
								<div class="airport-arrow"></div>
								<div class="runway-number"><?php the_field('runway_number')?></div>
								<div class="runway-info"><?php the_field('runway_type')?></div>
								<div class="airport-info"><div class="inner-airport-info"><?php the_field('mouse_hover_information_one')?></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="miles-info-one">
							<a href="#">
								<div class="airport-arrow"></div>
								<div class="miles-number"><?php the_field('miles_number_one')?></div>
								<div class="miles-info"><?php the_field('destination_name_one')?></div>
								<div class="airport-info"><div class="inner-airport-info"><?php the_field('mouse_hover_information_two')?></div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="miles-info-two">
							<a href="#">
								<div class="airport-arrow"></div>
								<div class="miles-number"><?php the_field('miles_number_two')?></div>
								<div class="miles-info"><?php the_field('destination_name_two')?></div>
								<div class="airport-info"><div class="inner-airport-info"><?php the_field('mouse_hover_information_three')?></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
				
	<div class="airport-contents">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-xs-12">
					<div class="left-col match-height">
						<div class="contents-heading">
							<?php if( have_rows('five_buttons') ): $count=1;?>
							<ul>
								<?php while ( have_rows('five_buttons') ) : the_row();?>
									<li><a data-toggle="#a<?php echo $count?>" href="#a<?php echo $count?>"><?php the_sub_field('button_label_airport');?></a></li>
									<?php $count++; ?>
								<?php endwhile; ?>
							</ul>
							<?php else : endif; ?>
						</div>
						<div class="contents-details">
							<?php if( have_rows('five_buttons') ): $detailscount=1;?>
							<?php while ( have_rows('five_buttons') ) : the_row();?>
							<section id="a<?php echo $detailscount?>">
								<article><h2><?php the_sub_field('button_label_airport');?></h2><?php the_sub_field('descriptions_airport');?></article>
							</section>
							<?php $detailscount++; ?>
							<?php endwhile; ?><?php else : endif; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="right-col match-height">
						<?php if ( is_active_sidebar( 'sidebar-3' ) ) {
							dynamic_sidebar( 'sidebar-3' ); 
						}?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>