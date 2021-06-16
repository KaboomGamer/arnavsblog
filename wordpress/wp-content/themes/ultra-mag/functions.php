<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

$theme = wp_get_theme();
define( 'ULTRANEWS_THEME', $theme->get( 'Name' ) );

if ( !function_exists( 'ultra_mag_enqueue_scripts' ) ):
    function ultra_mag_enqueue_scripts() {
        $ultra_font_args = array('family' => 'Taviraj:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900|Source+Sans+Pro&display=swap');
        wp_enqueue_style('ultra-seven-fonts', add_query_arg($ultra_font_args, "//fonts.googleapis.com/css"));
        wp_enqueue_style( 'ultra_parent_style', trailingslashit( get_template_directory_uri() ) . 'style.css' );

        $mode_switch = get_theme_mod('ultra_mag_dark_mode_switch','show');
        if($mode_switch == 'show'){
           wp_enqueue_script('jquery-cookie',trailingslashit( get_stylesheet_directory_uri() ) . 'assets/jquery.cookie.js',array('jquery'),'1.0.0',true); 
        }
        wp_enqueue_script('ultra-mag-custom',trailingslashit( get_stylesheet_directory_uri() ) . 'assets/custom.js',array('jquery'),'1.0.0',true);
        
        /* Localize Function */
        $sticky_menu = get_theme_mod( 'ultra_seven_sticky_menu','show' );
	    $ultra_js_params = array(
	        'sticky_menu'   => esc_html($sticky_menu), 
	    );
	    wp_localize_script( 'ultra-mag-custom', 'ultra_params', $ultra_js_params );
    }
endif;
add_action( 'wp_enqueue_scripts', 'ultra_mag_enqueue_scripts', 10 );

/* Include Files */
require get_stylesheet_directory().'/inc/ultra-mag-functions.php';
require get_stylesheet_directory().'/inc/ultra-mag-customizer.php';

