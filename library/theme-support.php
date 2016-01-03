<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

// Custom Favicon for admin and login pages
// First, create a function that includes the path to your favicon
function add_favicon() {
	$favicon_url = get_stylesheet_directory_uri() . '/assets/images/icons/favicon.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

if ( ! function_exists( 'foundationpress_theme_support' ) ) :
function foundationpress_theme_support() {
	// Add language support
	load_theme_textdomain( 'foundationpress', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

	// Declare WooCommerce support per http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
	add_theme_support( 'woocommerce' );

	// Custom Favicon for admin and login pages
	// Now, just make sure that function runs when you're on the login page and admin pages
    add_action('login_head', 'add_favicon');
    add_action('admin_head', 'add_favicon');

}

add_action( 'after_setup_theme', 'foundationpress_theme_support' );
endif;
?>
