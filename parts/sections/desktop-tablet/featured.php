<!-- // Featured // -->

<div class="row" data-equalizer>

	<div class="medium-5 columns" data-equalizer-watch>

		<!-- Latest post thumbnail -->
		<?php get_featured_thumbnail(); ?>

	</div>

	<div class="medium-7 columns" data-equalizer-watch>

		<!-- Latest post title -->
		<h3>
			<?php get_featured_title(); ?>
		</h3>

		<!-- Single sentence excerpt -->
		<p class="featured-excerpt">
			<?php get_featured_excerpt(); ?>
		</p>

		<!-- Three posts with thumbnails -->
		<?php get_featured_list(); ?>

	</div>

</div>

<!-- Get more posts -->
<div class="row" data-equalizer>
	<div class="medium-12 columns" data-equalizer-watch>
		<?php get_more_posts("featured"); ?>
	</div>
</div>
