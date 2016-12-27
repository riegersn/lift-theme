<?php if ( post_password_required() ) {
	return;
} ?>

<div class="cm-container">
	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			printf( _nx( 'One awesome comment.', '%1$s awesome comments.', get_comments_number(), 'comments title'),
				number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>
		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'walker' => new comment_walker,
				'short_ping'  => true,
				'avatar_size' => 75,
			) );
			?>
		</ul>
	<?php endif; ?>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments">
			<?php _e( 'Comments are closed.' ); ?>
		</p>
	<?php endif; ?>
	<?php comment_form(); ?>
</div>
