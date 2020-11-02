<?php

if( ! defined( 'ABSPATH' ) ) exit;

// === PANEL // ADD TO EXISTING WP PANEL =======================================

// ... SECTION // title_tagline ................................................

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_tagline_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_tagline_enabled', 'checkbox' ),
			'capability'		=> 'edit_theme_options',
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_tagline_enabled]',
		array(
			'section'			=> 'title_tagline',
			'label'				=> esc_html__( 'Tagline enabled', 'bonjour' ),
			'type'				=> 'checkbox',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_branding_home_h1]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_branding_home_h1', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_text'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_branding_home_h1]',
		array(
			'section'			=> 'title_tagline',
			'label'				=> esc_html__( 'Display an element of the branding area in a h1 tag', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				''					=> esc_html__( 'None', 'bonjour' ),
				'title'				=> esc_html__( 'Title', 'bonjour' ),
				'tagline'			=> esc_html__( 'Tagline', 'bonjour' )
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_branding_home_h1]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_logo_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_logo_enabled', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_logo_enabled]',
		array(
			'section'			=> 'title_tagline',
			'label'				=> esc_html__( 'Logo display', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'text_only'		=> esc_html__( 'Header Text Only', 'bonjour' ),
				'logo_only'		=> esc_html__( 'Header Logo Only', 'bonjour' ),
				'both'			=> esc_html__( 'Show Both', 'bonjour' ),
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_logo]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_logo', 'url' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, $tif_theme_mod . '_settings[tif_logo]',
			array(
				'section'		=> 'title_tagline',
				'label'			=> esc_html__( 'Upload logo for your header. Recommended size is 430 X 100 pixels but you can add any size you like.', 'bonjour' ),
				'setting'		=> $tif_theme_mod . '_settings[tif_logo]'
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_logo]',
		array(
			'selector' => '#site-branding',
		)
	);
