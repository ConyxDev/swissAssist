<?php
/**
 * The template for displaying the front page
 *
 * @package SwissAssist
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Section 1: Accroche et proposition de valeur -->
    <section id="hero" class="hero-section video-background">
    <!-- Conteneur vidéo en arrière-plan -->
    <div class="video-container">
        <video autoplay muted loop playsinline id="hero-video">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/videoHeader.mp4" type="video/mp4">
            <!-- Vous pouvez ajouter d'autres formats pour une meilleure compatibilité -->
            <!-- <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/votre-video.webm" type="video/webm"> -->
        </video>
        <div class="video-overlay"></div>
    </div>
    
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8">
                <h1>Assistante administrative indépendante à Genève et en Suisse romande</h1>
                <p class="subtitle">Une secrétaire expérimentée au service de votre entreprise, sans contrainte d'embauche. Flexibilité – Professionnalisme – Réactivité</p>
                
                <ul class="value-props">
                    <li><span class="check-icon">✔</span> Vous êtes un entrepreneur, une PME ou un professionnel libéral et vous manquez de temps pour gérer vos tâches administratives ?</li>
                    <li><span class="check-icon">✔</span> Vous cherchez une assistante de confiance, compétente et flexible, sans les contraintes d'un contrat de travail ?</li>
                    <li><span class="check-icon">✔</span> Vous souhaitez optimiser votre gestion quotidienne et vous concentrer sur votre cœur de métier ?</li>
                </ul>
                
                <p>Je vous propose des services de secrétariat externalisé adaptés à vos besoins, sans engagement et à la carte.</p>
                
                <p class="highlight">➜ Confiez-moi vos tâches administratives et concentrez-vous sur l'essentiel !</p>
                
                <p class="location"><span class="pin-icon">📍</span> Basée à Genève, j'interviens dans toute la Suisse romande et à distance.</p>
                
                <ul class="credentials">
                    <li><span class="check-icon">✅</span> Plus de 25 ans d'expérience en gestion administrative</li>
                    <li><span class="check-icon">✅</span> Maîtrise des outils bureautiques avancés (Office 365, GED, TarMed, SAP)</li>
                    <li><span class="check-icon">✅</span> Trilingue : Français – Anglais – Italien</li>
                    <li><span class="check-icon">✅</span> Discrétion et rigueur assurées</li>
                </ul>
            </div>
            <div class="col-md-4">
                <!-- Espace pour votre image -->
                <div class="hero-image">
                    <!-- Remplacer par votre propre image -->
                    <?php echo wp_get_attachment_image( get_theme_mod( 'hero_image' ), 'full', false, array( 'class' => 'img-fluid' ) ); ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#contact" class="cta-button">Réservez un appel découverte GRATUIT</a>
            </div>
        </div>
    </div>
</section>

    <!-- Section 2: Services proposés -->
    <section id="services" class="services-section">
        <div class="container">
            <h2>Mes services professionnels</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">💼</div>
                        <h3>GESTION ADMINISTRATIVE</h3>
                        <ul>
                            <li>Gestion d'agenda et planification de rendez-vous</li>
                            <li>Traitement des emails et courriers</li>
                            <li>Saisie et mise en page de documents</li>
                            <li>Gestion des bases de données et CRM</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">📑</div>
                        <h3>GESTION COMPTABLE & FACTURATION</h3>
                        <ul>
                            <li>Saisie et suivi des factures clients/fournisseurs</li>
                            <li>Relance des paiements et gestion des créances</li>
                            <li>Préparation des déclarations comptables pour votre fiduciaire</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">📞</div>
                        <h3>ASSISTANAT COMMERCIAL & CLIENTS</h3>
                        <ul>
                            <li>Suivi des commandes et gestion des devis</li>
                            <li>Relation clients et fournisseurs</li>
                            <li>Service après-vente externalisé</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="service-icon">🏥</div>
                        <h3>SECRÉTARIAT MÉDICAL</h3>
                        <ul>
                            <li>Transcription et frappe de comptes-rendus médicaux</li>
                            <li>Gestion de la facturation médicale et Tarmed</li>
                            <li>Prise de rendez-vous patients</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="custom-service">👉 Besoin d'un service sur mesure ? Contactez-moi pour une solution adaptée !</p>
                    <a href="#contact" class="cta-button">Demandez un devis personnalisé</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Pourquoi choisir une assistante indépendante ? -->
    <section id="advantages" class="advantages-section">
        <div class="container">
            <h2>Pourquoi choisir une assistante indépendante ?</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon">✅</div>
                        <h3>Flexibilité totale</h3>
                        <p>Payez uniquement pour les heures réellement travaillées</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon">✅</div>
                        <h3>Aucune charge salariale</h3>
                        <p>Pas de contrat de travail, pas d'engagement</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon">✅</div>
                        <h3>Confidentialité & professionnalisme</h3>
                        <p>Travail structuré et sécurisé</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon">✅</div>
                        <h3>Gagnez en productivité</h3>
                        <p>Déléguez vos tâches chronophages</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="expertise">👩‍💼 Une expertise adaptée aux besoins des entrepreneurs, PME et indépendants.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Témoignages clients -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2>Ils m'ont fait confiance !</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-icon">📢</div>
                        <blockquote>
                            "Grâce à son efficacité et son professionnalisme, j'ai pu déléguer toute ma gestion administrative et me concentrer sur mon entreprise."
                        </blockquote>
                        <div class="testimonial-author">👉 Jean Dupont, fondateur de Startup Genève</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-icon">📢</div>
                        <blockquote>
                            "Un vrai gain de temps et une grande rigueur dans le suivi des tâches. Je recommande vivement !"
                        </blockquote>
                        <div class="testimonial-author">👉 Marie Lefebvre, thérapeute indépendante</div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#contact" class="cta-button">Rejoignez mes clients satisfaits</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Contact & CTA -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Contactez-moi</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><span class="contact-icon">🕘</span> Disponible du lundi au vendredi – De 8h à 18h</p>
                        <p><span class="contact-icon">📩</span> Email : <a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'votre@email.com')); ?></a></p>
                        <p><span class="contact-icon">📞</span> Téléphone : <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                        <p><span class="contact-icon">📍</span> Basée à Genève – Disponible en Suisse romande et à distance</p>
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
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="cta-button cta-highlight">Réservez un appel découverte GRATUIT !</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();