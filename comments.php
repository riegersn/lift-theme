<?php if ( post_password_required() ) {
	return;
} ?>

<div class="content-container">
	<div class="comments">
		<?php if ( have_comments() ) : ?>
			<h2>
				<?php
				printf( _nx( 'One awesome comment.', '%1$s awesome comments.', get_comments_number(), 'comments title'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h2>

			<?php
			wp_list_comments( array(
				'walker' => new comment_walker,
				'short_ping'  => true,
				'avatar_size' => 50,
			) );
			?>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>
</div>
