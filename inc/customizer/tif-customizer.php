<?php

if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Tif Theme Customizer
 *
 * @package Themes in France
 * @since 1.0
 */

function tif_customize_register( $wp_customize ) {

	if( ! class_exists( 'WP_Customize_Control' ) )
		return null;

	require_once get_template_directory() . '/inc/customizer/tif-customizer-extend.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->remove_control( 'display_header_text' );
	$wp_customize->remove_section( 'colors' );

	if( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title',
			'render_callback' => 'tif_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'tif_customize_partial_blogdescription',
		) );

	}

	// Assigning the theme name
	global $tif_theme_name;
	global $tif_theme_mod;

	require_once get_template_directory() . '/inc/customizer/tif-customizer-add.php';

	require_once get_template_directory() . '/inc/customizer/tif-customizer-layout.php';

	require_once get_template_directory() . '/inc/customizer/tif-customizer-settings.php';

	require_once get_template_directory() . '/inc/customizer/tif-customizer-images.php';

	require_once get_template_directory() . '/inc/customizer/tif-customizer-colors.php';

	$wp_customize->add_section(
		'tif_theme_important_links_section',
		array(
			'title'				=> esc_html__( 'Themes in France', 'bonjour' ),
			'priority'			=> 9999,
		)
	);

	$wp_customize->add_setting(
		'tif_important_links',
		array(
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		new Tif_Important_Links(
			$wp_customize, 'important_links',
			array(
				'label'				=> esc_html__( 'Looking for more options?', 'bonjour' ),
				'section'			=> 'tif_theme_important_links_section',
				'settings'			=> 'tif_important_links',
				'priority' => 1,
			)
		)
	);

}

add_action( 'customize_register', 'tif_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tif_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tif_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue styles for customizer
 */
// function tif_customizer_css() {
//
// 	wp_register_style( 'tif-admin', get_template_directory_uri() . 'tif/assets/css/tif-mycss.css', null, null, 'all' );
// 	wp_enqueue_style( 'tif-admin' );
//
// }
// add_action( 'customize_controls_print_styles', 'tif_customizer_css' );

/**
 * Enqueue scripts for customizer
 */
function tif_customizer_js() {

	wp_enqueue_script( 'tif-customizer', get_template_directory_uri() . '/assets/js/admin/tif-customizer.js', '', '1.0.0', true );
	wp_enqueue_script( 'tif-tinycolor', get_template_directory_uri() . '/assets/js/admin/tinycolor.min.js', '', '1.0.0', true );
	wp_enqueue_script( 'tif-ntc', get_template_directory_uri() . '/assets/js/admin/ntc.min.js', '', '1.0.0', true );

}
add_action( 'customize_controls_enqueue_scripts', 'tif_customizer_js' );
