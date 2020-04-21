<?php
/**
 * Load parent theme
 *
 * @link http://codex.wordpress.org/Child_Themes
 *
 * @package WordPress
 * @subpackage Custom
 */

define( 'INCLUDES_DIR', get_stylesheet_directory_uri() . '/includes/' );

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

/**
 * Enqueue the CSS of the parent theme
 *
 * @return void
 */
function enqueue_parent_theme_style() : void {
	wp_enqueue_style( 'bootstrap-min-css', INCLUDES_DIR . 'bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'bootstrap-theme-min-css', INCLUDES_DIR . 'bootstrap/3.3.7/css/bootstrap-theme.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'bootstrap-navbar-css', INCLUDES_DIR . 'bootstrap-navbar/1.1.0/bootstrap-navbar.css', array(), '1.1.0' );
	wp_enqueue_style( 'responsive-cover-image-css', INCLUDES_DIR . 'responsive-cover-image/1.0.0/responsive-cover-image.css', array(), '1.0.0' );
	wp_enqueue_style( 'font-awesome-min-css', INCLUDES_DIR . 'font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'smoke-min-css', INCLUDES_DIR . 'smoke/3.1.1/css/smoke.min.css', array(), '3.1.1' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'child-custom', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0' );
}


add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_script' );

/**
 * Enqueue the JS of the parent theme
 *
 * @return void
 */
function enqueue_parent_theme_script() : void {
	wp_register_script( 'jquery-min-js', INCLUDES_DIR . 'jquery/3.1.1/jquery.min.js', array(), '3.1.1', true );
	wp_register_script( 'jquery-ui-min-js', INCLUDES_DIR . 'jquery-ui/1.12.1/jquery-ui.min.js', array(), '1.12.1', true );
	wp_register_script( 'bootstrap-min-js', INCLUDES_DIR . 'bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_register_script( 'smoke-min-js', INCLUDES_DIR . 'smoke/3.1.1/js/smoke.min.js', array(), '3.1.1', true );

	wp_enqueue_script( 'jquery-min-js' );
	wp_enqueue_script( 'jquery-ui-min-js' );
	wp_enqueue_script( 'bootstrap-min-js' );
	wp_enqueue_script( 'smoke-min-js' );
}
