<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://use.typekit.net/dcf1lbu.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>
  </head>

  <body>

	<div class="lift-nav-wrapper">
      <nav class="lift-nav">
          <ul>
             <li class="site-logo">
                <a href="<?php bloginfo( 'wpurl' );?>">
                   <img src="http://localhost:8888/wp-content/uploads/2016/12/lyftguy_new_logo.png">
                </a>
             </li>
              <li >
                  <a href="<?php bloginfo( 'wpurl' );?>">Blog</a>
              </li>
              <?php wp_list_pages( '&title_li=' ); ?>
          </ul>
      </nav>
	</div>

    <div class="content-container">

      <!-- <div class="blog-header">
        <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div> -->
