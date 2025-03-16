<?php
/**
 * The footer for our modern one-page theme
 *
 * @package lemanassist
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer-info-column">
                    <div class="footer-info">
                        <h3><?php bloginfo( 'name' ); ?></h3>
                        <p>Secrétaire administrative et médicale indépendante à Genève</p>
                        <p><span class="footer-icon"><i class="fas fa-map-marker-alt"></i></span> Genève, Suisse</p>
                        <p><span class="footer-icon"><i class="fas fa-phone"></i></span> <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                        <p><span class="footer-icon"><i class="fas fa-envelope"></i></span> <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'contact@lemanassist.ch')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'contact@lemanassist.ch')); ?></a></p>
                    </div>
                    
                    <div class="footer-social">
                        <?php if (get_theme_mod('social_linkedin')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" class="footer-social-link" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('social_facebook')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" class="footer-social-link" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (get_theme_mod('social_instagram')) : ?>
                            <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" class="footer-social-link" aria-label="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="footer-links-column">
                    <div class="footer-links">
                        <h3>Navigation rapide</h3>
                        <ul>
                            <li><a href="#accueil"><i class="fas fa-angle-right"></i> Accueil</a></li>
                            <li><a href="#services"><i class="fas fa-angle-right"></i> Services</a></li>
                            <li><a href="#avantages"><i class="fas fa-angle-right"></i> Avantages</a></li>
                            <li><a href="#temoignages"><i class="fas fa-angle-right"></i> Témoignages</a></li>
                            <li><a href="#tarifs"><i class="fas fa-angle-right"></i> Tarifs</a></li>
                            <li><a href="#apropos"><i class="fas fa-angle-right"></i> À propos</a></li>
                            <li><a href="#faq"><i class="fas fa-angle-right"></i> FAQ</a></li>
                            <li><a href="#contact"><i class="fas fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="footer-contact-column">
                    <div class="footer-contact">
                        <h3>Horaires</h3>
                        <p>Lundi - Vendredi: 8h - 18h</p>
                        <p>Samedi - Dimanche: Fermé</p>
                    </div>
                    
                    <div class="footer-newsletter">
                        <h3>Restez informé</h3>
                        <p>Inscrivez-vous à ma newsletter pour recevoir des conseils et astuces pour optimiser votre organisation administrative.</p>
                        <form class="footer-newsletter-form">
                            <input type="email" class="footer-newsletter-input" placeholder="Votre email">
                            <button type="submit" class="footer-newsletter-button"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Tous droits réservés. | <a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a></p>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<!-- Bouton retour en haut -->
<a href="#" id="back-to-top" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>

<?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Script pour la navigation fixe
    function handleScroll() {
        const header = document.querySelector('.site-header');
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Script pour le bouton retour en haut
        const backToTopButton = document.getElementById('back-to-top');
        if (window.scrollY > 500) {
            backToTopButton.classList.add('active');
        } else {
            backToTopButton.classList.remove('active');
        }
    }
    
    window.addEventListener('scroll', handleScroll);

    // Script pour le menu mobile
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            menuToggle.setAttribute('aria-expanded', 
                menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
            );
        });
    }

    // Script pour les éléments d'animation au scroll
    if ('IntersectionObserver' in window) {
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.2
        });
        
        fadeElements.forEach(element => {
            fadeInObserver.observe(element);
        });
    } else {
        // Fallback pour les navigateurs qui ne supportent pas IntersectionObserver
        document.querySelectorAll('.fade-in').forEach(element => {
            element.classList.add('show');
        });
    }

    // Script pour les accordéons FAQ
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        if (question) {
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Fermer tous les autres items
                faqItems.forEach(faqItem => {
                    faqItem.classList.remove('active');
                });
                
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });

    // Script pour le bouton retour en haut
    const backToTopButton = document.getElementById('back-to-top');
    
    if (backToTopButton) {
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
    
    // Navigation one-page smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            if (targetId.length > 1) {
                e.preventDefault();
                
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Fermer le menu mobile si ouvert
                    if (navMenu && navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        menuToggle.setAttribute('aria-expanded', 'false');
                    }
                }
            }
        });
    });
});
</script>

</body>
</html>