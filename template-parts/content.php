<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Minimal_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col gap-4'); ?>>
	<header class="entry-header flex justify-between items-center">
		<?php
		if (is_singular()):
			the_title('<h1 class="entry-title">', '</h1>');
		else:
			the_title('<h2 class="entry-title mb-4 text-xl font-bold decoration-wavy underline decoration-[#d4d4d4] decoration-2 underline-offset-8"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()):
			?>
			<div class="entry-meta p-1 px-4 border-2 border-gray-500 w-fit rounded-md text-sm">
				<?php
				minilog_posted_on();
				// minilog_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php minilog_post_thumbnail(); ?>

	<div class="entry-content flex flex-col gap-2">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('بیشتر<span class="screen-reader-text"> "%s"</span>', 'minilog'),
					array(
						'span' => array(
							'class' => array("text-xl"),
						),
					)
				),
				wp_kses_post(get_the_title())
			),
			true
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'minilog'),
				'after' => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php minilog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->