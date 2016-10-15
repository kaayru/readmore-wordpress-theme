<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package UTalk
 */

if ( ! function_exists( 'utalk_body_classes' ) ) :
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function utalk_body_classes( $classes )
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
endif;
add_filter( 'body_class', 'utalk_body_classes' );

if ( ! function_exists( 'utalk_sidebar_body_class' ) ) :
/**
 * Adds class to the body depending on the sidebar presence
 * @return array
 */
function utalk_sidebar_body_class($classes)
{
	$display_mode = get_theme_mod('utalk_general_layout', '1');

	if ( $display_mode === '1' ) {
		$classes[] = 'sidebar-left';
	}
	if ( $display_mode === '2' ) {
		$classes[] = 'sidebar-right';
	}
	if ( $display_mode === '3' ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
endif;

if ( ! function_exists( 'utalk_custom_excerpt_length' ) ) :
/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function utalk_custom_excerpt_length( $length )
{
    return 40;
}
endif;
add_filter( 'excerpt_length', 'utalk_custom_excerpt_length', 999 );

if ( ! function_exists( 'utalk_excerpt_more' ) ) :
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function utalk_excerpt_more( $more )
{
    return sprintf('... <a class="utalk" href="%s" title="%s">%s</a>', get_the_permalink(), get_the_title(), __('Read more', 'utalk'));
}
endif;
add_filter( 'excerpt_more', 'utalk_excerpt_more' );
add_filter( 'body_class', 'utalk_sidebar_body_class' );

if ( ! function_exists( 'utalk_get_first_embed' ) ) :
/**
 * Returns the first embeded content in a post
 * @param  int $postId
 * @return string
 */
function utalk_get_first_embed( $post )
{
    $content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
    $embeds = get_media_embedded_in_content( $content );

    if($embeds) {
    	return $embeds[0];
    }
}
endif;

if ( ! function_exists( 'utalk_the_content_without_first_embed' ) ) :
function utalk_the_content_without_first_embed( $post )
{
	$firstEmbed = utalk_get_first_embed($post);
	$content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );

	echo str_replace($firstEmbed, '', $content);
}
endif;

if ( ! function_exists( 'utalk_comment' ) ) :
function utalk_comment( $comment, $args, $depth )
{
	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		?>
			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<?php __( 'Pingback:', 'utalk' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'utalk' ), '<span class="edit-link">', '</span>' ); ?>
			</li>
			<?php
			break;
		default :
			global $post;
			?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>" class="comment">
					<div class="comment-meta comment-author vcard">
						<?php echo get_avatar( $comment, 120 ); ?>

						<div class="comment-meta-content">
							<?php printf( '<cite class="fn">%1$s %2$s</cite>',
								get_comment_author_link(),
								( $comment->user_id === $post->post_author ) ? '<span class="post-author"> ' . __( '(Post author)', 'utalk' ) . '</span>' : ''
							); ?>
							<p><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php echo get_comment_date() . ' &mdash; ' . get_comment_time() ?></a></p>
						</div> <!-- /comment-meta-content -->

						<div class="comment-actions">
							<?php edit_comment_link( __( 'Edit', 'utalk' ), '', '' ); ?>
							<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'utalk' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</div> <!-- /comment-actions -->

						<div class="clear"></div>
					</div> <!-- /comment-meta -->

					<div class="comment-content post-content">
						<?php if ( '0' == $comment->comment_approved ) : ?>
							<p class="comment-awaiting-moderation"><?php echo __( 'Your comment is awaiting moderation.', 'utalk' ); ?></p>
						<?php endif; ?>

						<?php comment_text(); ?>

						<div class="comment-actions">
							<?php edit_comment_link( __( 'Edit', 'utalk' ), '', '' ); ?>
							<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'utalk' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
							<div class="clear"></div>
						</div> <!-- /comment-actions -->

					</div><!-- /comment-content -->
				</div><!-- /comment-## -->
			</li>
			<?php
			break;
	endswitch;
}
endif;
