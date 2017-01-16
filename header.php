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
	<header id="header">
		<div class="container wide">
			<!-- the logo -->
			<a class="main-logo" href="<?php bloginfo( 'wpurl' );?>">
				<?php echo print_svg_image('', 'lyftguy-logo.svg', 'lyftguy-logo.png'); ?>
			</a>

			<!-- the main menu -->
			<nav class="main-nav valign">
				<?php wp_nav_menu( array( 'menu' => 'Main Nav Menu', 'theme_location' => 'main-nav-menu', 'container' => '', 'container_class' => '' ) ); ?>
			</nav>

			<i class='fa fa-bars main-nav--button valign' aria-hidden='true'></i>
		</div>
	</header>

	<!-- start content -->
	<div id="content">