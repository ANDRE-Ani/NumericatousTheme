<?php

require get_template_directory().'/options/themeoptions.php';

// ne pas montrer la version de Wordpress
remove_action('wp_head', 'wp_generator');

// lien lire plus après les articles
function new_excerpt_more($more) {
       global $post;
	return '<p><a class="lirePlus moretag" href="'. get_permalink($post->ID) . '"> Lire la suite </a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');



// Add scripts and stylesheets
function style_scripts()
{
   wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css');
   }
add_action('wp_enqueue_scripts', 'style_scripts');


// add fontawesome
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
 
}


// Add Google Fonts
function style_google_fonts()
{
    wp_register_style('Ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu');
    wp_enqueue_style('Ubuntu');
}
add_action('wp_print_styles', 'style_google_fonts');


// WordPress Titles
add_theme_support('title-tag');


// widgets
function add_widget_Support()
{

    register_sidebar(array(
        'name' => 'Sidebar-header-1',
        'id' => 'sidebar-header-1',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-header-2',
        'id' => 'sidebar-header-2',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-header-3',
        'id' => 'sidebar-header-3',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-header-4',
        'id' => 'sidebar-header-4',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-header-5',
        'id' => 'sidebar-header-5',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-d1',
        'id' => 'sidebar-d1',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-h1',
        'id' => 'sidebar-h1',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fab fa-linux"></i> - ',
        'after_title' => '</h5><hr>',
    ));


    register_sidebar(array(
        'name' => 'Sidebar-h2',
        'id' => 'sidebar-h2',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fab fa-linux"></i> - ',
        'after_title' => '</h5><hr>',
    ));


    register_sidebar(array(
        'name' => 'Sidebar-h3',
        'id' => 'sidebar-h3',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fab fa-linux"></i> - ',
        'after_title' => '</h5><hr>',
    ));


    register_sidebar(array(
        'name' => 'Sidebar-footer-1',
        'id' => 'sidebar-footer-1',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-2',
        'id' => 'sidebar-footer-2',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-3',
        'id' => 'sidebar-footer-3',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><i class="fas fa-info-circle"></i> - ',
        'after_title' => '</h5><hr>',
    ));
}

// Hook the widget initiation and run our function
add_action('widgets_init', 'add_Widget_Support');


// Register a new navigation menu
function add_Main_Nav()
{
    register_nav_menus(
        array(
            'menu-haut' => __('Menu haut'),
        )
    );
}


// Menus
$locations = array(
    'menu-haut' => 'Barre de menu supérieure',
);
register_nav_menus($locations);


// enable WP automatic feed links
add_theme_support( 'automatic-feed-links' );

// title tag
add_theme_support( 'title-tag' );

// post thumbnails
add_theme_support( 'post-thumbnails' );

// post-format
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'chat', 'image', 'link', 'quote', 'video', 'audio'));

// support HTML5
add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

add_theme_support( 'customize-selective-refresh-widgets' );

// add logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


// background
$args = array(
    'default-color' => '000000',
    'default-image' => '',
);
add_theme_support( 'custom-background', $args );


// header
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


// breadcrumb
function fil_ariane() {
    global $post;
        if (!is_home()) {
            $fil = 'Vous êtes ici : ';
            $fil .= '<a href="'.get_bloginfo('wpurl').'">';
            $fil .= get_bloginfo('name');
            $fil .= '</a> > ';

    $parents = array_reverse(get_ancestors($post->ID,'page'));
    foreach($parents as $parents) {
        $fil.='<a href="'.get_permalink($parent).'">';
        $fil.= get_the_title($parent);
        $fil.= '</a> >';
    }
    $fil.= $post->post_title;
        }
        return $fil;
}


// Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, TRUE );
}


// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');



function sitepoint_customize_register($wp_customize) 
{
	$wp_customize->add_section("ads", array(
		"title" => __("Advertising", "customizer_ads_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("ads_code", array(
		"default" => "",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"ads_code",
		array(
			"label" => __("Enter Ads Code", "customizer_ads_code_label"),
			"section" => "ads",
			"settings" => "ads_code",
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


?>
