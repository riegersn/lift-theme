<?php get_header(); ?>

	<div class="container">

		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			$attachment = get_post( $post->id );
			$img_meta = wp_get_attachment_metadata( $post->id );
			$img_caption = $attachment->post_excerpt;
		?>

		<p class="post-meta">Attachment</p>
		<h1><?php the_title(); ?></h1>

		<div class="entry-attachment">

			<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
			<p class="attachment">
				<a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment">
					<img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
				</a>
	        </p>

			<?php else : ?>
				<a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>

			<?php endif; ?>

			<dl>
				<dt>Image Size</dt>
				<dd><?php echo $img_meta['width'] . 'x' . $img_meta['height']; ?></dd>
				<dt>Caption</dt>
				<dd><?php echo $attachment->post_excerpt; ?></dd>
				<dt>Description</dt>
				<dd><?php echo $attachment->post_content; ?></dd>
			</dl>

		</div>

		<?php endwhile; ?>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
