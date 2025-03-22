<?php
/**
 * lemanassist functions and definitions
 *
 * @package lemanassist
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '2.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function lemanassist_setup() {
    /*
     * Make theme available for translation.
     */
    load_theme_textdomain('lemanassist', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'lemanassist'),
            'footer-menu' => esc_html__('Footer', 'lemanassist'),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 80,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'lemanassist_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lemanassist_content_width() {
    $GLOBALS['content_width'] = apply_filters('lemanassist_content_width', 1200);
}
add_action('after_setup_theme', 'lemanassist_content_width', 0);

/**
 * Register widget area.
 */
function lemanassist_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'lemanassist'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'lemanassist'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Widget Area 1', 'lemanassist'),
            'id'            => 'footer-1',
            'description'   => esc_html__('First footer widget area', 'lemanassist'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Widget Area 2', 'lemanassist'),
            'id'            => 'footer-2',
            'description'   => esc_html__('Second footer widget area', 'lemanassist'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Widget Area 3', 'lemanassist'),
            'id'            => 'footer-3',
            'description'   => esc_html__('Third footer widget area', 'lemanassist'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'lemanassist_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lemanassist_scripts() {
    // Enqueue Google Fonts - Utilise les polices Plus Jakarta Sans et Inter
    wp_enqueue_style('lemanassist-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
    
    // Enqueue theme styles
    wp_enqueue_style('lemanassist-style', get_stylesheet_uri(), array(), _S_VERSION);
    
    // Enqueue jQuery (WordPress bundled version)
    wp_enqueue_script('jquery');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'lemanassist_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Register Custom Post Type for Services
 */
function lemanassist_register_services_post_type() {
    $labels = array(
        'name'                  => _x('Services', 'Post Type General Name', 'lemanassist'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'lemanassist'),
        'menu_name'             => __('Services', 'lemanassist'),
        'name_admin_bar'        => __('Service', 'lemanassist'),
        'archives'              => __('Archives des services', 'lemanassist'),
        'attributes'            => __('Attributs du service', 'lemanassist'),
        'all_items'             => __('Tous les services', 'lemanassist'),
        'add_new_item'          => __('Ajouter un nouveau service', 'lemanassist'),
        'add_new'               => __('Ajouter', 'lemanassist'),
        'new_item'              => __('Nouveau service', 'lemanassist'),
        'edit_item'             => __('Modifier le service', 'lemanassist'),
        'update_item'           => __('Mettre à jour le service', 'lemanassist'),
        'view_item'             => __('Voir le service', 'lemanassist'),
        'view_items'            => __('Voir les services', 'lemanassist'),
        'search_items'          => __('Rechercher un service', 'lemanassist'),
    );
    $args = array(
        'label'                 => __('Service', 'lemanassist'),
        'description'           => __('Services proposés', 'lemanassist'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('service', $args);
}
add_action('init', 'lemanassist_register_services_post_type');

/**
 * Register Custom Post Type for Testimonials
 */
function lemanassist_register_testimonials_post_type() {
    $labels = array(
        'name'                  => _x('Témoignages', 'Post Type General Name', 'lemanassist'),
        'singular_name'         => _x('Témoignage', 'Post Type Singular Name', 'lemanassist'),
        'menu_name'             => __('Témoignages', 'lemanassist'),
        'name_admin_bar'        => __('Témoignage', 'lemanassist'),
        'archives'              => __('Archives des témoignages', 'lemanassist'),
        'all_items'             => __('Tous les témoignages', 'lemanassist'),
        'add_new_item'          => __('Ajouter un nouveau témoignage', 'lemanassist'),
        'add_new'               => __('Ajouter', 'lemanassist'),
        'new_item'              => __('Nouveau témoignage', 'lemanassist'),
        'edit_item'             => __('Modifier le témoignage', 'lemanassist'),
        'update_item'           => __('Mettre à jour le témoignage', 'lemanassist'),
        'view_item'             => __('Voir le témoignage', 'lemanassist'),
        'view_items'            => __('Voir les témoignages', 'lemanassist'),
        'search_items'          => __('Rechercher un témoignage', 'lemanassist'),
    );
    $args = array(
        'label'                 => __('Témoignage', 'lemanassist'),
        'description'           => __('Témoignages clients', 'lemanassist'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-quote',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'lemanassist_register_testimonials_post_type');

/**
 * Register Custom Post Type for Pricing Plans
 */
function lemanassist_register_pricing_post_type() {
    $labels = array(
        'name'                  => _x('Tarifs', 'Post Type General Name', 'lemanassist'),
        'singular_name'         => _x('Tarif', 'Post Type Singular Name', 'lemanassist'),
        'menu_name'             => __('Tarifs', 'lemanassist'),
        'name_admin_bar'        => __('Tarif', 'lemanassist'),
        'archives'              => __('Archives des tarifs', 'lemanassist'),
        'all_items'             => __('Tous les tarifs', 'lemanassist'),
        'add_new_item'          => __('Ajouter un nouveau tarif', 'lemanassist'),
        'add_new'               => __('Ajouter', 'lemanassist'),
        'new_item'              => __('Nouveau tarif', 'lemanassist'),
        'edit_item'             => __('Modifier le tarif', 'lemanassist'),
        'update_item'           => __('Mettre à jour le tarif', 'lemanassist'),
        'view_item'             => __('Voir le tarif', 'lemanassist'),
        'view_items'            => __('Voir les tarifs', 'lemanassist'),
        'search_items'          => __('Rechercher un tarif', 'lemanassist'),
    );
    $args = array(
        'label'                 => __('Tarif', 'lemanassist'),
        'description'           => __('Plans tarifaires', 'lemanassist'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-money-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('pricing', $args);
}
add_action('init', 'lemanassist_register_pricing_post_type');

/**
 * Register Custom Post Type for FAQs
 */
function lemanassist_register_faq_post_type() {
    $labels = array(
        'name'                  => _x('FAQs', 'Post Type General Name', 'lemanassist'),
        'singular_name'         => _x('FAQ', 'Post Type Singular Name', 'lemanassist'),
        'menu_name'             => __('FAQs', 'lemanassist'),
        'name_admin_bar'        => __('FAQ', 'lemanassist'),
        'archives'              => __('Archives des FAQs', 'lemanassist'),
        'all_items'             => __('Toutes les FAQs', 'lemanassist'),
        'add_new_item'          => __('Ajouter une nouvelle FAQ', 'lemanassist'),
        'add_new'               => __('Ajouter', 'lemanassist'),
        'new_item'              => __('Nouvelle FAQ', 'lemanassist'),
        'edit_item'             => __('Modifier la FAQ', 'lemanassist'),
        'update_item'           => __('Mettre à jour la FAQ', 'lemanassist'),
        'view_item'             => __('Voir la FAQ', 'lemanassist'),
        'view_items'            => __('Voir les FAQs', 'lemanassist'),
        'search_items'          => __('Rechercher une FAQ', 'lemanassist'),
    );
    $args = array(
        'label'                 => __('FAQ', 'lemanassist'),
        'description'           => __('Questions fréquemment posées', 'lemanassist'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-help',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('faq', $args);
}
add_action('init', 'lemanassist_register_faq_post_type');

/**
 * Custom excerpt length
 */
function lemanassist_custom_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'lemanassist_custom_excerpt_length', 999);

/**
 * Custom excerpt more
 */
function lemanassist_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'lemanassist_custom_excerpt_more');

/**
 * Add custom meta box for testimonials
 */
function lemanassist_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Détails du témoignage', 'lemanassist'),
        'lemanassist_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'lemanassist_add_testimonial_meta_boxes');

/**
 * Testimonial meta box callback
 */
function lemanassist_testimonial_details_callback($post) {
    wp_nonce_field(basename(__FILE__), 'testimonial_details_nonce');
    
    $client_name = get_post_meta($post->ID, 'client_name', true);
    $client_position = get_post_meta($post->ID, 'client_position', true);
    $client_company = get_post_meta($post->ID, 'client_company', true);
    $client_rating = get_post_meta($post->ID, 'client_rating', true) ?: 5;
    
    ?>
    <p>
        <label for="client_name"><?php _e('Nom du client:', 'lemanassist'); ?></label>
        <input type="text" id="client_name" name="client_name" value="<?php echo esc_attr($client_name); ?>" class="widefat">
    </p>
    <p>
        <label for="client_position"><?php _e('Fonction du client:', 'lemanassist'); ?></label>
        <input type="text" id="client_position" name="client_position" value="<?php echo esc_attr($client_position); ?>" class="widefat">
    </p>
    <p>
        <label for="client_company"><?php _e('Entreprise du client:', 'lemanassist'); ?></label>
        <input type="text" id="client_company" name="client_company" value="<?php echo esc_attr($client_company); ?>" class="widefat">
    </p>
    <p>
        <label for="client_rating"><?php _e('Note (1-5):', 'lemanassist'); ?></label>
        <select id="client_rating" name="client_rating" class="widefat">
            <option value="5" <?php selected($client_rating, 5); ?>>5 étoiles</option>
            <option value="4" <?php selected($client_rating, 4); ?>>4 étoiles</option>
            <option value="3" <?php selected($client_rating, 3); ?>>3 étoiles</option>
            <option value="2" <?php selected($client_rating, 2); ?>>2 étoiles</option>
            <option value="1" <?php selected($client_rating, 1); ?>>1 étoile</option>
        </select>
    </p>
    <?php
}

/**
 * Save testimonial meta box data
 */
function lemanassist_save_testimonial_meta($post_id) {
    
    // Check if our nonce is set and verify it
    if (!isset($_POST['testimonial_details_nonce']) || !wp_verify_nonce($_POST['testimonial_details_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    
    // Check auto-save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    // Check permissions
    if ('testimonial' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }
    
    $old_client_name = get_post_meta($post_id, 'client_name', true);
    $new_client_name = $_POST['client_name'];
    
    $old_client_position = get_post_meta($post_id, 'client_position', true);
    $new_client_position = $_POST['client_position'];
    
    $old_client_company = get_post_meta($post_id, 'client_company', true);
    $new_client_company = $_POST['client_company'];
    
    $old_client_rating = get_post_meta($post_id, 'client_rating', true);
    $new_client_rating = isset($_POST['client_rating']) ? $_POST['client_rating'] : 5;
    
    if (isset($new_client_name)) {
        update_post_meta($post_id, 'client_name', sanitize_text_field($new_client_name));
    }
    
    if (isset($new_client_position)) {
        update_post_meta($post_id, 'client_position', sanitize_text_field($new_client_position));
    }
    
    if (isset($new_client_company)) {
        update_post_meta($post_id, 'client_company', sanitize_text_field($new_client_company));
    }
    
    if (isset($new_client_rating)) {
        update_post_meta($post_id, 'client_rating', intval($new_client_rating));
    }
}
add_action('save_post', 'lemanassist_save_testimonial_meta');

/**
 * Add meta box for pricing
 */
function lemanassist_add_pricing_meta_boxes() {
    add_meta_box(
        'pricing_details',
        __('Détails du tarif', 'lemanassist'),
        'lemanassist_pricing_details_callback',
        'pricing',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'lemanassist_add_pricing_meta_boxes');

/**
 * Pricing meta box callback
 */
function lemanassist_pricing_details_callback($post) {
    wp_nonce_field(basename(__FILE__), 'pricing_details_nonce');
    
    $price = get_post_meta($post->ID, 'price', true);
    $period = get_post_meta($post->ID, 'period', true);
    $is_popular = get_post_meta($post->ID, 'is_popular', true);
    $features = get_post_meta($post->ID, 'features', true);
    $icon = get_post_meta($post->ID, 'icon', true);
    
    ?>
    <p>
        <label for="price"><?php _e('Prix:', 'lemanassist'); ?></label>
        <input type="text" id="price" name="price" value="<?php echo esc_attr($price); ?>" class="widefat">
    </p>
    <p>
        <label for="period"><?php _e('Période (ex: /heure, /mois):', 'lemanassist'); ?></label>
        <input type="text" id="period" name="period" value="<?php echo esc_attr($period); ?>" class="widefat">
    </p>
    <p>
        <label for="icon"><?php _e('Icône FontAwesome (ex: fas fa-clock):', 'lemanassist'); ?></label>
        <input type="text" id="icon" name="icon" value="<?php echo esc_attr($icon); ?>" class="widefat">
    </p>
    <p>
        <label for="is_popular">
            <input type="checkbox" id="is_popular" name="is_popular" value="1" <?php checked($is_popular, 1); ?>>
            <?php _e('Mettre en avant (populaire)', 'lemanassist'); ?>
        </label>
    </p>
    <p>
        <label for="features"><?php _e('Fonctionnalités (une par ligne):', 'lemanassist'); ?></label>
        <textarea id="features" name="features" class="widefat" rows="6"><?php echo esc_textarea($features); ?></textarea>
        <small><?php _e('Préfixez avec "-" pour les fonctionnalités non incluses.', 'lemanassist'); ?></small>
    </p>
    <?php
}

/**
 * Save pricing meta box data
 */
function lemanassist_save_pricing_meta($post_id) {
    
    // Check if our nonce is set and verify it
    if (!isset($_POST['pricing_details_nonce']) || !wp_verify_nonce($_POST['pricing_details_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    
    // Check auto-save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    // Check permissions
    if ('pricing' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }
    
    $fields = array(
        'price' => 'sanitize_text_field',
        'period' => 'sanitize_text_field',
        'icon' => 'sanitize_text_field',
        'features' => 'sanitize_textarea_field',
    );
    
    foreach ($fields as $field => $sanitize_callback) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $sanitize_callback($_POST[$field]));
        }
    }
    
    $is_popular = isset($_POST['is_popular']) ? 1 : 0;
    update_post_meta($post_id, 'is_popular', $is_popular);
}
add_action('save_post', 'lemanassist_save_pricing_meta');

/**
 * Get testimonials for front page
 */
function lemanassist_get_testimonials($count = 5) {
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => $count,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    
    return new WP_Query($args);
}

/**
 * Get services for front page
 */
function lemanassist_get_services($count = 6) {
    $args = array(
        'post_type' => 'service',
        'posts_per_page' => $count,
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    
    return new WP_Query($args);
}

/**
 * Get pricing plans for front page
 */
function lemanassist_get_pricing($count = 3) {
    $args = array(
        'post_type' => 'pricing',
        'posts_per_page' => $count,
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    
    return new WP_Query($args);
}

/**
 * Get FAQs for front page
 */
function lemanassist_get_faqs($count = 6) {
    $args = array(
        'post_type' => 'faq',
        'posts_per_page' => $count,
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );
    
    return new WP_Query($args);
}

/**
 * Handle contact form submission
 */
/* function lemanassist_handle_contact_form() {
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
        wp_die('La vérification de sécurité a échoué, veuillez réessayer.');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_option('admin_email');
    $subject = 'Nouveau message de contact: ' . $subject;
    
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Téléphone: $phone\n";
    $body .= "Sujet: $subject\n\n";
    $body .= "Message:\n$message";
    
    $headers = array(
        'From: ' . get_bloginfo('name') . ' <' . $email . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
        'Content-Type: text/plain; charset=UTF-8',
    );
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    
    exit;
}
add_action('admin_post_submit_contact_form', 'lemanassist_handle_contact_form');
add_action('admin_post_nopriv_submit_contact_form', 'lemanassist_handle_contact_form');

/**
 * Display contact form notice
 */
/* function lemanassist_contact_form_notice() {
    if (isset($_GET['contact']) && $_GET['contact'] == 'success') {
        ?>
        <div class="contact-success">
            <p><?php _e('Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.', 'lemanassist'); ?></p>
        </div>
        <?php
    } elseif (isset($_GET['contact']) && $_GET['contact'] == 'error') {
        ?>
        <div class="contact-error">
            <p><?php _e('Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer plus tard ou nous contacter directement.', 'lemanassist'); ?></p>
        </div>
        <?php
    }
}
add_action('wp_body_open', 'lemanassist_contact_form_notice');

/**
 * Check if plugin is active - adding safe wrapper for admin pages
 */
/* if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
} */

/**
 * Add admin CSS for custom meta boxes
 */
function lemanassist_admin_styles() {
    echo '<style>
        .widefat { max-width: 100%; }
        .form-field small { display: block; margin-top: 5px; color: #666; }
    </style>';
}
add_action('admin_head', 'lemanassist_admin_styles');

/**
 * Add required admin notice for Contact Form 7
 */
function lemanassist_admin_notices() {
    if (!is_plugin_active('contact-form-7/wp-contact-form-7.php') && current_user_can('activate_plugins')) {
        ?>
        <div class="notice notice-info is-dismissible">
            <p><?php _e('Pour utiliser toutes les fonctionnalités du thème LemanAssist, veuillez installer et activer le plugin <strong>Contact Form 7</strong>.', 'lemanassist'); ?></p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'lemanassist_admin_notices');

/**
 * Add custom admin columns to testimonials
 */
function lemanassist_testimonial_columns($columns) {
    $new_columns = array();
    
    foreach ($columns as $key => $value) {
        if ($key == 'title') {
            $new_columns[$key] = $value;
            $new_columns['client_name'] = __('Nom du client', 'lemanassist');
            $new_columns['client_position'] = __('Fonction', 'lemanassist');
        } else {
            $new_columns[$key] = $value;
        }
    }
    
    return $new_columns;
}
add_filter('manage_testimonial_posts_columns', 'lemanassist_testimonial_columns');

/**
 * Add content to custom admin columns
 */
function lemanassist_testimonial_column_content($column, $post_id) {
    switch ($column) {
        case 'client_name':
            echo get_post_meta($post_id, 'client_name', true);
            break;
        case 'client_position':
            echo get_post_meta($post_id, 'client_position', true);
            break;
    }
}
add_action('manage_testimonial_posts_custom_column', 'lemanassist_testimonial_column_content', 10, 2);

/**
 * Add custom image sizes
 */
function lemanassist_custom_image_sizes() {
    add_image_size('testimonial-thumb', 100, 100, true); // Hard crop for profile pictures
    add_image_size('service-thumb', 400, 300, true); // Hard crop for service thumbnails
    add_image_size('hero-image', 600, 600, false); // Soft crop for hero image
}
add_action('after_setup_theme', 'lemanassist_custom_image_sizes');

/**
 * Register theme locations for menus
 */
function lemanassist_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => esc_html__('Menu Principal', 'lemanassist'),
            'footer-menu' => esc_html__('Menu Pied de Page', 'lemanassist'),
        )
    );
}
add_action('init', 'lemanassist_register_menus');
