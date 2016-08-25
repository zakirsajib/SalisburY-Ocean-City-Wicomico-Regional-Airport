<?php
/**
 * sby functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sby
 */

if ( ! function_exists( 'sby_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sby_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sby, use a find and replace
	 * to change 'sby' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sby', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'sby' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sby_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'sby_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sby_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sby_content_width', 640 );
}
add_action( 'after_setup_theme', 'sby_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sby_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Weather Sidebar', 'sby' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add Awesome Weather widget', 'sby' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Our Area Right Sidebar', 'sby' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add Text widgets here.', 'sby' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'The Airport Right Sidebar', 'sby' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add Text widgets here.', 'sby' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'sby_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sby_scripts() {
	wp_enqueue_style( 'sby-style', get_stylesheet_uri() );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/animate-css/animate.min.css');
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.min.css'); 
	wp_enqueue_style( 'main', get_template_directory_uri() . '/static/dist/css/main.css');

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', array( 'jquery' ),'', true );	
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/node_modules/jquery-match-height/dist/jquery.matchHeight-min.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'sby-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'sby-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'smoothScroll', get_template_directory_uri() . '/node_modules/smooth-scroll/dist/js/smooth-scroll.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/static/dist/js/app.min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sby_scripts' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function sby_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'sby_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function sby_excerpt_more( $more ) {
    return '.';
}
add_filter( 'excerpt_more', 'sby_excerpt_more' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load SBY News in sidebar
 */
require get_template_directory() . '/inc/sby-news.php';
/**
 * Create Our Area custom post type
 */
require get_template_directory() . '/inc/our-area.php';
