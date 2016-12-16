<?php get_header(); ?>

<!-- http://localhost:8888/wp-content/uploads/2016/12/lyft-amp-main-header.jpg -->
<div class="parallax-window" style="width:100%; height:550px;" data-parallax="scroll" data-image-src="http://localhost:8888/wp-content/uploads/2016/12/lyft-amp-main-header.jpg">
</div>
	<div class="row">

		<div class="col-sm-8 blog-main">
			Hello!
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;
			?>

			<nav>
				<ul class="pager">
					<li><?php next_posts_link( 'Previous' ); ?></li>
					<li><?php previous_posts_link( 'Next' ); ?></li>
				</ul>
			</nav>

			<?php
				endif;
			?>

		</div> <!-- /.blog-main -->

		<!--?php get_sidebar(); ?-->

	</div> <!-- /.row -->

<?php get_footer(); ?>
