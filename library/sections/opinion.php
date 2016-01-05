<?php
/**
 * Opinion posts
 *
 * 1. List
 * 2. Mobile
 */

/**
 * Returns a list of news posts without thumbnails, excluding the three posts already shown
**/
function get_opinion_list() {
	$args = array (
	'posts_per_page' => 8,
	'category_name' => 'opinion',
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<div class="row small-up-1 medium-up-2 large-up-2">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Column element
		echo '<div class="column"><h6>';
		// Author name
		echo '<span class="author-name">' . get_the_author_link() . '</span> · ';
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Title
		echo get_the_title( get_post()->ID );
		echo '</a></h6></div>';
	}
	echo '</div>';
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns a list of opinion posts for the mobile view
**/
function get_opinion_mobile() {
	$args = array (
	'posts_per_page' => 6,
	'category_name' => 'opinion',
);

$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) {
	echo '<ul class="no-bullet">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li><h6><a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		echo get_the_title( get_post()->ID ) . '</a></h6></li>';
	}
	echo '</ul>';
}
else {
	// no posts found
}

wp_reset_postdata();
}

?>
