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

	<header class="header">
		<div class="header-wrap">

			<!-- the logo -->
			<div class="floatleft">
				<a href="<?php bloginfo( 'wpurl' );?>">
					<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo_fallback.png'">
				</a>
			</div>

			<!-- mobile bars -->
			<div class="mobile-bars floatright">
				<i class='fa fa-bars' aria-hidden='true'></i>
			</div>

			<!-- the main menu -->
			<nav class="header-nav nav-item-highlight floatright">
				<?php wp_nav_menu( array( 'menu' => 'Main Nav Menu', 'theme_location' => 'main-nav-menu', 'container' => '', 'container_class' => '' ) ); ?>
			</nav>

		</div>
	</header>

	<!-- start content -->
	<div class="m-content">