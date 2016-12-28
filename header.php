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

	<header>
		<nav class="h-wrap">

			<!-- the logo -->
			<div class="h-logo">
				<a href="<?php bloginfo( 'wpurl' );?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo_fallback.png'">
				</a>
			</div>

			<!-- the main menu -->
			<div class="nav-menu nav-item-highlight">
				<?php wp_nav_menu( array(
					'menu' => 'main-nav-menu',
					'container_class' => 'nav-menu-ul' ) );
					?>
			</div>

			<!-- the three bars -->
			<div class="mobile-only h-three-bars">
				<a href="#">
					<i class='fa fa-bars' aria-hidden='true'></i>
				</a>
			</div>

			<!-- tiny menu -->
			<div class="mobile-nav-menu">
				<?php wp_nav_menu( array(
					'menu' => 'main-nav-menu',
					'container_class' => 'nav-mobile-menu-ul' ) );
					?>
			</div>

		</nav>
	</header>

	<!-- start content -->
	<div class="m-content">