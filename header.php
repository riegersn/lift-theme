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
				<div class="h-logo">
					<a href="<?php bloginfo( 'wpurl' );?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/img/lyftguy_logo_fallback.png'">
					</a>
				</div>
				<div class="h-menu">
					<a class="mobile-only h-three-bars" href="#">
						<i class='fa fa-bars' aria-hidden='true'></i>
					</a>
					<ul class="h-menu-ul">
						<li><a href="<?php bloginfo( 'wpurl' );?>">Blog</a></li>
						<?php wp_list_pages( '&title_li=' ); ?>
						<a class="mobile-only drive-now buttons-border" href="#">START DRIVING NOW</a>
					</ul>

				</div>
				<script type="text/javascript">
					jQuery('.h-three-bars').click(function(){
						jQuery('.h-menu-ul').slideToggle('fast');
					});
				</script>
			</nav> <!-- /h-logo-wrap -->
		</div> <!-- /main-header -->
		<div class="m-content">