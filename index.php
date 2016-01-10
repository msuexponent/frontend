<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" role="main">
	<div class="small-12 large-12 columns" role="main">
		<?php get_template_part('parts/layouts/mobile'); ?>
		<?php get_template_part('parts/layouts/desktop-tablet'); ?>
	</div>
</div>

<?php get_footer(); ?>
