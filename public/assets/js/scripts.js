/*
Author       : theme_ocean 
Template Name: Penn - Education HTML Template
Version      : 1.0
*/
(function ($) {
    "use strict";

    jQuery(document).on("ready", function () {
        /*PRELOADER JS*/
        jQuery(window).on("load", function () {
            setTimeout(function () {
                $("body").addClass("loaded");
            }, 500);
        });
        /*END PRELOADER JS*/

        /*START MENU JS*/
        $("#main-menu").slicknav({
            label: "",
            duration: 1000,
            easingOpen: "easeOutBounce", //available with jQuery UI
            prependTo: "#mobile_menu",
            closeOnClick: true,
            easingClose: "swing",
            easingOpen: "swing",
            openedSymbol: "&#9660;",
            closedSymbol: "&#9658;",
        });

        if ($(window).scrollTop() > 200) {
            $(".fixed-top").addClass("menu-bg");
        } else {
            $(".fixed-top").removeClass("menu-bg");
        }
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 70) {
                $(".site-navigation, .header-white, .header").addClass(
                    "navbar-fixed"
                );
            } else {
                $(".site-navigation, .header-white, .header").removeClass(
                    "navbar-fixed"
                );
            }
        });
        /*END MENU JS*/

        /*START VIDEO JS*/
        $(".video-play").magnificPopup({
            type: "iframe",
        });
        $(".co-video-play").magnificPopup({
            type: "iframe",
        });
        $(".product_item").mixItUp();
        /*END VIDEO JS*/

        /* START VIDEO POPUP JS */
        $(".magnific_popup").magnificPopup({
            disableOn: 700,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
            disableOn: 300,
        });

        /*START PARTNER LOGO*/
        $(".partner").owlCarousel({
            autoPlay: 2000, // Set AutoPlay to 3 seconds
            items: 4, // Number of items to show at once
            loop: true, // Enable looping
            autoplay: true, // Ensure autoplay is enabled
            autoplayTimeout: 2000, // Set timeout for autoplay
            autoplayHoverPause: true, // Pause autoplay on hover
            itemsDesktop: [1199, 3], // For desktop view
            itemsDesktopSmall: [979, 3], // For smaller desktop view
        });
        /*END PARTNER LOGO*/

        /*START TESTIMONIAL JS*/
        $("#testimonial-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 3],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsMobile: [650, 1],
            pagination: true,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: false,
        });
        /*END TESTIMONIAL JS*/

        /* START EVENT JS */
        $("#event-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 2],
            itemsMobile: [600, 1],
            pagination: false,
            navigation: true,
            navigationText: ["", ""],
            slideSpeed: 1000,
            autoPlay: false,
        });
        /* END EVENT JS */
    });

    /*START RANGE SLIDER*/
    var rangeSlider = function () {
        var slider = $(".range-slider"),
            range = $('.range-slider input[type="range"]'),
            value = $(".range-value");
        slider.each(function () {
            value.each(function () {
                var value = $(this).prev().attr("value");
                $(this).html(value);
            });
            range.on("input", function () {
                $(this).next(value).html(this.value);
            });
        });
    };
    rangeSlider();
    /*END RANGE SLIDER*/

    /*INITIATE PURE COUNTER*/
    new PureCounter();

    /*START WOW ANIMATION JS*/
    new WOW().init();
    /*END WOW ANIMATION JS*/
})(jQuery);
