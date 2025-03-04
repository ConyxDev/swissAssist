/**
 * Main JavaScript file for SwissAssist theme
 */
(function($) {
    'use strict';

    // Document Ready
    $(document).ready(function() {
        
        // Mobile Menu Toggle
        $('.menu-toggle').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $('.main-navigation').toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 50) {
                $('.header-main').addClass('scrolled');
            } else {
                $('.header-main').removeClass('scrolled');
            }
        });

        // Smooth Scrolling for Anchor Links
        $('a[href*="#"]:not([href="#"])').on('click', function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                    return false;
                }
            }
        });

        // Back to Top Button
        var backToTopBtn = $('#back-to-top');
        
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                backToTopBtn.addClass('show');
            } else {
                backToTopBtn.removeClass('show');
            }
        });
        
        backToTopBtn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 800);
        });

        // Testimonials Slider
        if ($('.testimonials-slider').length) {
            $('.testimonials-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false
            });
        }

        // Services Accordion
        $('.faq-accordion .accordion-header').on('click', function() {
            $(this).toggleClass('active');
            $(this).next('.accordion-content').slideToggle(300);
        });

        // Form Validation
        $('.contact-form').on('submit', function(e) {
            var formValid = true;
            
            $(this).find('.required').each(function() {
                if ($(this).val() === '') {
                    formValid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            
            if (!formValid) {
                e.preventDefault();
                $('.form-error-message').fadeIn();
            }
        });

        // Remove error class on input focus
        $('.contact-form .form-control').on('focus', function() {
            $(this).removeClass('error');
            $('.form-error-message').fadeOut();
        });

        // Animation on Scroll
        if ($('.animate-on-scroll').length) {
            $(window).on('scroll', function() {
                $('.animate-on-scroll').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementHeight = $(this).outerHeight();
                    var windowHeight = $(window).height();
                    var scrollY = $(window).scrollTop();
                    
                    if (scrollY > (elementTop - windowHeight + elementHeight / 4)) {
                        $(this).addClass('animated');
                    }
                });
            }).scroll();
        }
    });

    // Window Load
    $(window).on('load', function() {
        // Hide Preloader
        $('.preloader').fadeOut(500);
    });
    
})(jQuery);