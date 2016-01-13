<!-- // News // -->

<!-- Category label -->
<?php get_label('news'); ?>
<hr>
<!-- Latest post thumbnail and title -->
<?php get_news_thumbnail(); ?>
<?php get_news_title(); ?>
<!-- Single sentence excerpt -->
<?php get_news_excerpt(); ?>
<!-- Post list -->
<?php get_news_list_mobile(); ?>
<!-- Get more posts -->
<?php get_more_posts('news'); ?><br/>
