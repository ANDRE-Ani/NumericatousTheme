<?php

if( ! defined( 'ABSPATH' ) ) exit;

// === PANEL // Images settings ===================================================

	$wp_customize->add_panel(
		'tif_theme_images_settings_panel',
		array(
			'capabitity'		=> 'edit_theme_options',
			'priority'			=> 600,
			'title'				=> esc_html__( 'Tif - Images', 'bonjour' )
		)
	);

// ... SECTION // Images ratio settings ........................................

	$wp_customize->add_section(
		'tif_theme_images_ratio_settings_section',
		array(
			'priority'			=> 6010,
			'title'				=> esc_html__( 'Image Ratios and Compression', 'bonjour' ),
			'panel'				=> 'tif_theme_images_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_compression_ratio]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_compression_ratio', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_images[tif_images_compression_ratio]',
		array(
			'section'			=> 'tif_theme_images_ratio_settings_section',
			'label'				=> esc_html__( 'Image compression ratio', 'bonjour' ),
			'type'				=> 'number',
			'input_attrs'		=> array(
				'min'		=> '10',
				'max'		=> '100',
				'step'		=> '5',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_thumb_ratio]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_thumb_ratio', 'text' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_text',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_images[tif_images_thumb_ratio]',
		array(
			'section'			=> 'tif_theme_images_ratio_settings_section',
			'label'				=> esc_html__( 'Thumbnail ratio', 'bonjour' ),
			'type'				=> 'select',
			'description'		=> sprintf( '%s<br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s</a>',
			esc_html__( 'If uncropped, images will display using the aspect ratio in which they were uploaded', 'bonjour' ),
			esc_url( __( 'https://en.wikipedia.org/wiki/Aspect_ratio_(image)', 'bonjour' ) ),
			esc_html__( 'More details on image ratio', 'bonjour' )
			),
			'choices'			=> array(
				/**
				 * @link https://en.wikipedia.org/wiki/Aspect_ratio_(image)
				 */
				'uncropped'			=> esc_html__( 'Uncropped ', 'bonjour' ),
				'1,1'				=> '1:1',
				'6,5'				=> '6:5',
				'4,3'				=> '4:3',
				'11,8'				=> '11:8',
				'3,2'				=> '3:2',
				'14,9'				=> '14:9',
				'16,10'				=> '16:10',
				'5,3'				=> '5:3',
				'16,9'				=> '16:9',
				'2,1'				=> '2:1',
				'4,1'				=> '4:1',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_images[tif_images_thumb_ratio]',
		array(
			'selector' => '.tif-thumb-ratio',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_medium_ratio]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_medium_ratio', 'text' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_text'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_images[tif_images_medium_ratio]',
		array(
			'section'			=> 'tif_theme_images_ratio_settings_section',
			'label'				=> esc_html__( 'Medium ratio', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				/**
				 * @link https://en.wikipedia.org/wiki/Aspect_ratio_(image)
				 */
				'uncropped'			=> esc_html__( 'Uncropped ', 'bonjour' ),
				'1,1'				=> '1:1',
				'6,5'				=> '6:5',
				'4,3'				=> '4:3',
				'11,8'				=> '11:8',
				'3,2'				=> '3:2',
				'14,9'				=> '14:9',
				'16,10'				=> '16:10',
				'5,3'				=> '5:3',
				'16,9'				=> '16:9',
				'2,1'				=> '2:1',
				'4,1'				=> '4:1',
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_large_ratio]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_large_ratio', 'text' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_text'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_images[tif_images_large_ratio]',
		array(
			'section'			=> 'tif_theme_images_ratio_settings_section',
			'label'				=> esc_html__( 'Large ratio', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				/**
				 * @link https://en.wikipedia.org/wiki/Aspect_ratio_(image)
				 */
				'uncropped'			=> esc_html__( 'Uncropped ', 'bonjour' ),
				'1,1'				=> '1:1',
				'6,5'				=> '6:5',
				'4,3'				=> '4:3',
				'11,8'				=> '11:8',
				'3,2'				=> '3:2',
				'14,9'				=> '14:9',
				'16,10'				=> '16:10',
				'5,3'				=> '5:3',
				'16,9'				=> '16:9',
				'2,1'				=> '2:1',
				'4,1'				=> '4:1',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_images[tif_images_large_ratio]',
		array(
			'selector' => '.tif-large-ratio',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_single_ratio]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_single_ratio', 'text' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_text'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_images[tif_images_single_ratio]',
		array(
			'section'			=> 'tif_theme_images_ratio_settings_section',
			'label'				=> esc_html__( 'Single post ratio', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				/**
				 * @link https://en.wikipedia.org/wiki/Aspect_ratio_(image)
				 */
				''					=> esc_html__( 'Use Large ratio ', 'bonjour' ),
				'uncropped'			=> esc_html__( 'Uncropped ', 'bonjour' ),
				'1,1'				=> '1:1',
				'6,5'				=> '6:5',
				'4,3'				=> '4:3',
				'11,8'				=> '11:8',
				'3,2'				=> '3:2',
				'14,9'				=> '14:9',
				'16,10'				=> '16:10',
				'5,3'				=> '5:3',
				'16,9'				=> '16:9',
				'2,1'				=> '2:1',
				'4,1'				=> '4:1',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_images[tif_images_single_ratio]',
		array(
			'selector' => '.tif-single-large-ratio',
		)
	);

// ... SECTION // Images generated settings ....................................


	$wp_customize->add_section(
		'tif_theme_images_generated_settings_section',
		array(
			'priority'			=> 6020,
			'title'				=> esc_html__( 'On-the-fly generation', 'bonjour' ),
			'panel'				=> 'tif_theme_images_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_onthefly_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_onthefly_enabled', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_images[tif_images_onthefly_enabled]',
			array(
				'section'		=> 'tif_theme_images_generated_settings_section',
				'label'			=> esc_html__( 'On-the-fly generated images', 'bonjour' ),
				'description'   => esc_html__( 'To minimize disk space requirements, this theme generates images on the fly. However, you can force the generation of some of them.', 'bonjour' ),
				'choices'		=> array(
					'thumbnail'		=> esc_html__( 'Thumbnail', 'bonjour' ),
					'medium'		=> esc_html__( 'Medium', 'bonjour' ),
					'medium_large'	=> esc_html__( 'Medium_large', 'bonjour' ),
					'large'			=> esc_html__( 'Large', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_images[tif_images_fake_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_images', 'tif_images_fake_enabled', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_images[tif_images_fake_enabled]',
			array(
				'section'		=> 'tif_theme_images_generated_settings_section',
				'label'			=> esc_html__( 'Display fake images when no thumbnail', 'bonjour' ),
				'choices'		=> array(
					'home'		=> esc_html__( 'Homepage', 'bonjour' ),
					'archives'	=> esc_html__( 'Archives', 'bonjour' ),
					'related'	=> esc_html__( 'Related posts', 'bonjour' ),
				)
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_images[tif_images_fake_enabled]',
		array(
			'selector' => '.blank-thumbnail + .hover',
		)
	);
