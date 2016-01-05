<?php
/**
 * Common functions
 *
 * Category list as labels
 * Post attachment images
 * Section labels
 * More posts arrow
 * Co-Authors support
 * Posts with no attachments
 */

/**
 * Get list of categories as labels
 */
function get_category_list() {
	$categories = get_the_category();
	$separator = ' ';
	$output = '';
	if( $categories ){
		foreach( $categories as $category ) {
			$output .= '<a class="round radius label" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		echo trim( $output, $separator );
	}
}

/**
 * Get images attached to post
 */
function get_post_attachments( $args=array() ) {
	// Global post variable
	global $post;

	// Default attributes
	$defaults = array(
		'numberposts'		=> -1,
		'order'				=> 'ASC',
		'orderby'			=> 'menu_order',
		'post_mime_type'	=> 'image',
		'post_parent'		=>  $post->ID,
		'post_type'			=> 'attachment',
	);

	// Parse arguments
	$args = wp_parse_args( $args,$defaults );

	// Return images
	return get_posts( $args );
}

/**
 * Prints section label
 */
function get_label( $label ) {
	echo '<a href="' . site_url() . '/' . $label . '/"><div class="category-label">' . $label . '</div></a>';
}

/**
 * The "more posts" arrow button
**/
function get_more_posts( $cat_name ) {
	if ( $cat_name == "multimedia" ) {
		echo '<a href="https://www.youtube.com/user/ASMSUExponent" target="_blank"><p class="text-right">→</p></a>';
	}
	else {
		echo '<a href="' . site_url() . '/' . $cat_name . '/"><p class="text-right">→</p></a>';
	}
}

/**
 * Check if the Co-Authors PLus plugin is enabled for multi-author support
**/
function coauthors_author_info() {
	if ( function_exists( 'coauthors_posts_links' ) ) {
		coauthors_posts_links();
	} else {
		the_author_posts_link();
	}
}

/**
 * Return posts without attachments
**/
function wpse_no_attachments( $where )
{
	global $wpdb;
	$where .= " AND {$wpdb->posts}.ID NOT IN (
	SELECT DISTINCT wpse.post_parent
	FROM {$wpdb->posts} wpse
	WHERE wpse.post_type = 'attachment' AND wpse.post_parent > 0  ) ";
	return $where;
}

?>
