<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimal_Blog
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
	<div id="page" class="bg-bg-main text-white">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'minilog'); ?></a>

		<header class="h-20 w-full flex flex-row px-10 justify-between items-center">
			<div class="flex flex-row gap-1">
				<div>Link 1</div>
				<div>Link 2</div>
			</div>
			<div class="flex flex-row gap-1 justify-center items-center">

				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
					class="visited:text-white flex gap-1 justify-center items-center">
					<?php if (get_theme_mod('display_site_title', true)): ?>
						<h1 class="text-xl">
							<?php bloginfo('name'); ?>
						</h1>
					<?php endif; ?>

					<?php if (function_exists('the_custom_logo')) {
						the_custom_logo();
					} ?>
				</a>
			</div>
			<div class="flex flex-row gap-1">
				<div>Link 3</div>
				<div>Link 4</div>
			</div>

		</header>