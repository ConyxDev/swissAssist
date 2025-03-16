<?php
/**
 * The main template file for the modern one-page version
 *
 * @package lemanassist
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Section 1: Hero Section -->
    <section id="accueil" class="hero-section">
        <!-- Vidéo d'arrière-plan -->
        <div class="hero-video-container">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/videoHeader3.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
        </div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1 class="hero-title fade-in">Secrétaire Médicale à Genève</h1>
                        <h2 class="hero-subtitle fade-in fade-in-delay-1">Services de secrétariat médical et administratif sur Genève et à distance</h2>
                        
                        <p class="hero-text fade-in fade-in-delay-2">Une secrétaire expérimentée au service de votre entreprise,<br> spécialisée dans le secrétariat médical.<br><br> Flexibilité – Professionnalisme – Réactivité</p>
                        
                        <div class="hero-feature-list">
                            <div class="hero-feature-item fade-in fade-in-delay-1">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>Vous manquez de temps pour gérer vos tâches administratives ?</span>
                            </div>
                            <div class="hero-feature-item fade-in fade-in-delay-2">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>À la recherche d’une secrétaire expérimentée pour un remplacement ou une mission temporaire ?<br> Optez pour une solution flexible et immédiate pour assurer la continuité de votre activité !</span>
                            </div>
                            <div class="hero-feature-item fade-in fade-in-delay-3">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>Vous souhaitez externaliser votre secrétariat médical ?</span>
                            </div>
                        </div>
                        
                        <p class="hero-text fade-in fade-in-delay-3"><strong>➜ Confiez-moi vos tâches administratives et concentrez-vous sur l'essentiel !</strong></p>
                        
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-accent btn-lg btn-with-icon fade-in fade-in-delay-3">Réserver un appel <i class="fas fa-arrow-right"></i></a>
                            <a href="#services" class="btn btn-outline btn-lg fade-in fade-in-delay-3">Découvrir mes services</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="hero-image fade-in fade-in-delay-2">
                        <?php echo wp_get_attachment_image( get_theme_mod( 'hero_image' ), 'full', false, array( 'class' => 'img-fluid' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Formes décoratives -->
        <div class="shape-blob shape-blob-1"></div>
        <div class="shape-blob shape-blob-2"></div>
    </section>
    
    <!-- Section image pleine largeur avec image de bureau minimaliste -->
    <section class="full-image-section workspace-image">
        <div class="hero-overlay workspace-overlay"></div>
        <div class="container">
            <div class="full-image-content">
                <h2>Une organisation efficace pour votre entreprise</h2>
                <p>Des services de secrétariat adaptés aux besoins des professionnels modernes</p>
            </div>
        </div>
    </section>

    <!-- Section 2: Services - Structure en 2 colonnes -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Mes Services Professionnels</h2>
            <p class="section-subtitle">Des solutions adaptées aux besoins des entrepreneurs, PME et professionnels de santé</p>
            
            <!-- Structure en 2 colonnes -->
            <div class="row">
                <!-- Colonne gauche pour les services médicaux et administratifs -->
                <div class="col-md-6">
                    <h3 class="service-column-title fade-in">Services médicaux et administratifs</h3>
                    <div class="service-card fade-in">
                        <div class="service-icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <h3 class="service-title">Secrétariat Médical</h3>
                        <ul class="service-list">
                            <li>Transcription et comptes-rendus médicaux</li>
                            <li>Gestion de la facturation Tarmed</li>
                            <li>Prise de rendez-vous patients</li>
                            <li>Gestion du standard téléphonique</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">En savoir plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="service-card fade-in fade-in-delay-1">
                        <div class="service-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="service-title">Gestion Administrative</h3>
                        <ul class="service-list">
                            <li>Gestion d'agenda et planification</li>
                            <li>Traitement des emails et courriers</li>
                            <li>Mise en page de documents</li>
                            <li>Organisation et classement</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">En savoir plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Colonne droite pour l'assistanat commercial et la comptabilité -->
                <div class="col-md-6">
                    <h3 class="service-column-title fade-in fade-in-delay-1">Services commerciaux et financiers</h3>
                    <div class="service-card fade-in fade-in-delay-2">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="service-title">Assistanat Commercial</h3>
                        <ul class="service-list">
                            <li>Suivi des commandes et devis</li>
                            <li>Relation clients et fournisseurs</li>
                            <li>Service après-vente externalisé</li>
                            <li>Support administratif aux ventes</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">En savoir plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="service-card fade-in fade-in-delay-3">
                        <div class="service-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h3 class="service-title">Comptabilité & Facturation</h3>
                        <ul class="service-list">
                            <li>Suivi des factures clients/fournisseurs</li>
                            <li>Relance des paiements</li>
                            <li>Gestion des créances</li>
                            <li>Préparation des documents comptables</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">En savoir plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#contact" class="btn btn-accent btn-lg">Demander un devis personnalisé</a>
            </div>
        </div>
    </section>
    
    <!-- Section image pleine largeur avec texte -->
    <section class="full-image-section" style="background-image: url('<?php echo esc_url(content_url('/ima.jpg')); ?>');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="full-image-content">
                <h2>Pourquoi choisir une assistante indépendante?</h2>
                <p>Flexibilité, économies, expertise professionnelle sans les contraintes d'un contrat de travail.</p>
                <a href="#contact" class="btn btn-accent btn-lg">Contactez-moi</a>
            </div>
        </div>
    </section>
    
    <!-- Section 3: Avantages -->
    <section id="avantages" class="advantages-section">
        <div class="container">
            <h2 class="section-title">Mon engagement à vos côtés</h2>
            
            <div class="advantages-row">
                <div class="advantage-card fade-in">
                    <div class="advantage-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="advantage-title">Flexibilité totale</h3>
                    <p class="advantage-text">Payez uniquement pour les heures réellement travaillées, sans engagement sur la durée.</p>
                </div>
                
                <div class="advantage-card fade-in fade-in-delay-1">
                    <div class="advantage-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="advantage-title">Économies garanties</h3>
                    <p class="advantage-text">Aucune charge sociale, pas de frais fixes liés à un poste permanent.</p>
                </div>
                
                <div class="advantage-card fade-in fade-in-delay-2">
                    <div class="advantage-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="advantage-title">Confidentialité</h3>
                    <p class="advantage-text">Travail sécurisé et respect strict de la confidentialité de vos données.</p>
                </div>
                
                <div class="advantage-card fade-in fade-in-delay-3">
                    <div class="advantage-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="advantage-title">Productivité</h3>
                    <p class="advantage-text">Déléguez vos tâches chronophages et concentrez-vous sur votre expertise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section séparation avec image 2 -->
    <section class="full-image-section workspace-image-2">
        <div class="hero-overlay workspace-overlay-2"></div>
    </section>
    
    <!-- Section 4: Témoignages -->
    <section id="temoignages" class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Ils m'ont fait confiance</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card fade-in">
                        <div class="testimonial-quote">
                            "Grâce à son efficacité et son professionnalisme, j'ai pu déléguer toute ma gestion administrative et me concentrer sur mon entreprise."
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-image">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="testimonial-info">
                                <h4 class="testimonial-name">David G.</h4>
                                <p class="testimonial-position">Fondateur "Infirmier à domicile", Genève</p>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
                
                <div class="col-md-6">
                    <div class="testimonial-card fade-in fade-in-delay-1">
                        <div class="testimonial-quote">
                            "Un vrai gain de temps et une grande rigueur dans le suivi des tâches. Je recommande vivement !"
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-image">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="testimonial-info">
                                <h4 class="testimonial-name">Marie L.</h4>
                                <p class="testimonial-position">Thérapeute indépendante, Lausanne</p>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card fade-in fade-in-delay-1">
                        <div class="testimonial-quote">
                            "Un vrai gain de temps et une grande rigueur dans le suivi des tâches. Je recommande vivement !"
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-image">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="testimonial-info">
                                <h4 class="testimonial-name">Marie L.</h4>
                                <p class="testimonial-position">Thérapeute indépendante, Lausanne</p>
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 5: Tarifs -->
    <section id="tarifs" class="pricing-section">
        <div class="container">
            <h2 class="section-title">Mes tarifs</h2>
            <p class="section-subtitle">Des formules adaptées à vos besoins, flexibles et sans engagement</p>
            
            <div class="pricing-row">
                <div class="pricing-card fade-in">
                    <div class="pricing-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="pricing-title">Tarif horaire</h3>
                    <p class="pricing-description">Idéal pour les missions ponctuelles ou les besoins variables</p>
                    <div class="pricing-price">
                        40 CHF<span class="pricing-period">/heure</span>
                    </div>
                    <div class="pricing-features">
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Facturation à l'heure
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Sans engagement
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Réactivité garantie
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Minimum 2 heures
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="pricing-card popular fade-in fade-in-delay-1">
                    <div class="popular-badge">Populaire</div>
                    <div class="pricing-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="pricing-title">Forfait 20h</h3>
                    <p class="pricing-description">Pour les besoins réguliers avec un tarif avantageux</p>
                    <div class="pricing-price">
                        700 CHF<span class="pricing-period">/mois</span>
                    </div>
                    <div class="pricing-features">
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> 20 heures par mois
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> 35 CHF/heure (économie de 12,5%)
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Report des heures non utilisées
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Engagement mensuel
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-accent btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="pricing-card fade-in fade-in-delay-2">
                    <div class="pricing-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="pricing-title">Forfait 40h</h3>
                    <p class="pricing-description">Solution complète pour les professionnels ayant des besoins importants</p>
                    <div class="pricing-price">
                        1200 CHF<span class="pricing-period">/mois</span>
                    </div>
                    <div class="pricing-features">
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> 40 heures par mois
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> 30 CHF/heure (économie de 25%)
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Report des heures non utilisées
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Service prioritaire
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="cta-box">
                <h3 class="cta-title">Besoin d'une solution sur mesure ?</h3>
                <p class="cta-text">Je propose également des forfaits personnalisés adaptés à vos besoins spécifiques.</p>
                <a href="#contact" class="btn btn-outline">Contactez-moi</a>
            </div>
        </div>
    </section>
    
    <!-- Section 6: À propos -->
    <section id="apropos" class="about-section">
        <div class="container">
            <h2 class="section-title">À propos de moi</h2>
            
            <div class="row align-items-center">
<!--                 <div class="col-md-5">
                    <div class="about-image fade-in">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portrait.jpg" alt="Portrait de la secrétaire médicale">
                    </div>
                </div> -->
                
                <div class="col-md-7">
                    <div class="about-content fade-in fade-in-delay-1">
                        <p class="lead">Diplômée en secrétariat médical et forte de plus de 15 ans en tant que secrétaire de direction, je mets mon sens de l'organisation et mon savoir-faire au service de votre entreprise.</p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h4>Formation</h4>
                                <p>Diplôme de Secrétaire Médicale - École de Santé de Suisse Romande, ESSR Genève (2024)</p>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h4>Langues</h4>
                                <ul>
                                    <li>Français - Langue maternelle</li>
                                    <li>Anglais - Niveau B2</li>
                                    <li>Italien - Niveau B1</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card-icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <h4>Compétences Bureautiques</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li>TarMed</li>
                                            <li>Microsoft Office 365</li>
                                            <li>Excel (Niveau avancé)</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Word (Niveau avancé)</li>
                                            <li>Dactylographie rapide (270 fpm)</li>
                                            <li>Outlook</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 7: FAQ -->
    <section id="faq" class="faq-section">
        <div class="container">
            <h2 class="section-title">Questions fréquentes</h2>
            
            <div class="faq-container">
                <div class="faq-item active">
                    <div class="faq-question">
                        Comment choisir un bon service de secrétariat externalisé ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Pour choisir un bon service de secrétariat externalisé, vérifiez l'expérience et les qualifications du prestataire, particulièrement dans votre secteur d'activité. Assurez-vous qu'il offre les services dont vous avez besoin, qu'il peut s'adapter à vos horaires et qu'il garantit la confidentialité des données. Un bon prestataire doit être réactif, flexible et transparent sur ses tarifs.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Comment est assurée la confidentialité des données dans un secrétariat médical externalisé ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>La confidentialité des données médicales est assurée par plusieurs mesures : signature d'un accord de confidentialité strict, utilisation de systèmes informatiques sécurisés avec chiffrement des données, accès limité aux informations sensibles, et respect rigoureux des réglementations suisses en matière de protection des données de santé. Je m'engage également à suivre les mêmes protocoles de confidentialité que les cabinets médicaux.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Quels sont les avantages d'externaliser le secrétariat médical ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Externaliser votre secrétariat médical présente de nombreux avantages : réduction des coûts (pas de charges sociales, d'espace de bureau ou d'équipement à fournir), flexibilité des horaires et du volume de travail, expertise spécialisée dans le domaine médical, continuité de service sans interruption due aux congés ou absences, et possibilité de vous concentrer sur votre cœur de métier - les soins aux patients.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Comment se déroule la prise en charge d'un nouveau client ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>La prise en charge d'un nouveau client commence par une réunion de découverte (en personne ou visioconférence) pour comprendre vos besoins spécifiques. Nous établissons ensemble un cahier des charges précis et je vous propose une solution adaptée. Après signature du contrat, une phase d'intégration permet de me familiariser avec vos outils et processus. Un suivi régulier est ensuite mis en place pour ajuster les prestations si nécessaire.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Puis-je faire appel à vos services pour des besoins ponctuels ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Absolument ! Mes services sont flexibles et s'adaptent à vos besoins, qu'ils soient ponctuels ou réguliers. Vous pouvez faire appel à moi pour un remplacement, une surcharge temporaire de travail, ou un projet spécifique. Le tarif horaire est parfaitement adapté à ce type de missions ponctuelles, avec un minimum de 2 heures facturées. N'hésitez pas à me contacter pour discuter de votre besoin spécifique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 8: Contact -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Contactez-moi</h2>
            <p class="section-subtitle">Discutons de vos besoins et trouvons ensemble la solution adaptée à votre entreprise</p>
            
            <div class="contact-wrapper">
                <!-- Colonne gauche: Informations de contact -->
                <div class="contact-info-column fade-in">
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Adresse</h4>
                                <p>Genève, Suisse</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Horaires</h4>
                                <p>Lundi - Vendredi: 8h - 18h<br>Samedi - Dimanche: Fermé</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Email</h4>
                                <p><a href="mailto:<?php echo antispambot(get_theme_mod('contact_email', 'contact@lemanassist.ch')); ?>"><?php echo antispambot(get_theme_mod('contact_email', 'contact@lemanassist.ch')); ?></a></p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Téléphone</h4>
                                <p><a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>"><?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?></a></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA dans la colonne d'information -->
                    <div class="contact-cta">
                        <h3>Besoin d'une assistance rapide?</h3>
                        <p>Appelez directement ou prenez rendez-vous pour un appel vidéo.</p>
                        <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>" class="btn btn-outline">Appeler maintenant</a>
                    </div>
                </div>
                
                <!-- Colonne droite: Formulaire de contact -->
                <div class="contact-form-column fade-in fade-in-delay-1">
                    <div class="contact-form">
                        <h3>Envoyez-moi un message</h3>
                        
                        <?php
                        // Messages de succès/erreur (à implémenter dans functions.php)
                        if (isset($_GET['status']) && $_GET['status'] == 'success') {
                            echo '<div class="contact-success">Votre message a été envoyé avec succès. Je vous répondrai dans les plus brefs délais.</div>';
                        } elseif (isset($_GET['status']) && $_GET['status'] == 'error') {
                            echo '<div class="contact-error">Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer.</div>';
                        }
                        ?>
                        
                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <input type="hidden" name="action" value="submit_contact_form">
                            <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                            
                            <div class="form-row">
                                <div class="form-group form-group-half">
                                    <label for="nom" class="form-label">Nom *</label>
                                    <input type="text" id="nom" name="nom" class="form-control" required>
                                </div>
                                
                                <div class="form-group form-group-half">
                                    <label for="prenom" class="form-label">Prénom *</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group form-group-half">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                
                                <div class="form-group form-group-half">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="tel" id="telephone" name="telephone" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="sujet" class="form-label">Sujet *</label>
                                <select id="sujet" name="sujet" class="form-select" required>
                                    <option value="">Sélectionnez un sujet</option>
                                    <option value="Demande de devis">Demande de devis</option>
                                    <option value="Secrétariat médical">Secrétariat médical</option>
                                    <option value="Gestion administrative">Gestion administrative</option>
                                    <option value="Assistanat commercial">Assistanat commercial</option>
                                    <option value="Comptabilité et facturation">Comptabilité et facturation</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">Message *</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            
                            <div class="form-check">
                                <input type="checkbox" id="rgpd" name="rgpd" class="form-check-input" required>
                                <label for="rgpd" class="form-check-label">J'accepte que mes données personnelles soient utilisées uniquement pour me recontacter.</label>
                            </div>
                            
                            <div class="form-submit">
                                <button type="submit" class="btn btn-accent">Envoyer le message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>