<?php

// ne pas montrer la version de Wordpress
remove_action('wp_head', 'wp_generator');

// textdomain pour les traductions
function numerica_load_theme_textdomain() {
  load_theme_textdomain( 'numerica', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'numerica_load_theme_textdomain' );


// enlever le champ URL des commentaires
function wpadmin_remove_comment_url($arg) {
  $arg['url'] = '';
  return $arg;
}
add_filter('comment_form_default_fields', 'wpadmin_remove_comment_url');


// modifie l'ordre des champs du formulaire de commentaire
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
  
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom'); 



// lien lire plus après les articles
function new_excerpt_more($more) {
       global $post;
	return '<p><a class="lirePlus moretag" href="'. get_permalink($post->ID) . '"> Lire la suite </a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// scripts et CSS, bootstrap
function style_enqueue_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js' );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js' );
  }
  add_action( 'wp_enqueue_scripts', 'style_enqueue_scripts');



function style_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'site', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'style_scripts');



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
        'before_title' => '<h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-square-fill icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        </svg> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-2',
        'id' => 'sidebar-footer-2',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-square-fill icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        </svg> - ',
        'after_title' => '</h5><hr>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar-footer-3',
        'id' => 'sidebar-footer-3',
        'before_widget' => '<div class="widgetsB">',
        'after_widget' => '</div>',
        'before_title' => '<h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-square-fill icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
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


function numerica_theme_setup() {
  add_theme_support( 'title-tag' );  
}
add_action( 'after_setup_theme', 'numerica_theme_setup');


add_theme_support( 'automatic-feed-links' );


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
  'width'       => 500,
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
    set_post_thumbnail_size( 600, 350 );
}
  


add_action ('woocommerce_before_main_content', 'numerica_wrapper_start', 10);
add_action ('woocommerce_after_main_content', 'numerica_wrapper_end', 10);

function numerica_wrapper_start () {
echo '<section id = "main">';
}

function numerica_wrapper_end () {
echo '</ section>';
}


add_action('init', 'add_Main_Nav');


// section contact
function contact_customize_register($wp_customize) 
{
	$wp_customize->add_section('contact', array(
		'title' => __( 'Section contact', 'numerica' ),
		'priority' => 30,
    ));
    
    $wp_customize->add_setting('contact_code', array(
		'default' => 'Contact',
		'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'contact_code',
		array(
			'label' => __( 'Entrez le texte de la section contact', 'numerica' ),
			'section' => 'contact',
			'settings' => 'contact_code',
			'type' => 'textarea',
		)
    ));
    
}

add_action("customize_register","contact_customize_register");

function contact_customizer_live_preview()
{
	wp_enqueue_script("contact-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "contact_customizer_live_preview");



// section accroche
function sitepoint_customize_register($wp_customize) 
{
	$wp_customize->add_section("acc", array(
		"title" => __("Section accroche", "customizer_acc_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("acc_code", array(
		"default" => "accroche",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"acc_code",
		array(
			"label" => __('Entrez le texte de l\'accroche', 'numerica', "customizer_acc_code_label"),
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
		"default" => "header 1",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"head1_code",
		array(
			"label" => __('Entrez le texte du header 1', 'numerica', "customizer_head1_code_label"),
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
		"default" => "header 2",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"head2_code",
		array(
			"label" => __('Entrez le texte du header 2', 'numerica', "customizer_head2_code_label"),
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
		"default" => "header 3",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"head3_code",
		array(
			"label" => __('Entrez le texte du header 3', 'numerica', "customizer_head3_code_label"),
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
		"default" => "Recommandations",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"reco_code",
		array(
			"label" => __('Entrez le texte section recommandation', 'numerica',"customizer_reco_code_label"),
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



// section footer
function footer_customize_register($wp_customize) 
{
	$wp_customize->add_section("footer", array(
		"title" => __("Section footer", "customizer_footer_sections"),
		"priority" => 30,
    ));
    
    $wp_customize->add_setting("footer_code", array(
		"default" => "Footer",
		"transport" => "postMessage",
    ));
    
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"footer_code",
		array(
			"label" => __('Entrez le texte du pied de page', 'numerica', "customizer_footer_code_label"),
			"section" => "footer",
			"settings" => "footer_code",
			"type" => "textarea",
		)
    ));
    
}

add_action("customize_register","footer_customize_register");

function footer_customizer_live_preview()
{
	wp_enqueue_script("footer-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
}

add_action("customize_preview_init", "footer_customizer_live_preview");


/**
 * Supprimer les emoji et leur CDN
 */
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
 }
 add_action( 'init', 'disable_emojis' );
 

 function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
  return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
  return array();
  }
 }
 

 function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
  $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
 
 $urls = array_diff( $urls, array( $emoji_svg_url ) );
  }
 
 return $urls;
 }

?>
