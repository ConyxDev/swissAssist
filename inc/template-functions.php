<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package lemanassist
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lemanassist_body_classes($classes) {
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

    // Add class for one-page
    if (is_front_page()) {
        $classes[] = 'one-page-site';
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
add_filter('body_class', 'lemanassist_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function lemanassist_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'lemanassist_pingback_header');

/**
 * Get featured services for front page.
 *
 * @param int $count Number of services to get.
 * @return WP_Query
 */
function lemanassist_get_featured_services($count = 4) {
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
 * Implement read more link for excerpts
 */
function lemanassist_read_more_link() {
    return '<a href="' . esc_url(get_permalink()) . '" class="btn btn-primary btn-sm">' . __('Lire la suite', 'lemanassist') . ' <i class="fas fa-arrow-right"></i></a>';
}
add_filter('excerpt_more', 'lemanassist_read_more_link');

/**
 * Add option to Customizer to hide/show sections on front page
 */
function lemanassist_front_page_section_options() {
    return array(
        'services' => esc_html__('Section Services', 'lemanassist'),
        'advantages' => esc_html__('Section Avantages', 'lemanassist'),
        'testimonials' => esc_html__('Section Témoignages', 'lemanassist'),
        'pricing' => esc_html__('Section Tarifs', 'lemanassist'),
        'about' => esc_html__('Section À propos', 'lemanassist'),
        'faq' => esc_html__('Section FAQ', 'lemanassist'),
        'contact' => esc_html__('Section Contact', 'lemanassist'),
    );
}

/**
 * Get the value of front page section visibility
 */
function lemanassist_front_page_section_visibility($section) {
    $visibility = get_theme_mod('lemanassist_' . $section . '_visibility', true);
    return $visibility;
}

/**
 * Format phone number for display and tel: links
 */
function lemanassist_format_phone($phone) {
    // Remove any non-numeric characters
    $digits = preg_replace('/[^0-9+]/', '', $phone);
    
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
function lemanassist_format_phone_display($phone) {
    // Remove any non-numeric characters
    $digits = preg_replace('/[^0-9+]/', '', $phone);
    
    if (empty($digits)) {
        return '';
    }
    
    // Format for display
    if (strlen($digits) == 10 && substr($digits, 0, 1) == '0') {
        return preg_replace('/(\d{3})(\d{3})(\d{2})(\d{2})/', '$1 $2 $3 $4', $digits);
    } elseif (strlen($digits) == 9) {
        return preg_replace('/(\d{2})(\d{3})(\d{2})(\d{2})/', '+41 $1 $2 $3 $4', $digits);
    } elseif (substr($digits, 0, 3) == '+41') {
        return preg_replace('/\+41(\d{2})(\d{3})(\d{2})(\d{2})/', '+41 $1 $2 $3 $4', $digits);
    }
    
    return $phone;
}

/**
 * Custom styles for visual editor to match front end
 */
function lemanassist_add_editor_styles() {
    add_editor_style('assets/css/editor-style.css');
}
add_action('admin_init', 'lemanassist_add_editor_styles');

/**
 * Add custom styles based on customizer options
 */
function lemanassist_customizer_css() {
    $main_color = get_theme_mod('lemanassist_main_color', '#3e5c6e');
    $accent_color = get_theme_mod('lemanassist_accent_color', '#c9a987');
    
    $css = '
        :root {
            --main-color: ' . esc_attr($main_color) . ';
            --accent-color: ' . esc_attr($accent_color) . ';
            --main-light: ' . esc_attr(lemanassist_adjust_brightness($main_color, 20)) . ';
            --main-lighter: ' . esc_attr(lemanassist_adjust_brightness($main_color, 40)) . ';
            --main-lightest: ' . esc_attr(lemanassist_adjust_brightness($main_color, 60)) . ';
            --accent-light: ' . esc_attr(lemanassist_adjust_brightness($accent_color, 20)) . ';
            --accent-dark: ' . esc_attr(lemanassist_adjust_brightness($accent_color, -20)) . ';
        }
    ';
    
    wp_add_inline_style('lemanassist-style', $css);
}
add_action('wp_enqueue_scripts', 'lemanassist_customizer_css', 20);

/**
 * Helper function to adjust brightness of a hex color
 */
function lemanassist_adjust_brightness($hex, $steps) {
    // Remove # if present
    $hex = ltrim($hex, '#');
    
    // Convert to RGB
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));
    
    // Adjust brightness
    $r = max(0, min(255, $r + $steps));
    $g = max(0, min(255, $g + $steps));
    $b = max(0, min(255, $b + $steps));
    
    // Convert back to hex
    return sprintf('#%02x%02x%02x', $r, $g, $b);
}

/**
 * Video background overlay opacity CSS
 */
function lemanassist_video_background_css() {
    $overlay_opacity = get_theme_mod('lemanassist_video_overlay_opacity', 50);
    $opacity_decimal = $overlay_opacity / 100;
    
    $css = '
        .hero-overlay {
            opacity: ' . esc_attr($opacity_decimal) . ';
        }
    ';
    
    wp_add_inline_style('lemanassist-style', $css);
}
add_action('wp_enqueue_scripts', 'lemanassist_video_background_css', 20);

/**
 * Add active class to menu items when scrolling
 */
function lemanassist_menu_item_classes($classes, $item) {
    // Add class for one-page navigation
    if (is_front_page() && !empty($item->url) && strpos($item->url, '#') !== false) {
        $classes[] = 'one-page-link';
    }
    
    return $classes;
}
add_filter('nav_menu_css_class', 'lemanassist_menu_item_classes', 10, 2);

/**
 * Render stars based on rating
 */
function lemanassist_render_stars($rating) {
    $output = '<div class="rating">';
    
    // Full stars
    for ($i = 1; $i <= floor($rating); $i++) {
        $output .= '<i class="fas fa-star"></i>';
    }
    
    // Half star
    if ($rating - floor($rating) >= 0.5) {
        $output .= '<i class="fas fa-star-half-alt"></i>';
        $i++;
    }
    
    // Empty stars
    for (; $i <= 5; $i++) {
        $output .= '<i class="far fa-star"></i>';
    }
    
    $output .= '</div>';
    
    return $output;
}

/**
 * Process pricing features list
 */
function lemanassist_process_pricing_features($features_text) {
    $features = explode("\n", $features_text);
    $output = '<div class="pricing-features">';
    
    foreach ($features as $feature) {
        $feature = trim($feature);
        
        if (empty($feature)) {
            continue;
        }
        
        // Check if feature is excluded (starts with -)
        if (substr($feature, 0, 1) === '-') {
            $feature_text = trim(substr($feature, 1));
            $output .= '<div class="pricing-feature feature-excluded"><i class="fas fa-times"></i> ' . esc_html($feature_text) . '</div>';
        } else {
            $output .= '<div class="pricing-feature feature-included"><i class="fas fa-check"></i> ' . esc_html($feature) . '</div>';
        }
    }
    
    $output .= '</div>';
    
    return $output;
}