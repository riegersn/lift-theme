
<<<<<<< HEAD
<div class="post-featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
</div>

<div class="post-content">
	<?php get_template_part('shareable') ?>

	<h1 class="post-title"><?php the_title(); ?></h1>
	<p class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
	</p>

	<?php the_content(); ?>
</div>

<!-- <div id="bp-signup">
	<div class="bp-signup-content">
		Work smarter, work less.<br/>
		<a href="#">Sign Up Now!</a>
	</div>
</div> -->
=======
<?php if(has_post_thumbnail()) { ?>
	<div class="feat-img post-thumb" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
	</div>
<?php } ?>

<div class="container">
	<div class="post-content">
		<?php get_template_part('shareable') ?>
		<p class="post-meta">/theLyftGuy/<?php the_date(); ?></a></p>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>
>>>>>>> master

</div>