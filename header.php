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
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-branding">
                        <?php
                        if ( has_custom_logo() ) :
                            the_custom_logo();
                        else :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/logo1.svg" alt="Logo de SwissAssist" class="logo-site">
                            <?php
                            $swissassist_description = get_bloginfo( 'description', 'display' );
                            if ( $swissassist_description || is_customize_preview() ) :
                                ?>
                                <p class="site-description"><?php echo $swissassist_description; ?></p>
                            <?php endif;
                        endif;
                        ?>
                    </div><!-- .site-branding -->
                </div>
                
                <div class="col-md-8">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span class="menu-icon"></span>
                        </button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container_class' => 'primary-menu-container',
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </div>
    </header><!-- #masthead -->