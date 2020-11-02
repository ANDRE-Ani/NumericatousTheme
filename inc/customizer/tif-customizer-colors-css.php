<?php

if( ! defined( 'ABSPATH' ) ) exit;

// DESIGN => SECTION : Generated CSS .........................................

	$wp_customize->add_section(
		'tif_theme_css_generated_settings_section',
		array(
		'priority'				=> 100,
		'title'					=> esc_html__( 'Generated CSS', 'bonjour' ),
		'panel'					=> 'tif_css_colors_panel',
		'description_hidden'	=> false,
	) );

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_css[tif_css_reset]',
		array(
			'default'			=> tif_get_default( 'theme_css', 'tif_css_reset', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_css[tif_css_reset]',
		array(
			'section'			=> 'tif_theme_css_generated_settings_section',
			'label'				=> esc_html__( 'Reset CSS', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'reboot'			=> esc_html__( 'Bootstrap Reboot.css', 'bonjour' ),
				'normalize'			=> esc_html__( 'Normalize.css', 'bonjour' ),
				''					=> esc_html__( 'None', 'bonjour' ),
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_css[tif_knacss_components]',
		array(
			'default'			=> tif_get_default( 'theme_css', 'tif_knacss_components', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_css[tif_knacss_components]',
			array(
				'section'		=> 'tif_theme_css_generated_settings_section',
				'label'			=> esc_html__( 'Knacss components enabled', 'bonjour' ),
				'description'	=> sprintf( '%s<br />%s<br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s<span class="screen-reader-text">%s</span></a>',
					esc_html__( 'This theme uses some Knacss components. Not all of them are necessary but can be activated if you need them.', 'bonjour' ),
					esc_html__( 'You can also disable them if you want to rewrite them in your child theme.', 'bonjour' ),
					esc_url( __( 'https://www.knacss.com/doc.html', 'bonjour' ) ),
					esc_html__( 'Read the knacss documentation', 'bonjour' ),
					esc_html__( '(link opens in a new tab)', 'bonjour' )
				),
				'choices'		=> array(
					'base'			=> esc_html__( 'Base (basic styles)', 'bonjour' ),
					'print'			=> esc_html__( 'Print', 'bonjour' ),
					'layout'		=> esc_html__( 'Flexbox layout', 'bonjour' ),
					'responsive'	=> esc_html__( 'Responsive', 'bonjour' ),
					'media-object'	=> esc_html__( 'Media-object', 'bonjour' ),
					'skip'			=> esc_html__( 'Skip to content (for accessibility)', 'bonjour' ),
					'tables'		=> esc_html__( 'Tables', 'bonjour' ),
					'forms'			=> esc_html__( 'Forms', 'bonjour' ),
					'checkbox'		=> esc_html__( 'Checkbox', 'bonjour' ),
					'tabs'			=> esc_html__( 'Tabs', 'bonjour' ),
					'tags'			=> esc_html__( 'Tags', 'bonjour' ),
					'badges'		=> esc_html__( 'Badges', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_css[tif_css_utilities]',
		array(
			'default'			=> tif_get_default( 'theme_css', 'tif_css_utilities', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_css[tif_css_utilities]',
		array(
			'section'			=> 'tif_theme_css_generated_settings_section',
			'label'				=> esc_html__( 'Utilities', 'bonjour' ),
			'description'		=> esc_html__( 'To generate a lighter css, the Tif utilities are a selection of the Knacss utilities used by this theme. They are sufficient for this theme but you may want to activate all of them if you need them.', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'tif'				=> esc_html__( 'Tif', 'bonjour' ),
				'knacss'			=> esc_html__( 'Knacss', 'bonjour' ),
			)
		)
	);

	// Add Setting
	// ...
	// $wp_customize->add_setting(
	// 	$tif_theme_mod . '_css[tif_css_buttons]',
	// 	array(
	// 		'default'			=> tif_get_default( 'theme_css', 'tif_css_buttons', 'key' ),
	// 		'type'				=> 'option',
	// 		'capability'		=> 'edit_theme_options',
	// 		'sanitize_callback'	=> 'tif_sanitize_select'
	// 	)
	// );
	// $wp_customize->add_control(
	// 	$tif_theme_mod . '_css[tif_css_buttons]',
	// 	array(
	// 		'section'			=> 'tif_theme_css_generated_settings_section',
	// 		'label'				=> esc_html__( 'Buttons', 'bonjour' ),
	// 		'type'				=> 'select',
	// 		'choices'			=> array(
	// 			'tif'				=> esc_html__( 'Tif', 'bonjour' ),
	// 			'knacss'			=> esc_html__( 'Knacss', 'bonjour' ),
	// 			''					=> esc_html__( 'None', 'bonjour' ),
	// 		)
	// 	)
	// );

	// // Add Setting
	// // ...
	// $wp_customize->add_setting(
	// 	$tif_theme_mod . '_css[tif_css_alerts]',
	// 	array(
	// 		'default'			=> tif_get_default( 'theme_css', 'tif_css_alerts', 'key' ),
	// 		'type'				=> 'option',
	// 		'capability'		=> 'edit_theme_options',
	// 		'sanitize_callback'	=> 'tif_sanitize_select'
	// 	)
	// );
	// $wp_customize->add_control(
	// 	$tif_theme_mod . '_css[tif_css_alerts]',
	// 	array(
	// 		'section'			=> 'tif_theme_css_generated_settings_section',
	// 		'label'				=> esc_html__( 'Alert messages', 'bonjour' ),
	// 		'type'				=> 'select',
	// 		'choices'			=> array(
	// 			'tif'				=> esc_html__( 'Tif', 'bonjour' ),
	// 			'knacss'			=> esc_html__( 'Knacss', 'bonjour' ),
	// 			''					=> esc_html__( 'None (if you don\'t use alert messages)', 'bonjour' ),
	// 		)
	// 	)
	// );

// DESIGN => SECTION : Gutenberg CSS components .................................

	$wp_customize->add_section(
		'tif_theme_css_gutenberg_blocks_settings_section',
		array(
		'priority'				=> 100,
		'title'					=> esc_html__( 'Gutenberg blocks CSS', 'bonjour' ),
		'panel'					=> 'tif_css_colors_panel',
		'description_hidden'	=> false,
	) );

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_css[tif_css_wp_blocks_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_css', 'tif_css_wp_blocks_enabled', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_css[tif_css_wp_blocks_enabled]',
		array(
			'section'			=> 'tif_theme_css_gutenberg_blocks_settings_section',
			'label'				=> esc_html__( 'block-library/style.css', 'bonjour' ),
			'description'		=> esc_html__( 'Blocks css', 'bonjour' ),
			'type'				=> 'radio',
			'choices'			=> array(
				'default'			=> esc_html__( 'Keep the default behavior', 'bonjour' ),
				'conditional'		=> esc_html__( 'Load CSS conditionally if block is used', 'bonjour' ),
				'tif'				=> esc_html__( 'Add all blocks style to generated css ', 'bonjour' ),
				'tif_selected'		=> esc_html__( 'Add selected blocks style to generated css ', 'bonjour' ),
				'disabled'			=> esc_html__( 'Disable block-library/style', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_css[tif_css_wp_blocks_enabled]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_css[tif_css_wp_blocks_components]',
		array(
			'default'			=> tif_get_default( 'theme_css', 'tif_css_wp_blocks_components', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_css[tif_css_wp_blocks_components]',
			array(
				'section'		=> 'tif_theme_css_gutenberg_blocks_settings_section',
				'label'			=> esc_html__( 'Blocks style to add to tif generated css', 'bonjour' ),
				'description'	=> esc_html__( 'It is recommended to disable blocks whose css styles are not integrated in generated tif-main.css.', 'bonjour' ),
				'choices'		=> array(
					'image'            => esc_html__( 'Image', 'bonjour' ),
					'cover'            => esc_html__( 'Cover', 'bonjour' ),
					'file'             => esc_html__( 'File', 'bonjour' ),
					'gallery'          => esc_html__( 'Gallery', 'bonjour' ),
					'audio'            => esc_html__( 'Audio', 'bonjour' ),
					'video'            => esc_html__( 'Video', 'bonjour' ),

					// Formatting
					'table'            => esc_html__( 'Table', 'bonjour' ),

					// Layout
					'buttons'          => esc_html__( 'Button', 'bonjour' ),
					'columns'          => esc_html__( 'Columns', 'bonjour' ),
					'media-text'       => esc_html__( 'Media text', 'bonjour' ),
					'spacer'           => esc_html__( 'Spacer', 'bonjour' ),

					// Widgets
					'calendar'         => esc_html__( 'Calendar', 'bonjour' ),
					'categories'       => esc_html__( 'Categories', 'bonjour' ),
					'latest-comments'  => esc_html__( 'Latest comments', 'bonjour' ),
					'latest-posts'     => esc_html__( 'Latest posts', 'bonjour' ),
					'rss'              => esc_html__( 'Rss', 'bonjour' ),
					'search'           => esc_html__( 'Search', 'bonjour' ),
					'social-links'     => esc_html__( 'Social links', 'bonjour' ),

					// Embeds
					'embed'               => esc_html__( 'Embed', 'bonjour' ),
				)
			)
		)
	);
