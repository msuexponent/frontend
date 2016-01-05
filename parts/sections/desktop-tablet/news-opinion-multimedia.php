<!-- // News, Opinion & Multimedia // -->

<!-- Category labels -->
<div class="row">

	<div class="medium-6 columns">
		<?php get_label('news'); ?>
		<hr>
	</div>

	<div class="medium-6 columns">
		<?php get_label('opinion'); ?>
		<hr>
	</div>

</div>

<!-- Content -->
<div class="row">

	<!-- // News // -->
	<div class="medium-4 columns">

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
	<div class="medium-2 columns">

		<!-- Two posts with thumbnails -->
		<?php get_news_list_thumbs(); ?>

	</div>

	<!-- // Opinion & Multimedia // -->
	<div class="medium-6 columns">

		<!-- // Opinion // -->
		<?php get_opinion_list(); ?>

		<!-- Get more posts -->
		<div class="row">
			<div class="medium-12 columns">
				<?php get_more_posts("opinion"); ?>
			</div>
		</div>

		<!-- // Multimedia // -->
		<?php get_label('multimedia'); ?>
		<hr>

		<div class="row medium-up-2 large-up-2">

			<!-- Latest Video -->
			<div class="column">
				<iframe width="100%" height="156" src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=0&rel=0&listType=user_uploads&list=asmsuexponent" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
			</div>

			<!-- Facebook Like Prompt -->
			<div class="column">
				<a href="https://www.facebook.com/MSUExponent" target="_blank"><img src="http://msuexponent.com/wp-content/images/fb-like.jpg" /></a>
			</div>

		</div>

	</div>

</div>

<!-- Get more posts -->
<div class="row">

	<div class="medium-6 columns">
		<?php get_more_posts("news"); ?>
	</div>

	<div class="medium-6 columns">
		<?php get_more_posts("multimedia"); ?>
	</div>

</div>
