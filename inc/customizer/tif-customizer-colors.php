<?php

if( ! defined( 'ABSPATH' ) ) exit;

// === PANEL // CSS & colors settings ============================================

	$wp_customize->add_panel(
		'tif_css_colors_panel',
		array(
			'capabitity'		=> 'edit_theme_options',
			'priority'			=> 700,
			'title'				=> esc_html__( 'Tif - Colors & CSS', 'bonjour' )
		)
	);

	require_once get_template_directory() . '/inc/customizer/tif-customizer-colors-css.php';

// ... SECTION // Custom Palette ...........................................

	$wp_customize->add_section(
		'tif_color_palette_section',
		array(
			'priority'			=> 7010,
			'title'				=> esc_html__( 'Color pallet', 'bonjour' ),
			'panel'				=> 'tif_css_colors_panel',
			'description_hidden'=> false,
		)
	);

	$wp_customize->add_setting(
		'tif_color_palette_section',
		array(
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		new Tif_Color_Palette(
			$wp_customize, 'color_palette',
			array(
				'section'			=> 'tif_color_palette_section',
				'settings'			=> 'tif_color_palette_section'
			)
		)
	);

	// Add Setting
	// ...

	for ( $i = 1; $i <= 5; $i++ ) {

		switch ($i) {
			case 1:
				$label[$i] = esc_html__( 'Light shades', 'bonjour' );
				$description[$i] = esc_html__( 'Use this color as the background for your dark-on-light designs, or the text color of an inverted design.', 'bonjour' );
				break;
			case 2:
				$label[$i] = esc_html__( 'Light accent', 'bonjour' );
				$description[$i] = esc_html__( 'Accent colors can be used to bring attention to design elements by contrasting with the rest of the palette.', 'bonjour' );
				break;
			case 3:
				$label[$i] = esc_html__( 'Main color', 'bonjour' );
				$description[$i] = esc_html__( 'This color should be eye-catching but not harsh. It can be liberally applied to your layout as its main identity.', 'bonjour' );
				break;
			case 4:
				$label[$i] = esc_html__( 'Dark accent', 'bonjour' );
				$description[$i] = esc_html__( 'Another accent color to consider. Not all colors have to be used - sometimes a simple color scheme works best.', 'bonjour' );
				break;
			case 5:
				$label[$i] = esc_html__( 'Dark shades', 'bonjour' );
				$description[$i] = esc_html__( 'Use as the text color for dark-on-light designs, or as the background for inverted designs.', 'bonjour' );
				break;

		}

		// Add Setting
		// ...
		$wp_customize->add_setting(
			$tif_theme_mod . '_colors[tif_pallet_color'.$i.']',
			array(
				'default'			=> tif_get_default( 'theme_colors', 'tif_pallet_color'.$i.'', 'hexcolor' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_hexcolor'
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, $tif_theme_mod . '_colors[tif_pallet_color'.$i.']',
				array(
					'section'		=> 'tif_color_palette_section',
					'label'			=> esc_html( $label[$i] ),
					'description'	=> esc_html( $description[$i] ),
					'settings'		=> $tif_theme_mod . '_colors[tif_pallet_color'.$i.']'
				)
			)
		);
	}

// ... SECTION // TEXT COLORS .......................................

	$wp_customize->add_section(
		'tif_text_color_section',
		array(
			'priority'			=> 7020,
			'panel'				=> 'tif_css_colors_panel',
			'title'				=> esc_html__( 'Texts', 'bonjour' )
		)
	);

	for ( $i = 1; $i <= 2; $i++ ) {
		// Add Setting
		// ...
		switch ($i) {
			case 1:
				$label[$i] = esc_html__( 'Text color on clear background', 'bonjour' );
				$elmt_db[$i] = 'clear';
				break;
			case 2:
				$label[$i] = esc_html__( 'Text color on dark background', 'bonjour' );
				$elmt_db[$i] = 'dark';
				break;
		}

		$wp_customize->add_setting(
			$tif_theme_mod . '_colors[tif_text_color_bg_'.$elmt_db[$i].']',
			array(
				'default'			=> tif_get_default( 'theme_colors', 'tif_text_color_bg_'.$elmt_db[$i], 'hexcolor' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_hexcolor'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, $tif_theme_mod . '_colors[tif_text_color_bg_'.$elmt_db[$i].']',
				array(
					'section'		=> 'tif_text_color_section',
					'label'			=> $label[$i],
					'settings'		=> $tif_theme_mod . '_colors[tif_text_color_bg_'.$elmt_db[$i].']',
				)
			)
		);
	}

// ... SECTION // LINKS COLORS ................................

	$wp_customize->add_section(
		'tif_link_color_section',
		array(
			'priority'			=> 7030,
			'panel'				=> 'tif_css_colors_panel',
			'title'				=> esc_html__( 'Links', 'bonjour' )
		)
	);

	for ( $i = 1; $i <= 4; $i++ ) {
		// Add Setting
		// ...
		switch ($i) {
			case 1:
				$label[$i] = esc_html__( 'Links color on clear background', 'bonjour' );
				$elmt_db[$i] = 'color_bg_clear';
				break;
			case 2:
				$label[$i] = esc_html__( 'Hover & Visited links color on clear background', 'bonjour' );
				$elmt_db[$i] = 'hover_color_bg_clear';
				break;
			case 3:
				$label[$i] = esc_html__( 'Links color on dark background', 'bonjour' );
				$elmt_db[$i] = 'color_bg_dark';
				break;
			case 4:
				$label[$i] = esc_html__( 'Hover & Visited links color on dark background', 'bonjour' );
				$elmt_db[$i] = 'hover_color_bg_dark';
				break;
		}

		$wp_customize->add_setting(
			$tif_theme_mod . '_colors[tif_link_color_bg_'.$elmt_db[$i].']',
			array(
				'default'			=> tif_get_default( 'theme_colors', 'tif_link_'.$elmt_db[$i], 'hexcolor' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_hexcolor'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, $tif_theme_mod . '_colors[tif_link_color_bg_'.$elmt_db[$i].']',
				array(
					'section'		=> 'tif_link_color_section',
					'label'			=> $label[$i],
					'settings'		=> $tif_theme_mod . '_colors[tif_link_color_bg_'.$elmt_db[$i].']',
				)
			)
		);
	}

// ... SECTION // CUSTOM BACKGROUNDS COLORS .....................................

	$wp_customize->add_section(
		'tif_bg_color_section',
		array(
			'priority'			=> 7040,
			'panel'				=> 'tif_css_colors_panel',
			'title'				=> esc_html__( 'Backgrounds', 'bonjour' )
		)
	);

	for ( $i = 0; $i <= 8; $i++ ) {
		switch ($i) {
			case 0:
				$label[$i] = esc_html__( 'Body', 'bonjour' );
				$elmt_db[$i] = 'body';
				$default[$i] = tif_get_default( 'theme_colors', 'tif_body_bg_color', 'hexcolor' );
				break;
			case 1:
				$label[$i] = esc_html__( 'Header', 'bonjour' );
				$elmt_db[$i] = 'header';
				$default[$i] = '';
				break;
			case 2:
				$label[$i] = esc_html__( 'Primary menu', 'bonjour' );
				$elmt_db[$i] = 'primary_menu';
				$default[$i] = '';
				break;
			case 3:
				$label[$i] = esc_html__( 'Secondary menu', 'bonjour' );
				$elmt_db[$i] = 'secondary_menu';
				$default[$i] = '';
				break;
			case 4:
				$label[$i] = esc_html__( 'Breadcrumb', 'bonjour' );
				$elmt_db[$i] = 'breadcrumb';
				$default[$i] = tif_get_default( 'theme_colors', 'tif_breadcrumb_bg_color', 'hexcolor' );
				break;
			case 5:
				$label[$i] = esc_html__( 'Title bar (if enabled)', 'bonjour' );
				$elmt_db[$i] = 'title_bar';
				$default[$i] = tif_get_default( 'theme_colors', 'tif_title_bar_bg_color', 'hexcolor' );
				break;
			case 6:
				$label[$i] = esc_html__( 'Content', 'bonjour' );
				$elmt_db[$i] = 'content';
				$default[$i] = tif_get_default( 'theme_colors', 'tif_content_bg_color', 'hexcolor' );
				break;
			case 7:
				$label[$i] = esc_html__( 'Sidebar', 'bonjour' );
				$elmt_db[$i] = 'sidebar';
				$default[$i] = tif_get_default( 'theme_colors', 'tif_sidebar_bg_color', 'hexcolor' );
				break;
			case 8:
				$label[$i] = esc_html__( 'Footer', 'bonjour' );
				$elmt_db[$i] = 'footer';
				$default[$i] = tif_get_default( 'theme_colors', 'tif_footer_bg_color', 'hexcolor' );
				break;
		}

		// Add Setting
		// ...
		$wp_customize->add_setting(
			$tif_theme_mod . '_colors[tif_'.$elmt_db[$i].'_bg_color]',
			array(
				'default'			=> $default[$i],
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_hexcolor',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, $tif_theme_mod . '_colors[tif_'.$elmt_db[$i].'_bg_color]',
				array(
					'section'		=> 'tif_bg_color_section',
					'label'			=> $label[$i],
					'settings'		=> $tif_theme_mod . '_colors[tif_'.$elmt_db[$i].'_bg_color]'
				)
			)
		);
	}

// ... SECTION // CUSTOM BUTTONS BACKGROUNDS COLORS ............................

	$wp_customize->add_section(
		'tif_button_bg_color_section',
		array(
			'priority'			=> 7050,
			'panel'				=> 'tif_css_colors_panel',
			'title'				=> esc_html__( 'Buttons', 'bonjour' ),
			'description'		=> sprintf( '<p class="tif-customizer-info">%s</p>',
				esc_html__( 'Leave blank to apply the default background colors (calculated from the theme colors)', 'bonjour' )
			)
		)
	);

	// $custom_colors = new Tif_Custom_Colors;
	// $color = $custom_colors->tif_colors();
	for ( $i = 0; $i <= 6; $i++ ) {
		switch ($i) {
			case 0:
				$label[$i]		= esc_html__( 'Default button', 'bonjour' );
				$elmt_db[$i] 	= 'btn_default';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['default']['bg'];
				$default[$i]	= null;
				break;
			case 1:
				$label[$i]		= esc_html__( 'Primary button', 'bonjour' );
				$elmt_db[$i]	= 'btn_primary';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['primary']['bg'];
				$default[$i]	= null;
				break;
			case 2:
				$label[$i]		= esc_html__( 'Alt Primary button', 'bonjour' );
				$elmt_db[$i]	= 'btn_primary_alt';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['alt']['bg'];
				$default[$i]	= null;
				break;
			case 3:
				$label[$i]		= esc_html__( 'Success button', 'bonjour' );
				$elmt_db[$i]	= 'btn_success';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['success']['bg'];
				$default[$i]	= null;
				break;
			case 4:
				$label[$i]		= esc_html__( 'Warning button', 'bonjour' );
				$elmt_db[$i]	= 'btn_warning';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['warning']['bg'];
				$default[$i]	= null;
				break;
			case 5:
				$label[$i]		= esc_html__( 'Danger button', 'bonjour' );
				$elmt_db[$i]	= 'btn_danger';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['danger']['bg'];
				$default[$i]	= null;
				break;
			case 6:
				$label[$i]		= esc_html__( 'Info button', 'bonjour' );
				$elmt_db[$i]	= 'btn_info';
				$elmt_desc[$i]	= null;
				// $default[$i]	= $color['btn']['info']['bg'];
				$default[$i]	= null;
				break;
		}

		// Add Setting
		// ...
		$wp_customize->add_setting(
			$tif_theme_mod . '_colors[tif_'.$elmt_db[$i].'_bg_color]',
			array(
				'default'			=> $default[$i],
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_hexcolor',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize, $tif_theme_mod . '_colors[tif_'.$elmt_db[$i].'_bg_color]',
				array(
					'section'		=> 'tif_button_bg_color_section',
					'label'			=> $label[$i],
					'description'	=> $elmt_desc[$i],
					'settings'		=> $tif_theme_mod . '_colors[tif_'.$elmt_db[$i].'_bg_color]'
				)
			)
		);
	}

// ... SECTION // CUSTOM BACKGROUNDS COLORS ON MOBILE ..........................

	$wp_customize->add_section(
		'tif_mobile_bg_color_section',
		array(
			'priority'			=> 7060,
			'panel'				=> 'tif_css_colors_panel',
			'title'				=> esc_html__( 'Mobile backgrounds', 'bonjour' )
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_colors[tif_header_mobile_bg_color]',
		array(
			'default'			=> tif_get_default( 'theme_colors', 'tif_header_mobile_bg_color', 'hexcolor' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_hexcolor',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, $tif_theme_mod . '_colors[tif_header_mobile_bg_color]',
			array(
				'section'		=> 'tif_mobile_bg_color_section',
				'label'			=> esc_html__( 'Header background color', 'bonjour' ),
				'settings'		=> $tif_theme_mod . '_colors[tif_header_mobile_bg_color]'
			)
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_colors[tif_sidebar_mobile_bg_color]',
		array(
			'default'			=> tif_get_default( 'theme_colors', 'tif_sidebar_mobile_bg_color', 'hexcolor' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_hexcolor',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, $tif_theme_mod . '_colors[tif_sidebar_mobile_bg_color]',
			array(
				'section'		=> 'tif_mobile_bg_color_section',
				'label'			=> esc_html__( 'Sidebar background color', 'bonjour' ),
				'settings'		=> $tif_theme_mod . '_colors[tif_sidebar_mobile_bg_color]'
			)
		)
	);
