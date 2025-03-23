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
                        <h1 class="hero-title fade-in">Secrétaire médicale à Genève et Suisse romande</h1>
                        <h2 class="hero-subtitle fade-in fade-in-delay-1">Services de secrétariat médical et administratif sur Genève et en Suisse Romande</h2>
                        
                        <p class="hero-text fade-in fade-in-delay-2">Vous êtes une entreprise, un cabinet médical ou une agence d’intérim à la recherche d’une secrétaire expérimentée à Genève ?<br>
                        <strong>Gagnez en efficacité, flexibilité et sérénité en externalisant votre secrétariat.</strong></p>
                        
                        <div class="hero-feature-list">
                            <div class="hero-feature-item fade-in fade-in-delay-1">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>Vous manquez de temps pour gérer vos tâches administratives ?</span>
                            </div>
                            <div class="hero-feature-item fade-in fade-in-delay-2">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>Besoin urgent d'une secrétaire médicale compétente pour une mission temporaire ou un remplacement à Genève ?</span>
                            </div>
                            <div class="hero-feature-item fade-in fade-in-delay-3">
                                <span class="feature-icon"><i class="fas fa-check"></i></span>
                                <span>Vous souhaitez externaliser votre secrétariat médical pour vous recentrer sur votre métier ?</span>
                            </div>
                        </div>
                        
                        <p class="hero-text fade-in fade-in-delay-3"><strong>➜ Confiez-moi votre gestion administrative et concentrez-vous pleinement sur votre activité.</strong></p>
                        
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-accent btn-lg btn-with-icon fade-in fade-in-delay-3">Réserver un appel gratuit <i class="fas fa-arrow-right"></i></a>
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
                <h2>Optimisez votre organisation administrative à Genève</h2>
                <p>Services de secrétariat externalisés adaptés aux besoins des entreprises, indépendants et professionnels de santé en Suisse Romande</p>
            </div>
        </div>
    </section>

    <!-- Section 2: Services - Structure en 2 colonnes -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Mes services de secrétariat externalisé à Genève</h2>
            <p class="section-subtitle">Des solutions efficaces et flexibles pour répondre aux exigences des entreprises, agences d'intérim, indépendants et cabinets médicaux</p>
            
            <!-- Structure en 2 colonnes -->
            <div class="row">
                <!-- Colonne gauche pour les services médicaux et administratifs -->
                <div class="col-md-6">
                    <h3 class="service-column-title fade-in">Secrétariat Médical et Gestion Administrative</h3>
                    <div class="service-card fade-in">
                        <div class="service-icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <h3 class="service-title">Secrétariat Médical</h3>
                        <ul class="service-list">
                            <li>Transcription et comptes-rendus médicaux</li>
                            <li>Facturation médicale Tarmed, gestion LAMal/LAA</li>
                            <li>Prise de rendez-vous patients</li>
                            <li>Accueil téléphonique & gestion du standard médical</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis<i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="service-card fade-in fade-in-delay-1">
                        <div class="service-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="service-title">Gestion Administrative Générale</h3>
                        <ul class="service-list">
                            <li>Organisation d'agenda et planification</li>
                            <li>Gestion des emails, courriers et appels entrants</li>
                            <li>Mise en forme professionnelle de documents</li>
                            <li>Organisation et classement documentaire</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis  <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <!-- Colonne droite pour l'assistanat commercial et la comptabilité -->
                <div class="col-md-6">
                    <h3 class="service-column-title fade-in fade-in-delay-1">Assistanat Commercial & Comptabilité</h3>
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
                        <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="service-card fade-in fade-in-delay-3">
                        <div class="service-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <h3 class="service-title">Comptabilité & Facturation</h3>
                        <ul class="service-list">
                            <li>Suivi des factures clients/fournisseurs</li>
                            <li>Relances et gestion des paiements</li>
                            <li>Traitement administratif des créances</li>
                            <li>Préparation comptable & documents pour fiduciaires</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#contact" class="btn btn-accent btn-lg">Réserver votre consultation gratuite</a>
            </div>
        </div>
    </section>
    
    <!-- Section image pleine largeur avec texte -->
    <section class="full-image-section" style="background-image: url('<?php echo esc_url(content_url('/ima.jpg')); ?>');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="full-image-content">
                <h2>Pourquoi choisir une secrétaire indépendante à Genève ?</h2>
                <p>Bénéficiez de flexibilité, économies et d'une expertise professionnelle sans contraintes d’embauche.</p>
                <a href="#contact" class="btn btn-accent btn-lg">Réservez votre consultation gratuite</a>
            </div>
        </div>
    </section>
    
    <!-- Section 3: Avantages -->
    <section id="avantages" class="advantages-section">
        <div class="container">
            <h2 class="section-title">Les avantages de votre secrétaire indépendante à Genève</h2>
            
            <div class="advantages-row">
                <div class="advantage-card fade-in">
                    <div class="advantage-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="advantage-title">Flexibilité et disponibilité immédiate</h3>
                    <p class="advantage-text">Profitez d'un service adaptable à vos besoins réels, uniquement aux heures nécessaires, sans engagement de durée.</p>
                </div>
                
                <div class="advantage-card fade-in fade-in-delay-1">
                    <div class="advantage-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="advantage-title">Maîtrise de votre budget</h3>
                    <p class="advantage-text">Économisez sur les charges sociales et les frais liés à un poste permanent en externalisant votre secrétariat médical et administratif.</p>
                </div>
                
                <div class="advantage-card fade-in fade-in-delay-2">
                    <div class="advantage-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="advantage-title">Confidentialité et sécurité garanties</h3>
                    <p class="advantage-text">Respect absolu de la confidentialité de vos données sensibles et professionnelles grâce à une gestion sécurisée.</p>
                </div>
                
                <div class="advantage-card fade-in fade-in-delay-3">
                    <div class="advantage-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="advantage-title">Gain de productivité</h3>
                    <p class="advantage-text">Concentrez-vous pleinement sur votre cœur de métier en déléguant efficacement les tâches administratives chronophages.</p>
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
        <h2 class="section-title">Ils m'ont fait confiance à Genève et en Suisse Romande</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card fade-in">
                        <div class="testimonial-quote">
                        "Grâce à ses compétences en secrétariat médical, j'ai pu déléguer efficacement toute la gestion administrative de mon cabinet, tout en me concentrant pleinement sur mes patients."
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
                        "Un vrai gain de temps et une précision remarquable dans la gestion de mes dossiers administratifs. Je recommande sans hésitation ses services externalisés !"
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
                        "Réactivité, professionnalisme et confidentialité absolue. Un partenariat précieux pour assurer le bon fonctionnement de nos services administratifs."
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-image">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="testimonial-info">
                                <h4 class="testimonial-name">Laurent M.</h4>
                                <p class="testimonial-position">Médecin généraliste, Genève</p>
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
            <h2 class="section-title">Tarifs compétitifs pour votre secrétariat externalisé à Genève</h2>
            <p class="section-subtitle">Découvrez des formules flexibles, adaptées à votre budget et sans engagement.</p>
            
            <div class="pricing-row">
                <div class="pricing-card fade-in">
                    <div class="pricing-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="pricing-title">Tarif Horaire Flexible</h3>
                    <p class="pricing-description">Solution idéale pour les missions temporaires et les besoins ponctuels.</p>
                    <div class="pricing-price">
                        35 CHF<span class="pricing-period">/heure</span>
                    </div>
                    <div class="pricing-features">
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Facturation à l'heure
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Sans engagement de durée
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Disponibilité et réactivité garanties
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Minimum de facturation : 2 heures
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
                    <p class="pricing-description">La formule préférée des PME et indépendants pour une gestion régulière.</p>
                    <div class="pricing-price">
                        650 CHF<span class="pricing-period">/mois</span>
                    </div>
                    <div class="pricing-features">
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> 20 heures par mois incluses
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Tarif avantageux de 32.50 CHF/heure (économie de 7%)
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Report des heures non utilisées possible
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Service prioritaire et réactif
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-accent btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="pricing-card fade-in fade-in-delay-2">
                    <div class="pricing-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="pricing-title">Forfait 40h</h3>
                    <p class="pricing-description">Solution complète pour une gestion intensive avec le meilleur rapport qualité-prix.</p>
                    <div class="pricing-price">
                        1150 CHF<span class="pricing-period">/mois</span>
                    </div>
                    <div class="pricing-features">
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> 40 heures par mois
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Tarif préférentiel 28 CHF/heure (économie de 30%)
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Heures reportables sur le mois suivant
                        </div>
                        <div class="pricing-feature feature-included">
                            <i class="fas fa-check"></i> Accès prioritaire et support dédié
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary btn-with-icon">Demander un devis <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="cta-box">
                <h3 class="cta-title">Vous avez des besoins spécifiques ?</h3>
                <p class="cta-text">Contactez-moi pour créer ensemble une solution personnalisée, parfaitement adaptée à votre activité.</p>
                <a href="#contact" class="btn btn-outline">Contactez-moi</a>
            </div>
        </div>
    </section>
    
    <!-- Section 6: À propos -->
    <section id="apropos" class="about-section">
    <div class="container">
        <h2 class="section-title">À propos de votre secrétaire indépendante à Genève</h2>
        
        <div class="row">
            <div class="col-md-12">
                <div class="about-content fade-in fade-in-delay-1">
                    <p class="lead">Diplômée en secrétariat médical à Genève avec plus de 25 ans d'expérience en gestion administrative et secrétariat de direction, je mets mes compétences organisationnelles et mon expertise au service des entreprises, cabinets médicaux et agences d'intérim.</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <!-- Formation et Diplômes -->
            <div class="col-md-6 mb-4">
                <div class="about-card">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Formation et Diplômes</h4>
                    <p>Diplôme de Secrétaire Médicale - École de Santé de Suisse Romande, ESSR Genève</p>
                </div>
            </div>
            
            <!-- Langues -->
            <div class="col-md-6 mb-4">
                <div class="about-card">
                    <div class="card-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>Langues</h4>
                    <ul>
                        <li>Français : langue maternelle</li>
                        <li>Anglais : courant (niveau B2)</li>
                        <li>Italien : intermédiaire (niveau B1)</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <!-- Compétences Bureautiques & Techniques -->
            <div class="col-md-12 mb-4 mt-4">
                <div class="about-card">
                    <div class="card-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h4>Compétences Bureautiques & Techniques</h4>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <ul>
                                <li>Microsoft Office 365 (Word, Excel, Outlook avancés)</li>
                                <li>Dactylographie rapide (270 frappes/minute)</li>
                                <li>TarMed – Facturation médicale suisse</li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-4">
                            <ul>
                                <li>SAP & Gestion Électronique des Documents (GED)</li>
                                <li>PowerPoint (présentations professionnelles)</li>
                                <li>Maîtrise des outils CRM et ERP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Valeurs et qualités personnelles -->
            <div class="col-md-6 mb-4 mt-4">
                <div class="about-card">
                    <div class="card-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4>Valeurs et qualités personnelles</h4>
                    <ul>
                        <li>Discrétion et respect de la confidentialité</li>
                        <li>Rigueur, fiabilité et autonomie</li>
                        <li>Empathie et excellente communication</li>
                        <li>Résistance au stress et réactivité</li>
                    </ul>
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
                        Puis-je faire appel à vos services pour des besoins ponctuels ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p>Absolument ! Mes services sont flexibles et s'adaptent à vos besoins, qu'ils soient ponctuels ou réguliers. Vous pouvez faire appel à moi pour un remplacement, une surcharge temporaire de travail, ou un projet spécifique. Le tarif horaire est parfaitement adapté à ce type de missions ponctuelles, avec un minimum de 2 heures facturées. N'hésitez pas à me contacter pour discuter de votre besoin spécifique.</p>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
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
                        <h3>Besoin d'une assistance rapide ?</h3>
                        <p>Appelez directement.</p>
                        <a href="tel:<?php echo get_theme_mod('contact_phone', '+41 XX XXX XX XX'); ?>" class="btn btn-outline">Appeler maintenant</a>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="f86ff97" title="Formulaire de contact 1"]');?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>