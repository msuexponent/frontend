<!-- // Featured // -->

<div class="row">
	<div class="medium-5 columns">
		<!-- Latest post thumbnail -->
		<?php get_featured_thumbnail(); ?>
	</div>
	<div class="medium-7 columns">
		<!-- Latest post title -->
		<?php get_featured_title(); ?>
		<!-- Single sentence excerpt -->
		<?php get_featured_excerpt(); ?>
		<!-- Three posts with thumbnails -->
		<?php get_featured_list(); ?>
	</div>
</div>

<!-- Get more posts -->
<div class="row">
	<div class="medium-12 columns">
		<?php get_more_posts("featured"); ?>
	</div>
</div>
