<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

<div id="footer-nav">
	<div class="row">
		<div class="bar show-for-medium">
			<a href="#top"><i class="fa fa-chevron-circle-up"></i>&nbsp;&nbsp;&nbsp;back to top</a>
		</div>
	</div>
</div>

<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
	<div id="footer-nav">
		<div id="footer-nav-bar" class="row show-for-medium">
			<div class="top-bar-left">
				<ul class="menu">
					<?php foundationpress_top_bar_l(); ?>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</nav>

<div id="footer-container">
	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>
		<hr>
		<small>© <?php echo date("Y"); ?> The MSU Exponent. All rights reserved.</small>
	</footer>
</div>

<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
</div><!-- Close off-canvas wrapper inner -->
</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
