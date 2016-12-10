<!--
	LiftTheme
	content-single.php / blog-post
-->

<div class="blog-post-featured" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');" >
	<div class="blog-post-featured-fade"></div>
</div>

<div class="post-wrap">

	<div class="post-content">

		<?php get_template_part('shareable') ?>

		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

		<?php the_content(); ?>

	</div><!-- /.blog-post -->
</div>

<div id="subscribe-banner">
	<div>
		<div id="subscribe-banner-copy">
			Work less not more,<br/><span>Smarter not harder.</span>
		</div>
		<div id="subscribe-banner-form">
			<input class="email-input" placeholder="your@email.com" />
			<input type="button" class="subscribe-button" value="Subscribe" />
		</div>
	</div>
</div>
