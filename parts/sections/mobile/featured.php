<!-- // Featured // -->

<!-- Latest post thumbnail -->
<?php get_featured_thumbnail(); ?>

<!-- Latest post title -->
<h3>
	<?php get_featured_title(); ?>
</h3>

<!-- Single sentence excerpt -->
<p class="featured-excerpt">
	<?php get_featured_excerpt(); ?>
</p>

<!-- List of posts -->
<?php get_featured_list_mobile(); ?>

<!-- Get more posts -->
<?php get_more_posts('featured'); ?><br/>
