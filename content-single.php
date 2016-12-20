<!--
lyftguy theme
	by riegersn

	content-single.php
-->

 <!-- parallax-window -->
<!-- <div class="post-featured-image" style="width:100%; height:500px;" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>"></div> -->

<div class="post-featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
</div>

<div class="post-content">
		<?php get_template_part('shareable') ?>

		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a>
		</p>

		<div class="post-text">
			<?php the_content(); ?>
		</div>
</div>

<div id="bp-signup">
	<div class="bp-signup-content">
		Work smarter, work less.<br/>
		<a href="#">Sign Up Now!</a>
	</div>
</div>

</div>
