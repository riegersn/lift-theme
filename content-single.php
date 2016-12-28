
<div class="post-featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
</div>

<div class="post-content">
	<?php get_template_part('shareable') ?>

	<h1 class="post-title"><?php the_title(); ?></h1>
	<p class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
	</p>

	<?php the_content(); ?>
</div>

</div>
