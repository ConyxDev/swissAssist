<?php
/**
 * SwissAssist Theme Customizer
 *
 * @package SwissAssist
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function swissassist_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'swissassist_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'swissassist_customize_partial_blogdescription',
            )
        );
    }

    // Add theme options panel
    $wp_customize->add_panel('swissassist_theme_options', array(
        'title'       => __('Options du thème', 'swissassist'),
        'description' => __('Personnalisez votre site', 'swissassist'),
        'priority'    => 130,
    ));

    // Add sections
    $wp_customize->add_section('swissassist_general_options', array(
        'title'       => __('Options Générales', 'swissassist'),
        'priority'    => 10,
        'panel'       => 'swissassist_theme_options',
    ));

    $wp_customize->add_section('swissassist_header_options', array(
        'title'       => __('En-tête', 'swissassist'),
        'priority'    => 20,
        'panel'       => 'swissassist_theme_options',
    ));

    $wp_customize->add_section('swissassist_footer_options', array(
        'title'       => __('Pied de page', 'swissassist'),
        'priority'    => 30,
        'panel'       => 'swissassist_theme_options',
    ));

    $wp_customize->add_section('swissassist_homepage_options', array(
        'title'       => __('Page d\'accueil', 'swissassist'),
        'priority'    => 40,
        'panel'       => 'swissassist_theme_options',
    ));

    $wp_customize->add_section('swissassist_contact_options', array(
        'title'       => __('Informations de contact', 'swissassist'),
        'priority'    => 50,
        'panel'       => 'swissassist_theme_options',
    ));

    // General Options
    $wp_customize->add_setting('swissassist_primary_color', array(
        'default'           => '#4e7df1',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'swissassist_primary_color', array(
        'label'    => __('Couleur Principale', 'swissassist'),
        'section'  => 'swissassist_general_options',
        'settings' => 'swissassist_primary_color',
    )));

    $wp_customize->add_setting('swissassist_secondary_color', array(
        'default'           => '#2c3e50',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'swissassist_secondary_color', array(
        'label'    => __('Couleur Secondaire', 'swissassist'),
        'section'  => 'swissassist_general_options',
        'settings' => 'swissassist_secondary_color',
    )));

    // Header Options
    $wp_customize->add_setting('swissassist_header_phone', array(
        'default'           => '+41 76 123 45 67',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_header_phone', array(
        'label'    => __('Numéro de téléphone', 'swissassist'),
        'section'  => 'swissassist_header_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('swissassist_header_email', array(
        'default'           => 'contact@swissassist.ch',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('swissassist_header_email', array(
        'label'    => __('Adresse e-mail', 'swissassist'),
        'section'  => 'swissassist_header_options',
        'type'     => 'email',
    ));

    // Footer Options
    $wp_customize->add_setting('swissassist_footer_text', array(
        'default'           => __('© 2025 SwissAssist. Tous droits réservés.', 'swissassist'),
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('swissassist_footer_text', array(
        'label'    => __('Texte du pied de page', 'swissassist'),
        'section'  => 'swissassist_footer_options',
        'type'     => 'textarea',
    ));

    // Social Media Links
    $wp_customize->add_setting('swissassist_facebook_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('swissassist_facebook_url', array(
        'label'    => __('URL Facebook', 'swissassist'),
        'section'  => 'swissassist_footer_options',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('swissassist_linkedin_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('swissassist_linkedin_url', array(
        'label'    => __('URL LinkedIn', 'swissassist'),
        'section'  => 'swissassist_footer_options',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('swissassist_instagram_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('swissassist_instagram_url', array(
        'label'    => __('URL Instagram', 'swissassist'),
        'section'  => 'swissassist_footer_options',
        'type'     => 'url',
    ));

    // Homepage Options
    $sections = swissassist_front_page_section_options();
    
    foreach ($sections as $section_id => $section_title) {
        $wp_customize->add_setting('swissassist_' . $section_id . '_visibility', array(
            'default'           => true,
            'sanitize_callback' => 'swissassist_sanitize_checkbox',
        ));

        $wp_customize->add_control('swissassist_' . $section_id . '_visibility', array(
            'label'    => $section_title,
            'section'  => 'swissassist_homepage_options',
            'type'     => 'checkbox',
            'description' => __('Afficher cette section sur la page d\'accueil', 'swissassist'),
        ));
    }

    // Hero Section
    $wp_customize->add_setting('swissassist_hero_title', array(
        'default'           => __('Assistante Administrative Indépendante à Genève', 'swissassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_hero_title', array(
        'label'    => __('Titre principal', 'swissassist'),
        'section'  => 'swissassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('swissassist_hero_subtitle', array(
        'default'           => __('Des solutions administratives sur mesure pour votre entreprise', 'swissassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_hero_subtitle', array(
        'label'    => __('Sous-titre', 'swissassist'),
        'section'  => 'swissassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('swissassist_hero_button_text', array(
        'default'           => __('Découvrir mes services', 'swissassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_hero_button_text', array(
        'label'    => __('Texte du bouton', 'swissassist'),
        'section'  => 'swissassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('swissassist_hero_button_url', array(
        'default'           => '#services',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('swissassist_hero_button_url', array(
        'label'    => __('URL du bouton', 'swissassist'),
        'section'  => 'swissassist_homepage_options',
        'type'     => 'url',
    ));

    // Contact Information
    $wp_customize->add_setting('swissassist_contact_address', array(
        'default'           => __('Rue du Rhône 14, 1204 Genève, Suisse', 'swissassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_contact_address', array(
        'label'    => __('Adresse', 'swissassist'),
        'section'  => 'swissassist_contact_options',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('swissassist_contact_phone', array(
        'default'           => '+41 76 123 45 67',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_contact_phone', array(
        'label'    => __('Téléphone', 'swissassist'),
        'section'  => 'swissassist_contact_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('swissassist_contact_email', array(
        'default'           => 'contact@swissassist.ch',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('swissassist_contact_email', array(
        'label'    => __('Email', 'swissassist'),
        'section'  => 'swissassist_contact_options',
        'type'     => 'email',
    ));

    $wp_customize->add_setting('swissassist_contact_hours', array(
        'default'           => __('Lundi - Vendredi: 9h à 18h', 'swissassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('swissassist_contact_hours', array(
        'label'    => __('Horaires', 'swissassist'),
        'section'  => 'swissassist_contact_options',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'swissassist_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function swissassist_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function swissassist_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function swissassist_customize_preview_js() {
    wp_enqueue_script('swissassist-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'swissassist_customize_preview_js');

/**
 * Sanitize checkbox values.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool
 */
