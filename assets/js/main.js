/**
 * Main JavaScript file for SwissAssist modern theme
 */
(function($) {
    'use strict';

    // Document Ready
    $(document).ready(function() {
        
        // Mobile Menu Toggle
        $('.menu-toggle').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $('.nav-menu').toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        // Header scroll effect
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.header-main').addClass('scrolled');
            } else {
                $('.header-main').removeClass('scrolled');
            }
            
            // Activate animations when elements come into view
            activateAnimations();
        });

        // Smooth Scrolling for Anchor Links
        $('a[href*="#"]:not([href="#"])').on('click', function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    var offset = $('.header-main').outerHeight() + 20;
                    
                    // Close mobile menu if open
                    if ($('.nav-menu').hasClass('active')) {
                        $('.menu-toggle').removeClass('active');
                        $('.nav-menu').removeClass('active');
                        $('body').removeClass('menu-open');
                    }
                    
                    $('html, body').animate({
                        scrollTop: target.offset().top - offset
                    }, 800, 'easeInOutExpo');
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
            $('html, body').animate({scrollTop: 0}, 800, 'easeInOutExpo');
        });

        // Active link state on scroll
        $(window).on('scroll', function() {
            var scrollPosition = $(this).scrollTop();
            
            // Add offset for header height
            var offset = $('.header-main').outerHeight() + 20;
            
            // Check each section
            $('section[id]').each(function() {
                var targetTop = $(this).offset().top - offset;
                var targetBottom = targetTop + $(this).outerHeight();
                
                if (scrollPosition >= targetTop && scrollPosition <= targetBottom) {
                    $('.nav-menu .menu-item a').removeClass('active');
                    $('.nav-menu .menu-item a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

        // Form Validation
        $('.contact-form form').on('submit', function(e) {
            var formValid = true;
            
            $(this).find('[required]').each(function() {
                if ($(this).val() === '') {
                    formValid = false;
                    $(this).addClass('error');
                    $(this).parent().addClass('has-error');
                } else {
                    $(this).removeClass('error');
                    $(this).parent().removeClass('has-error');
                }
            });
            
            if (!formValid) {
                e.preventDefault();
                
                // Smooth scroll to first error
                var firstError = $('.error:first');
                if (firstError.length) {
                    $('html, body').animate({
                        scrollTop: firstError.offset().top - 100
                    }, 500);
                }
                
                // Display error message if needed
                if ($('.form-error-message').length) {
                    $('.form-error-message').fadeIn();
                }
            }
        });

        // Remove error class on input focus
        $('.contact-form .form-control').on('focus', function() {
            $(this).removeClass('error');
            $(this).parent().removeClass('has-error');
            $('.form-error-message').fadeOut();
        });

        // Initialize animations
        activateAnimations();
        
        // Handle animations on scroll
        function activateAnimations() {
            $('.fade-in').each(function() {
                var elementTop = $(this).offset().top;
                var elementHeight = $(this).outerHeight();
                var windowHeight = $(window).height();
                var scrollY = $(window).scrollTop();
                
                // When element is 20% visible
                if (scrollY > (elementTop - windowHeight + elementHeight * 0.2)) {
                    $(this).addClass('animated');
                }
            });
        }
        
        // Add easing function if not available
        if (typeof $.easing.easeInOutExpo !== 'function') {
            $.easing.easeInOutExpo = function(x, t, b, c, d) {
                if (t == 0) return b;
                if (t == d) return b + c;
                if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
            };
        }
    });

    // Window Load
    $(window).on('load', function() {
        // Hide Preloader if exists
        if ($('.preloader').length) {
            $('.preloader').fadeOut(500);
        }
        
        // Trigger scroll to activate animations immediately
        $(window).scroll();
    });
    
})(jQuery);