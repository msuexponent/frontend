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
		<?php get_news_title(); ?>
		<!-- Single sentence excerpt -->
		<?php get_news_excerpt(); ?>
		<!-- Two posts without thumbnails -->
		<div class="show-for-medium">
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
		<?php //get_label('multimedia'); ?>
		<h5>
			<strong>
				<a href="https://www.youtube.com/channel/UCP51_C7GUpefVEbAQHPCMew?nohtml5=False">multimedia</a>
			</strong>
		</h5>
		<hr>
		<div class="row medium-up-2 large-up-2">
			<!-- Latest Video -->
			<div class="column">
				<?php get_multimedia_video(); ?>
			</div>
			<!-- Facebook Like Prompt -->
			<div class="column">
				<?php get_facebook_like_box(); ?>
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
