<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimal_Blog
 */

?>

<footer id="colophon" class="p-10">
	<div class="flex justify-center gap-2">
		<div>
			ساخته شده با ❤️
		</div>
		<span class="sep"> | </span>
		<div>
			طراحی توسط <a href="https://github.com/nabidam"
				class="visited:text-white text-lg decoration-wavy underline decoration-[#d4d4d4] decoration-1">نوید</a>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>