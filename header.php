<?php
/**
 * The header for our theme
 *
 * @package SwissAssist
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'swissassist' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="header-contact-info">
                    <span class="header-info-item">
                        <i class="fa-solid fa-phone-alt"></i>
                        <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a>
                    </span>
                    <span class="header-info-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'contact@swissassist.ch')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'contact@swissassist.ch')); ?></a>
                    </span>
                    <span class="header-info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        Genève, Suisse romande
                    </span>
                </div>
                <div class="header-social">
                    <?php if (get_theme_mod('social_linkedin')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" class="social-icon-small">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if (get_theme_mod('social_facebook')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" class="social-icon-small">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                    
                    <?php if (get_theme_mod('social_instagram')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" class="social-icon-small">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div class="header-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="site-branding">
                            <?php
                            if ( has_custom_logo() ) :
                                the_custom_logo();
                            else :
                                ?>
                                <div class="logo-wrapper">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    
                                    </a>
                                </div>
                                <div class="title-desc d-flex align-items-center flex-row gap-3">
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/logo1.svg" alt="Logo de SwissAssist" class="logo-site">
                                    <?php
                                    $swissassist_description = get_bloginfo( 'description', 'display' );
                                    if ( $swissassist_description || is_customize_preview() ) :
                                        ?>
                                        <p class="site-description"><?php echo $swissassist_description; ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                    
                    <div class="col-md-9">
                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'container_class' => 'primary-menu-container',
                                    'menu_class'     => 'nav-menu',
                                )
                            );
                            ?>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->