<!-- // News, Opinion & Multimedia // -->

<!-- Category labels -->
<div class="row" data-equalizer>

	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_label('news'); ?>
		<hr>
	</div>

	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_label('opinion'); ?>
		<hr>
	</div>

</div>

<!-- Content -->
<div class="row" data-equalizer>

	<!-- // News // -->
	<div class="medium-4 columns" data-equalizer-watch>

		<!-- Latest post thumbnail and title -->
		<?php get_news_thumbnail(); ?>
		<h5>
			<?php get_news_title(); ?>
		</h5>

		<!-- Single sentence excerpt -->
		<p class="news-excerpt">
			<?php get_news_excerpt(); ?>
		</p> 

		<!-- Two posts without thumbnails -->
		<div class="show-for-medium-up">
			<?php get_news_list_nothumbs(); ?>
		</div>

	</div>

	<!-- // News // -->
	<div class="medium-2 columns" data-equalizer-watch>

		<!-- Two posts with thumbnails -->
		<?php get_news_list_thumbs(); ?>

	</div>

	<!-- // Opinion & Multimedia // -->
	<div class="medium-6 columns" data-equalizer-watch>

		<!-- // Opinion // -->
		<?php get_opinion_list(); ?>

		<!-- Get more posts -->
		<div class="row" data-equalizer>
			<div class="medium-12 columns" data-equalizer-watch>
				<?php get_more_posts("opinion"); ?>
			</div>
		</div>

		<!-- // Multimedia // -->
		<?php get_label('multimedia'); ?>
		<hr>

		<ul class="large-block-grid-2 medium-block-grid-2">

			<!-- Latest Video -->
			<li>
				<iframe width="100%" height="156" src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=0&rel=0&listType=user_uploads&list=asmsuexponent" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
			</li>

			<!-- Facebook Like Prompt -->
			<li>
				<a href="https://www.facebook.com/MSUExponent" target="_blank"><img src="http://msuexponent.com/wp-content/images/fb-like.jpg" /></a>
			</li>

		</ul>

	</div>

</div>

<!-- Get more posts -->
<div class="row" data-equalizer>

	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_more_posts("news"); ?>
	</div>

	<div class="medium-6 columns" data-equalizer-watch>
		<?php get_more_posts("multimedia"); ?>
	</div>

</div>