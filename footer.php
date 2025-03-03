<?php
/**
 * The template for displaying the footer
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
                        <p><span class="footer-icon">📍</span> Genève, Suisse</p>
                        <p><span class="footer-icon">📞</span> <?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></p>
                        <p><span class="footer-icon">📩</span> <?php echo antispambot(get_theme_mod('contact_email', 'swissassist@gmail.com')); ?></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-links">
                        <h3>Liens rapides</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                                'menu_id'        => 'footer-menu',
                                'container_class' => 'footer-menu-container',
                                'depth'          => 1,
                            )
                        );
                        ?>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h3>Horaires</h3>
                        <p>Lundi - Vendredi: 8h - 18h</p>
                        <p>Samedi - Dimanche: Fermé</p>
                        
                        <div class="social-links">
                            <?php if (get_theme_mod('social_linkedin')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" class="social-icon linkedin">LinkedIn</a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_facebook')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" class="social-icon facebook">Facebook</a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_instagram')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" class="social-icon instagram">Instagram</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info">
                        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Tous droits réservés.</p>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>