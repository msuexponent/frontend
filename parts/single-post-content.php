<div class="small-12 large-8 large-centered columns">

	<!-- Get post content using post formats -->
	<?php the_content(); ?>

	<!-- Category list -->
	<div class="category-list">
		<?php get_category_list(); ?><br/><br/>
	</div>

	<!-- Social sharing links -->
	<?php echo do_shortcode('[ssba]'); ?><br/>

	<!-- Default theme footer for post -->
	<footer>
		<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
		<p><?php the_tags(); ?></p>
	</footer>
	<?php do_action( 'foundationpress_post_before_comments' ); ?>
	<?php comments_template(); ?>
	<?php do_action( 'foundationpress_post_after_comments' ); ?>

</div>
