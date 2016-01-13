<!-- Author Information -->

<!-- Desktop/Tablet -->
<div class="show-for-medium-up">

	<div class="large-2 columns">
		<div class="meta">
			<div class="author">

				<!-- Author Gravatar -->
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), $size = '114', $default = 'http://i.imgur.com/gxyK809.jpg' ); ?><br/><br/>

				<!-- Author link -->
				<?php coauthors_author_info(); ?>
			</div><br/>

			<!-- Post date -->
			<div class="date">
				<?php the_date('l, F j, Y'); ?>
			</div>
			<br/>

			<!-- Social sharing links -->
			<?php echo do_shortcode('[ssba]'); ?>

		</div>
	</div>
</div>

<!-- Mobile -->
<div class="show-for-small-only">
	<div class="small-12 columns">
		<div class="row">

			<div class="small-10 columns">

				<!-- Author link -->
				<?php the_author_posts_link(); ?>

				<!-- Post date -->
				<div class="date">
					<?php the_date('l, F j, Y'); ?>
				</div>
			</div>

			<div class="small-2 columns">

				<!-- Author Gravatar -->
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), $size = '96', $default = 'http://i.imgur.com/gxyK809.jpg' ); ?>

			</div>
		</div>

		<hr>

		<!-- Social sharing links -->
		<div class="row">
			<div class="small-12 columns">

				<?php echo do_shortcode('[ssba]'); ?>

			</div>
		</div>

		<br/>
	</div>
</div>
