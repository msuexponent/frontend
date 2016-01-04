<?php

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
	echo '<ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// List element
		echo '<li><h6>';
		// Author name
		echo '<span class="author-name">' . get_the_author_link() . '</span> · ';
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Title
		echo '<span class="headline">' . get_the_title( get_post()->ID ) . '</span>';
		echo '</a></h6></li>';
	}
	echo '</ul>';
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns a list of opinion posts for the mobile view
**/
function get_opinion_list_mobile() {
	$args = array (
	'posts_per_page' => 6,
	'category_name' => 'opinion',
);

$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) {
	echo '<ul class="no-bullet">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li><h6><a class="headline" href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
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
