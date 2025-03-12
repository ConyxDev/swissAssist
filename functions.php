<?php
/**
 * helvassist functions and definitions
 *
 * @package helvassist
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function helvassist_setup() {
    /*
     * Make theme available for translation.
     */
    load_theme_textdomain('helvassist', get_template_directory() . '/languages');

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
            'menu-1' => esc_html__('Primary', 'helvassist'),
            'footer-menu' => esc_html__('Footer', 'helvassist'),
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
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'helvassist_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function helvassist_content_width() {
    $GLOBALS['content_width'] = apply_filters('helvassist_content_width', 1140);
}
add_action('after_setup_theme', 'helvassist_content_width', 0);

/**
 * Register widget area.
 */
function helvassist_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'helvassist'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'helvassist'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Widget Area 1', 'helvassist'),
            'id'            => 'footer-1',
            'description'   => esc_html__('First footer widget area', 'helvassist'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Widget Area 2', 'helvassist'),
            'id'            => 'footer-2',
            'description'   => esc_html__('Second footer widget area', 'helvassist'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__('Footer Widget Area 3', 'helvassist'),
            'id'            => 'footer-3',
            'description'   => esc_html__('Third footer widget area', 'helvassist'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init', 'helvassist_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function helvassist_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('helvassist-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600&display=swap', array(), null);
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3');
    
    // Enqueue Slick Slider CSS
    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    
    // Enqueue theme styles
    wp_enqueue_style('helvassist-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('helvassist-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
    wp_enqueue_style('helvassist-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);
    
    // Enqueue jQuery (WordPress bundled version)
    wp_enqueue_script('jquery');
    
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
    
    // Enqueue Slick Slider JS
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    
    // Enqueue theme scripts
    wp_enqueue_script('helvassist-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'helvassist_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Register Custom Post Type for Services
 */
function helvassist_register_services_post_type() {
    $labels = array(
        'name'                  => _x('Services', 'Post Type General Name', 'helvassist'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'helvassist'),
        'menu_name'             => __('Services', 'helvassist'),
        'name_admin_bar'        => __('Service', 'helvassist'),
        'archives'              => __('Archives des services', 'helvassist'),
        'attributes'            => __('Attributs du service', 'helvassist'),
        'all_items'             => __('Tous les services', 'helvassist'),
        'add_new_item'          => __('Ajouter un nouveau service', 'helvassist'),
        'add_new'               => __('Ajouter', 'helvassist'),
        'new_item'              => __('Nouveau service', 'helvassist'),
        'edit_item'             => __('Modifier le service', 'helvassist'),
        'update_item'           => __('Mettre à jour le service', 'helvassist'),
        'view_item'             => __('Voir le service', 'helvassist'),
        'view_items'            => __('Voir les services', 'helvassist'),
        'search_items'          => __('Rechercher un service', 'helvassist'),
    );
    $args = array(
        'label'                 => __('Service', 'helvassist'),
        'description'           => __('Services proposés', 'helvassist'),
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
add_action('init', 'helvassist_register_services_post_type');

/**
 * Register Custom Post Type for Testimonials
 */
function helvassist_register_testimonials_post_type() {
    $labels = array(
        'name'                  => _x('Témoignages', 'Post Type General Name', 'helvassist'),
        'singular_name'         => _x('Témoignage', 'Post Type Singular Name', 'helvassist'),
        'menu_name'             => __('Témoignages', 'helvassist'),
        'name_admin_bar'        => __('Témoignage', 'helvassist'),
        'archives'              => __('Archives des témoignages', 'helvassist'),
        'all_items'             => __('Tous les témoignages', 'helvassist'),
        'add_new_item'          => __('Ajouter un nouveau témoignage', 'helvassist'),
        'add_new'               => __('Ajouter', 'helvassist'),
        'new_item'              => __('Nouveau témoignage', 'helvassist'),
        'edit_item'             => __('Modifier le témoignage', 'helvassist'),
        'update_item'           => __('Mettre à jour le témoignage', 'helvassist'),
        'view_item'             => __('Voir le témoignage', 'helvassist'),
        'view_items'            => __('Voir les témoignages', 'helvassist'),
        'search_items'          => __('Rechercher un témoignage', 'helvassist'),
    );
    $args = array(
        'label'                 => __('Témoignage', 'helvassist'),
        'description'           => __('Témoignages clients', 'helvassist'),
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
add_action('init', 'helvassist_register_testimonials_post_type');

/**
 * Custom excerpt length
 */
function helvassist_custom_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'helvassist_custom_excerpt_length', 999);

/**
 * Custom excerpt more
 */
function helvassist_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'helvassist_custom_excerpt_more');

/**
 * Add custom meta box for testimonials
 */
function helvassist_add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Détails du témoignage', 'helvassist'),
        'helvassist_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'helvassist_add_testimonial_meta_boxes');

/**
 * Testimonial meta box callback
 */
function helvassist_testimonial_details_callback($post) {
    wp_nonce_field(basename(__FILE__), 'testimonial_details_nonce');
    
    $client_name = get_post_meta($post->ID, 'client_name', true);
    $client_position = get_post_meta($post->ID, 'client_position', true);
    $client_company = get_post_meta($post->ID, 'client_company', true);
    
    ?>
    <p>
        <label for="client_name"><?php _e('Nom du client:', 'helvassist'); ?></label>
        <input type="text" id="client_name" name="client_name" value="<?php echo esc_attr($client_name); ?>" class="widefat">
    </p>
    <p>
        <label for="client_position"><?php _e('Fonction du client:', 'helvassist'); ?></label>
        <input type="text" id="client_position" name="client_position" value="<?php echo esc_attr($client_position); ?>" class="widefat">
    </p>
    <p>
        <label for="client_company"><?php _e('Entreprise du client:', 'helvassist'); ?></label>
        <input type="text" id="client_company" name="client_company" value="<?php echo esc_attr($client_company); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Save testimonial meta box data
 */
function helvassist_save_testimonial_meta($post_id) {
    
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
    
    if (isset($new_client_name)) {
        update_post_meta($post_id, 'client_name', sanitize_text_field($new_client_name));
    }
    
    if (isset($new_client_position)) {
        update_post_meta($post_id, 'client_position', sanitize_text_field($new_client_position));
    }
    
    if (isset($new_client_company)) {
        update_post_meta($post_id, 'client_company', sanitize_text_field($new_client_company));
    }
}
add_action('save_post', 'helvassist_save_testimonial_meta');

/**
 * Get testimonials for front page
 */
function helvassist_get_testimonials($count = 5) {
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
function helvassist_get_services($count = 6) {
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
 * Pagination function
 */
function helvassist_pagination() {
    global $wp_query;
    
    if ($wp_query->max_num_pages <= 1) {
        return;
    }
    
    $big = 999999999; // need an unlikely integer
    
    $links = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_text' => '&laquo; Précédent',
        'next_text' => 'Suivant &raquo;',
    ));
    
    if (is_array($links)) {
        echo '<nav aria-label="Pagination">';
        echo '<ul class="pagination justify-content-center">';
        
        foreach ($links as $link) {
            $active = strpos($link, 'current') !== false ? ' active' : '';
            echo '<li class="page-item' . $active . '">' . str_replace('page-numbers', 'page-link', $link) . '</li>';
        }
        
        echo '</ul>';
        echo '</nav>';
    }
}

function helvassist_get_video_background() {
    $enable_video = get_theme_mod('helvassist_enable_video_background', false);
    
    if (!$enable_video) {
        return;
    }
    
    $video_mp4 = get_theme_mod('helvassist_video_mp4', '');
    $video_webm = get_theme_mod('helvassist_video_webm', '');
    
    if (empty($video_mp4) && empty($video_webm)) {
        return;
    }
    
    ?>
    <div class="video-container">
        <video autoplay muted loop playsinline id="hero-video">
            <?php if (!empty($video_mp4)) : ?>
                <source src="<?php echo esc_url($video_mp4); ?>" type="video/mp4">
            <?php endif; ?>
            
            <?php if (!empty($video_webm)) : ?>
                <source src="<?php echo esc_url($video_webm); ?>" type="video/webm">
            <?php endif; ?>
        </video>
        <div class="video-overlay"></div>
    </div>
    <?php
}
