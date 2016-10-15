<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UTalk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="video-container">
		<?php echo utalk_get_first_embed($post); ?>
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
				<?php utalk_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<a href="<?php the_permalink(); ?>" class="post-format-icon"></a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if ( is_single() ) :
				utalk_the_content_without_first_embed($post);

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'utalk' ),
					'after'  => '</div>',
				) );
			else :
				the_excerpt();
			endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php utalk_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
