<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage My WP Theme
 * @since My WP Theme 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( !defined( 'MYWPTHEME_DIR_PATH' )) {
	define( 'MYWPTHEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
if ( ! function_exists( 'my_wp_theme_setup' ) ) {
    /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function my_wp_theme_setup() {
    }
}

function my_wp_theme_enqueue_scripts() {
	wp_register_style('mainstylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/assets/css/style.css'), 'all' );
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/src/library/bootstrap/css/bootstrap.css', [], false, 'all' );

	wp_register_script('mainscript', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js'), true );
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/bootstrap/js/bootstrap.js', [ 'jquery' ], false, true );

	wp_enqueue_style('mainstylesheet');
	wp_enqueue_style('bootstrap');
	
	wp_enqueue_script('mainscript');
	wp_enqueue_script('bootstrap-js');
}
add_action( 'wp_enqueue_scripts', 'my_wp_theme_enqueue_scripts' );

?>