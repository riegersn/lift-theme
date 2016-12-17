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

      <div class="hd-wrapper">
         <nav class="hd-content">
            <div class="hd-logo">
               <a href="<?php bloginfo( 'wpurl' );?>">
                   <img class="hd-logo-img" src="http://localhost:8888/wp-content/uploads/2016/12/lg-horizontal-logo-bilinear.png">
               </a>
            </div>
            <div class="hd-menu">
                <ul>
                    <li>
                        <a href="<?php bloginfo( 'wpurl' );?>">Blog</a>
                    </li>
                    <?php wp_list_pages( '&title_li=' ); ?>
                </ul>
            </div>
         </nav>
      </div>

      <div class="content-container">
