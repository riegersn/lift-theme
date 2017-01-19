<<<<<<< HEAD
<?php
    $url = urlencode(get_permalink($post->ID));
    $post_title = urlencode($post->post_title);
    $twitter_handle = 'thelyftguy_net';
?>

<!-- TODO: handle links and on-click events with in shareable.js -->

<div id="shareable-box" class="sb-content-wrap">

    <!-- facebook -->
    <a class="sb-button sb-facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php echo $url; ?>">
=======

<div id="shareable">

    <!-- facebook -->
    <a class="shareable-btn sb-facebook">
>>>>>>> master
        <i class='fa fa-facebook' aria-hidden='true'></i>
    </a>

    <!-- twitter -->
<<<<<<< HEAD
    <a class="sb-button sb-twitter" target="_blank" href="https://twitter.com/share?original_referer=/&text=<?php echo $post_title; ?>&url=<?php echo $url; ?>&via=<?php echo $twitter_handle; ?>">
=======
    <a class="shareable-btn sb-twitter">
>>>>>>> master
        <i class='fa fa-twitter' aria-hidden='true'></i>
    </a>
    </a>

    <!-- google plus -->
<<<<<<< HEAD
    <a class="sb-button sb-googleplus" target="_blank" href="https://plus.google.com/share?url=<?php echo $url; ?>">
=======
    <a class="shareable-btn sb-googleplus">
>>>>>>> master
        <i class='fa fa-google-plus' aria-hidden='true'></i>
    </a>

    <!-- linkedin -->
<<<<<<< HEAD
    <a class="sb-button sb-linkedin sb-hlast-dual-radius" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo $url; ?>">
=======
    <a class="shareable-btn sb-linkedin">
>>>>>>> master
        <i class='fa fa-linkedin' aria-hidden='true'></i>
    </a>

    <!-- reddit -->
<<<<<<< HEAD
    <a class="sb-button sb-reddit" target="_blank" href="http://www.reddit.com/submit?url=<?php echo $url; ?>">
=======
    <a class="shareable-btn sb-reddit">
>>>>>>> master
        <i class='fa fa-reddit' aria-hidden='true'></i>
    </a>
    </a>

    <!-- email -->
<<<<<<< HEAD
    <a class="sb-button sb-email" target="_blank" href="mailto:?subject=<?php echo $post_title; ?>&body=I%20wanted%20to%20share%20this%20with%20you%0A%0A<?php echo $url; ?>">
=======
    <a class="shareable-btn sb-email">
>>>>>>> master
        <i class='fa fa-envelope' aria-hidden='true'></i>
    </a>

</div>
