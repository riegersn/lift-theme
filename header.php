<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
  </head>

  <body>

	<div class="lift-nav-wrapper">
      <nav class="lift-nav">
         <div class="site-logo">
            <a href="<?php bloginfo( 'wpurl' );?>">
                <img class="site-logo" src="http://localhost:8888/wp-content/uploads/2016/12/lg-horizontal-logo.png">
            </a>
         </div>
         <div class="lift-menu">
             <ul>
                 <li >
                     <a href="<?php bloginfo( 'wpurl' );?>">Blog</a>
                 </li>
                 <?php wp_list_pages( '&title_li=' ); ?>
             </ul>
         </div>
      </nav>
	</div>

    <div class="content-container">

      <!-- <div class="blog-header">
        <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div> -->
