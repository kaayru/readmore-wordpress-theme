<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ReadMore
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="gallery">
		<?php readmore_flexslider($post); ?>
	</div>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" title="' . get_the_title() . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php readmore_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<a href="<?php the_permalink(); ?>" class="post-format-icon"></a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if ( is_single() ) :
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'readmore' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'readmore' ),
					'after'  => '</div>',
				) );
			else :
				the_excerpt();
			endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php readmore_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
