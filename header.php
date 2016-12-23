<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="m-header">

			<nav class="h-wrap">
				<div class="h-logo-wrap">
					<a href="<?php bloginfo( 'wpurl' );?>">
						<img class="h-logo" src="<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo_fallback.png'">
					</a>
				</div>
				<div class="h-menu">
					<ul>
						<li><a href="<?php bloginfo( 'wpurl' );?>">Blog</a></li>
						<?php wp_list_pages( '&title_li=' ); ?>
					</ul>
				</div>
				<div class="h-button">
					<a class="buttons-border" href="#">START DRIVING NOW</a>
				</div>
			</nav> <!-- /h-logo-wrap -->
		</div> <!-- /main-header -->
		<div class="m-content">