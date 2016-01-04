<?php

$excluded_featured = 0;

/**
 * Returns the latest featured post thumbnail
**/
function get_featured_thumbnail() {

	$args = array (
	'posts_per_page' => 1,
	'category_name' => 'featured',
	'meta_key' => '_thumbnail_id'
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Link
		echo '<a href="' . get_permalink() . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Thumbnail
		echo get_the_post_thumbnail( get_post()->ID, 'size-thumbnail-medium', array( 'class' => "headline-img" ) );
		echo '</a>';
	}
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns the latest featured post title
**/
function get_featured_title() {

	$args = array (
	'posts_per_page' => 1,
	'category_name' => 'featured',
	'meta_key' => '_thumbnail_id'
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$GLOBALS['excluded_featured'] = get_post()->ID;
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Title
		echo '<span class="featured-headline">' . get_the_title( get_post()->ID ) . '</span>';
		echo '</a>';
	}
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns a sentence as an excerpt for the latest featured post
**/
function get_featured_excerpt() {

	$args = array (
	'posts_per_page' => 1,
	'category_name' => 'featured',
	'meta_key' => '_thumbnail_id'
);

$excerpt_args = 'length=16&length_type=words&no_custom=1&finish=sentence&add_link=0&exclude_tags=img,p,strong,a';

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Date
		echo '<span class="excerpt-date">';
		echo get_the_date( 'M j, Y · ' );
		echo '</span>';
		// Excerpt
		echo the_advanced_excerpt( $excerpt_args );
	}
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns three featured post titles and thumbnails, excluding the latest featured post
**/
function get_featured_list() {

	$args = array (
	'posts_per_page' => 3,
	'category_name' => 'featured',
	'meta_key' => '_thumbnail_id',
	'post__not_in' => array( $GLOBALS['excluded_featured'] )
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<ul class="large-block-grid-3 medium-block-grid-3">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Link
		echo '<li><h6><a class="headline" href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Thumbnail
		echo get_the_post_thumbnail( get_post()->ID, 'size-thumbnail-small', array( 'class'	=> "get_two_latest_featured" ) );
		echo '<br/>';
		// Title
		echo get_the_title( get_post()->ID );
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
 * Returns a list of featured posts without thumbnails, excluding the latest featured post
**/
function get_featured_list_mobile() {

	$args = array (
	'posts_per_page' => 3,
	'category_name' => 'featured',
	'post__not_in' => array( $GLOBALS['excluded_featured'] )
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<ul class="no-bullet">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Link
		echo '<li><h6><a class="headline" href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Title
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
