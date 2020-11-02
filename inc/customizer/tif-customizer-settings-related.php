<?php

if( ! defined( 'ABSPATH' ) ) exit;

// ... SECTION // Related Settings ..............................................

	$wp_customize->add_section(
		'tif_theme_related_settings_section',
		array(
			'priority'			=> 5071,
			'title'				=> esc_html__( 'Related posts', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// /*
	// * Assigning the plugin name
	// */
	// $tif_plugin_name			= 'tif_related';

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_layout]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_layout', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		new Tif_Radio_Image_Control(
			$wp_customize, $tif_theme_mod . '_related[tif_related_layout]',
			array(
				'section'			=> 'tif_theme_related_settings_section',
				'label'				=> esc_html__( 'Related layout', 'bonjour' ),
				'type'				=> 'radio',
				'choices'			=> array(
					''					=> TIF_ADMIN_IMAGES_URL . '/posts-layout.png',
					'grid'				=> TIF_ADMIN_IMAGES_URL . '/posts-layout-grid.png',
					'row'				=> TIF_ADMIN_IMAGES_URL . '/posts-layout-row.png',
				)
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_related[tif_related_layout]',
		array(
			'selector' => '.related-title',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_content]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_content', 'key' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_select',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_related[tif_related_content]',
		array(
			'section'			=> 'tif_theme_related_settings_section',
			'label'				=> esc_html__( 'Which articles to display?', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'tag'				=> esc_html__( 'Related by tags', 'bonjour' ),
				'category'			=> esc_html__( 'Related by category', 'bonjour' ),
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_entry_order]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_entry_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_related[tif_related_entry_order]',
			array(
				'section'		=> 'tif_theme_related_settings_section',
				'label'			=> esc_html__( 'Elements order', 'bonjour' ),
				'choices'		=> array(
					'entry_thumbnail'    => esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_title_loop'   => esc_html__( 'Title', 'bonjour' ),
					'entry_meta'         => esc_html__( 'Meta', 'bonjour' ),
					'entry_content'      => esc_html__( 'Content', 'bonjour' ),
					'entry_tags'         => esc_html__( 'Tags', 'bonjour' ),
					'entry_read_more'    => esc_html__( 'Read More', 'bonjour' )
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_meta_order]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_meta_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_related[tif_related_meta_order]',
			array(
				'section'		=> 'tif_theme_related_settings_section',
				'label'			=> esc_html__( 'Meta', 'bonjour' ),
				'choices'		=> array(
					'meta_author'        => esc_html__( 'Author', 'bonjour' ),
					'meta_published'         => esc_html__( 'Date', 'bonjour' ),
					'meta_category'          => esc_html__( 'Category', 'bonjour' ),
					'meta_comments'          => esc_html__( 'Comments', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_excerpt_length]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_excerpt_length', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_related[tif_related_excerpt_length]',
		array(
			'section'			=> 'tif_theme_related_settings_section',
			'label'				=> esc_html__( 'Related posts content length', 'bonjour' ),
			'description'		=> sprintf( '%1$s, %2$s',
										esc_html__( 'Number of words displayed', 'bonjour' ),
										esc_html__( '0 to disable', 'bonjour' )
									),
			'type'				=> 'number',
			'input_attrs'		=> array(
				'min'		=> '0',
				'step'		=> '1',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_related[tif_related_excerpt_length]',
		array(
			'selector' => '.related-excerpt-charlength',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_per_page]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_per_page', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
		$wp_customize->add_control(
			$tif_theme_mod . '_related[tif_related_per_page]',
			array(
				'section'		=> 'tif_theme_related_settings_section',
				'label' => esc_html__( 'How many posts to display?', 'bonjour' ),
				'type' => 'number',
				'input_attrs' => array(
					'min' => '1',
					'step' => '1',
				),
			)
		);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_related[tif_related_per_line]',
		array(
			'default'			=> tif_get_default( 'theme_related', 'tif_related_per_line', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_related[tif_related_per_line]',
		array(
			'section'		=> 'tif_theme_related_settings_section',
			'label' => esc_html__( 'How many posts by line?', 'bonjour' ),
			'type' => 'number',
			'input_attrs' => array(
				'min' => '1',
				'step' => '1',
				 'max' => '12',
			),
		)
	);
