<?php
/**
 * Weekly Powerup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WeeklyPowerup
 * @since 1.0.0
 */
 
//Loading in Scripts
function weeklypowerup_enqueue_styles()
{

	 wp_enqueue_style("add_normalize", 		get_template_directory_uri() 	. "/assets/css/normalize.css");

	 wp_enqueue_style("add_webflow_css",  	get_template_directory_uri() 	. "/assets/css/webflow.css");

	 wp_enqueue_style("add_weekly_css",  	get_template_directory_uri() 	. "/assets/css/weeklypowerup.webflow.css");

	 wp_enqueue_style("add_nunito_font",  								'https://fonts.googleapis.com/css?family=Nunito', false);   

	 wp_enqueue_script('add_prism_js', 		get_template_directory_uri() 	. '/assets/js/prism.js');
	
	 wp_enqueue_style("add_prism_css",  	get_template_directory_uri() 	. "/assets/css/prism.css");

     wp_enqueue_style("frontpage-custom",  	get_template_directory_uri() . "/assets/css/frontpage.css");

	 wp_enqueue_script('add_webflow_js', 	get_template_directory_uri() 	. '/assets/js/webflow.js', array( 'jquery' ));
  
     wp_enqueue_style("weeklypowerup-style", get_stylesheet_uri());
    
    
}
add_action("wp_enqueue_scripts", "weeklypowerup_enqueue_styles");

function chkmk_custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'chkmk_custom_override_checkout_fields' );



function weeklypowerup_setup(){
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    
    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
    /*
    * Make theme available for translation.
    * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
    * If you're building a theme based on uncomplicated, use a find and replace
    * to change 'uncomplicated' to the name of your theme in all the template files
    */
    load_theme_textdomain( 'weeklypowerup' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );    
    
    
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
    'logged-in'     => __("Logged-In Menu", "weeklypowerup-login"),
    'logged-out'    => __("Logged-Out Menu", "weeklypowerup-logout"),
        
    ));
    
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	
	) );
	
	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
}
add_action( 'after_setup_theme', 'weeklypowerup_setup' );

/**
 *Hide Admin Bar From Everyone But Admins
	*
	*
	*/
if (!current_user_can('manage_options')){
	add_filter('show_admin_bar', '__return_false');
}
