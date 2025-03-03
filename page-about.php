<?php
/**
 * Template Name: Page À propos
 *
 * @package SwissAssist
 */

 function force_fontawesome_on_services() {
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">';
    echo '<style>
        .fa-solid, .fas { font-family: "Font Awesome 6 Free" !important; font-weight: 900 !important; color: #f18068; }
        .fa-regular, .far { font-family: "Font Awesome 6 Free" !important; font-weight: 400 !important; color: #f18068; }
        .fa-brands, .fab { font-family: "Font Awesome 6 Brands" !important; font-weight: 400 !important; color: #f18068; }
    </style>';
}
add_action('wp_head', 'force_fontawesome_on_services', 999);

get_header();
?>

<main id="primary" class="site-main">
    <!-- Section 1: En-tête de la page À propos avec image de fond -->
    <section id="about-hero" class="hero-section image-background">
        <!-- Conteneur d'image en arrière-plan -->
        <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/desk2.jpg" alt="" class="background-image">
            <div class="image-overlay"></div>
        </div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Une assistante administrative indépendante expérimentée à votre service</h1>
                    <p class="subtitle">
                        <span class="highlight-dot"><i class="fa-solid fa-circle"></i></span> Expertise en gestion administrative et secrétariat médical en Suisse<br>
                        <span class="highlight-dot"><i class="fa-solid fa-circle"></i></span> +25 ans d'expérience en soutien administratif et organisationnel
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Mon parcours & mon expertise -->
    <section id="expertise" class="about-section">
        <div class="container">
            <h2>Mon parcours & mon expertise</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <p>Avec <strong>plus de 25 ans d'expérience en gestion administrative et secrétariat</strong>, j'ai développé une <strong>expertise solide</strong> dans l'accompagnement des entreprises, des professionnels de santé et des indépendants.</p>
                        
                        <p>Diplômée en <strong>secrétariat médical en Suisse</strong>, j'ai décidé de mettre mes compétences au service des <strong>entrepreneurs, PME et cabinets médicaux</strong> en proposant un <strong>service d'assistante indépendante flexible et efficace.</strong></p>
                        
                        <p>Que vous soyez <strong>un professionnel de la santé, une entreprise ou un indépendant</strong>, je vous accompagne dans la gestion de vos tâches administratives afin que vous puissiez vous concentrer sur votre cœur de métier.</p>
                        
                        <p class="location"><i class="fa-solid fa-location-dot"></i> <strong>Basée à Genève – Disponible en Suisse romande et en télétravail</strong></p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="about-image">
                        <!-- Remplacer par votre propre image -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/assistant.svg" alt="Votre Assistante Administrative" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Mes domaines d'expertise -->
    <section id="domains" class="expertise-section bg-light">
        <div class="container">
            <h2>Mes domaines d'expertise</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fa-solid fa-tasks"></i></div>
                        <h3>Gestion administrative & organisation</h3>
                        <p>Gestion d'agenda, courriers, e-mails, bases de données, organisation de réunions</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fa-solid fa-stethoscope"></i></div>
                        <h3>Secrétariat médical</h3>
                        <p>Transcription de comptes-rendus, gestion des rendez-vous et dossiers patients, facturation Tarmed/LAMal</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fa-solid fa-file-invoice"></i></div>
                        <h3>Gestion comptable & facturation</h3>
                        <p>Suivi des factures, relances, rapprochement bancaire, préparation comptable</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fa-solid fa-headset"></i></div>
                        <h3>Support commercial</h3>
                        <p>Gestion des commandes, suivi client, assistance à la vente, support après-vente</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    <p class="expertise-tagline"><i class="fa-solid fa-bullseye"></i> Un service sur-mesure, sans contrainte d'embauche, adapté à vos besoins.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Mes valeurs & engagement -->
    <section id="values" class="values-section">
        <div class="container">
            <h2>Mes valeurs & engagement</h2>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <p class="values-intro text-center">En tant qu'assistante indépendante, je m'engage à vous fournir un service :</p>
                    
                    <div class="values-list">
                        <div class="value-item">
                            <span class="value-icon"><i class="fa-solid fa-check-circle"></i></span>
                            <div class="value-content">
                                <h3>Fiable et structuré</h3>
                                <p>Gestion rigoureuse et organisation méthodique</p>
                            </div>
                        </div>
                        
                        <div class="value-item">
                            <span class="value-icon"><i class="fa-solid fa-check-circle"></i></span>
                            <div class="value-content">
                                <h3>Confidentiel</h3>
                                <p>Respect strict de la confidentialité des données</p>
                            </div>
                        </div>
                        
                        <div class="value-item">
                            <span class="value-icon"><i class="fa-solid fa-check-circle"></i></span>
                            <div class="value-content">
                                <h3>Efficace et rapide</h3>
                                <p>Gestion optimisée pour un gain de temps immédiat</p>
                            </div>
                        </div>
                        
                        <div class="value-item">
                            <span class="value-icon"><i class="fa-solid fa-check-circle"></i></span>
                            <div class="value-content">
                                <h3>Flexible et sans engagement</h3>
                                <p>Payez uniquement pour les services dont vous avez besoin</p>
                            </div>
                        </div>
                    </div>
                    
                    <p class="expertise text-center"><i class="fa-solid fa-female"></i> Travailler avec une assistante indépendante, c'est opter pour la flexibilité et la sérénité !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Témoignages clients -->
    <section id="testimonials" class="testimonials-section bg-light">
        <div class="container">
            <h2>Témoignages clients</h2>
            <p class="text-center mb-4"><i class="fa-solid fa-quote-left"></i> Ils m'ont fait confiance !</p>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-icon"><i class="fa-solid fa-quote-right"></i></div>
                        <blockquote>
                            "Grâce à son professionnalisme et sa rigueur, j'ai pu déléguer toute ma gestion administrative en toute confiance."
                        </blockquote>
                        <div class="testimonial-author"><i class="fa-solid fa-user"></i> Jean Dupont, entrepreneur à Genève</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-icon"><i class="fa-solid fa-quote-right"></i></div>
                        <blockquote>
                            "Un accompagnement parfait pour mon cabinet médical, je recommande vivement !"
                        </blockquote>
                        <div class="testimonial-author"><i class="fa-solid fa-user-md"></i> Dr. Isabelle Fontaine, médecin généraliste</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Contact & Call-To-Action -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Contactez-moi</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><span class="contact-icon"><i class="fa-solid fa-envelope"></i></span> Email : <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?></a></p>
                        <p><span class="contact-icon"><i class="fa-solid fa-phone-alt"></i></span> Téléphone : <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                        <p><span class="contact-icon"><i class="fa-solid fa-map-marker-alt"></i></span> Disponible à Genève et en Suisse romande – Travail à distance ou sur site</p>
                        
                        <div class="cta-block mt-4 p-4 bg-light rounded">
                            <h4>Besoin d'une assistante compétente et efficace ?</h4>
                            <p>N'hésitez pas à me contacter pour échanger sur vos besoins spécifiques.</p>
                            <a href="#" class="cta-button cta-highlight">Contactez-moi dès aujourd'hui !</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="contact-form">
                        <?php 
                        // Affiche le formulaire de contact si un plugin est installé
                        if (shortcode_exists('contact-form-7')) {
                            echo do_shortcode('[contact-form-7 id="' . get_theme_mod('contact_form_id', '') . '" title="Formulaire de contact"]');
                        } else {
                            // Formulaire de contact simple en HTML
                        ?>
                        <form id="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Votre nom" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Votre email" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" placeholder="Votre téléphone">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Votre message" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="cta-button">Envoyer</button>
                            </div>
                            <input type="hidden" name="action" value="submit_contact_form">
                            <?php wp_nonce_field('submit_contact_form', 'contact_form_nonce'); ?>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();