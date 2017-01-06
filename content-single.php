
<?php if(has_post_thumbnail()) { ?>
	<div class="post-featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
	</div>
<?php } ?>

<div class="content-container">
	<div class="post-content">
		<?php get_template_part('shareable') ?>
		<p class="post-meta">/theLyftGuy/<?php the_date(); ?></a></p>
		<h1 class="post-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>

</div>
