<!-- Culture & Sports --> 

<!-- Two latest posts with thumbnails -->
<div class="row" data-equalizer>

	<!-- Culture -->
	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_label('culture'); ?>
		<hr>
		<?php get_latest_culture_posts(); ?>
	</div>

	<!-- Sports -->
	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_label('sports'); ?>
		<hr>
		<?php get_latest_sports_posts(); ?>
	</div>
</div>

<!-- Four latest posts without thumbnails -->
<div class="row" data-equalizer>
	
	<!-- Culture -->
	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_culture_list(); ?>
	</div>

	<!-- Sports -->
	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_sports_list(); ?>
	</div>

</div>

<!-- Get more posts -->
<div class="row" data-equalizer>

	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_more_posts("culture"); ?>
	</div>

	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_more_posts("sports"); ?>
	</div>

</div>