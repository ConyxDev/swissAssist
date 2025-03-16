<?php
/**
 * LemanAssist Theme Customizer
 *
 * @package lemanassist
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lemanassist_theme_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'lemanassist_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'lemanassist_customize_partial_blogdescription',
            )
        );
    }

    // Add theme options panel
    $wp_customize->add_panel('lemanassist_theme_options', array(
        'title'       => __('Options du thème', 'lemanassist'),
        'description' => __('Personnalisez votre site', 'lemanassist'),
        'priority'    => 130,
    ));

    // Add sections
    $wp_customize->add_section('lemanassist_general_options', array(
        'title'       => __('Options Générales', 'lemanassist'),
        'priority'    => 10,
        'panel'       => 'lemanassist_theme_options',
    ));

    $wp_customize->add_section('lemanassist_header_options', array(
        'title'       => __('En-tête', 'lemanassist'),
        'priority'    => 20,
        'panel'       => 'lemanassist_theme_options',
    ));

    $wp_customize->add_section('lemanassist_footer_options', array(
        'title'       => __('Pied de page', 'lemanassist'),
        'priority'    => 30,
        'panel'       => 'lemanassist_theme_options',
    ));

    $wp_customize->add_section('lemanassist_homepage_options', array(
        'title'       => __('Page d\'accueil', 'lemanassist'),
        'priority'    => 40,
        'panel'       => 'lemanassist_theme_options',
    ));

    $wp_customize->add_section('lemanassist_contact_options', array(
        'title'       => __('Informations de contact', 'lemanassist'),
        'priority'    => 50,
        'panel'       => 'lemanassist_theme_options',
    ));

    // General Options - Colors
    $wp_customize->add_setting('lemanassist_main_color', array(
        'default'           => '#3e5c6e',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lemanassist_main_color', array(
        'label'    => __('Couleur Principale', 'lemanassist'),
        'section'  => 'lemanassist_general_options',
        'settings' => 'lemanassist_main_color',
    )));

    $wp_customize->add_setting('lemanassist_accent_color', array(
        'default'           => '#c9a987',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lemanassist_accent_color', array(
        'label'    => __('Couleur d\'Accent', 'lemanassist'),
        'section'  => 'lemanassist_general_options',
        'settings' => 'lemanassist_accent_color',
    )));

    // Header Options - Contact Info
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '+41 XX XXX XX XX',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone', array(
        'label'    => __('Numéro de téléphone', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contact@lemanassist.ch',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'    => __('Adresse email', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'email',
    ));

    // Footer Options
    $wp_customize->add_setting('footer_copyright', array(
        'default'           => __('© 2025 LemanAssist. Tous droits réservés.', 'lemanassist'),
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('footer_copyright', array(
        'label'    => __('Texte copyright', 'lemanassist'),
        'section'  => 'lemanassist_footer_options',
        'type'     => 'textarea',
    ));

    // Social Media Links
    $wp_customize->add_setting('social_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_facebook', array(
        'label'    => __('URL Facebook', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('social_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_linkedin', array(
        'label'    => __('URL LinkedIn', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('social_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('social_instagram', array(
        'label'    => __('URL Instagram', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'url',
    ));

    // Homepage Sections Visibility
    $sections = lemanassist_front_page_section_options();
    
    foreach ($sections as $section_id => $section_title) {
        $wp_customize->add_setting('lemanassist_' . $section_id . '_visibility', array(
            'default'           => true,
            'sanitize_callback' => 'lemanassist_sanitize_checkbox',
        ));

        $wp_customize->add_control('lemanassist_' . $section_id . '_visibility', array(
            'label'    => $section_title,
            'section'  => 'lemanassist_homepage_options',
            'type'     => 'checkbox',
            'description' => __('Afficher cette section sur la page d\'accueil', 'lemanassist'),
        ));
    }

    // Hero Section
    $wp_customize->add_setting('hero_title', array(
        'default'           => __('Secrétaire Médicale Indépendante', 'lemanassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'    => __('Titre principal', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => __('Services de secrétariat médical et administratif sur Genève et à distance', 'lemanassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'    => __('Sous-titre', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_text', array(
        'default'           => __('Une secrétaire expérimentée au service de votre entreprise, spécialisée dans le secrétariat médical. Flexibilité – Professionnalisme – Réactivité', 'lemanassist'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_text', array(
        'label'    => __('Texte descriptif', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('hero_button_text', array(
        'default'           => __('Découvrir mes services', 'lemanassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_button_text', array(
        'label'    => __('Texte du bouton principal', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_button_url', array(
        'default'           => '#services',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_button_url', array(
        'label'    => __('URL du bouton principal', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'hero_image', array(
        'label'     => __('Image Hero', 'lemanassist'),
        'section'   => 'lemanassist_homepage_options',
        'mime_type' => 'image',
    )));

    // Video Background
    $wp_customize->add_setting('lemanassist_enable_video_background', array(
        'default'           => false,
        'sanitize_callback' => 'lemanassist_sanitize_checkbox',
    ));

    $wp_customize->add_control('lemanassist_enable_video_background', array(
        'label'    => __('Activer la vidéo d\'arrière-plan', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'checkbox',
    ));

    $wp_customize->add_setting('lemanassist_video_mp4', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('lemanassist_video_mp4', array(
        'label'    => __('URL de la vidéo (MP4)', 'lemanassist'),
        'section'  => 'lemanassist_homepage_options',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('lemanassist_video_overlay_opacity', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('lemanassist_video_overlay_opacity', array(
        'label'       => __('Opacité de l\'overlay (%)', 'lemanassist'),
        'description' => __('Ajustez l\'opacité de l\'overlay sur la vidéo (0-100)', 'lemanassist'),
        'section'     => 'lemanassist_homepage_options',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 100,
            'step' => 5,
        ),
    ));

    // Contact Form Settings
    $wp_customize->add_setting('contact_form_id', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('contact_form_id', array(
        'label'       => __('ID du formulaire Contact Form 7', 'lemanassist'),
        'description' => __('Laissez vide pour utiliser le formulaire par défaut.', 'lemanassist'),
        'section'     => 'lemanassist_contact_options',
        'type'        => 'text',
    ));

    // Business Hours
    $wp_customize->add_setting('business_hours', array(
        'default'           => __("Lundi - Vendredi: 8h - 18h\nSamedi - Dimanche: Fermé", 'lemanassist'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('business_hours', array(
        'label'    => __('Horaires d\'ouverture', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'textarea',
    ));

    // Location
    $wp_customize->add_setting('business_location', array(
        'default'           => __('Genève, Suisse', 'lemanassist'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('business_location', array(
        'label'    => __('Localisation', 'lemanassist'),
        'section'  => 'lemanassist_contact_options',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'lemanassist_theme_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function lemanassist_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function lemanassist_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lemanassist_customize_preview_js() {
    wp_enqueue_script('lemanassist-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'lemanassist_customize_preview_js');

/**
 * Sanitize checkbox values.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool
 */
function lemanassist_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}