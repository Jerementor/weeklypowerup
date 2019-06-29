<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Make2d
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
 
//Loading in Scripts
function make2dgames_enqueue_styles()
{
    wp_enqueue_script('add_prism_js', get_template_directory_uri() . '/assets/js/prism.js');

    wp_enqueue_style("add_google_font",  'https://fonts.googleapis.com/css?family=Nunito', false);
    // wp_enqueue_style("add_google_font_halant",  'https://fonts.googleapis.com/css?family=Halant:300,400,500,600,700', false);
    // wp_enqueue_style("add_google_font_ropa",  'https://fonts.googleapis.com/css?family=Ropa+Sans', false);
    wp_enqueue_style("add_prism_css",  get_template_directory_uri() . "/assets/css/prism.css");
    wp_enqueue_style("make2d-custom",  get_template_directory_uri() . "/assets/css/make2d.css");
    wp_enqueue_style("frontpage-custom",  get_template_directory_uri() . "/assets/css/frontpage.css");
    wp_enqueue_style("make2dgames-style", get_stylesheet_uri());
    
    // wp_enqueue_style("add_main_css",  get_template_directory_uri() . "/assets/css/main.css");
   
    
}
add_action("wp_enqueue_scripts", "make2dgames_enqueue_styles");


function make2dgames_setup(){
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


	/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'weeklypowerup' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
	
}
add_action( 'after_setup_theme', 'make2dgames_setup' );

/**
 *
 Hide Admin Bar From Everyone But Admins
 *
 *
 */
if (!current_user_can('manage_options')){
    add_filter('show_admin_bar', '__return_false');
}