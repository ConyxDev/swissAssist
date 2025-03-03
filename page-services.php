<?php
/**
 * Template Name: Page Services
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
    <!-- Section 1: En-tête de la page Services avec image de fond -->
    <section id="services-hero" class="hero-section image-background">
        <!-- Conteneur d'image en arrière-plan -->
        <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/desk1.jpg" alt="" class="background-image">
            <div class="image-overlay"></div>
        </div>
        
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Services de secrétariat indépendant pour entrepreneurs, PME et professions médicales</h1>
                    <p class="subtitle">
                        <span class="highlight-dot"><i class="fa-solid fa-circle"></i></span> Gagnez du temps et de l'efficacité en externalisant vos tâches administratives !<br>
                        <span class="highlight-dot"><i class="fa-solid fa-circle"></i></span> Une secrétaire indépendante expérimentée à votre service, sans engagement et 100% flexible.
                    </p>
                    
                    <a href="#contact" class="cta-button">Réservez un appel découverte</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Pourquoi externaliser votre secrétariat ? -->
    <section id="why-outsource" class="advantages-section">
        <div class="container">
            <h2>Pourquoi externaliser votre secrétariat ?</h2>
            
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="intro-text text-center mb-4">
                        <p>Vous êtes dirigeant d'une PME, indépendant, médecin ou thérapeute ?<br>
                        Vous manquez de temps pour gérer votre administratif, votre facturation ou la relation client ?</p>
                        
                        <p>Avec une assistante indépendante, bénéficiez d'un service sur-mesure, sans contrainte d'embauche ni charge salariale.</p>
                        
                        <p class="expertise"><i class="fas fa-briefcase"></i> Je prends en charge vos tâches administratives et organisationnelles, à distance ou sur site à Genève et en Suisse romande.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-money-bill-wave"></i></div>
                        <h3>Flexibilité et tarifs adaptés</h3>
                        <p>Des tarifs sur mesure adaptés à votre budget et à vos besoins spécifiques</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h3>Aucune charge sociale</h3>
                        <p>Pas de charges sociales ni de gestion RH complexe à gérer</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-stethoscope"></i></div>
                        <h3>Expertise médicale</h3>
                        <p>Spécialisation en secrétariat médical et gestion administrative</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center mt-4">
                    <p class="highlight"><i class="fas fa-arrow-right"></i> Concentrez-vous sur votre activité, je m'occupe du reste !</p>
                    <a href="#contact" class="cta-button">Demandez un devis personnalisé</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Mes services en secrétariat externalisé -->
    <section id="services-offered" class="services-section">
        <div class="container">
            <h2>Mes services en secrétariat externalisé</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-tasks"></i></div>
                        <h3>Gestion administrative & organisation</h3>
                        <ul>
                            <li>Gestion d'agenda et prise de rendez-vous</li>
                            <li>Rédaction et mise en page de documents (contrats, courriers, PV)</li>
                            <li>Gestion des emails et filtrage des appels téléphoniques</li>
                            <li>Organisation de réunions et événements professionnels</li>
                            <li>Gestion de bases de données et CRM</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-file-invoice"></i></div>
                        <h3>Facturation & suivi comptable</h3>
                        <ul>
                            <li>Émission et suivi des factures clients et fournisseurs</li>
                            <li>Relances et gestion des impayés</li>
                            <li>Préparation des documents comptables pour votre fiduciaire</li>
                            <li>Saisie comptable et rapprochement bancaire</li>
                            <li>Déclarations administratives et TVA</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-comments-dollar"></i></div>
                        <h3>Support commercial & relation clients</h3>
                        <ul>
                            <li>Gestion des devis et suivi des commandes</li>
                            <li>Assistance à la prospection et relance des clients</li>
                            <li>Rédaction d'offres commerciales et supports de vente</li>
                            <li>Service après-vente et suivi client</li>
                            <li>Gestion des réseaux sociaux et communication digitale</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-user-md"></i></div>
                        <h3>Secrétariat médical & gestion de cabinet</h3>
                        <ul>
                            <li>Gestion des dossiers patients et rendez-vous</li>
                            <li>Facturation médicale conforme aux normes Tarmed / LAMal / LAA</li>
                            <li>Saisie et transcription de comptes-rendus médicaux</li>
                            <li>Rédaction de certificats et documents médicaux</li>
                            <li>Gestion des relations avec les assurances et caisses maladie</li>
                            <li>Coordination avec les médecins, cliniques et hôpitaux</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="custom-service"><i class="fas fa-arrow-right"></i> Un service 100% flexible, adapté à vos besoins. Contactez-moi dès aujourd'hui !</p>
                    <a href="#contact" class="cta-button">Réservez un appel découverte</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Pourquoi choisir mon expertise ? -->
    <section id="why-me" class="advantages-section">
        <div class="container">
            <h2>Pourquoi choisir mon expertise ?</h2>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <ul class="credentials large-credentials">
                        <li><span class="check-icon"><i class="fas fa-check-circle"></i></span> +25 ans d'expérience en gestion administrative et secrétariat médical</li>
                        <li><span class="check-icon"><i class="fas fa-check-circle"></i></span> Maîtrise des outils bureautiques et logiciels professionnels (Office 365, SAP, TarMed, GED, CRM)</li>
                        <li><span class="check-icon"><i class="fas fa-check-circle"></i></span> Adaptabilité et confidentialité garanties</li>
                        <li><span class="check-icon"><i class="fas fa-check-circle"></i></span> Trilingue : Français – Anglais – Italien</li>
                        <li><span class="check-icon"><i class="fas fa-check-circle"></i></span> Intervention en télétravail ou sur site à Genève et en Suisse romande</li>
                    </ul>
                    
                    <p class="expertise text-center"><i class="fas fa-laptop"></i> Bénéficiez d'une gestion administrative efficace, sans contrainte !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Témoignages clients -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2>Témoignages clients</h2>
            <p class="text-center mb-4"><i class="fas fa-quote-left"></i> Ils m'ont fait confiance !</p>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-icon"><i class="fas fa-quote-right"></i></div>
                        <blockquote>
                            "Une assistante d'une grande rigueur et efficacité ! J'ai gagné un temps précieux en externalisant ma gestion administrative."
                        </blockquote>
                        <div class="testimonial-author"><i class="fas fa-user"></i> Jean Dupont, Fondateur de Startup Genève</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-icon"><i class="fas fa-quote-right"></i></div>
                        <blockquote>
                            "Un service de secrétariat médical sur mesure, parfait pour mon cabinet. Professionnalisme et discrétion au top !"
                        </blockquote>
                        <div class="testimonial-author"><i class="fas fa-user-md"></i> Dr. Isabelle Fontaine, Médecin généraliste</div>
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
                        <p><span class="contact-icon"><i class="fas fa-envelope"></i></span> Email : <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?></a></p>
                        <p><span class="contact-icon"><i class="fas fa-phone-alt"></i></span> Téléphone : <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                        <p><span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span> Disponible à Genève et en Suisse romande – Travail à distance ou sur site</p>
                        <div class="cta-block mt-4 p-4 bg-light rounded">
                            <h4>Besoin d'un devis personnalisé ?</h4>
                            <p>N'hésitez pas à me contacter pour discuter de vos besoins spécifiques.</p>
                            <a href="#" class="cta-button cta-highlight">Réservez un appel découverte GRATUIT !</a>
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