<?php
/**
 * The header for our modern one-page theme
 *
 * @package lemanassist
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lemanassist' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-info">
                            <div class="header-info-item">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a>
                            </div>
                            <div class="header-info-item">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'contact@lemanassist.ch')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'contact@lemanassist.ch')); ?></a>
                            </div>
                            <div class="header-info-item">
                                <i class="fa-solid fa-location-dot"></i>
                                Genève, Suisse
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="header-social">
                            <?php if (get_theme_mod('social_linkedin')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" class="social-link" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_facebook')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" class="social-link" aria-label="Facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (get_theme_mod('social_instagram')) : ?>
                                <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" class="social-link" aria-label="Instagram">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="site-branding">
                            <?php
                            if (has_custom_logo()) :
                                the_custom_logo();
                            else :
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                    
                    <div class="col-md-9">
                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <ul id="primary-menu" class="nav-menu">
                                <li class="menu-item"><a href="#accueil">Accueil</a></li>
                                <li class="menu-item"><a href="#services">Services</a></li>
                                <li class="menu-item"><a href="#tarifs">Tarifs</a></li>
                                <li class="menu-item"><a href="#apropos">À propos</a></li>
                                <li class="menu-item"><a href="#faq">FAQ</a></li>
                                <li class="menu-item"><a href="#contact">Contact</a></li>
                            </ul>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->