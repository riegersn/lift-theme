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
		<div class="header-main">
			<nav class="header-content">
				<div class="col header-logo-container">
					<a href="<?php bloginfo( 'wpurl' );?>">
						<img class="header-logo" src="http://localhost:8888/wp-content/uploads/2016/12/logo-dark-60h.png">
					</a>
				</div>
				<div class="col header-menu">
					<ul>
						<li>
							<a href="<?php bloginfo( 'wpurl' );?>">Blog</a>
						</li>
						<?php wp_list_pages( '&title_li=' ); ?>
					</ul>
				</div>
				<div class="header-button">
					<a class="button-border" href="#">START DRIVING NOW</a>
				</div>
			</nav>
		</div>
		<div class="content-container">