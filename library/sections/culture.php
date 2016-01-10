<?php
/**
 * Culture posts
 *
 * 1. Latest posts
 * 2. List
 * 3. Mobile
 */

// Excluded posts from post list
$excluded_culture_1;
$excluded_culture_2;

/**
 * Returns the two latest culture post titles and thumbnails
**/
function get_culture_latest_posts() {
	$args = array (
	'posts_per_page' => 2,
	'category_name' => 'culture',
	'meta_key' => '_thumbnail_id'
);

$the_query = new WP_Query( $args );
$i = 1;

if ( $the_query->have_posts() ) {
	echo '<div class="row small-up-1 medium-up-2 large-up-2">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// Set excluded posts
		if ( $i == 1 ) {
			$GLOBALS['excluded_culture_1'] = get_post()->ID;
		}
		else if ( $i == 2 ) {
			$GLOBALS['excluded_culture_2'] = get_post()->ID;
		}
		// List element
		echo '<div class="column"><h5>';
		// Link
		echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
		// Thumbnail
		echo get_the_post_thumbnail( get_post()->ID, 'size-thumbnail-medium', array('class'	=> "get_two_latest") );
		echo '</a><br/>';
		// Subcategory
		echo '<span class="subcategory-name">';
		$category = get_the_category();
		foreach( ( get_the_category() ) as $childcat ) {
			if ( cat_is_ancestor_of( 5, $childcat ) ) {
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
		echo '</a></h5></div>';
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
 * Returns culture posts without thumbnails as a block grid
**/
function get_culture_list() {

	$exclude_ids = array(
		$GLOBALS['excluded_culture_1'],
		$GLOBALS['excluded_culture_2']
	);

	$args = array (
	'posts_per_page' => 6,
	'category_name' => 'culture',
	'post__not_in' => $exclude_ids
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<div class="row medium-up-2 large-up-2">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		// List element
		echo '<div class="column"><h6>';
		// Subcategory
		echo '<span class="subcategory-name">';
		$category = get_the_category();
		foreach( ( get_the_category() ) as $childcat ) {
			if ( cat_is_ancestor_of( 5, $childcat ) ) {
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
 * Returns culture posts without thumbnails as a block grid for mobile view
**/
function get_culture_mobile() {

	$args = array (
	'posts_per_page' => 6,
	'category_name' => 'culture'
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
