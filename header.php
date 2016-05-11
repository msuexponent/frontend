<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<div class="title-bar-title">
				<button class="menu-icon" type="button" data-toggle="offCanvas"></button>
			</div>
		</div>

		<div id="logo">
			<div class="row">
				<div class="small-12 medium-7 columns">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/site/exponent-logo.png"></a>
				</div>
				<div class="small-12 medium-5 columns">
					<?php get_template_part( 'parts/header', 'icon-box' ); ?>
				</div>
			</div>
		</div>


		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div id="header-nav">
				<div id="header-nav-bar" class="row">
					<div class="top-bar-left show-for-medium">
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


	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' ); ?>
