<article class="post-entry col span-1-2">
	<?php if ( has_post_thumbnail() ) {?>
		<div class="post-list-image" style="background-image: url(<?php the_post_thumbnail_url( 'medium_large' ); ?>);">
		</div>
	<?php } ?>

	<div class="entry-wrap">
		<h4><a class="post-list-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

	<!-- 	<div class="tlg-home-comments">
			<a href="<?php comments_link(); ?>">
				<?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
			</a>
		</div> -->

		<div class="post-list-content">
			<?php the_excerpt(); ?>
			<a class="button" href="<?php echo the_permalink(); ?>">Continue reading...</a>
		</div>
	</div>

</article>
