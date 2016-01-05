<?php
/**
 * News posts
 *
 * 1. Title
 * 2. Thumbnail
 * 3. Excerpt
 * 4. List with thumbnails
 * 5. List without thumbnails
 * 6. Mobile
 */

// Excluded posts from post list
$excluded_news_1;

/**
 * Returns the latest news post title
**/
function get_news_title() {

	$args = array (
	'posts_per_page' => 1,
	'category_name' => 'news',
	'meta_key' => '_thumbnail_id'
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Set excluded main post
		$GLOBALS['excluded_news_1'] = get_post()->ID;
		// Heading
		echo '<h5>';
		// Subcategory, if present
		echo '<span class="subcategory-name">';
		$category = get_the_category();
		foreach( ( get_the_category() ) as $childcat ) {
			if ( cat_is_ancestor_of( 1, $childcat ) ) {
				echo '<a href="' . get_category_link( $childcat->cat_ID ) . '">';
				echo $childcat->cat_name . '</a>';
				echo ' · ';
			}
		}
		echo '</span>';
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Title
		echo get_the_title( get_post()->ID );
		echo '</a></h5>';
	}
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns the latest news post thumbnail
**/
function get_news_thumbnail() {

	$args = array (
	'posts_per_page' => 1,
	'category_name' => 'news',
	'meta_key' => '_thumbnail_id'
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Link
		echo '<a href="' . get_permalink() . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Thumbnail
		echo get_the_post_thumbnail( get_post()->ID, 'size-thumbnail-medium', array( 'class' => "news-img" ) );
		echo '</a>';
	}
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns a sentence as an excerpt for the latest news post
**/
function get_news_excerpt() {

	$args = array (
	'posts_per_page' => 1,
	'category_name' => 'news',
	'meta_key' => '_thumbnail_id'
);

$excerpt_args = 'length=16&length_type=words&no_custom=1&finish=sentence&add_link=0&exclude_tags=img,p,strong,a';

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Paragraph
		echo '<p class="excerpt">';
		// Date
		echo get_the_date( 'M j, Y · ' );
		// Excerpt
		echo the_advanced_excerpt( $excerpt_args );
		echo '</p>';
	}
}
else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns a list of news posts with thumbnails, excluding the latest news post
**/
function get_news_list_thumbs() {

	$args = array (
	'posts_per_page' => 3,
	'category_name' => 'news',
	'meta_key' => '_thumbnail_id',
	'post__not_in' => array( $GLOBALS['excluded_news_1'] )
);

$the_query = new WP_Query( $args );
$i = 1;

if ( $the_query->have_posts() ) {
	echo '<div class="row medium-up-1 large-up-1">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Column element
		echo '<div class="column"><h6>';
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Thumbnail
		echo get_the_post_thumbnail( get_post()->ID, 'size-thumbnail-medium', array( 'class' => "get_two_latest_news" ) );
		echo '</a><br/>';
		// Subcategory
		echo '<span class="subcategory-name">';
		$category = get_the_category();
		foreach( ( get_the_category() ) as $childcat ) {
			if ( cat_is_ancestor_of( 1, $childcat ) ) {
				echo '<a href="' . get_category_link( $childcat->cat_ID ).'">';
				echo $childcat->cat_name . '</a>';
				echo ' · ';
			}
		}
		echo '</span>';
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Title
		echo get_the_title( get_post()->ID );
		echo '</a></h6></div>';
		$i++;
	}
	echo '</div>';
}

else {
	// no posts found
}

wp_reset_postdata();
}

/**
 * Returns a list of news posts without thumbnails, excluding the three posts already shown
**/
function get_news_list_nothumbs() {

	$args = array (
	'posts_per_page' => 4,
	'category_name' => 'news',
	'order' => 'DESC',
);

add_filter( 'posts_where', 'wpse_no_attachments' );

$the_query = new WP_Query( $args );

remove_filter( 'posts_where', 'wpse_no_attachments' );

if ( $the_query->have_posts() ) {
	echo '<div class="row small-up-1 medium-up-2 large-up-2">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Column element
		echo '<div class="column"><h6>';
		// Subcategory
		echo '<span class="subcategory-name">';
		$category = get_the_category();
		foreach( ( get_the_category() ) as $childcat ) {
			if ( cat_is_ancestor_of( 1, $childcat) ) {
				echo '<a href="'.get_category_link( $childcat->cat_ID ).'">';
				echo $childcat->cat_name . '</a>';
				echo ' · ';
			}
		}
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
 * Returns a list of news posts without thumbnails, excluding the latest news post, for mobile view
**/
function get_news_list_mobile() {

	$args = array (
	'posts_per_page' => 6,
	'category_name' => 'news',
	'post__not_in' => array( $GLOBALS['excluded_news_1'] )
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<ul class="no-bullet">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Link
		echo '<li><h6><a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
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

?>
