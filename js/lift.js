jQuery(document).ready(function($) {

    // set the content to masonary style
    $('.entry-post-grid').masonry({
        itemSelector: '.post-entry',
        isAnimated: false
    });

    // mobile nav menu, slide on click
    $('.mobile-bars').click(function() {
        var menu = $('.header-menu'),
            win_width = $(window).width();

        if (!menu.hasClass('active')) {
            menu.removeClass('nav-item-highlight').addClass('active');
            menu.css('right', '0');
            $('.mobile-bars i').removeClass('fa-bars').addClass('fa-times');
        } else {
            menu.css('right', '-' + win_width + 'px');
            menu.removeClass('active').addClass('nav-item-highlight');
            $('.mobile-bars i').removeClass('fa-times').addClass('fa-bars');
        }
    });

    // fix to make sure header menu is visible after resize up
    $(window).resize(function() {
        if ($(window).width() >= 860) {
            console.log('testing');
            $('.header-menu').css({
                display: 'block',
                right: ''
            });
        }
    });

    // switch to slim-header once scroll reaches switch point
    $(window).scroll(function() {
        var switch_point = 100,
            header = $('.header'),
            scroll_point = $(window).scrollTop();

        if (scroll_point >= switch_point) {
            if (!header.hasClass('skinny'))
                header.addClass('skinny');
        } else {
            if (header.hasClass('skinny'))
                header.removeClass('skinny');
        }
    });


    /* ------------------------------------------------------------
        Shareable
       ------------------------------------------------------------ */

    if ($('.sb-content-wrap').length) {


        /* --- Define Shareable --- */
        var Shareable = {
            post_title: encodeURI($('.post-title').text()),
            post_uri: encodeURIComponent(window.location),
            social: { twitter: { handle: 'thelyftguy_net' } },
            links: {
                facebook: 'http://www.facebook.com/share.php?u=',
                twitter: 'https://twitter.com/share?original_referer=/&text=',
                googleplus: 'https://plus.google.com/share?url=',
                linkedin: 'https://www.linkedin.com/cws/share?url=',
                reddit: 'http://www.reddit.com/submit?url=',

            }
        };


        /* --- Shareable Links --- */

        //facebook
        $('a.sb-facebook').click(function(event) {
            window.open(Shareable.links.facebook + Shareable.post_uri);
            return false;
        });

        //twitter
        $('a.sb-twitter').click(function(event) {
            window.open(Shareable.links.twitter + Shareable.post_uri + '&via=' + Shareable.social.twitter.handle);
            return false;
        });

        //googleplus
        $('a.sb-googleplus').click(function(event) {
            window.open(Shareable.links.googleplus + Shareable.post_uri);
            return false;
        });

        //linkedin
        $('a.sb-linkedin').click(function(event) {
            window.open(Shareable.links.linkedin + Shareable.post_uri);
            return false;
        });

        //reddit
        $('a.sb-reddit').click(function(event) {
            window.open(Shareable.links.reddit + Shareable.post_uri);
            return false;
        });

        //email
        $('a.sb-email').click(function(event) {
            window.open('mailto:?subject=' +
                Shareable.post_title +
                '&body=' +
                encodeURI('I found something you may be interested in! Check it out! ') +
                Shareable.post_uri);
            return false;
        });


        /* --- Freeze Shareable Container on Scroll --- */
        $(window).scroll(function() {

            var fp_start,
                fp_stop,
                sb = $('.sb-content-wrap'),
                post = $('.post-content'),
                scroll_top = $(window).scrollTop();

            if ($('.mobile-bars').is(':visible')) {

                sb.css({ 'bottom': 0, 'left': 0 });

                // post.top - skinny.header.height + padding
                fp_start = post.position().top - 66 + 30;

                // fp_start + post.height - window.height/2
                fp_stop = fp_start + post.height() - ($(window).height() / 2);

                if (scroll_top >= fp_start && scroll_top < fp_stop)
                    sb.css('display', 'inline-block');
                else
                    sb.css('display', 'none');

            } else {

                var sbv_height = sb.height(),
                    post_content_h = post.height();

                // m_content.margin-top + post_featured_image.height - skinny.header.height
                fp_start = 100 + 550 - 66;

                // fp_start + post_content.height + shareable height (vertical) - header.height
                fp_stop = fp_start + post_content_h - sbv_height - 66; //

                if (scroll_top >= fp_start /*&& scroll_top < fp_stop*/) {

                    // freeze the container when scroll reaches the defined freeze pos
                    if (!sb.hasClass('sb-fixed-content-wrap'))
                        sb.css({ 'top': '', 'position': '' }).addClass('sb-fixed-content-wrap');

                // } else if (scroll_top >= fp_stop) {

                //     // unfreeze the container when scroll reaches the defined freeze pos
                //     if (sb.hasClass('sb-fixed-content-wrap'))
                //         sb.removeClass('sb-fixed-content-wrap').css({ 'position': 'absolute', 'top': fp_stop + 100 });

                } else {

                    // return to normal pos
                    sb.css({ 'top': '', 'position': '' });
                    sb.removeClass('sb-fixed-content-wrap');
                }
            }
        });

    }

});
