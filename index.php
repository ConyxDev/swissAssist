<?php
/**
 * The main template file for the modern one-page version
 *
 * @package SwissAssist
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Section 1: Hero avec vidéo d'arrière-plan -->
    <section id="accueil" class="hero-section">
        <!-- Conteneur vidéo en arrière-plan -->
        <div class="video-container">
            <video autoplay muted loop playsinline id="hero-video">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/videoHeader3.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="highlight-title">Secrétaire indépendante</h1>
                    <h2 id="title-description" class="highlight-title text-white">
                        Services de secrétariat médical et administratif sur Genève et à distance.
                    </h2>
                        <h3 id="subtitle-description" class="highlight-title">Une secrétaire expérimentée au service de votre entreprise, 
                        <br>spécialisée dans le secrétariat médical.
                        <br>Flexibilité – Professionnalisme – Réactivité
                        </h3>
                    

                    
                    <ul class="value-props">
                        <li><span class="check-icon"><i class="fas fa-check"></i></span> Vous manquez de temps pour gérer vos tâches administratives ?</li>
                        <li><span class="check-icon"><i class="fas fa-check"></i></span> Vous cherchez une secrétaire pour une mission temporaire ou un remplacement en sein de votre entreprise ?</li>
                        <li><span class="check-icon"><i class="fas fa-check"></i></span> Vous souhaitez externaliser votre secrétariat médical ?</li>
                    </ul>
                    
                    <p class="highlight">➜ Confiez-moi vos tâches administratives et concentrez-vous sur l'essentiel !</p>
                    
                    <p class="location"><i class="fa-solid fa-location-dot pin-icon"></i> Basée à Genève, j'interviens sur tout le canton de Genève et à distance.</p>
                    
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-gradient btn-lg btn-icon">Réserver un appel <i class="fas fa-arrow-right"></i></a>
                        <a href="#services" class="btn btn-secondary btn-lg">Découvrir mes services</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="hero-image">
                        <?php echo wp_get_attachment_image( get_theme_mod( 'hero_image' ), 'full', false, array( 'class' => 'img-fluid' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section image séparatrice 1 -->
    <div class="section-separator">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/desk2.jpg" alt="Espace de travail organisé">
    </div>

    <!-- Section 2: Services proposés -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Mes services professionnels</h2>
            <p class="lead text-center">Des solutions adaptées aux besoins des entrepreneurs, PME et professionnels de santé.</p>
            
            <div class="row">
                <div class="col-md-6 fade-in">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-tasks"></i></div>
                        <h3>Gestion Administrative</h3>
                        <ul>
                            <li>Gestion d'agenda et planification de rendez-vous</li>
                            <li>Traitement des emails et courriers</li>
                            <li>Saisie et mise en page de documents</li>
                            <li>Organisation et classement</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in fade-in-delay-1">
                    <div class="service-card">
                    <div class="service-icon"><i class="fas fa-hospital"></i></div>
                        <h3>Secrétariat Médical</h3>
                        <ul>
                            <li>Transcription et comptes-rendus médicaux</li>
                            <li>Gestion de la facturation médicale et Tarmed</li>
                            <li>Prise de rendez-vous patients</li>
                            <li>Gestion du standard téléphonique</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 fade-in fade-in-delay-2">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-headset"></i></div>
                        <h3>Assistanat Commercial</h3>
                        <ul>
                            <li>Suivi des commandes et gestion des devis</li>
                            <li>Relation clients et fournisseurs</li>
                            <li>Service après-vente externalisé</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in fade-in-delay-3">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-file-invoice"></i></div>
                        <h3>Comptabilité & Facturation</h3>
                        <ul>
                            <li>Saisie et suivi des factures clients/fournisseurs</li>
                            <li>Relance des paiements et gestion des créances</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    <a href="#contact" class="btn btn-gradient btn-lg">Demandez un devis personnalisé</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section image pleine largeur avec texte -->
    <section class="full-image-section" style="background-image: url('<?php echo esc_url(content_url('/uploads/2023/desk-workspace-2.jpg')); ?>');">
        <div class="full-image-content">
            <h2>Pourquoi choisir une assistante indépendante?</h2>
            <p>Flexibilité, économies, expertise professionnelle sans les contraintes d'un contrat de travail.</p>
            <a href="#contact" class="btn btn-gradient btn-lg">Contactez-moi</a>
        </div>
    </section>

    <!-- Section 3: Avantages -->
    <section id="avantages" class="advantages-section">
        <div class="container">
            <h2 class="section-title">Les avantages de travailler avec moi</h2>
            
            <div class="row">
                <div class="col-md-6 col-lg-3 fade-in">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-calendar-alt"></i></div>
                        <h3>Flexibilité totale</h3>
                        <p>Payez uniquement pour les heures réellement travaillées, sans engagement sur la durée.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in fade-in-delay-1">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-coins"></i></div>
                        <h3>Économies garanties</h3>
                        <p>Aucune charge sociale, pas de frais fixes liés à un poste permanent.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in fade-in-delay-2">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-lock"></i></div>
                        <h3>Confidentialité</h3>
                        <p>Travail sécurisé et respect strict de la confidentialité de vos données.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 fade-in fade-in-delay-3">
                    <div class="advantage-card">
                        <div class="advantage-icon"><i class="fas fa-rocket"></i></div>
                        <h3>Productivité</h3>
                        <p>Déléguez vos tâches chronophages et concentrez-vous sur votre expertise.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    <a href="#contact" class="btn btn-accent btn-lg btn-icon">Découvrir mon expertise <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section image séparatrice 2 -->
    <div class="section-separator">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/desk1.jpg" alt="Espace de travail professionnel">
    </div>

    <!-- Section 4: Témoignages clients -->
    <section id="temoignages" class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Ils m'ont fait confiance</h2>
            
            <div class="row">
                <div class="col-md-6 fade-in">
                    <div class="testimonial-card">
                        <div class="testimonial-icon"><i class="fas fa-quote-right"></i></div>
                        <blockquote>
                            "Grâce à son efficacité et son professionnalisme, j'ai pu déléguer toute ma gestion administrative et me concentrer sur mon entreprise."
                        </blockquote>
                        <div class="testimonial-author">
                            <i class="fas fa-user-circle fa-2x"></i>
                            <div>
                                <strong>David G.</strong><br>
                                <span>Fondateur "Infirmier à domicile", Genève</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 fade-in fade-in-delay-1">
                    <div class="testimonial-card">
                        <div class="testimonial-icon"><i class="fas fa-quote-right"></i></div>
                        <blockquote>
                            "Un vrai gain de temps et une grande rigueur dans le suivi des tâches. Je recommande vivement !"
                        </blockquote>
                        <div class="testimonial-author">
                            <i class="fas fa-user-circle fa-2x"></i>
                            <div>
                                <strong>Marie L.</strong><br>
                                <span>Thérapeute indépendante, Lausanne</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    <a href="#contact" class="btn btn-gradient btn-lg btn-icon">Rejoignez mes clients satisfaits <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Contact & CTA -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Contactez-moi</h2>
            <p class="lead text-center">Parlons de vos besoins et de comment je peux vous aider à gagner du temps.</p>
            
            <div class="row">
                <div class="col-lg-4 fade-in">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <span class="contact-icon"><i class="fas fa-clock"></i></span>
                            <div class="contact-text">
                                <h4>Horaires</h4>
                                <p>Lundi au vendredi – De 8h à 18h</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p><a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?></a></p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <span class="contact-icon"><i class="fas fa-phone-alt"></i></span>
                            <div class="contact-text">
                                <h4>Téléphone</h4>
                                <p><a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                            <div class="contact-text">
                                <h4>Localisation</h4>
                                <p>Genève – Disponible en Suisse romande et à distance</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cta-block mt-4">
                        <h4>Besoin d'une solution rapide ?</h4>
                        <p>Réservez un appel découverte de 15 minutes pour discuter de vos besoins.</p>
                        <a href="#" class="btn btn-accent btn-lg">Réserver un appel gratuit</a>
                    </div>
                </div>
                
                <div class="col-lg-8 fade-in fade-in-delay-1">
                    <div class="contact-form">
                        <?php 
                        // Affiche le formulaire de contact si un plugin est installé
                        if (shortcode_exists('contact-form-7')) {
                            echo do_shortcode('[contact-form-7 id="' . get_theme_mod('contact_form_id', '') . '" title="Formulaire de contact"]');
                        } else {
                            // Formulaire de contact simple en HTML
                        ?>
                        <form id="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Votre nom</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Votre email</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Votre téléphone</label>
                                        <input type="tel" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label">Sujet</label>
                                        <select id="subject" name="subject" class="form-control">
                                            <option value="devis">Demande de devis</option>
                                            <option value="information">Demande d'information</option>
                                            <option value="rdv">Prise de rendez-vous</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">Votre message</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Envoyer votre message</button>
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

<!-- Bouton retour en haut -->
<a href="#" id="back-to-top" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>

<?php
get_footer();