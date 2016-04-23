<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Section specific functions */
require_once( 'library/sections/common.php' );

require_once( 'library/sections/featured.php' );

require_once( 'library/sections/news.php' );

require_once( 'library/sections/opinion.php' );

require_once( 'library/sections/multimedia.php' );

require_once( 'library/sections/culture.php' );

require_once( 'library/sections/sports.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

### Function: Add Author Custom Fields
add_action('publish_post', 'add_author_fields');
function add_author_fields($post_ID) {
global $wpdb;
	$user_id = $wpdb->get_var("SELECT post_author FROM $wpdb->posts WHERE ID = $post_ID");
	$first_name = $wpdb->get_var("SELECT meta_value FROM $wpdb->usermeta WHERE meta_key = 'first_name' AND user_id = $user_id");
	$last_name = $wpdb->get_var("SELECT meta_value FROM $wpdb->usermeta WHERE meta_key = 'last_name' AND user_id = $user_id");
	$user_name = $wpdb->get_var("SELECT user_login FROM $wpdb->users WHERE ID = $user_id");
	add_post_meta($post_ID, 'author_realname', $first_name.' '.$last_name, true);
	add_post_meta($post_ID, 'author_username', $user_name, true);
}

?>
