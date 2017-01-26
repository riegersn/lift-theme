
<?php get_header(); ?>

<!--
<m-content> -->

	<div class="feat-img home--feat-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home.jpg')" >
		<div class="home-signup">
			<span class="home-signup-highlight">Follow us on <a href="https://www.facebook.com/theLyftGuy/" target="_blank"><span class="home-signup-span home-signup-fb">facebook</span></a> and <a href="https://twitter.com/thelyftguy_net" target="_blank"><span class="home-signup-span home-signup-tw">twitter</span></a>.</span><br>
			<span class="home-signup-highlight"><a class="home-signup-btn" href="/subscribe">Subscribe</a> to our newsletter!</span>
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

<?php get_footer(); ?>
