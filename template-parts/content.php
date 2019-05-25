<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tailwindcss
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-wrap mb-8'); ?>>
	<div class="<?php echo ( is_singular() ) ? 'w-full' : 'w-3/5'; ?>">
		<?php tailwindcss_post_thumbnail(); ?>
	</div>
	<div class="<?php echo ( is_singular() ) ? 'w-full' : 'w-2/5'; ?>">
		<header class="entry-header <?php echo ( is_singular() ) ? '' : 'ml-4'; ?>">
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php tailwindcss_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title leading-tight text-4xl">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title leading-tight text-4xl"><a href="' . esc_url( get_permalink() ) . '" class="text-gray-900" rel="bookmark">', '</a></h2>' );
			endif;
			?>
		</header><!-- .entry-header -->
		<div class="entry-content text-gray-900 <?php echo ( is_singular() ) ? '' : 'ml-4'; ?>">
			<?php
			if (is_singular()) {
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tailwindcss' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tailwindcss' ),
					'after'  => '</div>',
				) );
			} else {
				the_excerpt();
			}
			?>
		</div><!-- .entry-content -->
		<?php if ( is_singular() ): ?>
		<footer class="entry-footer <?php echo ( is_singular() ) ? '' : 'ml-4'; ?>">
			<?php tailwindcss_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
