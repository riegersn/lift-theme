<!--
lyftguy theme
	by riegersn

	content-single.php
-->

 <!-- parallax-window -->
<!-- <div class="bp-featured-img" style="width:100%; height:500px;" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>"></div> -->

<div class="bp-featured-img" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
</div>

<div class="bp-container">
		<?php get_template_part('shareable') ?>

		<h2 class="bp-title"><?php the_title(); ?></h2>
		<p class="bp-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

		<div class="bp-content">
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
