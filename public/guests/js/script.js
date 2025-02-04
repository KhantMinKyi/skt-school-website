/*
Author       : theme_ocean 
Template Name: Penn - Education HTML Template
Version      : 1.0
*/
(function ($) {
    "use strict";

    /*INITIATE PURE COUNTER*/
    new PureCounter();

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
})(jQuery);
