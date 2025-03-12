<?php
/**
 * The footer for our modern one-page theme
 *
 * @package SwissAssist
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-info">
                        <h3><?php bloginfo( 'name' ); ?></h3>
                        <p>Assistante administrative indépendante à Genève</p>
                        <p><span class="footer-icon"><i class="fas fa-map-marker-alt"></i></span> Genève, Suisse</p>
                        <p><span class="footer-icon"><i class="fas fa-phone"></i></span> <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                        <p><span class="footer-icon"><i class="fas fa-envelope"></i></span> <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'contact@swissassist.ch')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'contact@swissassist.ch')); ?></a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-links">
                        <h3>Navigation rapide</h3>
                        <div class="footer-menu-container">
                            <ul>
                                <li><a href="#accueil">Accueil</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#avantages">Avantages</a></li>
                                <li><a href="#temoignages">Témoignages</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h3>Horaires</h3>
                        <p>Lundi - Vendredi: 8h - 18h</p>
                        <p>Samedi - Dimanche: Fermé</p>
                        
                        <div class="social-links">
                            <?php if (get_theme_mod('social_linkedin')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" class="social-icon" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_facebook')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" class="social-icon" aria-label="Facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_instagram')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" class="social-icon" aria-label="Instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info">
                        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Tous droits réservés. | <a class="footer-link" href="#">Mentions légales</a> | <a class="footer-link" href="#">Politique de confidentialité</a></p>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>