<article class="post-entry col span-1-3">
	<?php if ( has_post_thumbnail() ) {?>
		<a href="<?php echo the_permalink(); ?>">
			<div class="post-list-image" style="background-image: url(<?php the_post_thumbnail_url( 'medium_large' ); ?>);">
			</div>
		</a>
	<?php } ?>

	<div class="entry-wrap">
		<h3><a class="post-list-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<div class="post-list-content">
			<?php the_excerpt(); ?>
			<a class="button" href="<?php echo the_permalink(); ?>">Continue reading</a>
		</div>
	</div>

</article>
