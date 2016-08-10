<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ReadMore
 */

?>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-widgets container" role="complementary">
			<div class="widget-area row">
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<div class="col-sm-4">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
					<div class="col-sm-4">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
					<div class="col-sm-4">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php } ?>
			</div>
		</div><!-- #secondary -->

		<div class="site-info">
			<div class="container">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'readmore' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'readmore' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'readmore' ), 'readmore', '<a href="http://www.vincentballut.fr" rel="designer">Vincent Ballut</a>' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
