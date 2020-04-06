(function($) {
    "use strict";
    jQuery(document).ready(function($) {
        /*-------------------------------
        PRICE CART
        ---------------------------------*/
        $('.price-cart').on("click", function() {
            $(this).find(".cart-details").stop(true).slideDown();
        });
        $('.price-cart').on("mouseleave", function() {
            $(this).find(".cart-details").stop(true).slideUp();
        });
        /*-------------------------------
        LOGIN BUTTON
        ---------------------------------*/
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        });
        /*-------------------------------
        STELLAR ACTIVATION
        ---------------------------------*/
        if ($.fn.stellar) {
            $(window).stellar({
                responsive: true,
                positionProperty: 'position',
                horizontalScrolling: false
            });
        }
        /*-------------------------------
        TAB ACTIVATION
        ---------------------------------*/
        $('#myTabs a').on("click", function(e) {
            e.preventDefault()
            $(this).tab('show')
        });
        /*-------------------------------
        OWL CLIENT AREA
        ---------------------------------*/
        $(".client-wrap").owlCarousel({
            autoplay: true, //Set autoplay to 3 seconds
            items: 1,
            loop: true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
        /*-------------------------------
        OWL CLIENT AREA
        ---------------------------------*/
        $(".feature-wrap").owlCarousel({
            autoplay: true, //Set autoplay to 3 seconds
            items: 1,
            dots: true,
        });
        /*-------------------------------
        OWL CLIENT AREA
        ---------------------------------*/
        $(".choose-wrap").owlCarousel({
            autoplay: true, //Set autoplay to 3 seconds
            nav: true,
            items: 3,
            stagePadding: 0,
            loop: true,
            dots: false,
            margin: 30,
            responsiveClass: true,
            navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true,
                },
                1000: {
                    items: 3,
                }
            },
        });
        /*-------------------------------
        OWL FEATURE AREA
        ---------------------------------*/
        $(".ab-feature-wrap").owlCarousel({
            autoplay: true, //Set autoplay to 3 seconds
            responsiveClass: true,
            margin: 35,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 4,
                },
                1000: {
                    items: 5,
                }
            },
        });
        /*-------------------------------
        OWL RELATED AREA
        ---------------------------------*/
        $(".related-wrap").owlCarousel({
            center: true,
            responsiveClass: true,
            loop: true,
            margin: 30,
            nav: true,
            navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            },
        });
        /*-------------------------------
        NEWS TICKER
        ---------------------------------*/
        $.simpleTicker($('#sticker-item'), {
            speed: 1000,
            delay: 3000,
            easing: 'swing',
            effectType: 'roll'
        });

        /*----------------------------
      10. cart-plus-minus-button
    ------------------------------ */
        $(".cart-count")
        $(".qty-changer").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find("input").val(newVal);
        });
        /*-------------------------------
        CART REMOVE
        ---------------------------------*/
        $('.cart-remove').on('click', function() {
            $(this).parents('.single-cart').hide(100);
        });
        /*-------------------------------
        NEW-PRODUCT SECTION ISOTOPE
        ---------------------------------*/
        $('.product-container').isotope({
            itemSelector: '.single-new',
            layoutMode: 'fitRows',
        });
        /*-------------------------------
        PORTFOLIO ISOTOPE CLICK FUNC
        ---------------------------------*/
        $('.n-product-list li').on("click", function(event) {
            $(".n-product-list li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".product-container").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
        /*-------------------------------
            MOBILE MENU
            ---------------------------------*/
        $('.mobile-menu nav').meanmenu({
            meanScreenWidth: "980"
        });

    });
    jQuery(window).on("load", function(e) {
        /*-------------------------------
        COMMING SOON
        ---------------------------------*/
        $('.coming-countown').syotimer({
            year: 2020,
            month: 12,
            day: 16,
            hour: 20,
            minute: 30,
            effectType: 'opacity'
        });
    });
})(jQuery);
