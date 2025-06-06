/* <![CDATA[ */
(jQuery)(function ($) {
    'use strict';

    // MAIN NAVIGATION
    $('.nav').on({
        mouseenter: function () {
            $(this).find('ul:first').css({
                visibility: "visible",
                display: "none"
            }).fadeIn(300);
        },
        mouseleave: function () {
            $(this).find('ul:first').css({
                display: "none"
            });
        }}, ".dropdown");

    // RESPONSIVE NAVIGATION
    $(function () {
        $('#dl-menu').dlmenu({
            animationClasses: {
                classin: 'dl-animate-in-2',
                classout: 'dl-animate-out-2'
            }
        });
    });


    $(window).on('load resize', function () {

        if (
                (navigator.userAgent.match(/iPad/i)) && (navigator.userAgent.match(/iPad/i) != null)
                || (navigator.userAgent.match(/Android/i)) && (navigator.userAgent.match(/Android/i) != null)
                || (navigator.userAgent.match(/BlackBerry/i)) && (navigator.userAgent.match(/BlackBerry/i) != null)
                || (navigator.userAgent.match(/iemobile/i)) && (navigator.userAgent.match(/iemobile/i) != null)
                )
        {
            $(".header-wrapper").css({"position": "relative", "padding-top": "15px"});
        }

    })

    // SMOOTH SCROLL
    var $window = $(window);		//Window object

    var scrollTime = 0.2;			//Scroll time
    var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

    $window.on("mousewheel DOMMouseScroll", function (event) {

        event.preventDefault();

        var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta * scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo: {y: finalScroll, autoKill: true},
            ease: Power1.easeOut, //For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
            autoKill: true,
            overwrite: 5
        });

    });

    // FULL SCREEN PAGE
    (function () {
        $(window).on('load', function () {
            fullscreenOnResize();
        });

        $(window).on('resize', function () {
            fullscreenOnResize();
        });

        function fullscreenOnResize() {
            var screenHeight = $(window).height();
            $('.full-screen, .full-screen-content-wrapper').height(screenHeight);
            if ($(window).height() < 500) {

                $('.bottom-element-wrapper').css('bottom', '-170px');
            } else {
                $('.bottom-element-wrapper').css('bottom', 0);
            }
        }
    })();


    // CONTENT TABS
    (function () {
        $('.tabs').each(function () {
            var $tabLis = $(this).find('li');
            var $tabContent = $(this).next('.tab-content-wrap').find('.tab-content');

            $tabContent.hide();
            $tabLis.first().addClass('active').show();
            $tabContent.first().show();
        });

        $('.tabs').on('click', 'li', function (e) {
            var $this = $(this);
            var parentUL = $this.parent();
            var tabContent = parentUL.next('.tab-content-wrap');

            parentUL.children().removeClass('active');
            $this.addClass('active');

            tabContent.find('.tab-content').hide();
            var showById = $($this.find('a').attr('href'));
            tabContent.find(showById).fadeIn();

            e.preventDefault();
        });
    })();


    //ACCORDION
    (function () {
        'use strict';
        $('.accordion').on('click', '.title', function (event) {
            event.preventDefault();
            $(this).siblings('.accordion .active').next().slideUp('normal');
            $(this).siblings('.accordion .title').removeClass("active");

            if ($(this).next().is(':hidden') === true) {
                $(this).next().slideDown('normal');
                $(this).addClass("active");
            }
        });
        $('.accordion .content').hide();
        $('.accordion .active').next().slideDown('normal');
    })();

    // SCROLL TO TOP 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scroll-up').removeClass('hide-scroll').addClass('show-scroll');
        } else {
            $('.scroll-up').removeClass('show-scroll').addClass('hide-scroll');
        }
    });

    $('.scroll-up').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    // NEWSLETTER FORM AJAX SUBMIT
    $('.newsletter .submit').on('click', function (event) {
        event.preventDefault();
        var email = $(this).siblings('.email').val();
        var form_data = new Array({'Email': email});
        $.ajax({
            type: 'POST',
            url: "contact.php",
            data: ({'action': 'newsletter', 'form_data': form_data})
        }).done(function (data) {
            alert(data);
        });
    });


    // function to check is user is on touch device
    if (!is_touch_device()) {

        // ANIMATED CONTENT
        if ($(".animated")[0]) {
            jQuery('.animated').css('opacity', '0');
        }

        var currentRow = -1;
        var counter = 1;

        $('.triggerAnimation').waypoint(function () {
            var $this = $(this);
            var rowIndex = $('.row').index($(this).closest('.row'));
            if (rowIndex !== currentRow) {
                currentRow = rowIndex;
                $('.row').eq(rowIndex).find('.triggerAnimation').each(function (i, val) {
                    var element = $(this);
                    setTimeout(function () {
                        var animation = element.attr('data-animate');
                        element.css('opacity', '1');
                        element.addClass("animated " + animation);
                    }, (i * 250));
                });

            }

            //counter++;

        },
                {
                    offset: '70%',
                    triggerOnce: true
                }
        );
    }
    ;

    // function to check is user is on touch device
    function is_touch_device() {
        return Modernizr.touch;
    }

    // Placeholder fix for old browsers
    $('input, textarea').placeholder();

    // RESIZE HEADER ON SCROLL
    // $(function () {
    //     $(window).on('scroll', function () {
    //         resizeHeader();
    //     });
    //     $(window).resize('scroll', function () {
    //         resizeHeader();
    //     });
    //     function resizeHeader() {
    //         var position = $(window).scrollTop();
    //         var windowWidth = $(window).width();
    //         if (position > 70 && windowWidth > 1169) {
    //             $('#header-wrapper').addClass('resize-header');
    //         }else {
    //             $('#header-wrapper').removeClass('resize-header');
    //         }
    //     }
    // });

    /*
     * SVG COLOR CHANGING
     */
    jQuery('.divider-svg img').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
});
/* ]]> */

$(document).ready(function () {
    function resizeHeader() {
        var position = $(window).scrollTop();
        var windowWidth = $(window).width();
        if (position > 70 && windowWidth > 1169) {
            $('#header-wrapper').addClass('resize-header');
        } else {
            $('#header-wrapper').removeClass('resize-header');
        }
    }

    $(window).on('scroll resize', resizeHeader);
    resizeHeader();
});
