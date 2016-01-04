<?php

// Excluded posts from post list
$excluded_sports_1;
$excluded_sports_2;

/**
	Returns the two latest sports post titles and thumbnails
	**/
	function get_latest_sports_posts() {

		$args = array (
			'posts_per_page' => 2,
			'category_name' => 'sports',
			'meta_key' => '_thumbnail_id' 
			);

		$the_query = new WP_Query($args);
		$i = 1;

		if ( $the_query->have_posts() ) {
			echo '<ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				// Set excluded posts
				if ($i == 1) {
					$GLOBALS['excluded_sports_1'] = get_post()->ID;
				}
				else if ($i == 2) {
					$GLOBALS['excluded_sports_2'] = get_post()->ID;
				}
				// List element
				echo '<li><h5>';
				// Link
				echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
				// Thumbnail
				echo get_the_post_thumbnail( get_post()->ID, 'size-thumbnail-medium', array('class'	=> "get_two_latest") );
				echo '</a><br/>';
				// Subcategory
				echo '<span class="subcategory-name">';
				$category = get_the_category(); 
				foreach((get_the_category()) as $childcat) {
					if (cat_is_ancestor_of(13, $childcat)) {
						echo '<a href="'.get_category_link($childcat->cat_ID).'">';
						echo $childcat->cat_name . '</a>';
						echo ' · ';
					}
				}
				echo '</span>';
				// Link
				echo '<a href="' . get_permalink( get_post()->ID ) . '" title="' . esc_attr( get_post()->post_title ) . '">';
				// Title
				echo '<span class="headline">' . get_the_title( get_post()->ID ) . '</span>';
				echo '</a></h5>';
				echo '</li>';
				$i++;
			}
			echo '</ul>';
		}
		else {
			// no posts found
		}

		wp_reset_postdata();

	}

/**
	Returns sports posts without thumbnails as a block grid
	**/
	function get_sports_list() {

		$exclude_ids = array(
			$GLOBALS['excluded_sports_1'],
			$GLOBALS['excluded_sports_2']
			);

		$args = array (
			'posts_per_page' => 6,
			'category_name' => 'sports',
			'post__not_in' => $exclude_ids
			);

		$the_query = new WP_Query($args);

		if ( $the_query->have_posts() ) {
			echo '<ul class="large-block-grid-2 medium-block-grid-2">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				// List element
				echo '<li><h6>';
				// Subcategory
				echo '<span class="subcategory-name">';
				$category = get_the_category(); 
				foreach((get_the_category()) as $childcat) {
					if (cat_is_ancestor_of(13, $childcat)) {
						echo '<a href="'.get_category_link($childcat->cat_ID).'">';
						echo $childcat->cat_name . '</a>';
						echo ' · ';
					}
				}
				echo '</span>';
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
	Returns sports posts without thumbnails as a block grid, for the mobile view
	**/
	function get_sports_list_mobile() {

		$args = array (
			'posts_per_page' => 6,
			'category_name' => 'sports',
			);

		$the_query = new WP_Query($args);

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