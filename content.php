<div class="tlg-home-entry clearfix">

	<div class="tlg-home-title">
		<a href="<?php the_permalink(); ?>">
			<h1> <?php the_title(); ?> </h1>
		</a>
	</div>

	<div class="tlg-home-comments">
		<a href="<?php comments_link(); ?>">
			<?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
		</a>
	</div>

	<div class="tlg-home-image">
		<?php if ( has_post_thumbnail() ) {?>
			<?php the_post_thumbnail('medium_large'); ?>
		<?php } ?>
	</div>

	<div class="tlg-home-content">
		<?php the_excerpt(); ?>
		<a class="button" href="<?php echo the_permalink(); ?>"> Continue reading...</a>
	</div>

</div>
