<div class="hp-item">



	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<p class="hp-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> - <a href="<?php comments_link(); ?>">
		<?php
			printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
	</a></p>

	<?php if ( has_post_thumbnail() ) {?>
		<?php the_post_thumbnail('medium'); ?>
	<?php } ?>
	<?php the_excerpt(); ?>
	<a class="button" href="<?php echo the_permalink(); ?>"> Read More...</a>

</div><!-- /.home-post-item -->
