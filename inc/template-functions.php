<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package SwissAssist
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function swissassist_body_classes($classes) {
    // Add a class if there is a custom header.
    if (has_header_image()) {
        $classes[] = 'has-header-image';
    }

    // Add class if sidebar is used.
    if (is_active_sidebar('sidebar-1') && !is_page_template('page-templates/full-width.php')) {
        $classes[] = 'has-sidebar';
    } else {
        $classes[] = 'no-sidebar';
    }

    // Add class for the front page.
    if (is_front_page() && !is_home()) {
        $classes[] = 'front-page';
    }

    // Add class for specific page templates
    if (is_page_template('page-templates/services-page.php')) {
        $classes[] = 'page-services';
    } elseif (is_page_template('page-templates/contact-page.php')) {
        $classes[] = 'page-contact';
    } elseif (is_page_template('page-templates/about-page.php')) {
        $classes[] = 'page-about';
    }

    return $classes;
}
add_filter('body_class', 'swissassist_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function swissassist_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'swissassist_pingback_header');

/**
 * Get featured services for front page.
 *
 * @param int $count Number of services to get.
 * @return WP_Query
 */
function swissassist_get_featured_services($count = 3) {
    $args = array(
        'post_type'      => 'service',
        'posts_per_page' => $count,
        'meta_key'       => 'featured_service',
        'meta_value'     => '1',
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    );
    
    return new WP_Query($args);
}

/**
 * Get recent posts for front page.
 *
 * @param int $count Number of posts to get.
 * @return WP_Query
 */
function swissassist_get_recent_posts($count = 3) {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
    );
    
    return new WP_Query($args);
}

/**
 * Implement read more link for excerpts
 */
function swissassist_read_more_link() {
    return '<a href="' . esc_url(get_permalink()) . '" class="more-link">' . __('Lire la suite', 'swissassist') . ' <i class="fas fa-angle-right"></i></a>';
}
add_filter('excerpt_more', 'swissassist_read_more_link');

// Fonction supprimée pour éviter la duplication
// La fonction swissassist_custom_excerpt_length() est désormais uniquement dans functions.php

/**
 * Add option to Customizer to hide/show sections on front page
 */
function swissassist_front_page_section_options() {
    return array(
        'services' => esc_html__('Services Section', 'swissassist'),
        'about' => esc_html__('About Section', 'swissassist'),
        'testimonials' => esc_html__('Testimonials Section', 'swissassist'),
        'blog' => esc_html__('Blog Section', 'swissassist'),
        'contact' => esc_html__('Contact Section', 'swissassist'),
    );
}

/**
 * Get the value of front page section visibility
 */
function swissassist_front_page_section_visibility($section) {
    $visibility = get_theme_mod('swissassist_' . $section . '_visibility', true);
    return $visibility;
}

/**
 * Format phone number for display and tel: links
 */
function swissassist_format_phone($phone) {
    // Remove any non-numeric characters
    $digits = preg_replace('/[^0-9]/', '', $phone);
    
    if (empty($digits)) {
        return '';
    }
    
    // International format for Switzerland
    if (strlen($digits) == 10 && substr($digits, 0, 1) == '0') {
        $digits = '+41' . substr($digits, 1);
    }
    
    return $digits;
}

/**
 * Format phone number for display
 */
function swissassist_format_phone_display($phone) {
    // Remove any non-numeric characters
    $digits = preg_replace('/[^0-9]/', '', $phone);
    
    if (empty($digits)) {
        return '';
    }
    
    // Format for display
    if (strlen($digits) == 10 && substr($digits, 0, 1) == '0') {
        return preg_replace('/(\d{3})(\d{3})(\d{2})(\d{2})/', '$1 $2 $3 $4', $digits);
    } elseif (strlen($digits) == 9) {
        return preg_replace('/(\d{2})(\d{3})(\d{2})(\d{2})/', '+41 $1 $2 $3 $4', $digits);
    }
    
    return $phone;
}

/**
 * Custom styles for visual editor to match front end
 */
function swissassist_add_editor_styles() {
    add_editor_style('assets/css/editor-style.css');
}
add_action('admin_init', 'swissassist_add_editor_styles');

/**
 * Add custom styles based on customizer options
 */
function swissassist_customizer_css() {
    $primary_color = get_theme_mod('swissassist_primary_color', '#4e7df1');
    $secondary_color = get_theme_mod('swissassist_secondary_color', '#2c3e50');
    
    $css = '
        :root {
            --primary-color: ' . esc_attr($primary_color) . ';
            --secondary-color: ' . esc_attr($secondary_color) . ';
        }
    ';
    
    wp_add_inline_style('swissassist-style', $css);
}
add_action('wp_enqueue_scripts', 'swissassist_customizer_css', 20);

// Fonction customize_preview_js supprimée pour éviter la duplication
// La fonction swissassist_customize_preview_js() est désormais uniquement dans customizer.php

function swissassist_video_background_css() {
    $overlay_opacity = get_theme_mod('swissassist_video_overlay_opacity', 50);
    $opacity_decimal = $overlay_opacity / 100;
    
    $css = '
        .video-overlay {
            background-color: rgba(0, 0, 0, ' . esc_attr($opacity_decimal) . ');
        }
    ';
    
    wp_add_inline_style('swissassist-style', $css);
}
add_action('wp_enqueue_scripts', 'swissassist_video_background_css', 20);