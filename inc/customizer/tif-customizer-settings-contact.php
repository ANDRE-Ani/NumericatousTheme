<?php

if( ! defined( 'ABSPATH' ) ) exit;

// ... SECTION // Contact settings .............................................

	$wp_customize->add_section(
		'tif_contact_settings_section',
		array(
			'priority'			=> 5131,
			'panel'				=> 'tif_theme_settings_panel',
			'title'				=> esc_html__( 'Contact settings', 'bonjour' )
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_contact_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_contact_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_contact_order]',
			array(
				'section'		=> 'tif_contact_settings_section',
				'label'			=> esc_html__( 'Main content order', 'bonjour' ),
				'choices'		=> array(
					'entry_title'	=> esc_html__( 'Title', 'bonjour' ),
					// 'entry_thumbnail'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_excerpt'	=> esc_html__( 'Excerpt (if filled in)', 'bonjour' ),
					'contact_form'	=> esc_html__( 'Contact form', 'bonjour' ),
					'entry_content'	=> esc_html__( 'Content', 'bonjour' ),
					'contact_map'	=> esc_html__( 'Map', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_contact_sidebar_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_contact_sidebar_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_contact_sidebar_order]',
			array(
				'section'		=> 'tif_contact_settings_section',
				'label'			=> esc_html__( 'Sidebar elements order', 'bonjour' ),
				'choices'		=> array(
					'entry_excerpt'	=> esc_html__( 'Excerpt (if filled in)', 'bonjour' ),
					'contact_form'	=> esc_html__( 'Contact form', 'bonjour' ),
					'contact_map'	=> esc_html__( 'Map', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_form_mail]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_form_mail', 'email' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_email',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_form_mail]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Mail contact', 'bonjour' ),
			'type'				=> 'text',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_form_subjet]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_form_subjet', 'text' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_text',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_form_subjet]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Mail subjet', 'bonjour' ),
			'type'				=> 'text',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_form_matter]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_form_matter', 'textarea' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'sanitize_textarea_field'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_form_matter]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Description', 'bonjour' ),
			'description'		=> esc_html__( 'Detail the motives of contact form. Leave blank to disable (20 lines maximum)', 'bonjour' ),
			'type'				=> 'textarea',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_form_antispam]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_form_antispam', 'key' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_select',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_form_antispam]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Anti-spam system', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				''					=> esc_html__( 'None', 'bonjour' ),
				'honeypot'			=> esc_html__( 'Honeypot', 'bonjour' ),
				'addition'			=> esc_html__( 'Addition', 'bonjour' ),
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_map_latitude]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_map_latitude', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_map_latitude]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Latitude', 'bonjour' ),
			'type'				=> 'number',
			'description'		=> sprintf( '<a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s<span class="screen-reader-text">%s</span></a><br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s<span class="screen-reader-text">%s</span></a>',
			esc_url( __( 'https://www.mapsdirections.info/en/gps-coordinates.html', 'bonjour' ) ),
			esc_html__( 'Find your latitude & longitude', 'bonjour' ),
			esc_html__( '(link opens in a new tab)', 'bonjour' ),
			esc_url( __( 'https://en.wikipedia.org/wiki/Latitude', 'bonjour' ) ),
			esc_html__( 'Get more informations about latitude', 'bonjour' ),
			esc_html__( '(link opens in a new tab)', 'bonjour' )
			),
			'input_attrs'		=> array(
				'min'		=> '-90',
				'max'		=> '90',
				'step'		=> '0.00001',
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_map_longitude]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_map_longitude', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_map_longitude]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Longitude', 'bonjour' ),
			'type'				=> 'number',
			'description'		=> sprintf( '<a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s<span class="screen-reader-text">%s</span></a>',
				esc_url( __( 'https://en.wikipedia.org/wiki/Longitude', 'bonjour' ) ),
				esc_html__( 'Get more informations about longitude', 'bonjour' ),
				esc_html__( '(link opens in a new tab)', 'bonjour' )
			),
			'input_attrs'		=> array(
				'min'		=> '-180',
				'max'		=> '180',
				'step'		=> '0.00001',
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_map_zoom]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_map_zoom', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_select',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_map_zoom]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Select map zoom?', 'bonjour' ),
			'type'				=> 'select',
			'choices'				=> array(
				'12'				=> '12',
				'13'				=> '13',
				'14'				=> '14',
				'15'				=> '15',
				'16'				=> '16',
				'17'				=> '17',
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_map_height]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_map_height', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_map_height]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Map height (pixel)', 'bonjour' ),
			'type'				=> 'number',
			'input_attrs'		=> array(
				'min'		=> '100',
				'max'		=> '1000',
				'step'		=> '50',
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_map_popup]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_map_popup', 'html' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_html',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_map_popup]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Your adresse', 'bonjour' ),
			'type'				=> 'text',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_tiles]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_tiles', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_contact[tif_contact_tiles]',
			array(
				'section'		=> 'tif_contact_settings_section',
				'label'			=> esc_html__( 'Tiles', 'bonjour' ),
				'choices'		=> array(
					'osm'             => esc_html__( 'OpenStreetMap', 'bonjour' ),
					'osmfr'           => esc_html__( 'OpenStreetMap France', 'bonjour' ),
					'wikimedia'       => esc_html__( 'Wikimedia', 'bonjour' ),
					'mapbox'          => esc_html__( 'Mapbox', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_contact[tif_contact_mapbox_token]',
		array(
			'default'			=> tif_get_default( 'theme_contact', 'tif_contact_mapbox_token', 'text' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_text',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_contact[tif_contact_mapbox_token]',
		array(
			'section'			=> 'tif_contact_settings_section',
			'label'				=> esc_html__( 'Mapbox access token', 'bonjour' ),
			'description'		=> sprintf( '<a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s<span class="screen-reader-text">%s</span></a>',
				esc_url( __( 'https://docs.mapbox.com/help/how-mapbox-works/access-tokens/', 'bonjour' ) ),
				esc_html__( 'Create your personal MapBox access token', 'bonjour' ),
				esc_html__( '(link opens in a new tab)', 'bonjour' )
			),
			'type'				=> 'text',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_contact[tif_contact_mapbox_token]',
		array(
			'selector' => '#mapbox-access-token',
		)
	);