function swissassist_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}

function swissassist_video_background_customize_register($wp_customize) {
    // Créer une nouvelle section pour la vidéo d'arrière-plan
    $wp_customize->add_section('swissassist_video_background', array(
        'title'       => __('Vidéo d\'arrière-plan', 'swissassist'),
        'description' => __('Paramètres pour la vidéo d\'arrière-plan de la section hero', 'swissassist'),
        'priority'    => 30,
        'panel'       => 'swissassist_theme_options',
    ));

    // Activer/désactiver la vidéo d'arrière-plan
    $wp_customize->add_setting('swissassist_enable_video_background', array(
        'default'           => false,
        'sanitize_callback' => 'swissassist_sanitize_checkbox',
    ));

    $wp_customize->add_control('swissassist_enable_video_background', array(
        'label'       => __('Activer la vidéo d\'arrière-plan', 'swissassist'),
        'section'     => 'swissassist_video_background',
        'type'        => 'checkbox',
    ));

    // URL de la vidéo MP4
    $wp_customize->add_setting('swissassist_video_mp4', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('swissassist_video_mp4', array(
        'label'       => __('URL de la vidéo MP4', 'swissassist'),
        'description' => __('Entrez l\'URL de votre fichier vidéo MP4', 'swissassist'),
        'section'     => 'swissassist_video_background',
        'type'        => 'url',
    ));

    // URL de la vidéo WebM (format alternatif)
    $wp_customize->add_setting('swissassist_video_webm', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('swissassist_video_webm', array(
        'label'       => __('URL de la vidéo WebM (optionnel)', 'swissassist'),
        'description' => __('Entrez l\'URL de votre fichier vidéo WebM pour une meilleure compatibilité', 'swissassist'),
        'section'     => 'swissassist_video_background',
        'type'        => 'url',
    ));

    // Opacité de l'overlay
    $wp_customize->add_setting('swissassist_video_overlay_opacity', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('swissassist_video_overlay_opacity', array(
        'label'       => __('Opacité de l\'overlay (%)', 'swissassist'),
        'description' => __('Ajustez l\'opacité de l\'overlay sur la vidéo (0-100)', 'swissassist'),
        'section'     => 'swissassist_video_background',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 100,
            'step' => 5,
        ),
    ));
}
add_action('customize_register', 'swissassist_video_background_customize_register');