<?php

if( ! defined( 'ABSPATH' ) ) exit;

// === PANEL // Theme settings ===================================================

	$wp_customize->add_panel(
		'tif_theme_settings_panel',
		array(
			'capabitity'		=> 'edit_theme_options',
			'priority'			=> 500,
			'title'				=> esc_html__( 'Tif - Settings', 'bonjour' )
		)
	);

// ... SECTION // Default layout .................................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_default_settings_section',
		array(
			'priority'			=> 5010,
			'title'				=> esc_html__( 'Default settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_font_size]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_font_size', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_font_size]',
		array(
			'section'		=> 'tif_theme_default_settings_section',
			'label' => esc_html__( 'Default font size', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										esc_html__( '62.5%', 'bonjour' )
									),
			'type' => 'number',
			'input_attrs' => array(
				'min' => '50',
				'max' => '120',
				'step' => '.5',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_padding_s]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_padding_s', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_padding_s]',
		array(
			'section'		=> 'tif_theme_default_settings_section',
			'label' => esc_html__( 'Padding S', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										'.99rem'
									),
			'type' => 'number',
			'input_attrs' => array(
				'min' => '0',
				'step' => '.01',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_padding]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_padding', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_padding]',
		array(
			'section'		=> 'tif_theme_default_settings_section',
			'label' => esc_html__( 'Main padding', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										'1.98rem'
									),
			'type' => 'number',
			'type' => 'number',
			'input_attrs' => array(
				'min' => '0',
				'step' => '.01',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_padding_l]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_padding_l', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_padding_l]',
		array(
			'section'		=> 'tif_theme_default_settings_section',
			'label' => esc_html__( 'Padding L', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										'2.97rem'
									),
			'type' => 'number',
			'type' => 'number',
			'input_attrs' => array(
				'min' => '0',
				'step' => '.01',
			),
		)
	);

// ... SECTION // Navigation Settings .................................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_navigation_settings_section',
		array(
			'priority'			=> 5020,
			'title'				=> esc_html__( 'Navigation', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_menu_primary_bottom]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_menu_primary_bottom', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_menu_primary_bottom]',
		array(
			'section'			=> 'tif_theme_navigation_settings_section',
			'label'				=> esc_html__( 'Add to primary menu', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				''					=> esc_html__( 'Select', 'bonjour' ),
				'search'			=> esc_html__( 'Search form', 'bonjour' ),
				'social'			=> esc_html__( 'Social icons', 'bonjour' )
			) + ( tif_is_woocommerce_activated() ? array( 'woocart' => esc_html__( 'Woocommerce cart', 'bonjour' ) ) : array() ),
			'settings'		=> $tif_theme_mod . '_settings[tif_menu_primary_bottom]'
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_menu_primary_bottom]',
		array(
			'selector' => '#navigation-primary-added',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_menu_secondary_bottom]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_menu_secondary_bottom', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$arg = tif_is_woocommerce_activated() ? array( '4' => esc_html__( 'Woocommerce cart', 'bonjour' ) ) : '';
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_menu_secondary_bottom]',
		array(
			'section'			=> 'tif_theme_navigation_settings_section',
			'label'				=> esc_html__( 'Add to secondary menu', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				''					=> esc_html__( 'Select', 'bonjour' ),
				'search'			=> esc_html__( 'Search form', 'bonjour' ),
				'social'			=> esc_html__( 'Social icons', 'bonjour' )
			) + ( tif_is_woocommerce_activated() ? array( 'woocart' => esc_html__( 'Woocommerce cart', 'bonjour' ) ) : array() ),
			'settings'		=> $tif_theme_mod . '_settings[tif_menu_secondary_bottom]'
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_menu_secondary_bottom]',
		array(
			'selector' => '#navigation-secondary-added',
		)
	);

// ... SECTION // Breadcrumb settings .............................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_breadcrumb_settings_section',
		array(
			'priority'			=> 5030,
			'title'				=> esc_html__( 'Breadcrumb', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_breadcrumb_home_h1]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_breadcrumb_home_h1', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_breadcrumb_home_h1]',
		array(
			'section'			=> 'tif_theme_breadcrumb_settings_section',
			'label'				=> esc_html__( 'Content to display in breadcrumb on the home page', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				''					=> esc_html__( 'Display nothing', 'bonjour' ),
				'name'				=> esc_html__( 'Blog name in H1', 'bonjour' ),
				'description'		=> esc_html__( 'Blog description in H1', 'bonjour' ),
				'name_description'	=> esc_html__( 'Blog name & description in H1', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_breadcrumb_home_h1]'
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_breadcrumb_home_h1]',
		array(
			'selector' => '.breadcrumb',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_breadcrumb_home_anchor]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_breadcrumb_home_anchor', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_breadcrumb_home_anchor]',
		array(
			'section'			=> 'tif_theme_breadcrumb_settings_section',
			'label'				=> esc_html__( 'Anchor text for the homepage', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				// ''					=> esc_html__( 'Display nothing', 'bonjour' ),
				'name'				=> esc_html__( 'Blog name', 'bonjour' ),
				'icon'				=> esc_html__( 'An icon', 'bonjour' )
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_breadcrumb_home_anchor]'
		)
	);

// ... SECTION // Title bar layout ..........................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_title_bar_layout_section',
		array(
			'priority'			=> 5040,
			'title'				=> esc_html__( 'Title bar', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_header_after_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_header_after_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_header_after_order]',
			array(
				'section'		=> 'tif_theme_title_bar_layout_section',
				'label'			=> esc_html__( 'Elements order after header', 'bonjour' ),
				'choices'		=> array(
					'breadcrumb'		=> esc_html__( 'Breadcrumb', 'bonjour' ),
					'title_bar'			=> esc_html__( 'Title bar', 'bonjour' ),
					'widget_area'		=> esc_html__( 'Widget area', 'bonjour' ),
					'taxonomy_content'	=> esc_html__( 'Taxonomy', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_header_after_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_header_after_enabled', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);

	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_order[tif_header_after_enabled]',
			array(
				'section'		=> 'tif_theme_title_bar_layout_section',
				'label'			=> esc_html__( 'Display these planned content items after the top of the page for the following pages:', 'bonjour' ),
				'choices'		=> array(
					'home'			=> esc_html__( 'Homepage', 'bonjour' ),
					'archives'		=> esc_html__( 'Archives', 'bonjour' ),
					'search'		=> esc_html__( 'Search', 'bonjour' ),
					'posts'			=> esc_html__( 'Posts', 'bonjour' ),
					'pages'			=> esc_html__( 'Pages', 'bonjour' ),
					'author'		=> esc_html__( 'Author', 'bonjour' ),
					'attachment'	=> esc_html__( 'Attachment', 'bonjour' ),
					'404'			=> esc_html__( '404', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_title_bar_home_h1]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_title_bar_home_h1', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_title_bar_home_h1]',
		array(
			'section'			=> 'tif_theme_title_bar_layout_section',
			'label'				=> esc_html__( 'Content to display in title bar on the home page', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				''					=> esc_html__( 'Display nothing', 'bonjour' ),
				'name'				=> esc_html__( 'Blog name in H1', 'bonjour' ),
				'description'		=> esc_html__( 'Blog description in H1', 'bonjour' ),
				'name_description'	=> esc_html__( 'Blog name & description in H1', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_title_bar_home_h1]'
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_title_bar_home_h1]',
		array(
			'selector' => '.title-bar > .inner',
		)
	);

// ... SECTION // Main loop ..................................................

	// Header, position of h1 title
	$wp_customize->add_section(
		'tif_theme_loop_settings_section',
		array(
			'priority'			=> 5050,
			'title'				=> esc_html__( 'Main loop', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_taxonomy_entry_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_taxonomy_entry_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_taxonomy_entry_order]',
			array(
				'section'		=> 'tif_theme_loop_settings_section',
				'label'			=> esc_html__( 'Taxonomy description', 'bonjour' ),
				'choices'		=> array(
					'taxonomy_thumbnail'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'taxonomy_description'	=> esc_html__( 'Content', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_loop_entry_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_loop_entry_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_loop_entry_order]',
			array(
				'section'		=> 'tif_theme_loop_settings_section',
				'label'			=> esc_html__( 'Elements order', 'bonjour' ),
				'choices'		=> array(
					'entry_thumbnail'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_title_loop'	=> esc_html__( 'Title', 'bonjour' ),
					'entry_meta'		=> esc_html__( 'Meta', 'bonjour' ),
					'entry_content'  	=> esc_html__( 'Content', 'bonjour' ),
					'entry_tags'		=> esc_html__( 'Tags', 'bonjour' ),
					'entry_read_more'	=> esc_html__( 'Read More', 'bonjour' )
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_loop_meta_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_loop_meta_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_loop_meta_order]',
			array(
				'section'		=> 'tif_theme_loop_settings_section',
				'label'			=> esc_html__( 'Meta order', 'bonjour' ),
				'choices'		=> array(
					'meta_author'	=> esc_html__( 'Author', 'bonjour' ),
					'meta_published'=> esc_html__( 'Date', 'bonjour' ),
					'meta_modified'	=> esc_html__( 'Last update', 'bonjour' ),
					'meta_category'	=> esc_html__( 'Category', 'bonjour' ),
					'meta_comments'	=> esc_html__( 'Comments', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_loop_excerpt_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_loop_excerpt_enabled', 'key' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_select',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_loop_excerpt_enabled]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Content to display?', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'more'				=> esc_html__( 'Use &lt;!--more--&gt; tag', 'bonjour' ),
				'full'				=> esc_html__( 'Display the full content', 'bonjour' ),
				'max'				=> esc_html__( 'Use a maximum number of words', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_loop_excerpt_enabled]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_loop_article_class]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_loop_article_class', 'text' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_text',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_loop_article_class]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Additional CSS Class(es)?', 'bonjour' ),
			'type'				=> 'text',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_home_category_enabled]',
		array(
			'default'			=> '',
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_home_category_enabled]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Category to display on home page', 'bonjour' ),
			'description'		=> sprintf( '%s<br />%s',
									esc_html__( '2,3,4 to include categories', 'bonjour' ),
									esc_html__( '-2,-3,-4 to exclude categories', 'bonjour' )
								),
			'type'				=> 'text',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_home_excerpt_length]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_home_excerpt_length', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_home_excerpt_length]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Home page content length', 'bonjour' ),
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
		$tif_theme_mod . '_settings[tif_home_excerpt_length]',
		array(
			'selector' => '.home-excerpt-charlength',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_archives_excerpt_length]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_archives_excerpt_length', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_archives_excerpt_length]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Archives content length', 'bonjour' ),
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
		$tif_theme_mod . '_settings[tif_archives_excerpt_length]',
		array(
			'selector' => '.archives-excerpt-charlength',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_search_excerpt_length]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_search_excerpt_length', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_search_excerpt_length]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Search content length', 'bonjour' ),
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
		$tif_theme_mod . '_settings[tif_archives_excerpt_length]',
		array(
			'selector' => '.search-excerpt-charlength',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_home_posts_per_page]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_home_posts_per_page', 'absint' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_home_posts_per_page]',
		array(
			'section'			=> 'tif_theme_loop_settings_section',
			'label'				=> esc_html__( 'Number of posts to display on home page', 'bonjour' ),
			'description'		=> esc_html__( '0 to disable', 'bonjour' ),
			'type'				=> 'number',
			'input_attrs' => array(
				'min' => '0',
				'step' => '1',
			),
		)
	);

// ... SECTION // Cover layout ..............................................

	$wp_customize->add_section(
		'tif_theme_cover_layout_section',
		array(
			'priority'			=> 5060,
			'title'				=> esc_html__( 'Cover layout', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
			// 'description'		=> '<span class="customize-control-title">' . esc_html__( 'Elements displayed before main content', 'bonjour' ) . '</span>' .
			// sprintf( '<p>%s <a href="%s">%s</a>, <a href="%s">%s</a>, <a href="%s">%s</a>.</p><p class="tif-customizer-warning"><i>%s</i></p>',
			// 	esc_html__( 'Elements displayed before main content can be configured for', 'bonjour' ),
			// 	"javascript:wp.customize.control( '" . $tif_theme_mod . "_order[tif_single_cover_order]').focus();",
			// 	esc_html__( 'single posts', 'bonjour' ),
			// 	"javascript:wp.customize.control( '" . $tif_theme_mod . "_order[tif_pages_cover_order]').focus();",
			// 	esc_html__( 'pages', 'bonjour' ),
			// 	"javascript:wp.customize.control( '" . $tif_theme_mod . "_order[tif_attachment_cover_order]').focus();",
			// 	esc_html__( 'attachments', 'bonjour' ),
			// 	esc_html__( 'If no content is displayed for these pages, the following settings will not be applied.', 'bonjour' )
			// ),
			'description'		=> 	sprintf( '<p class="tif-customizer-warning">%s</p>',
				esc_html__( 'If the Cover layout is not the default format, it can be used on an ad hoc basis at the time of writing.', 'bonjour' )
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_default]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_default', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);

	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_cover[tif_cover_default]',
			array(
				'section'		=> 'tif_theme_cover_layout_section',
				'label'			=> esc_html__( 'Cover layout is the default template for :', 'bonjour' ),
				'choices'		=> array(
					'posts'		=> esc_html__( 'Posts', 'bonjour' ),
					'pages'		=> esc_html__( 'Pages', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_order]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_cover[tif_cover_order]',
			array(
				'section'		=> 'tif_theme_cover_layout_section',
				'label'			=> esc_html__( 'Elements order before main content', 'bonjour' ),
				'description'		=> sprintf( '<p class="tif-customizer-info"> %s</p>',
					esc_html__( 'When banner format is used, the following enabled items will be disabled from main content.', 'bonjour' )
				),
				'choices'		=> array(
					'breadcrumb'		=> esc_html__( 'Breadcrumb', 'bonjour' ),
					'title_bar'			=> esc_html__( 'Title bar', 'bonjour' ),
					'entry_thumbnail'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_title'		=> esc_html__( 'Title', 'bonjour' ),
					'entry_excerpt'		=> esc_html__( 'Excerpt (if filled in)', 'bonjour' ),
					'entry_meta'		=> esc_html__( 'Meta', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_features]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_features', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);

	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_cover[tif_cover_features]',
			array(
				'section'		=> 'tif_theme_cover_layout_section',
				'label'			=> esc_html__( 'Before main content layout', 'bonjour' ),
				'choices'		=> array(
					'boxed'			=> esc_html__( 'Boxed', 'bonjour' ),
					// 'has_overlay'	=> esc_html__( 'Has overlay', 'bonjour' ),
					'bgimg'			=> esc_html__( 'Thumbnail in the background', 'bonjour' ),
					'fixed'			=> esc_html__( 'Thumbnail is Fixed', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_position]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_position', 'key' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_select',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_cover[tif_cover_position]',
		array(
			'section'			=> 'tif_theme_cover_layout_section',
			'label'				=> esc_html__( 'Position', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'' 					=> esc_html__( 'Undefined', 'bonjour' ),
				'top_left' 			=> esc_html__( 'Top / Left', 'bonjour' ),
				'top_center' 		=> esc_html__( 'Top / Center', 'bonjour' ),
				'top_right'  		=> esc_html__( 'Top / Right', 'bonjour' ),
				'middle_left' 		=> esc_html__( 'Middle / Left', 'bonjour' ),
				'middle_center'	=> esc_html__( 'Middle / Center', 'bonjour' ),
				'middle_right' 		=> esc_html__( 'Middle / Right', 'bonjour' ),
				'bottom_left' 		=> esc_html__( 'Bottom / Left', 'bonjour' ),
				'bottom_center'	=> esc_html__( 'Bottom / Center', 'bonjour' ),
				'bottom_right' 		=> esc_html__( 'Bottom / Right', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_cover[tif_cover_position]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_bg_color]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_bg_color', 'hexcolor' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_hexcolor',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, $tif_theme_mod . '_cover[tif_cover_bg_color]',
			array(
				'section'		=> 'tif_theme_cover_layout_section',
				'label'			=> esc_html__( 'Background color', 'bonjour' ),
				// 'settings'		=> $tif_theme_mod . '_cover[tif_cover_bg_color]'
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_overlay_bg_color]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_overlay_bg_color', 'hexcolor' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_hexcolor',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, $tif_theme_mod . '_cover[tif_cover_overlay_bg_color]',
			array(
				'section'		=> 'tif_theme_cover_layout_section',
				'label'			=> esc_html__( 'Overlay color', 'bonjour' ),
				// 'settings'		=> $tif_theme_mod . '_cover[tif_cover_overlay_bg_color]'
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_overlay_opacity]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_overlay_opacity', 'float' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_float',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_cover[tif_cover_overlay_opacity]',
		array(
			'section'		=> 'tif_theme_cover_layout_section',
			'label' => esc_html__( 'Overlay Opacity', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										esc_html__( '0.6', 'bonjour' )
									),
			'type' => 'number',
			'input_attrs' => array(
				'min' => '0',
				'max' => '1',
				'step' => '.1',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_text_color]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_text_color', 'hexcolor' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_hexcolor',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, $tif_theme_mod . '_cover[tif_cover_text_color]',
			array(
				'section'		=> 'tif_theme_cover_layout_section',
				'label'			=> esc_html__( 'Text color', 'bonjour' ),
				// 'settings'		=> $tif_theme_mod . '_cover[tif_cover_text_color]'
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_height]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_height', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_cover[tif_cover_height]',
		array(
			'section'		=> 'tif_theme_cover_layout_section',
			'label' => esc_html__( 'Height', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										esc_html__( '70', 'bonjour' )
									),
			'type' => 'number',
			'input_attrs' => array(
				'min' => '0',
				'max' => '200',
				'step' => '1',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_cover[tif_cover_spacing]',
		array(
			'default'			=> tif_get_default( 'theme_cover', 'tif_cover_spacing' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'tif_sanitize_int',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_cover[tif_cover_spacing]',
		array(
			'section'		=> 'tif_theme_cover_layout_section',
			'label' => esc_html__( 'Vertical spacing of main content', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s',
										esc_html__( 'Defaut value is', 'bonjour' ),
										esc_html__( '0', 'bonjour' )
									),
			'type' => 'number',
			'input_attrs' => array(
				'min' => '-10',
				'max' => '10',
				'step' => '1',
			),
		)
	);

// ... SECTION // Single Settings ..............................................

	$wp_customize->add_section(
		'tif_theme_single_settings_section',
		array(
			'priority'			=> 5070,
			'title'				=> esc_html__( 'Single posts settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
			'description'		=> '<span class="customize-control-title">' . esc_html__( 'Cover layout', 'bonjour' ) . '</span>' .
			sprintf( '<p class="tif-customizer-warning">%s<br /><a href="%s">%s</a></p>',
				esc_html__( 'Cover layout can be set by default or used on an ad hoc basis at the time of writing.', 'bonjour' ),
				"javascript:wp.customize.control( '" . $tif_theme_mod . "_cover[tif_cover_default]').focus();",
				esc_html__( 'Access to cover settings', 'bonjour' )
			) . '<span class="customize-control-title">' . esc_html__( 'After Header', 'bonjour' ) . '</span>' .
			sprintf( '<p class="tif-customizer-info"> %s <a href="%s">%s</a></p>',
				esc_html__( 'Elements displayed after the header can be configured', 'bonjour' ),
				"javascript:wp.customize.control( '" . $tif_theme_mod . "_order[tif_header_after_order]').focus();",
				esc_html__( 'here', 'bonjour' )
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_single_entry_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_single_entry_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_single_entry_order]',
			array(
				'section'		=> 'tif_theme_single_settings_section',
				'label'			=> esc_html__( 'Ordering content items', 'bonjour' ),
				'choices'		=> array(
					'entry_title'		=> esc_html__( 'Title', 'bonjour' ),
					'entry_thumbnail'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_meta'		=> esc_html__( 'Meta', 'bonjour' ),
					'entry_content'  	=> esc_html__( 'Content', 'bonjour' ),
					'the_post_pagination'=> esc_html__( 'Post pagination', 'bonjour' ),
					'entry_tags'		=> esc_html__( 'Tags', 'bonjour' ),
					'entry_share'		=> esc_html__( 'Share button', 'bonjour' ),
					'entry_biography'   => esc_html__( 'Author', 'bonjour' ),
					'entry_related'  	=> esc_html__( 'Related posts', 'bonjour' ),
					'post_navigation'	=> esc_html__( 'Posts navigation', 'bonjour' ),
					'entry_comments' 	=> esc_html__( 'Comments', 'bonjour' )
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_single_meta_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_single_meta_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_single_meta_order]',
			array(
				'section'		=> 'tif_theme_single_settings_section',
				'label'			=> esc_html__( 'Meta order', 'bonjour' ),
				'choices'		=> array(
					'meta_avatar'	=> esc_html__( 'Avatar', 'bonjour' ),
					'meta_author'	=> esc_html__( 'Author', 'bonjour' ),
					'meta_published'=> esc_html__( 'Date', 'bonjour' ),
					'meta_modified'	=> esc_html__( 'Last update', 'bonjour' ),
					'meta_category'	=> esc_html__( 'Category', 'bonjour' ),
					'meta_comments'	=> esc_html__( 'Comments', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_single_meta_published_hidden]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_single_meta_published_hidden', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_order[tif_single_meta_published_hidden]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_single_settings_section',
			'label'				=> esc_html__( 'Hide the publication date if a modification date exists.', 'bonjour' ),
		)
	);

// ... SECTION // Pages Settings ..............................................

	$wp_customize->add_section(
		'tif_theme_page_settings_section',
		array(
			'priority'			=> 5080,
			'title'				=> esc_html__( 'Pages settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
			'description'		=> '<span class="customize-control-title">' . esc_html__( 'Cover layout', 'bonjour' ) . '</span>' .
			sprintf( '<p class="tif-customizer-warning">%s<br /><a href="%s">%s</a></p>',
				esc_html__( 'Cover layout can be set by default or used on an ad hoc basis at the time of writing.', 'bonjour' ),
				"javascript:wp.customize.control( '" . $tif_theme_mod . "_cover[tif_cover_default]').focus();",
				esc_html__( 'Access to cover settings', 'bonjour' )
			) . '<span class="customize-control-title">' . esc_html__( 'After Header', 'bonjour' ) . '</span>' .
			sprintf( '<p class="tif-customizer-info"> %s <a href="%s">%s</a></p>',
				esc_html__( 'Elements displayed after the header can be configured', 'bonjour' ),
				"javascript:wp.customize.control( '" . $tif_theme_mod . "_order[tif_header_after_order]').focus();",
				esc_html__( 'here', 'bonjour' )
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_pages_entry_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_pages_entry_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_pages_entry_order]',
			array(
				'section'		=> 'tif_theme_page_settings_section',
				'label'			=> esc_html__( 'Ordering content items', 'bonjour' ),
				'choices'		=> array(
					'entry_title'			=> esc_html__( 'Title', 'bonjour' ),
					'entry_thumbnail'		=> esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_meta'			=> esc_html__( 'Meta', 'bonjour' ),
					'entry_content'  		=> esc_html__( 'Content', 'bonjour' ),
					'the_post_pagination'	=> esc_html__( 'Post pagination', 'bonjour' ),
					'entry_tags'			=> esc_html__( 'Tags', 'bonjour' ),
					'entry_share'			=> esc_html__( 'Share button', 'bonjour' ),
					'entry_biography'   	=> esc_html__( 'Author', 'bonjour' ),
					'entry_comments' 		=> esc_html__( 'Comments', 'bonjour' )
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_pages_meta_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_pages_meta_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_pages_meta_order]',
			array(
				'section'		=> 'tif_theme_page_settings_section',
				'label'			=> esc_html__( 'Meta order', 'bonjour' ),
				'choices'		=> array(
					'meta_avatar'		=> esc_html__( 'Avatar', 'bonjour' ),
					'meta_author'		=> esc_html__( 'Author', 'bonjour' ),
					'meta_published'	=> esc_html__( 'Date', 'bonjour' ),
					'meta_modified' 	=> esc_html__( 'Last update', 'bonjour' ),
					'meta_comments' 	=> esc_html__( 'Comments', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_pages_meta_published_hidden]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_pages_meta_published_hidden', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_order[tif_pages_meta_published_hidden]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_page_settings_section',
			'label'				=> esc_html__( 'Hide the publication date if a modification date exists.', 'bonjour' ),
		)
	);

// ... SECTION // Attachment Settings ..............................................

	$wp_customize->add_section(
		'tif_theme_attachment_settings_section',
		array(
			'priority'			=> 5090,
			'title'				=> esc_html__( 'Attachment settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
			'description'		=> '<span class="customize-control-title">' . esc_html__( 'After Header', 'bonjour' ) . '</span>' .
			sprintf( '<p class="tif-customizer-info"> %s <a href="%s">%s</a></p>',
				esc_html__( 'Elements displayed after the header can be configured', 'bonjour' ),
				"javascript:wp.customize.control( '" . $tif_theme_mod . "_order[tif_header_after_order]').focus();",
				esc_html__( 'here', 'bonjour' )
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_attachment_entry_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_attachment_entry_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_attachment_entry_order]',
			array(
				'section'		=> 'tif_theme_attachment_settings_section',
				'label'			=> esc_html__( 'Ordering content items', 'bonjour' ),
				'choices'		=> array(
					'entry_title'		=> esc_html__( 'Title', 'bonjour' ),
					'entry_attachment'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'entry_meta'		=> esc_html__( 'Meta', 'bonjour' ),
					'entry_content'  	=> esc_html__( 'Content', 'bonjour' ),
					'entry_share'		=> esc_html__( 'Share button', 'bonjour' ),
					'entry_biography'   	=> esc_html__( 'Author', 'bonjour' ),
					'entry_comments' 	=> esc_html__( 'Comments', 'bonjour' )
				)
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_attachment_meta_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_attachment_meta_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_attachment_meta_order]',
			array(
				'section'		=> 'tif_theme_attachment_settings_section',
				'label'			=> esc_html__( 'Meta order', 'bonjour' ),
				'choices'		=> array(
					'meta_avatar'		=> esc_html__( 'Avatar', 'bonjour' ),
					'meta_author'		=> esc_html__( 'Author', 'bonjour' ),
					'meta_published'		=> esc_html__( 'Date', 'bonjour' ),
					'meta_modified' 	=> esc_html__( 'Last update', 'bonjour' ),
					'meta_comments' 		=> esc_html__( 'Comments', 'bonjour' ),
				)
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_attachment_meta_published_hidden]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_attachment_meta_published_hidden', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_order[tif_attachment_meta_published_hidden]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_attachment_settings_section',
			'label'				=> esc_html__( 'Hide the publication date if a modification date exists.', 'bonjour' ),
		)
	);

// ... SECTION // 404 settings .................................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_404_settings_section',
		array(
			'priority'			=> 5100,
			'title'				=> esc_html__( '404 settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_404_element_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_404_element_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_404_element_order]',
			array(
				'section'		=> 'tif_theme_404_settings_section',
				'label'			=> esc_html__( 'Elements order', 'bonjour' ),
				'choices'		=> array(
					'title'				=> esc_html__( 'Title', 'bonjour' ),
					// '404_title'			=> esc_html__( '404 Title', 'bonjour' ),
					'404_searchform'	=> esc_html__( 'Search form', 'bonjour' ),
					'404_posts'			=> esc_html__( 'Posts', 'bonjour' ),
					'404_categories'	=> esc_html__( 'Categories', 'bonjour' ),
					'404_archives'		=> esc_html__( 'Archives', 'bonjour' ),
					'404_tags'			=> esc_html__( 'Tags', 'bonjour' )
				)
			)
		)
	);

	require_once get_template_directory() . '/inc/customizer/tif-customizer-settings-related.php';

// ... SECTION // Share button .................................................

	$wp_customize->add_section(
		'tif_theme_share_button_section',
		array(
			'priority'			=> 5110,
			'title'				=> esc_html__( 'Share button', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_share_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_share_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_share_order]',
			array(
				'section'		=> 'tif_theme_share_button_section',
				'label'			=> esc_html__( 'Ordering share buttons', 'bonjour' ),
				'choices'		=> array(
					'facebook'		=> 'Facebook',
					'twitter'		=> 'Twitter',
					'linkedin'		=> 'Linkedin',
					'viadeo'		=> 'Viadeo',
					'pinterest'		=> 'Pinterest',
					'envelope-o'	=> esc_html__( 'Mail', 'bonjour' ),
				)
			)
		)
	);


// ... SECTION // Social Icons .................................................

	$wp_customize->add_section(
		'tif_theme_social_settings_section',
		array(
			'priority'			=> 5120,
			'title'				=> esc_html__( 'Social Icons', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
		)
	);

	for ( $i = 0; $i <= 24; $i++ ) {
		switch ($i) {
			case 0:
				$label[$i] = esc_html__( 'Shaarli', 'bonjour' );
				$elmt_db[$i] = 'shaarli';
				break;
			case 1:
				$label[$i] = esc_html__( 'Twitter', 'bonjour' );
				$elmt_db[$i] = 'twitter';
				break;
			case 2:
				$label[$i] = esc_html__( 'Facebook', 'bonjour' );
				$elmt_db[$i] = 'facebook';
				break;
			case 3:
				$label[$i] = esc_html__( 'Tripadvisor', 'bonjour' );
				$elmt_db[$i] = 'tripadvisor';
				break;
			case 4:
				$label[$i] = esc_html__( 'Linkedin', 'bonjour' );
				$elmt_db[$i] = 'linkedin';
				break;
			case 5:
				$label[$i] = esc_html__( 'Viadeo', 'bonjour' );
				$elmt_db[$i] = 'viadeo';
				break;
			case 6:
				$label[$i] = esc_html__( 'Pinterest', 'bonjour' );
				$elmt_db[$i] = 'pinterest';
				break;
			case 7:
				$label[$i] = esc_html__( 'Youtube', 'bonjour' );
				$elmt_db[$i] = 'youtube';
				break;
			case 8:
				$label[$i] = esc_html__( 'Vimeo', 'bonjour' );
				$elmt_db[$i] = 'vimeo';
				break;
			case 9:
				$label[$i] = esc_html__( 'Flickr', 'bonjour' );
				$elmt_db[$i] = 'flickr';
				break;
			case 10:
				$label[$i] = esc_html__( 'Dribbble', 'bonjour' );
				$elmt_db[$i] = 'dribbble';
				break;
			case 11:
				$label[$i] = esc_html__( 'Tumblr', 'bonjour' );
				$elmt_db[$i] = 'tumblr';
				break;
			case 12:
				$label[$i] = esc_html__( 'Instagram', 'bonjour' );
				$elmt_db[$i] = 'instagram';
				break;
			case 13:
				$label[$i] = esc_html__( 'Lastfm', 'bonjour' );
				$elmt_db[$i] = 'lastfm';
				break;
			case 14:
				$label[$i] = esc_html__( 'Soundcloud', 'bonjour' );
				$elmt_db[$i] = 'soundcloud';
				break;
			case 15:
				$label[$i] = esc_html__( 'Diaspora', 'bonjour' );
				$elmt_db[$i] = 'diaspora';
				break;
			case 16:
				$label[$i] = esc_html__( 'Mastodon', 'bonjour' );
				$elmt_db[$i] = 'mastodon';
				break;
			case 17:
				$label[$i] = esc_html__( 'Pleroma', 'bonjour' );
				$elmt_db[$i] = 'pleroma';
				break;
			case 18:
				$label[$i] = esc_html__( 'Pixelfed', 'bonjour' );
				$elmt_db[$i] = 'pixelfed';
				break;
			case 19:
				$label[$i] = esc_html__( 'Peertube', 'bonjour' );
				$elmt_db[$i] = 'peertube';
				break;
			case 20:
				$label[$i] = esc_html__( 'Funkwhale', 'bonjour' );
				$elmt_db[$i] = 'funkwhale';
				break;
			case 21:
				$label[$i] = esc_html__( 'Friendica', 'bonjour' );
				$elmt_db[$i] = 'friendica';
				break;
			case 22:
				$label[$i] = esc_html__( 'Socialhome', 'bonjour' );
				$elmt_db[$i] = 'social-home';
				break;
			case 23:
				$label[$i] = esc_html__( 'Hubzilla', 'bonjour' );
				$elmt_db[$i] = 'hubzilla';
				break;
			case 24:
				$label[$i] = esc_html__( 'GnuSocial', 'bonjour' );
				$elmt_db[$i] = 'gnu-social';
				break;
		}

		$description = '' ;
		if( $i == 0 )
		$description = sprintf( '%s <a href="%s" rel="tc-%s" class="internal-link">%s</a> %s.',
			esc_html__( 'Social Icons can be displayed in', 'bonjour' ),
			'#widgets',
			'section',
			esc_html__( 'main navigation', 'bonjour' ),
			esc_html__( 'or with a widget', 'bonjour' )
		);

		$wp_customize->add_setting(
			$tif_theme_mod . '_social[tif_social_'.$elmt_db[$i].'_url]',
			array(
				'default'			=> tif_get_default( 'theme_social', 'tif_social_'.$elmt_db[$i] . '_url', 'url' ),
				'sanitize_callback'	=> 'tif_sanitize_url',
				'type'				=> 'option',
			)
		);
		$wp_customize->add_control(
			$tif_theme_mod . '_social[tif_social_'.$elmt_db[$i].'_url]',
			array(
				'section'			=> 'tif_theme_social_settings_section',
				'label'				=> $label[$i],
				'description'		=> $description,
				'type'				=> 'text',
			)
		);

	}

// ... SECTION // Mobile Settings ..............................................

	// Add Section
	// ...
	$wp_customize->add_section(
		'tif_theme_mobile_settings_section',
		array(
			'priority'			=> 5130,
			'title'				=> esc_html__( 'Mobile settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_logo_mobile]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_logo_mobile', 'url' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, $tif_theme_mod . '_layout[tif_logo_mobile]',
			array(
				'section'		=> 'tif_theme_mobile_settings_section',
				'label'			=> esc_html__( 'Upload logo for your header on mobile devices. Recommended size is 100 X 100 pixels but you can add any size you like.', 'bonjour' ),
				'setting'		=> $tif_theme_mod . '_layout[tif_logo_mobile]'
			)
		)
	);

		// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_widgets_sidebar_mobile_opened]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_widgets_sidebar_mobile_opened', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_widgets_sidebar_mobile_opened]',
		array(
			'section'			=> 'tif_theme_mobile_settings_section',
			'label'				=> esc_html__( 'How many widgets display open in the sidebar on mobile devices?', 'bonjour' ),
			'description'		=> esc_html__( 'Title is needed to display a closed widget', 'bonjour' ),
			'type'				=> 'number',
			'input_attrs'		=> array(
				'min'		=> '0',
				'max'		=> '10',
				'step'		=> '1',
			),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_widgets_footer_mobile_opened]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_widgets_footer_mobile_opened', 'absint' ),
			'type'				=> 'option',
			'sanitize_callback'	=> 'absint',
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_widgets_footer_mobile_opened]',
		array(
			'section'			=> 'tif_theme_mobile_settings_section',
			'label'				=> esc_html__( 'How many widgets display open in the first footer sidebar on mobile devices?', 'bonjour' ),
			'description'		=> esc_html__( 'Title is needed to display a closed widget', 'bonjour' ),
			'type'				=> 'number',
			'input_attrs'		=> array(
				'min'		=> '0',
				'max'		=> '10',
				'step'		=> '1',
			),
		)
	);

	require_once get_template_directory() . '/inc/customizer/tif-customizer-settings-contact.php';

// ... SECTION // Opengraph settings .................................................

	// Header, position of h1 title
	$wp_customize->add_section(
		'tif_theme_opengraph_section',
		array(
			'priority'			=> 5140,
			'title'				=> esc_html__( 'Opengraph settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// // Add Setting
	// // Site layout (boxed or not)
	// $wp_customize->add_setting(
	// 	$tif_theme_mod . '_settings[tif_opengraph_enabled]',
	// 	array(
	// 		'default'			=> tif_get_default( 'theme_settings', 'tif_opengraph_enabled', 'checkbox' ),
	// 		'type'				=> 'option',
	// 		'capability'		=> 'edit_theme_options',
	// 		'sanitize_callback'	=> 'tif_sanitize_checkbox'
	// 	)
	// );
	// $wp_customize->add_control(
	// 	$tif_theme_mod . '_settings[tif_opengraph_enabled]',
	// 	array(
	// 		'type'				=> 'checkbox',
	// 		'section'			=> 'tif_theme_opengraph_section',
	// 		'label'				=> esc_html__( 'Opengraph enabled', 'bonjour' ),
	// 	)
	// );
	//
	//
	// // Add Setting
	// // ...
	// $wp_customize->add_setting(
	// 	$tif_theme_mod . '_settings[tif_opengraph_author]',
	// 	array(
	// 		'default'			=> tif_get_default( 'theme_settings', 'tif_opengraph_author', 'multicheck' ),
	// 		'type'				=> 'option',
	// 		'capability'		=> 'edit_theme_options',
	// 		'sanitize_callback'	=> 'tif_sanitize_multicheck'
	// 	)
	// );
	//
	// $wp_customize->add_control(
	// 	new Tif_Checkbox_Multiple_Control(
	// 		$wp_customize, $tif_theme_mod . '_settings[tif_opengraph_author]',
	// 		array(
	// 			'section'		=> 'tif_theme_opengraph_section',
	// 			'label'			=> esc_html__( 'Author profiles used for opengraph', 'bonjour' ),
	// 			'choices'		=> array(
	// 				'facebook'	=> esc_html__( 'Facebook', 'bonjour' ),
	// 				'twitter'	=> esc_html__( 'Twitter', 'bonjour' ),
	// 				'youtube'	=> esc_html__( 'Youtube', 'bonjour' ),
	// 				'mastodon'	=> esc_html__( 'Mastodon', 'bonjour' ),
	// 				'diaspora'	=> esc_html__( 'Diaspora', 'bonjour' ),
	// 			)
	// 		)
	// 	)
	// );

// ... SECTION // Sitemap settings .................................................

	// Header, position of h1 title
	$wp_customize->add_section(
		'tif_theme_sitemap_section',
		array(
			'priority'			=> 5150,
			'title'				=> esc_html__( 'Sitemap settings', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_order[tif_sitemap_front_order]',
		array(
			'default'			=> tif_get_default( 'theme_order', 'tif_sitemap_front_order', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Sortable_Control(
			$wp_customize,
			$tif_theme_mod . '_order[tif_sitemap_front_order]',
			array(
				'section'		=> 'tif_theme_sitemap_section',
				'label'			=> esc_html__( 'Elements order', 'bonjour' ),
				'choices'		=> array(
					'entry_title'		=> esc_html__( 'Title', 'bonjour' ),
					// 'entry_thumbnail'	=> esc_html__( 'Thumbnail', 'bonjour' ),
					'sitemap_pages'		=> esc_html__( 'Pages', 'bonjour' ),
					'sitemap_feeds'		=> esc_html__( 'RSS Feeds', 'bonjour' ),
					'sitemap_category'	=> esc_html__( 'Categories', 'bonjour' ),
					'sitemap_posts'		=> esc_html__( 'Posts', 'bonjour' )
				)
			)
		)
	);

// ... SECTION // Meta tags .................................................

	// ...
	$wp_customize->add_section(
		'tif_theme_metatags_section',
		array(
			'priority'			=> 5160,
			'title'				=> esc_html__( 'Meta description & noindex', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
		)
	);

	// Add Setting
	// Meta Description for Homepage
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_metatags_description]',
		array(
			'default'			=> '',
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_text'
		)
	);

	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_metatags_description]',
		array(
			'section'			=> 'tif_theme_metatags_section',
			'label'				=> esc_html__( 'Défault meta description', 'bonjour' ),
			'description'		=> esc_html__( 'Used for Meta Description on the HomePage', 'bonjour' ),
			'type'				=> 'textarea',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_metatags_description]',
		array(
			'selector' => '#meta-tag-description',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_noindex_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_noindex_enabled', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize, $tif_theme_mod . '_settings[tif_noindex_enabled]',
			array(
				'section'		=> 'tif_theme_metatags_section',
				'label'			=> esc_html__( 'Add a noindex tag to the following pages:', 'bonjour' ),
				'choices'		=> array(
					'author'		=> esc_html__( 'Author', 'bonjour' ),
					'tag'			=> esc_html__( 'Tags', 'bonjour' ),
					'search'		=> esc_html__( 'Search', 'bonjour' )
				)
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_noindex_enabled]',
		array(
			'selector' => '#meta-tag-noindex',
		)
	);

	// Header Logo for mobile upload option
	$wp_customize->add_section(
		'tif_theme_privacy_section',
		array(
			'priority'			=> 5170,
			'title'				=> esc_html__( 'Privacy policy', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
			'description'		=> sprintf( '<p class="tif-customizer-warning">%s<br/>%s<br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s</a></p>',
				esc_html__( 'This theme is set up to respect your privacy and that of your users.', 'bonjour' ),
				esc_html__( 'For better protection, you should also consider disabling emojis, which is plugin-territory functionality.', 'bonjour' ),
				esc_url( __( 'https://themesinfrance.fr/#', 'bonjour' ) ),
				esc_html__( 'More details', 'bonjour' )
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_gravatar_disabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_gravatar_disabled', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_gravatar_disabled]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_privacy_section',
			'label'				=> esc_html__( 'Gravatar disabled', 'bonjour' ),
			'description'		=> sprintf( '%s<br />%s',
				esc_html__( 'To prevent the tracking of your users, gravatar is disabled by default.', 'bonjour' ),
				esc_html__( 'The service is replaced by a local avatar tool but you can reactivate the service by unchecking this parameter.', 'bonjour' )
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_leaflet_local_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_leaflet_local_enabled', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_leaflet_local_enabled]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_privacy_section',
			'label'				=> esc_html__( 'Get local leaflet css & js', 'bonjour' ),
			'description'		=> esc_html__( 'To limit outside calls, you may prefer to use a local version of the css and javascript required to display a map.', 'bonjour' )
		)
	);

	// Header Logo for mobile upload option
	$wp_customize->add_section(
		'tif_theme_performances_section',
		array(
			'priority'			=> 5180,
			'title'				=> esc_html__( 'Performances', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
			'description'		=> sprintf( '<span class="customize-control-title">%s</span><p class="tif-customizer-info">%s<br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s</a></p>',
				esc_html__( 'Disable jQuery', 'bonjour' ),
				esc_html__( 'jQuery is not required for this theme and can be disabled for better performance. However, Wordpress does not allow to deregister core scripts. You can use our plugin for this purpose.', 'bonjour' ),
				esc_url( __( 'https://themesinfrance.fr/#', 'bonjour' ) ),
				esc_html__( 'More details', 'bonjour' )
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_style_css_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_style_css_enabled', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_style_css_enabled]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'Child css enabled', 'bonjour' ),
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_forkawesome_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_forkawesome_enabled', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_forkawesome_enabled]',
		array(
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'Fork Awesome', 'bonjour' ),
			'description'		=> sprintf( '%1$s %2$s<br /><a href="%3$s" class="external-link" target="_blank" rel="noreferrer noopener">%4$s<span class="screen-reader-text">%5$s</span></a><br />%6$s<br /><a href="%7$s" class="external-link" target="_blank" rel="noreferrer noopener">%8$s<span class="screen-reader-text">%5$s</span></a>',

			esc_html__( 'This theme use Fork Awesome Glyph Icons.', 'bonjour' ),
			esc_html__( 'It is a fork from Font Awesome (4.7), in order to allow this project to be run by a distributed community of contributors.', 'bonjour' ),
			esc_url( __( 'https://github.com/ForkAwesome/Fork-Awesome', 'bonjour' ) ),
			esc_html__( 'More details on Github', 'bonjour' ),
			esc_html__( '(link opens in a new tab)', 'bonjour' ),

			esc_html__( 'You can use the complete Fork Awesome file or just the icons used by this theme by using "minimal Fork Awesome". Those files can be overwritten in "/template-parts/assets/fonts/fork-awesome/" to add new icons with the icomoon app. ', 'bonjour' ),
			esc_url( 'https://icomoon.io/app/#/select', 'bonjour' ),
			esc_url( __( 'https://icomoon.io/app/#/select', 'bonjour' ) ),
			esc_html__( 'Icomoon application', 'bonjour' )
			),
			'type'				=> 'select',
			'choices'			=> array(
				'fa'				=> esc_html__( 'Use the complete Fork Awesome', 'bonjour' ),
				'tif'				=> esc_html__( 'Use minimal Fork Awesome', 'bonjour' ),
				// ''					=> esc_html__( 'Do not use Fork Awesome', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_forkawesome_enabled]'
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_css_minified]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_css_minified', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_css_minified]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'Minify CSS', 'bonjour' ),
			'description'		=> sprintf( '%s<p class="tif-customizer-info">%s<br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s</a></p>',
				esc_html__( 'Using a compressed style sheet improves the loading speed of your pages.', 'bonjour' ),
				esc_html__( 'This will not apply if you are logged in as administrator or if SCRIPT_DEBUG is defined as true.', 'bonjour' ),
				esc_url( __( 'https://wordpress.org/support/article/debugging-in-wordpress/#script_debug', 'bonjour' ) ),
				esc_html__( 'More details', 'bonjour' )
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_js_minified]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_js_minified', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_js_minified]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'Minify Javascript', 'bonjour' ),
			'description'		=> sprintf( '%s<p class="tif-customizer-info"> %s<br /><a href="%s" class="external-link" target="_blank" rel="noreferrer noopener">%s</a></p>',
				esc_html__( 'Using a compressed javascript improves the loading speed of your pages.', 'bonjour' ),
				esc_html__( 'This will not apply if you are logged in as administrator or if SCRIPT_DEBUG is defined as true.', 'bonjour' ),
				esc_url( __( 'https://wordpress.org/support/article/debugging-in-wordpress/#script_debug', 'bonjour' ) ),
				esc_html__( 'More details', 'bonjour' )
			)
		)
	);

	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_lazy_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_lazy_enabled', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_lazy_enabled]',
		array(
			'type'				=> 'checkbox',
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'Load images on scroll', 'bonjour' ),
			'description'		=> esc_html__( 'This option allows you to avoid loading non-visible images. They will be loaded as you scroll. This improves the loading time of your pages when a lot of images are present.', 'bonjour' )
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_wp_embed_js_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_wp_embed_js_enabled', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_wp_embed_js_enabled]',
		array(
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'wp-embed.js', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'tif'				=> esc_html__( 'Add this script to the main generated script', 'bonjour' ),
				'default'			=> esc_html__( 'Keep the default behavior', 'bonjour' ),
				// 'disabled'			=> esc_html__( 'Disable wp-embed.js', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_wp_embed_js_enabled]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_wp_comment_reply_js_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_wp_comment_reply_js_enabled', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_wp_comment_reply_js_enabled]',
		array(
			'section'			=> 'tif_theme_performances_section',
			'label'				=> esc_html__( 'Comment-reply.js', 'bonjour' ),
			'description'		=> esc_html__( 'TODO Description', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'tif'				=> esc_html__( 'Add this script to the main generated script', 'bonjour' ),
				'default'			=> esc_html__( 'Keep the default behavior', 'bonjour' ),
				// 'disabled'			=> esc_html__( 'Disable comment-reply.js', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_settings[tif_wp_comment_reply_js_enabled]'
		)
	);

	// Debug section
	$wp_customize->add_section(
		'tif_theme_debug_section',
		array(
			'priority'			=> 5190,
			'title'				=> esc_html__( 'Debug', 'bonjour' ),
			'panel'				=> 'tif_theme_settings_panel',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_debug_alert_enabled]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_debug_alert_enabled', 'multicheck' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_multicheck'
		)
	);
	$wp_customize->add_control(
		new Tif_Checkbox_Multiple_Control(
			$wp_customize,
			$tif_theme_mod . '_settings[tif_debug_alert_enabled]',
			array(
				'section'		=> 'tif_theme_debug_section',
				'label'			=> esc_html__( 'Debug alerts to display', 'bonjour' ),
				'choices'		=> array(
					'privacy'		=> esc_html__( 'Privacy settings', 'bonjour' ),
					'generated'		=> esc_html__( 'Generated files', 'bonjour' ),
					'metatags'		=> esc_html__( 'Metatags', 'bonjour' ),
					'parent'		=> esc_html__( 'Parent theme', 'bonjour' ),
					'missing'		=> esc_html__( 'Missing element', 'bonjour' ),
					'comments'		=> esc_html__( 'Comments closed', 'bonjour' ),
					'noindex'		=> esc_html__( 'No Index', 'bonjour' ),
					'debug_log'		=> esc_html__( 'Debug logs', 'bonjour' ),
					'debug_mode'	=> esc_html__( 'Debug mode', 'bonjour' ),
				)
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		$tif_theme_mod . '_settings[tif_debug_alert_enabled]',
		array(
			'selector' => '.debug-alert-message',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_settings[tif_debug_alert_when]',
		array(
			'default'			=> tif_get_default( 'theme_settings', 'tif_debug_alert_when', 'int' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_settings[tif_debug_alert_when]',
		array(
			'section'			=> 'tif_theme_debug_section',
			'label'				=> esc_html__( 'When to display?', 'bonjour' ),
			'type'				=> 'radio',
			'choices'			=> array(
				''					=> esc_html__( 'No', 'bonjour' ),
				1					=> esc_html__( 'When an administrator is connected', 'bonjour' ),
				2					=> esc_html__( 'When customizer is open', 'bonjour' ),
			)
		)
	);
