<?php
    $url = urlencode(get_permalink($post->ID));
    $post_title = urlencode($post->post_title);
    $twitter_handle = 'thelyftguy_net';
?>

<div id="shareable-box" class="sb-content-wrap">
   <a class="sb-button sb-facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo $url; ?>">
      <i class='fa fa-facebook' aria-hidden='true'></i>
   </a>
   <a class="sb-button sb-twitter" target="_blank" href="https://twitter.com/share?original_referer=/&text=<?php echo $post_title; ?>&url=<?php echo $url; ?>&via=<?php echo $twitter_handle; ?>">
      <i class='fa fa-twitter' aria-hidden='true'></i>
   </a>
   </a>
   <a class="sb-button sb-googleplus" target="_blank" href="https://plus.google.com/share?url=<?php echo $url; ?>">
      <i class='fa fa-google-plus' aria-hidden='true'></i>
   </a>
   <a class="sb-button sb-linkedin sb-hlast-dual-radius" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo $url; ?>">
      <i class='fa fa-linkedin' aria-hidden='true'></i>
   </a>
   <a class="sb-button sb-reddit" target="_blank" href="http://www.reddit.com/submit?url=<?php echo $url; ?>">
      <i class='fa fa-reddit' aria-hidden='true'></i>
   </a>
   </a>
   <a class="sb-button sb-email" target="_blank" href="mailto:?subject=<?php echo $post_title; ?>&body=I%20wanted%20to%20share%20this%20with%20you%0A%0A<?php echo $url; ?>">
      <i class='fa fa-envelope' aria-hidden='true'></i>
   </a>
 </div>
