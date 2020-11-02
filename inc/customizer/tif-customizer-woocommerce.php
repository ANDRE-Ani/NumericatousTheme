<?php

if( ! defined( 'ABSPATH' ) ) exit;

if( tif_is_woocommerce_activated() ) {

	// ... SECTION //  .................................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_woocommerce_layout_section',
		array(
			'priority'			=> 1,
			'title'				=> esc_html__( 'Woocommerce layout', 'bonjour' ),
			'panel'				=> 'woocommerce'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_woocommerce_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_woocommerce_layout', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		new Tif_Radio_Image_Control(
			$wp_customize, $tif_theme_mod . '_layout[tif_woocommerce_layout]',
			array(
				'section'			=> 'tif_theme_woocommerce_layout_section',
				'label'				=> esc_html__( 'Default woocommerce layout', 'bonjour' ),
				'type'				=> 'radio',
				'settings'			=> $tif_theme_mod . '_layout[tif_woocommerce_layout]',
				'choices'			=> array(
					'right_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-right.png',
					'left_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-left.png',
					'wide'				=> TIF_ADMIN_IMAGES_URL . '/layout-theme-wide.png',
					'no_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-no-sidebar.png'
				)
			)
		)
	);


	// Add Setting
	// Default layout for pages
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_woocommerce_pages_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_woocommerce_pages_layout', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		new Tif_Radio_Image_Control(
			$wp_customize, $tif_theme_mod . '_layout[tif_woocommerce_pages_layout]',
			array(
				'section'			=> 'tif_theme_woocommerce_layout_section',
				'label'				=> esc_html__( 'Woocommerce pages layout', 'bonjour' ),
				'description'		=> esc_html__( 'For cart, checkout and account pages', 'bonjour' ),
				'type'				=> 'radio',
				'settings'			=> $tif_theme_mod.'[tif_woocommerce_pages_layout]',
				'choices'			=> array(
					'right_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-right.png',
					'left_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-left.png',
					'wide'				=> TIF_ADMIN_IMAGES_URL . '/layout-theme-wide.png',
					'no_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-no-sidebar.png'
				)
			)
		)
	);

}
