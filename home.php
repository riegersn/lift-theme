
<?php get_header(); ?>

<!--
<m-content> -->
<<<<<<< HEAD
	<div class="c-column">

		<div class="c-row c-header">
			<strong>Welcome</strong>
		</div>

		<div class="c-row c-panel">
			This is just some text.
		</div>

		<div class="c-row c-header">
			<img class="c-header" src="<?php echo get_template_directory_uri(); ?>/img/the_blog_154.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/the_blog_154_fallback.png'">
		</div>

		<div class="c-post-panel">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
				endwhile;
			?>

			<!--
			<ul class="pager">
					<li><?php next_posts_link( 'Previous' ); ?></li>
					<li><?php previous_posts_link( 'Next' ); ?></li>
				</ul>
			-->

			<?php
				endif;
			?>

		</div>

	</div> <!-- /.c-column -->
</div> <!-- /.m-content -->

<script type="text/javascript">
	jQuery('.c-post-panel').masonry({
  		itemSelector: '.post-entry',
  		// isAnimated: false
	});
</script>

=======

	<div class="feat-img home--feat-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-alt.jpg')" >
		<div class="home-signup">
			<span class="home-signup-highlight">Don't be a <span class="c-red">clueless driver</span>.</span><br>
			<span class="home-signup-highlight">Follow us on <a href="https://www.facebook.com/theLyftGuy/" target="_blank"><span class="home-signup-span home-signup-fb">facebook</span></a> and <a href="https://twitter.com/thelyftguy_net" target="_blank"><span class="home-signup-span home-signup-tw">twitter</span></a>,</span><br>
			<span class="home-signup-highlight">then <a class="home-signup-btn" href="/subscribe">subscribe</a> to our newsletter!</span>
		</div>
	</div>

	<div class="container home--the-blog">
		<?php echo print_svg_image('','the_blog_140.svg','the_blog_140.png'); ?>
	</div>

	<div class="container post-grid">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
			endwhile;
		endif;
		?>

		<!-- TODO: Add pagination or continuous scroll support
		-->

	</div>

</div> <!-- /.m-content -->

>>>>>>> master
<?php get_footer(); ?>
