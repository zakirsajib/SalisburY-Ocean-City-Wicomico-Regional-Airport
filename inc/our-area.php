<?php
/********** Our Area Post types ***********/


add_action('init', 'our_area_init');

function our_area_init(){

	$labels = array(
	'name' => _x('Our Area', 'post type general name'),
	'singular_name' => _x('Our Area', 'post type singular name'),
	'add_new' => _x('Add New', 'Our Area'),
	'add_new_item' => __('Add New Our Area'),
	'edit_item' => __('Edit Our Area'),
	'new_item' => __('New Our Area'),
	'all_items' => __('All Our Area'),
	'view_item' => __('View Our Area'),
	'search_items' => __('Search Our Area'),
	'not_found' =>  __('No Our Area found'),
	'not_found_in_trash' => __('No Our Area found in Trash'), 
	'parent_item_colon' => '',
	'menu_name' => 'Our Area'

	);
	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'show_in_menu' => true, 
	'query_var' => true,
	'rewrite' => array(
			'slug' => 'our-area'
			),
	'capability_type' => 'post',
	'has_archive' => true, 
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array('title','editor','excerpt','thumbnail')
	); 
	register_post_type('our_area',$args);
}
?>