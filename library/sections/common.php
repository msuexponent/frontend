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
			$output .= '<a class="label" href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
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
 * Get post images as a carousel
 */
function get_carousel() {
	// Initialize carousel
	echo '<div class="gallery-slider">';
	// Get post attachments
	$images = get_post_attachments();
	// Set thumbnail size
	$thumbnail_size = 'large';
	// Checks if there are no post attachments
	if ( !empty($images) ):
		// Iterate through the post attachments
		foreach ( $images as $image ):
			echo '<div>';
			// Get the attachment image size
			$imagesize = wp_get_attachment_image_src( $image->ID, $thumbnail_size );
			echo '<img src="' . $imagesize[0] . '" alt="' . $image->post_title . '" />';
			if ( $image->post_excerpt ):
				echo '<div class="img-caption">' . $image->post_excerpt . '</div>';
			endif;
			echo '</div>';
		endforeach;
	endif;
	echo '</div><br/>';
}

/**
 * Prints section label
 */
function get_label( $label ) {
	echo '<h5><strong><a href="' . site_url() . '/' . $label . '/">' . $label . '</a></strong></h5>';
}

/**
 * The "more posts" arrow button
**/
function get_more_posts( $cat_name ) {
	if ( $cat_name == "multimedia" ) {
		echo '<a class="more-posts" href="https://www.youtube.com/user/ASMSUExponent" target="_blank"><p class="text-right">→</p></a>';
	}
	else {
		echo '<a class="more-posts" href="' . site_url() . '/' . $cat_name . '/"><p class="text-right">→</p></a>';
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
