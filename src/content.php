<article class="grid-entry col span-col">
	<?php if ( has_post_thumbnail() ) {?>
		<a href="<?php echo the_permalink(); ?>">
			<div class="grid-entry--img" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ); ?>);">
			</div>
		</a>
	<?php } ?>

	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	<?php the_excerpt(); ?>
	<a class="button" href="<?php echo the_permalink(); ?>">Continue reading</a>

</article>
