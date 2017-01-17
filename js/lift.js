jQuery(document).ready(function($) {

    // set the content to masonary style
    $('.home--post-grid').masonry({
        itemSelector: '.post-entry',
        isAnimated: false
    });

    // mobile nav menu, slide on click
    $('.main-nav--button').click(function() {
        var menu = $('.main-nav'),
            button = $('.main-nav--button'),
            win_width = $(window).width();

        if (!menu.hasClass('active')) {
            menu.removeClass('nav-item-highlight').addClass('active');
            menu.css('right', '0');
            button.removeClass('fa-bars').addClass('fa-times');
        } else {
            menu.css('right', '-' + win_width + 'px');
            menu.removeClass('active').addClass('nav-item-highlight');
            button.removeClass('fa-times').addClass('fa-bars');
        }
    });

    // fix to make sure header menu is visible after resize up
    $(window).resize(function() {

        //move the welcome/subscribe box
        if ($('.welcome-wrap').is(':visible')) {
            var hleft = document.getElementsByClassName('container')[0].getBoundingClientRect().left + 20;
            $('.welcome-wrap').css({right: hleft});
        }

        if ($(window).width() >= 850) {
            console.log('testing');
            $('.main-nav').css({
                display: 'block',
                right: ''
            });
        }
    });

    // switch to slim-header once scroll reaches switch point
    // $(window).scroll(function() {
    //     var switch_point = 200,
    //         header = $('.header'),
    //         scroll_point = $(window).scrollTop();
    //         // console.log('asdfasdfasdf');

    //     if (scroll_point >= switch_point && !header.hasClass('toggled')) {
    //         // header.addClass('toggled');
    //         // header.animate( { top: -100 }, 'slow', 'easeOutElastic');

    //         // if (!header.hasClass('skinny'))
    //             // header.addClass('skinny');
    //     } else {

    //         // if (header.hasClass('skinny'))
    //             // header.removeClass('skinny');
    //     }
    // });


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

            var offset,
                fp_start,
                fp_stop,
                header_h    = $('#header').height(),
                padding     = 20,
                margin      = 40,
                post        = $('.post-content'),
                scroll_t    = $(window).scrollTop(),
                shareable   = $('#shareable-box'),
                shareable_t = document.getElementById('shareable-box').getBoundingClientRect().top,
                offset_t    = header_h + margin,
                offset_b    = margin * 2 + header_h;

            if ($('.mobile-bars').is(':visible')) {

                shareable.css({ 'bottom': 0, 'left': 0 });

                // post.top - skinny.header.height + padding
                fp_start = post.position().top - 66 + 30;

                // fp_start + post.height - window.height/2
                fp_stop = fp_start + post.height() - ($(window).height() / 2);

                if (scroll_t >= fp_start && scroll_t < fp_stop)
                    shareable.css('display', 'inline-block');
                else
                    shareable.css('display', 'none');

            } else {

                fp_start = post.position().top - offset_t;
                fp_stop = (post.height() + post.position().top) - shareable.height() - offset_b;

                if (scroll_t >= fp_start && scroll_t < fp_stop) {
                    if (!shareable.hasClass('freeze')) {
                        shareable.css({ 'top': offset_t, 'position': 'fixed' }).addClass('freeze');
                    }

                } else if (scroll_t >= fp_stop - 70) {
                    // unfreeze the container when scroll reaches the defined freeze pos
                    if (shareable.hasClass('freeze'))
                        shareable.removeClass('freeze').css({ 'position': 'absolute', 'top': fp_stop + offset_t });

                } else {
                    // return to normal pos
                    shareable.css({ 'top': '', 'position': '' });
                    shareable.removeClass('freeze');
                }
            }
        });

    }

});
