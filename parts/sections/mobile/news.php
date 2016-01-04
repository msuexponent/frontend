<!-- // News // -->

<!-- Category label -->
<?php get_label('news'); ?>
<hr>

<!-- Latest post thumbnail and title -->
<?php get_news_thumbnail(); ?>
<h5>
	<?php get_news_title(); ?>
</h5>

<!-- Single sentence excerpt -->
<p class="news-excerpt">
	<?php get_news_excerpt(); ?>
</p>

<!-- Post list -->
<?php get_news_list_mobile(); ?>

<!-- Get more posts -->
<?php get_more_posts('news'); ?><br/>
