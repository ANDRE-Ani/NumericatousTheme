<?php

if( ! defined( 'ABSPATH' ) ) exit;

// === PANEL // Theme layout ===================================================

	$wp_customize->add_panel(
		'tif_theme_layout_panel',
		array(
			'capabitity'		=> 'edit_theme_options',
			'priority'			=> 400,
			'title'				=> esc_html__( 'Tif - Layout', 'bonjour' )
		)
	);

	// ... SECTION // Default layout .................................................

		// Add Section
		// ...
		$wp_customize->add_section(
			'tif_theme_default_layout_section',
			array(
				'priority'			=> 4010,
				'title'				=> esc_html__( 'Default layout', 'bonjour' ),
				'panel'				=> 'tif_theme_layout_panel'
			)
		);

		// Add Setting
		// ...
		$wp_customize->add_setting(
			$tif_theme_mod . '_layout[tif_default_layout]',
			array(
				'default'			=> tif_get_default( 'theme_layout', 'tif_default_layout', 'key' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_select'
			)
		);
		$wp_customize->add_control(
			new Tif_Radio_Image_Control(
				$wp_customize, $tif_theme_mod . '_layout[tif_default_layout]',
				array(
					'section'			=> 'tif_theme_default_layout_section',
					'label'				=> esc_html__( 'Default layout', 'bonjour' ),
					'type'				=> 'radio',
					'settings'			=> $tif_theme_mod . '_layout[tif_default_layout]',
					'choices'			=> array(
						'right_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-right.png',
						'left_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-left.png',
						'no_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-no-sidebar.png',
						'wide'				=> TIF_ADMIN_IMAGES_URL . '/layout-theme-wide.png'
					)
				)
			)
		);

		// Add Setting
		// Site layout (boxed or not)
		$wp_customize->add_setting(
			$tif_theme_mod . '_layout[tif_site_boxed]',
			array(
				'default'			=> tif_get_default( 'theme_layout', 'tif_site_boxed', 'checkbox' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_checkbox'
			)
		);
		$wp_customize->add_control(
			$tif_theme_mod . '_layout[tif_site_boxed]',
			array(
				'type'				=> 'checkbox',
				'label'				=> sprintf( '%1$s %2$s',
											esc_html__( 'Boxed site layout.', 'bonjour' ),
											esc_html__( 'The change is reflected in whole site.', 'bonjour' )
										),
				'section'			=> 'tif_theme_default_layout_section'
			)
		);

		// Add Setting
		// ...
		$wp_customize->add_setting(
			$tif_theme_mod . '_layout[tif_boxed]',
			array(
				'default'			=> tif_get_default( 'theme_layout', 'tif_boxed', 'multicheck' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_multicheck'
			)
		);
		$wp_customize->add_control(
			new Tif_Checkbox_Multiple_Control(
				$wp_customize, $tif_theme_mod . '_layout[tif_boxed]',
				array(
					'section'		=> 'tif_theme_default_layout_section',
					'label'			=> esc_html__( 'Boxed element in wide layout', 'bonjour' ),
					'choices'		=> array(
						'header'		=> esc_html__( 'Header', 'bonjour' ),
						'content'		=> esc_html__( 'Content', 'bonjour' ),
						'footer'		=> esc_html__( 'Footer', 'bonjour' )
					)
				)
			)
		);

		// Add Setting
		// Default layout for single posts
		$wp_customize->add_setting(
			$tif_theme_mod . '_layout[tif_single_layout]',
			array(
				'default'			=> tif_get_default( 'theme_layout', 'tif_single_layout', 'key' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_select'
			)
		);
		$wp_customize->add_control(
			new Tif_Radio_Image_Control(
				$wp_customize, $tif_theme_mod . '_layout[tif_single_layout]',
				array(
					'section'			=> 'tif_theme_default_layout_section',
					'label'				=> esc_html__( 'Single posts layout', 'bonjour' ),
					'type'				=> 'radio',
					'settings'			=> $tif_theme_mod . '_layout[tif_single_layout]',
					'choices'			=> array(
						'right_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-right.png',
						'left_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-left.png',
						'no_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-no-sidebar.png',
						'wide'				=> TIF_ADMIN_IMAGES_URL . '/layout-theme-wide.png'
					)
				)
			)
		);

		// Add Setting
		// Default layout for pages
		$wp_customize->add_setting(
			$tif_theme_mod . '_layout[tif_pages_layout]',
			array(
				'default'			=> tif_get_default( 'theme_layout', 'tif_pages_layout', 'key' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_select'
			)
		);
		$wp_customize->add_control(
			new Tif_Radio_Image_Control(
				$wp_customize, $tif_theme_mod . '_layout[tif_pages_layout]',
				array(
					'section'			=> 'tif_theme_default_layout_section',
					'label'				=> esc_html__( 'Pages layout', 'bonjour' ),
					'type'				=> 'radio',
					'settings'			=> $tif_theme_mod . '_layout[tif_pages_layout]',
					'choices'			=> array(
						'right_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-right.png',
						'left_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-left.png',
						'no_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-no-sidebar.png',
						'wide'				=> TIF_ADMIN_IMAGES_URL . '/layout-theme-wide.png'
					)
				)
			)
		);

		// Add Setting
		// Default layout for single posts
		$wp_customize->add_setting(
			$tif_theme_mod . '_layout[tif_404_layout]',
			array(
				'default'			=> tif_get_default( 'theme_layout', 'tif_404_layout', 'key' ),
				'type'				=> 'option',
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'tif_sanitize_select'
			)
		);
		$wp_customize->add_control(
			new Tif_Radio_Image_Control(
				$wp_customize, $tif_theme_mod . '_layout[tif_404_layout]',
				array(
					'section'			=> 'tif_theme_default_layout_section',
					'label'				=> esc_html__( '404 layout', 'bonjour' ),
					'type'				=> 'radio',
					'settings'			=> $tif_theme_mod . '_layout[tif_404_layout]',
					'choices'			=> array(
						'right_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-right.png',
						'left_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-sidebar-left.png',
						'no_sidebar'		=> TIF_ADMIN_IMAGES_URL . '/layout-theme-no-sidebar.png',
						'wide'				=> TIF_ADMIN_IMAGES_URL . '/layout-theme-wide.png'
					)
				)
			)
		);

// ... SECTION // Main loop ..................................................

	// Header, position of h1 title
	$wp_customize->add_section(
		'tif_theme_loop_layout_section',
		array(
			'priority'			=> 4020,
			'title'				=> esc_html__( 'Main loop', 'bonjour' ),
			'panel'				=> 'tif_theme_layout_panel'
		)
	);

	// Add Setting
	// Default layout for single posts
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_loop_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_loop_layout', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		new Tif_Radio_Image_Control(
			$wp_customize, $tif_theme_mod . '_layout[tif_loop_layout]',
			array(
				'section'			=> 'tif_theme_loop_layout_section',
				'label'				=> esc_html__( 'Posts list layout', 'bonjour' ),
				'type'				=> 'radio',
				'choices'			=> array(
					''					=> TIF_ADMIN_IMAGES_URL . '/posts-layout.png',
					'grid'				=> TIF_ADMIN_IMAGES_URL . '/posts-layout-grid.png',
					'row'				=> TIF_ADMIN_IMAGES_URL . '/posts-layout-row.png',
				),
				'settings'			=> $tif_theme_mod . '_layout[tif_loop_layout]'
			)
		)
	);


// ... SECTION // Navigation ...................................................

	$wp_customize->add_section(
		'tif_theme_navigation_layout_section',
		array(
			'priority'			=> 4030,
			'title'				=> esc_html__( 'Navigation', 'bonjour' ),
			'panel'				=> 'tif_theme_layout_panel',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_main_nav_desktop_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_main_nav_desktop_layout', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		new Tif_Radio_Image_Control(
			$wp_customize, $tif_theme_mod . '_layout[tif_main_nav_desktop_layout]',
			array(
				'section'		=> 'tif_theme_navigation_layout_section',
				'label'			=> esc_html__( 'Select main navigation layout for desktop', 'bonjour' ),
				'type'			=> 'radio',
				'settings'		=> $tif_theme_mod . '_layout[tif_main_nav_desktop_layout]',
				'choices'		=> array(
					'block'			=> TIF_ADMIN_IMAGES_URL . '/nav-layout-hfull.png',
					'inbl'			=> TIF_ADMIN_IMAGES_URL . '/nav-layout-hinbl.png',
					// 'vertical'		=> TIF_ADMIN_IMAGES_URL . '/layout-nav-desktop-vertical.png'
				)
			)
		)
	);

	// // Add Setting
	// // ...
	// $wp_customize->add_setting(
	// 	$tif_theme_mod . '_layout[tif_main_nav_layout]',
	// 	array(
	// 		'default'			=> tif_get_default( 'theme_layout', 'tif_main_nav_layout', 'key' ),
	// 		'type'				=> 'option',
	// 		'capability'		=> 'edit_theme_options',
	// 		'sanitize_callback'	=> 'tif_sanitize_select'
	// 	)
	// );
	// $wp_customize->add_control(
	// 	new Tif_Radio_Image_Control(
	// 		$wp_customize, $tif_theme_mod . '_layout[tif_main_nav_layout]',
	// 		array(
	// 			'section'		=> 'tif_theme_navigation_layout_section',
	// 			'label'			=> esc_html__( 'Select main navigation layout for mobile devices', 'bonjour' ),
	// 			'type'			=> 'radio',
	// 			'settings'		=> $tif_theme_mod . '_layout[tif_main_nav_layout]',
	// 			'choices'		=> array(
	// 				''				=> TIF_ADMIN_IMAGES_URL . '/nav-mobile-layout-decale.png',
	// 				'nav-overlay'	=> TIF_ADMIN_IMAGES_URL . '/nav-mobile-layout-overlay.png',
	// 				'nav-slider'	=> TIF_ADMIN_IMAGES_URL . '/nav-mobile-layout-slider.png'
	// 			)
	// 		)
	// 	)
	// );

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_main_nav_mobile_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_main_nav_mobile_layout', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		new Tif_Radio_Image_Control(
			$wp_customize, $tif_theme_mod . '_layout[tif_main_nav_mobile_layout]',
			array(
				'section'		=> 'tif_theme_navigation_layout_section',
				'label'			=> esc_html__( 'Select main navigation layout for mobile devices', 'bonjour' ),
				'type'			=> 'radio',
				'settings'		=> $tif_theme_mod . '_layout[tif_main_nav_mobile_layout]',
				'choices'		=> array(
					''				=> TIF_ADMIN_IMAGES_URL . '/nav-mobile-layout-decale.png',
					'nav-overlay'	=> TIF_ADMIN_IMAGES_URL . '/nav-mobile-layout-overlay.png',
					'nav-slider'	=> TIF_ADMIN_IMAGES_URL . '/nav-mobile-layout-slider.png'
				)
			)
		)
	);

// ... SECTION // Social Icons .................................................

	$wp_customize->add_section(
		'tif_theme_social_layout_section',
		array(
			'priority'			=> 4040,
			'title'				=> esc_html__( 'Social Icons', 'bonjour' ),
			'panel'				=> 'tif_theme_layout_panel',
		)
	);


	// Add Setting
	// Site layout (boxed or not)
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_social_border]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_social_border', 'checkbox' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_checkbox'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_social_border]',
		array(
			'section'			=> 'tif_theme_social_layout_section',
			'label'				=>  esc_html__( 'Bordered?', 'bonjour' ),
			'type'				=> 'checkbox',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_social_rounded_list]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_social_rounded_list', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_social_rounded_list]',
		array(
			'section'			=> 'tif_theme_social_layout_section',
			'label'				=> esc_html__( 'Rounded?', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'' 						=> esc_html__( 'None', 'bonjour' ),
				'rounded_list'			=> esc_html__( 'Rounded', 'bonjour' ),
				'rounded_list_circle'	=> esc_html__( 'Circle', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_layout[tif_social_rounded_list]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_social_list_bg_color]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_social_list_bg_color', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_social_list_bg_color]',
		array(
			'section'			=> 'tif_theme_social_layout_section',
			'label'				=> esc_html__( 'List background color', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'' 					=> esc_html__( 'None', 'bonjour' ),
				'bgnetwork'			=> esc_html__( 'Social network colors', 'bonjour' ),
				'color_1' 			=> esc_html__( 'Light shades', 'bonjour' ),
				'color_2' 			=> esc_html__( 'Light accent', 'bonjour' ),
				'color_3' 			=> esc_html__( 'Main color', 'bonjour' ),
				'color_4' 			=> esc_html__( 'Dark accent', 'bonjour' ),
				'color_5' 			=> esc_html__( 'Dark shades', 'bonjour' ),
				'btn_default' 		=> esc_html__( 'Default button color', 'bonjour' ),
				'btn_info' 			=> esc_html__( 'Info color', 'bonjour' ),
				'btn_success' 		=> esc_html__( 'Success color', 'bonjour' ),
				'btn_warning' 		=> esc_html__( 'Warning color', 'bonjour' ),
				'btn_danger' 		=> esc_html__( 'Danger color', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_layout[tif_social_list_bg_color]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_social_list_bg_color_hover]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_social_list_bg_color_hover', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_social_list_bg_color_hover]',
		array(
			'section'			=> 'tif_theme_social_layout_section',
			'label'				=> esc_html__( 'List background color on mouse hover', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'' 					=> esc_html__( 'Keep initial background color', 'bonjour' ),
				'bgnetwork_hover'	=> esc_html__( 'Social network colors', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_layout[tif_social_list_bg_color_hover]'
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_social_size]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_social_size', 'key' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'tif_sanitize_select'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_social_size]',
		array(
			'section'			=> 'tif_theme_social_layout_section',
			'label'				=> esc_html__( 'Size', 'bonjour' ),
			'type'				=> 'select',
			'choices'			=> array(
				'small' 			=> esc_html__( 'Small', 'bonjour' ),
				'' 					=> esc_html__( 'Normal', 'bonjour' ),
				'large' 			=> esc_html__( 'Large', 'bonjour' ),
			),
			'settings'		=> $tif_theme_mod . '_layout[tif_social_size]'
		)
	);

// ... SECTION // Messages ...................................................

	$wp_customize->add_section(
		'tif_theme_message_layout_section',
		array(
			'priority'			=> 4050,
			'title'				=> esc_html__( 'Messages', 'bonjour' ),
			'panel'				=> 'tif_theme_layout_panel',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_message_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_message_layout', 'int' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_message_layout]',
		array(
			'section'			=> 'tif_theme_message_layout_section',
			'label'				=> esc_html__( 'Label', 'bonjour' ),
			'type'				=> 'radio',
			'choices'			=> array(
				''					=> esc_html__( '1', 'bonjour' ),
				1					=> esc_html__( '2', 'bonjour' ),
				2					=> esc_html__( '3', 'bonjour' ),
			)
		)
	);

// ... SECTION // Buttons ......................................................

	$wp_customize->add_section(
		'tif_theme_buttons_layout_section',
		array(
			'priority'			=> 4060,
			'title'				=> esc_html__( 'Buttons', 'bonjour' ),
			'panel'				=> 'tif_theme_layout_panel',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_button_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_button_layout', 'int' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_button_layout]',
		array(
			'section'			=> 'tif_theme_buttons_layout_section',
			'label'				=> esc_html__( 'Label', 'bonjour' ),
			'type'				=> 'radio',
			'choices'			=> array(
				''					=> esc_html__( '1', 'bonjour' ),
				1					=> esc_html__( '2', 'bonjour' ),
				2					=> esc_html__( '3', 'bonjour' ),
			)
		)
	);

// ... SECTION // Pagination ...................................................

	$wp_customize->add_section(
		'tif_theme_pagination_layout_section',
		array(
			'priority'			=> 4070,
			'title'				=> esc_html__( 'Pagination', 'bonjour' ),
			'panel'				=> 'tif_theme_layout_panel',
		)
	);

	// Add Setting
	// ...
	$wp_customize->add_setting(
		$tif_theme_mod . '_layout[tif_pagination_layout]',
		array(
			'default'			=> tif_get_default( 'theme_layout', 'tif_pagination_layout', 'int' ),
			'type'				=> 'option',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		)
	);
	$wp_customize->add_control(
		$tif_theme_mod . '_layout[tif_pagination_layout]',
		array(
			'section'			=> 'tif_theme_pagination_layout_section',
			'label'				=> esc_html__( 'Pagination layout', 'bonjour' ),
			'type'				=> 'radio',
			'choices'			=> array(
				''					=> esc_html__( '1', 'bonjour' ),
				1					=> esc_html__( '2', 'bonjour' ),
				2					=> esc_html__( '3', 'bonjour' ),
			)
		)
	);


	require_once get_template_directory() . '/inc/customizer/tif-customizer-woocommerce.php';
