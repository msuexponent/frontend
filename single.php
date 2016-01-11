<?php
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage FoundationPress
* @since FoundationPress 1.0.0
*/

get_header(); ?>

<div id="single-post" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<!-- Left blank column -->
	<div class="large-2 columns"></div>

	<!-- Center Post column -->
	<div class="small-12 large-8 large-centered columns">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h3 class="entry-title"><?php the_title(); ?></h3>
					<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
				</header>
			</div>

			<!-- Right blank column -->
			<div class="large-2 columns"></div>

			<!-- Post -->
			<div class="row">

				<!-- Author Information -->
				<?php get_template_part('parts/single', 'post-author'); ?>

				<!-- Content -->
				<?php get_template_part('parts/single', 'post-content'); ?>

				<!-- Blank column -->
				<div class="large-2 columns"></div>

			</div>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer(); ?>
