<div class="tlg-home-entry clearfix">


	<?php if ( has_post_thumbnail() ) {?>
		<div class="tlg-home-image" style="background-image: url(<?php the_post_thumbnail_url( 'medium_large' ); ?>);">
		</div>
	<?php } ?>

<!-- 	<div class="tlg-home-comments">
		<a href="<?php comments_link(); ?>">
			<?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
		</a>
	</div> -->

	<div class="tlg-home-content">
		<a class="tlg-home-title-link" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<?php the_excerpt(); ?>
		<a class="button" href="<?php echo the_permalink(); ?>"> Continue reading...</a>
	</div>

</div>
