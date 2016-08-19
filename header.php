<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sby
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="preloader"><div id="status">&nbsp;</div></div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sby' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
<!-- 					<div class="col-lg-3 col-md-3 first-col"> -->	
					<div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
						<?php else : ?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
						<?php
						endif;?>
				   </div> <!-- .navbar-header -->
<!-- 					</div> -->
					<div class="col-lg-4 col-md-4 mid-col col-lg-offset-2">	
				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
				                'menu_class'        => 'center-block'
				            ));
				        ?>
				        
				    </div> <!-- .mid-col -->
					<div class="col-lg-4 col-md-5 hidden-sm hidden-xs">
						<div class="top-menu">
							<ul>
								<li><a href="#directory">Directory</a></li>
								<li><a href="#our-area">Our Area</a></li>
								<li><a href="#news">News</a></li>
								<li id="last"><a href="#directions">Directions</a></li>
							</ul>
						</div>
						<div class="weather-widget pull-right">
							<a href="#" class="weather-icon"><i class="wi wi-cloudy"></i></a>
							<div class="menu-weather">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>
						</div>
					</div> <!-- .right-col -->
				</div> <!-- .row -->
				<div class="sby-tag-line row hidden-xs">
					<div class="center-block">
						<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div>
				</div>
		    </div><!-- .container -->
		</nav><!-- .navbar -->	
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
