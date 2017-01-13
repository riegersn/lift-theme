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
			<a class="header-logo-link" href="<?php bloginfo( 'wpurl' );?>">
				<?php echo print_svg_image('header-logo', 'lyftguy-logo-alt3.svg', 'lyftguy-logo.png'); ?>
			</a>

			<!-- the main menu -->
			<nav class="header-menu nav-item-highlight">
				<?php wp_nav_menu( array( 'menu' => 'Main Nav Menu', 'theme_location' => 'main-nav-menu', 'container' => '', 'container_class' => '' ) ); ?>
			</nav>

			<!-- mobile bars -->
			<div class="mobile-bars">
				<i class='fa fa-bars' aria-hidden='true'></i>
			</div>
		</div>
	</header>

	<div class="welcome-wrap">
		<h2 class="welcome-header">Welcome to the theLyftGuy!</h2>
		<div class="welcome-copy">
			<p>I'm the LyftGuy, otherwise known as Shawn. Welcome to my first blog! I'm a husband, father and lover of all things Lyft!</p>
			<p><input type="name" name="singup_name" value="" placeholder="your name"></p>
			<p><input type="email" name="singup_email" value="" placeholder="your@email.com"></p>
			<p><a class="button welcome-button" href="#">Subscribe</a></p>
		</div>
	</div>

	<!-- start content -->
	<div class="m-content">