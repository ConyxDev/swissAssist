/**
 * LemanAssist - Script principal
 * Ce fichier contient toutes les fonctions JavaScript du thème
 * Version optimisée
 */

(function($) {
    'use strict';

    // Variables globales
    var $window = $(window),
        $body = $('body'),
        $header = $('.site-header'),
        $navMenu = $('.nav-menu'),
        $backToTop = $('#back-to-top'),
        $menuToggle = $('.menu-toggle'),
        $sections = $('section[id]');

    // Fonction principale d'initialisation
    function initialize() {
        // Ajouter la classe one-page-site au body
        $body.addClass('one-page-site');
        
        // Initialisation des accordéons FAQ
        initFaqAccordions();
        
        // Initialisation de la navigation one-page
        initOnePageNav();
        
        // Initialisation des événements
        initEvents();
        
        // Initialisation du formulaire
        initContactForm();
        
        // Initialiser les animations au scroll
        initScrollAnimations();
        
        // Initialisation des services en deux colonnes
        initServicesColumns();
        
        // Initialisation du contact en deux colonnes
        initContactColumns();
        
        // Déclencher un scroll initial pour définir les états corrects
        setTimeout(function() {
            handleScroll();
            
            // Initialiser la mise en page responsive
            handleResponsiveLayout();
        }, 200);
    }

    // Initialisation des animations au scroll
    function initScrollAnimations() {
        // Utiliser une solution simple basée sur la position de scroll
        $window.on('scroll', function() {
            $('.fade-in:not(.show)').each(function() {
                var $element = $(this);
                var elementTop = $element.offset().top;
                var viewportBottom = $window.scrollTop() + $window.height();
                
                if (viewportBottom > elementTop + 100) {
                    $element.addClass('show');
                }
            });
        });
        
        // Déclencher un scroll pour animer les éléments déjà visibles
        $window.trigger('scroll');
    }

    // Initialisation des accordéons FAQ
    function initFaqAccordions() {
        $('.faq-question').on('click', function() {
            var $faqItem = $(this).closest('.faq-item');
            var isActive = $faqItem.hasClass('active');
            
            // Fermer tous les autres items
            $('.faq-item').removeClass('active');
            
            if (!isActive) {
                $faqItem.addClass('active');
            }
        });
    }

    // Initialisation de la navigation one-page
    function initOnePageNav() {
        // Navigation smooth scroll pour les liens one-page
        $('a[href^="#"]').on('click', function(e) {
            var targetId = this.getAttribute('href');
            
            // Ne pas traiter les liens vides ou les ancres génériques
            if (targetId === '#' || targetId === '#/') {
                return;
            }
            
            var $target = $(targetId);
            
            if ($target.length) {
                e.preventDefault();
                
                var headerHeight = $header.outerHeight();
                
                $('html, body').animate({
                    scrollTop: $target.offset().top - headerHeight
                }, 800);
                
                // Fermer le menu mobile si ouvert
                if ($navMenu.hasClass('active')) {
                    $navMenu.removeClass('active');
                    $menuToggle.attr('aria-expanded', 'false');
                }
                
                // Ajouter la classe active au lien
                $navMenu.find('a').removeClass('active');
                $(this).addClass('active');
            }
        });
    }

    // Initialisation du formulaire de contact
    function initContactForm() {
        // Validation du formulaire
        $('.contact-form form').on('submit', function() {
            var valid = true;
            var $requiredFields = $(this).find('[required]');
            
            $requiredFields.each(function() {
                if (!$(this).val()) {
                    valid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
            
            return valid;
        });
        
        // Réinitialiser les erreurs au focus
        $('.contact-form form input, .contact-form form textarea, .contact-form form select').on('focus', function() {
            $(this).removeClass('is-invalid');
        });
        
        // Masquer les messages après 5 secondes
        if ($('.contact-success, .contact-error').length) {
            setTimeout(function() {
                $('.contact-success, .contact-error').fadeOut(500);
            }, 5000);
        }
    }

    // Initialisation des services en deux colonnes
    function initServicesColumns() {
        // Restructurer la section services si nécessaire
        if ($('.services-section .row').length) {
            // Ajouter des classes pour les animations et styles
            $('.services-section .service-card').each(function(index) {
                $(this).addClass('service-card-' + (index + 1));
            });
        }
    }

    // Initialisation du contact en deux colonnes
    function initContactColumns() {
        // Vérifier si la section contact a déjà la structure en deux colonnes
        if ($('.contact-wrapper').length) {
            // S'assurer que les animations fade-in fonctionnent correctement
            $('.contact-wrapper .fade-in').each(function(index) {
                $(this).addClass('fade-in-delay-' + index);
            });
        }
    }

    // Initialisation des événements
    function initEvents() {
        // Gestion des événements de scroll
        $window.on('scroll', handleScroll);
        
        // Gestion du menu toggle
        $menuToggle.on('click', toggleMenu);
        
        // Gestion du bouton retour en haut
        $backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 800);
        });
        
        // Gestion du redimensionnement de la fenêtre
        $window.on('resize', function() {
            // Réinitialiser le menu mobile sur les grands écrans
            if ($window.width() > 992 && $navMenu.hasClass('active')) {
                $navMenu.removeClass('active');
                $menuToggle.attr('aria-expanded', 'false');
            }
            
            // Réajuster les colonnes en mode responsive
            handleResponsiveLayout();
        });
    }

    // Gestion des mises en page responsives
    function handleResponsiveLayout() {
        // Ajuster les services en colonnes pour les écrans mobiles
        if ($window.width() < 768) {
            $('.service-card').addClass('mobile-view');
        } else {
            $('.service-card').removeClass('mobile-view');
        }
        
        // Ajuster le layout de contact pour les écrans mobiles
        if ($window.width() < 992) {
            $('.contact-wrapper').addClass('mobile-view');
        } else {
            $('.contact-wrapper').removeClass('mobile-view');
        }
    }

    // Gestion des événements de scroll
    function handleScroll() {
        var scrollTop = $window.scrollTop();
        
        // Fixed header on scroll
        if (scrollTop > 100) {
            $header.addClass('scrolled');
        } else {
            $header.removeClass('scrolled');
        }
        
        // Back to top button visibility
        if (scrollTop > 500) {
            $backToTop.addClass('active');
        } else {
            $backToTop.removeClass('active');
        }
        
        // Active menu items on scroll
        if ($sections.length) {
            $sections.each(function() {
                var currentSection = $(this);
                
                if (!currentSection.length) return;
                
                try {
                    var sectionTop = currentSection.offset().top - $header.outerHeight() - 10;
                    var sectionBottom = sectionTop + currentSection.outerHeight();
                    
                    if (scrollTop >= sectionTop && scrollTop < sectionBottom) {
                        var currentId = currentSection.attr('id');
                        
                        if (currentId) {
                            $navMenu.find('a').removeClass('active');
                            $navMenu.find('a[href="#' + currentId + '"]').addClass('active');
                        }
                    }
                } catch (e) {
                    console.error("Erreur lors du traitement de la section :", e);
                }
            });
        }
    }

    // Toggle du menu mobile
    function toggleMenu() {
        $navMenu.toggleClass('active');
        var isExpanded = $menuToggle.attr('aria-expanded') === 'true';
        $menuToggle.attr('aria-expanded', !isExpanded);
    }

    // Document ready
    $(document).ready(function() {
        // Attendre que tout soit bien chargé avant d'initialiser
        setTimeout(function() {
            initialize();
        }, 200);
    });

})(jQuery);

// Ajouter ce code à la fin de votre fichier main.js ou dans une balise script dans footer.php
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour gérer l'effet parallaxe avancé
    function handleParallax() {
        const parallaxElements = document.querySelectorAll('.workspace-image, .workspace-image-2');
        
        // Ne pas appliquer le parallaxe avancé sur mobile
        if (window.innerWidth <= 768) return;
        
        parallaxElements.forEach(element => {
            // Calculer la position de défilement
            const scrollPosition = window.pageYOffset;
            const elementPosition = element.offsetTop;
            const distance = scrollPosition - elementPosition;
            
            // Calculer la position de parallaxe (ajustez la valeur 0.5 pour modifier la vitesse)
            const parallaxOffset = distance * 0.3;
            
            // Appliquer le décalage uniquement si l'élément est visible
            if (scrollPosition + window.innerHeight > elementPosition && 
                scrollPosition < elementPosition + element.offsetHeight) {
                element.style.backgroundPositionY = `calc(50% + ${parallaxOffset}px)`;
            }
        });
    }
    
    // Écouter l'événement de défilement
    window.addEventListener('scroll', handleParallax);
    
    // Initialiser pour la position de départ
    handleParallax();
});