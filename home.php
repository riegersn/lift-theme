
<?php get_header(); ?>

<!--
<m-content> -->

	<div class="home-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-alt.jpg')" >


	</div>

	<div class="content-container the-blog">
		<img class="c-header" src="<?php echo get_template_directory_uri(); ?>/img/the_blog_140.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/the_blog_140_fallback.png'">
	</div>


	<div class="content-container entry-post-grid transparent">

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

</div> <!-- /.m-content -->


<?php get_footer(); ?>
