jQuery(document).ready(function($) {

    // set the content to masonary style
    $('.entry-post-grid').masonry({
        itemSelector: '.post-entry',
        isAnimated: false
    });

    $('#menu-item-365').click(function(event) {
        var ww = $('.welcome-wrap'),
            hleft = document.getElementsByClassName('header-wrap')[0].getBoundingClientRect().left + 20;

        ww.finish();

        if (ww.hasClass('toggled')) {
            ww.removeClass('toggled');
            ww.animate({'right': '-330'}, 'normal');
        }
        else {
            ww.addClass('toggled');
            ww.animate({'right': hleft}, 'normal');
        }
    });

    //move the welcome/subscribe box
    if (document.location.pathname == '/') {
        var hleft = document.getElementsByClassName('header-wrap')[0].getBoundingClientRect().left + 20;
        $('.welcome-wrap').css({'right': hleft}).addClass('toggled');
    }

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

        //move the welcome/subscribe box
        if ($('.welcome-wrap').is(':visible')) {
            var hleft = document.getElementsByClassName('header-wrap')[0].getBoundingClientRect().left + 20;
            $('.welcome-wrap').css({right: hleft});
        }

        if ($(window).width() >= 860) {
            console.log('testing');
            $('.header-menu').css({
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

            var fp_start,
                fp_stop,
                sb = $('.sb-content-wrap'),
                post = $('.post-content'),
                content = $('.content-container:first'),
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
                    content_t = content.offset().top,
                    content_h = content.height();

                // console.log(scroll_top + '/' + content_t);

                fp_start = content_t;
                fp_stop = content_t + content_h - sbv_height;

                // console.log(scroll_top + '/ ' + content_t + '+' + content_h + '-' + sbv_height + ' = ' + fp_stop);

                if (scroll_top >= fp_start && scroll_top < (fp_stop - 40)) {

                    // console.log('IF: ' + scroll_top + '/ ' + content_t + '+' + content_h + '-' + sbv_height + ' = ' + fp_stop);

                    // freeze the container when scroll reaches the defined freeze pos
                    if (!sb.hasClass('freeze')) {
                        sb.css({ 'top': 40, 'position': 'fixed' }).addClass('freeze');
                    }

                } else if (scroll_top >= fp_stop - 40) {

                    // console.log('IF ELSE: ' + scroll_top + '/ ' + content_t + '+' + content_h + '-' + sbv_height + ' = ' + fp_stop);

                    // unfreeze the container when scroll reaches the defined freeze pos
                    if (sb.hasClass('freeze'))
                        sb.removeClass('freeze').css({ 'position': 'absolute', 'top': fp_stop - 98 });

                } else {
                    // console.log('ELSE: ' + scroll_top + '/ ' + content_t + '+' + content_h + '-' + sbv_height + ' = ' + fp_stop);
                    // return to normal pos
                    sb.css({ 'top': '', 'position': '' });
                    sb.removeClass('freeze');
                }
            }
        });

    }

});
