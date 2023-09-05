<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rgb-test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'rgb-test'); ?></a>

		<header id="masthead" class="site-header">
		
			<div class="header">
				<div class="logo">
					<?php the_custom_logo() ?>
				</div>
				<div class="date-time">
					<button class="date-time__date btn">28 декабря</button>
					<button class="date-time__time btn">3,5 часа</button>
				</div>
				<!-- <div class="menu">
				<?php wp_nav_menu('menu=Menu Main') ?>
			</div> -->
			</div>
		</header><!-- #masthead -->