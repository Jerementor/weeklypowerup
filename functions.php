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

    // wp_enqueue_style("add_normalize",  'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', false);
    wp_enqueue_style("add_google_font",  'https://fonts.googleapis.com/css?family=Nunito', false);
    wp_enqueue_style("make2d-custom",  get_template_directory_uri() . "/assets/css/make2d.css");
    wp_enqueue_style("make2dgames-style", get_stylesheet_uri());
    
}
add_action("wp_enqueue_scripts", "make2dgames_enqueue_styles");