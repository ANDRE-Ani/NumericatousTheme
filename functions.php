<?php

// ne pas montrer la version de Wordpress
remove_action('wp_head', 'wp_generator');


// lien lire plus après les articles
function new_excerpt_more($more) {
       global $post;
	return '<p><a class="lirePlus moretag" href="'. get_permalink($post->ID) . '"> Lire la suite </a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// scripts et CSS, bootstrap
function style_enqueue_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js' );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.js' );
    wp_enqueue_script('popper', 'https://unpkg.com/@popperjs/core@2', array('jquery'), 1, true);
  }
  add_action( 'wp_enqueue_scripts', 'style_enqueue_scripts');



function style_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'site', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'style_scripts');


add_theme_support('title-tag');


// widgets
function add_widget_Support()
{
    register_sidebar(array(
        'name' => 'Sidebar-d1',
        'id' => 'sidebar-d1',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-1',
        'id' => 'sidebar-footer-1',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-2',
        'id' => 'sidebar-footer-2',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-3',
        'id' => 'sidebar-footer-3',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg> - ',
        'after_title' => '</h5><hr>',
    ));
}


add_action('widgets_init', 'add_Widget_Support');


// menu
function add_Main_Nav()
{
    register_nav_menus(
        array(
            'menu-titre' => __('Menu titre'),
        )
    );
}


add_theme_support( 'automatic-feed-links' );


add_theme_support( 'title-tag' );


add_theme_support( 'post-thumbnails' );


add_theme_support( 'post-formats', array( 'aside', 'gallery', 'chat', 'image', 'link', 'quote', 'video', 'audio'));


add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

add_theme_support( 'customize-selective-refresh-widgets' );


add_theme_support( 'editor-color-palette',
    array(
		array( 'name' => 'blue', 'slug'  => 'blue', 'color' => '#48ADD8' ),
		array( 'name' => 'pink', 'slug'  => 'pink', 'color' => '#FF2952' ),
		array( 'name' => 'green', 'slug'  => 'green', 'color' => '#83BD71' ),
	)
);


function numerica_custom_logo_setup() {
  $defaults = array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
 'unlink-homepage-logo' => true, 
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'numerica_custom_logo_setup' );



$args = array(
    'default-color' => '000000',
    'default-image' => '',
);
add_theme_support( 'custom-background', $args );



$args = array(
    'default-image' => '',
    'default-text-color' => '',
    'header-text' => 'true',
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width'  => false,
    'uploads' => true,
);
add_theme_support('custom-header', $args);

add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'editor-styles' );


// images et taille
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );
    add_theme_support( 'post-thumbnails', array( 'page' ) );
    set_post_thumbnail_size( 600, 350, TRUE );
}
    

add_action('init', 'add_Main_Nav');


// section accroche
function sitepoint_customize_register($wp_customize) 
{
	$wp_customize->add_section("acc", array(
		"title" => __("Section accroche", "customizer_acc_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("acc_code", array(
		"default" => "",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"acc_code",
		array(
			"label" => __("Entrez votre texte", "customizer_acc_code_label"),
			"section" => "acc",
			"settings" => "acc_code",
			"type" => "textarea",
		)
    ));
    
}

add_action("customize_register","sitepoint_customize_register");

function sitepoint_customizer_live_preview()
{
	wp_enqueue_script("sitepoint-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "sitepoint_customizer_live_preview");


// section head1
function head1_customize_register($wp_customize) 
{
	$wp_customize->add_section("head1", array(
		"title" => __("Section head1", "customizer_head1_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("head1_code", array(
		"default" => "",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"head1_code",
		array(
			"label" => __("Entrez votre texte", "customizer_head1_code_label"),
			"section" => "head1",
			"settings" => "head1_code",
			"type" => "textarea",
		)
    ));
    
}

add_action("customize_register","head1_customize_register");

function head1_customizer_live_preview()
{
	wp_enqueue_script("head1-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "head1_customizer_live_preview");


// section head2
function head2_customize_register($wp_customize) 
{
	$wp_customize->add_section("head2", array(
		"title" => __("Section head2", "customizer_head2_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("head2_code", array(
		"default" => "",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"head2_code",
		array(
			"label" => __("Entrez votre texte", "customizer_head2_code_label"),
			"section" => "head2",
			"settings" => "head2_code",
			"type" => "textarea",
		)
    ));
    
}

add_action("customize_register","head2_customize_register");

function head2_customizer_live_preview()
{
	wp_enqueue_script("head2-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "head2_customizer_live_preview");



// section head3
function head3_customize_register($wp_customize) 
{
	$wp_customize->add_section("head3", array(
		"title" => __("Section head3", "customizer_head3_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("head3_code", array(
		"default" => "",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"head3_code",
		array(
			"label" => __("Entrez votre texte", "customizer_head3_code_label"),
			"section" => "head3",
			"settings" => "head3_code",
			"type" => "textarea",
		)
    ));
    
}

add_action("customize_register","head3_customize_register");

function head3_customizer_live_preview()
{
	wp_enqueue_script("head3-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "head3_customizer_live_preview");



// section recommandations
function reco_customize_register($wp_customize) 
{
	$wp_customize->add_section("reco", array(
		"title" => __("Section recommandation", "customizer_reco_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("reco_code", array(
		"default" => "",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"reco_code",
		array(
			"label" => __("Entrez votre texte", "customizer_reco_code_label"),
			"section" => "reco",
			"settings" => "reco_code",
			"type" => "textarea",
		)
    ));
    
}

add_action("customize_register","reco_customize_register");

function reco_customizer_live_preview()
{
	wp_enqueue_script("reco-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "reco_customizer_live_preview");

?>
