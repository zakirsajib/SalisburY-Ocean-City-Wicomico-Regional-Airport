<?php
/**
 * sby Theme Customizer.
 *
 * @package sby
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sby_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Remove Existing sections
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');	
	
	// Remove Existing controls
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	
	// Footer Panel
	$wp_customize->add_panel( 'panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'sby' ),
	    'description' => __( 'Description of what this panel does.', 'sby' ),
	) );
	
	//Copyright section
	$wp_customize->add_section( 'section_copyright', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Copyright', 'sby' ),
			'description' => '',
			'panel' => 'panel_id',
	) );
	
	// Copyright Notice	
	$wp_customize->add_setting( 'copyright_text', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'copyright_text', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_copyright',
	    'label' => __( 'Copyright Info Field', 'sby' ),
	    'description' => '',
	) );
	
	//Credit section
	$wp_customize->add_section( 'section_credit', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Credit', 'sby' ),
			'description' => '',
			'panel' => 'panel_id',
	) );
	
	// Credit Name	
	$wp_customize->add_setting( 'credit_name', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'credit_name', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_credit',
	    'label' => __( 'Website built by', 'sby' ),
	    'description' => '',
	) );
	
	// Credit URL
	$wp_customize->add_setting( 'credit_url', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => '',
	) );
	$wp_customize->add_control( 'credit_url', array(
	    'type' => 'text',
	    'priority' => 10,
	    'section' => 'section_credit',
	    'label' => __( 'URL', 'sby' ),
	    'description' => '',
	) );

}
add_action( 'customize_register', 'sby_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sby_customize_preview_js() {
	wp_enqueue_script( 'sby_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sby_customize_preview_js' );
