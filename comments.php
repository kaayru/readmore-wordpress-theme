<?php if ( post_password_required() )
	return;
?>

	<?php if ( have_comments() ) : ?>

		<a name="comments"></a>

		<div class="comments">

			<h2 class="comments-title">

				<?php echo get_comments_number() . ' ';
				echo _n( 'Comment' , 'Comments' , get_comments_number(), 'readmore' ); ?>

			</h2>

			<ol class="commentlist">
			    <?php wp_list_comments( array( 'type' => 'comment', 'callback' => 'readmore_comment' ) ); ?>
			</ol>

			<?php if (!empty($comments_by_type['pings'])) : ?>

				<div class="pingbacks">

					<div class="pingbacks-inner">

						<h3 class="pingbacks-title">

							<?php echo count($wp_query->comments_by_type[pings]) . ' ';
							echo _n( 'Pingback', 'Pingbacks', count($wp_query->comments_by_type[pings]), 'readmore' ); ?>

						</h3>

						<ol class="pingbacklist">
						    <?php wp_list_comments( array( 'type' => 'pings', 'callback' => 'readmore_comment' ) ); ?>
						</ol>

					</div>

				</div>

			<?php endif; ?>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

				<div class="comment-nav-below post-nav" role="navigation">

					<h3 class="assistive-text section-heading"><?php _e( 'Comment Navigation', 'readmore' ); ?></h3>

					<div class="post-nav-older"><?php previous_comments_link( '&laquo; ' . __('Older','readmore') . '<span> ' . __('Comments', 'readmore') . '</span>'); ?></div>

					<div class="post-nav-newer"><?php next_comments_link( __('Newer','readmore') . '<span> ' . __('Comments', 'readmore') . '</span>  &raquo;' ); ?></div>

					<div class="clear"></div>

				</div> <!-- /comment-nav-below -->

			<?php endif; ?>

		</div><!-- /comments -->

	<?php endif; ?>

	<?php if ( ! comments_open() && !is_page() ) : ?>

		<p class="nocomments"><?php _e( 'Comments are closed.', 'readmore' ); ?></p>

	<?php endif; ?>

	<?php $comments_args = array(

		'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.', 'readmore' ) . '</p>',

		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="6" required>' . '</textarea></p>',

		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" placeholder="' . __('Name','readmore') . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" />' . '<label for="author">' . __('Author','readmore') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '</p>',
			'email' => '<p class="comment-form-email">' . '<input id="email" name="email" type="text" placeholder="' . __('Email','readmore') . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" /><label for="email">' . __('Email','readmore') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '</p>',
			'url' => '<p class="comment-form-url">' . '<input id="url" name="url" type="text" placeholder="' . __('Website','readmore') . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /><label for="url">' . __('Website','readmore') . '</label></p>')
		),
	);

	comment_form($comments_args);

	?>
