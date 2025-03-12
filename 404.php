<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package SwissAssist
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="error-404 not-found text-center py-5">
            <div class="error-icon mb-4">
                <i class="fas fa-exclamation-triangle fa-5x text-warning"></i>
            </div>
            
            <header class="page-header">
                <h1 class="page-title">Oups! Page introuvable.</h1>
            </header>

            <div class="page-content">
                <p>La page que vous recherchez n'existe pas ou a été déplacée.</p>
                
                <div class="error-actions mt-4">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <i class="fas fa-home me-2"></i>Retour à l'accueil
                    </a>
                </div>
                
                <div class="search-form-container mt-5">
                    <h3>Vous pouvez essayer une recherche:</h3>
                    <?php get_search_form(); ?>
                </div>
                
                <div class="recent-posts mt-5">
                    <h3>Articles récents</h3>
                    <ul class="list-unstyled">
                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 5,
                            'post_status' => 'publish'
                        ));
                        
                        foreach ($recent_posts as $recent) {
                            echo '<li><a href="' . get_permalink($recent['ID']) . '">' . $recent['post_title'] . '</a></li>';
                        }
                        wp_reset_query();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();

