/*
Theme Name: LemanAssist One-Page
Theme URI: https://lemanassist.ch/
Author: LemanAssist
Author URI: https://lemanassist.ch/
Description: Thème personnalisé one-page pour secrétaire administrative et médicale indépendante à Genève
Version: 2.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: lemanassist
*/

/* Variables de couleurs principales - Palette professionnelle et moderne */
:root {
    --main-color: #3e5c6e;       /* Bleu-gris foncé - couleur principale */
    --main-light: #5d7d91;       /* Bleu-gris moyen */
    --main-lighter: #8ba3b3;     /* Bleu-gris clair */
    --main-lightest: #d1dbe1;    /* Bleu-gris très clair */
    --accent-color: #c9a987;     /* Taupe/beige chaleureux */
    --accent-light: #e5d5c0;     /* Taupe clair */
    --accent-dark: #a58457;      /* Taupe foncé */
    --dark-color: #293642;       /* Bleu très foncé presque noir */
    --text-color: #3a4a59;       /* Couleur de texte principale */
    --text-light: #6e7b85;       /* Texte secondaire */
    --bg-light: #f7f9fa;         /* Fond clair */
    --white: #ffffff;            /* Blanc */
    --success: #5a7767;          /* Vert éteint */
    --error: #c75c5c;            /* Rouge éteint */
    --warning: #d9b26f;          /* Jaune/ambre éteint */
    --border-color: #e4e9ed;     /* Couleur de bordure */
    
    /* Effets et espacements */
    --shadow-sm: 0 2px 5px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.06);
    --shadow-lg: 0 8px 24px rgba(0, 0, 0, 0.08);
    --transition: all 0.3s ease-in-out;
    --border-radius-sm: 4px;
    --border-radius: 8px;
    --border-radius-lg: 12px;
    --section-spacing: 100px;
    --container-width: 1200px;
    
    /* Typographie */
    --font-primary: 'Plus Jakarta Sans', 'Helvetica Neue', sans-serif;
    --font-secondary: 'Inter', 'Segoe UI', sans-serif;
    --font-mono: 'Roboto Mono', monospace;
}

/* Reset & base */
*, *::before, *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    font-size: 16px;
    scroll-behavior: smooth;
    scroll-padding-top: 90px;
}

body {
    font-family: var(--font-primary);
    line-height: 1.7;
    color: var(--text-color);
    background-color: var(--white);
    overflow-x: hidden;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
}

a {
    color: var(--main-color);
    text-decoration: none;
    transition: var(--transition);
}

a:hover {
    color: var(--accent-color);
}

ul {
    list-style: none;
}

/* Typographie */
h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-primary);
    line-height: 1.3;
    color: var(--dark-color);
    font-weight: 700;
    margin-bottom: 1rem;
}

h1 {
    font-size: 3.5rem;
    letter-spacing: -0.02em;
    margin-bottom: 1.5rem;
}

h2 {
    font-size: 2.5rem;
    letter-spacing: -0.015em;
    margin-bottom: 1.2rem;
}

h3 {
    font-size: 1.8rem;
    letter-spacing: -0.01em;
}

h4 {
    font-size: 1.4rem;
}

h5 {
    font-size: 1.2rem;
}

h6 {
    font-size: 1rem;
}

p {
    margin-bottom: 1.5rem;
    font-size: 1.05rem;
}

.lead {
    font-size: 1.25rem;
    line-height: 1.6;
    color: var(--text-light);
    margin-bottom: 2rem;
}

/* Layout */
.container {
    width: 100%;
    max-width: var(--container-width);
    margin: 0 auto;
    padding: 0 1.5rem;
}

section {
    padding: var(--section-spacing) 0;
    position: relative;
}

.section-title {
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.section-title:after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: var(--accent-color);
    margin: 1.5rem auto 0;
    border-radius: 2px;
}

.section-subtitle {
    text-align: center;
    color: var(--text-light);
    max-width: 700px;
    margin: -2rem auto 3rem;
    font-size: 1.1rem;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -1rem;
}

[class*="col-"] {
    padding: 0 1rem;
    width: 100%;
}

/* Grille responsive */
.col-1 { width: 8.33%; }
.col-2 { width: 16.66%; }
.col-3 { width: 25%; }
.col-4 { width: 33.33%; }
.col-5 { width: 41.66%; }
.col-6 { width: 50%; }
.col-7 { width: 58.33%; }
.col-8 { width: 66.66%; }
.col-9 { width: 75%; }
.col-10 { width: 83.33%; }
.col-11 { width: 91.66%; }
.col-12 { width: 100%; }

@media (max-width: 992px) {
    .col-md-1 { width: 8.33%; }
    .col-md-2 { width: 16.66%; }
    .col-md-3 { width: 25%; }
    .col-md-4 { width: 33.33%; }
    .col-md-5 { width: 41.66%; }
    .col-md-6 { width: 50%; }
    .col-md-7 { width: 58.33%; }
    .col-md-8 { width: 66.66%; }
    .col-md-9 { width: 75%; }
    .col-md-10 { width: 83.33%; }
    .col-md-11 { width: 91.66%; }
    .col-md-12 { width: 100%; }
}

@media (max-width: 768px) {
    .col-sm-1 { width: 8.33%; }
    .col-sm-2 { width: 16.66%; }
    .col-sm-3 { width: 25%; }
    .col-sm-4 { width: 33.33%; }
    .col-sm-5 { width: 41.66%; }
    .col-sm-6 { width: 50%; }
    .col-sm-7 { width: 58.33%; }
    .col-sm-8 { width: 66.66%; }
    .col-sm-9 { width: 75%; }
    .col-sm-10 { width: 83.33%; }
    .col-sm-11 { width: 91.66%; }
    .col-sm-12 { width: 100%; }
}

/* Composants UI */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.75rem 1.75rem;
    border-radius: var(--border-radius);
    font-weight: 600;
    font-size: 1rem;
    transition: var(--transition);
    cursor: pointer;
    border: none;
    text-align: center;
    line-height: 1.5;
    gap: 0.5rem;
}

.btn-primary {
    background-color: var(--main-color);
    color: var(--white);
}

.btn-primary:hover {
    background-color: var(--main-light);
    color: var(--white);
}

.btn-accent {
    background-color: var(--accent-color);
    color: var(--white);
}

.btn-accent:hover {
    background-color: var(--accent-dark);
    color: var(--white);
}

.btn-outline {
    background-color: transparent;
    border: 2px solid var(--accent-color);
    color: var(--accent-color);
}

.btn-outline:hover {
    background-color: var(--accent-dark);

    color: var(--white);
}

.btn-lg {
    padding: 1rem 2.25rem;
    font-size: 1.1rem;
}

.btn-sm {
    padding: 0.5rem 1.25rem;
    font-size: 0.9rem;
}

.btn-with-icon {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
}

.btn-with-icon i {
    transition: transform 0.2s ease;
}

.btn-with-icon:hover i {
    transform: translateX(3px);
}

/* Cards */
.card {
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-md);
    overflow: hidden;
    transition: var(--transition);
    height: 100%;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.card-body {
    padding: 1.5rem;
}

.card-footer {
    padding: 1.5rem;
    border-top: 1px solid var(--border-color);
}

.card-icon {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--main-lightest);
    border-radius: 12px;
    margin-bottom: 1.25rem;
    color: var(--main-color);
    font-size: 1.5rem;
}

.price-card {
    text-align: center;
    border: 1px solid var(--border-color);
    padding: 2.5rem 2rem;
}

.price-card.highlighted {
    border-color: var(--accent-color);
    position: relative;
}

.price-card.highlighted:before {
    content: 'Recommandé';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
    background: var(--accent-color);
    color: white;
    padding: 0.25rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.price-amount {
    font-size: 3rem;
    font-weight: 700;
    color: var(--dark-color);
    margin: 1.5rem 0;
    line-height: 1;
}

.price-period {
    font-size: 1rem;
    color: var(--text-light);
    font-weight: normal;
}

.price-feature {
    margin: 0.75rem 0;
    color: var(--text-color);
}

.price-feature.included {
    opacity: 1;
}

.price-feature.excluded {
    opacity: 0.5;
    text-decoration: line-through;
}

/* Badges */
.badge {
    display: inline-block;
    padding: 0.4rem 0.85rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-right: 0.5rem;
}

.badge-primary {
    background-color: var(--main-lightest);
    color: var(--main-color);
}

.badge-accent {
    background-color: var(--accent-light);
    color: var(--accent-dark);
}

/* Header et navigation */
.site-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    transition: var(--transition);
    background-color: var(--white);
}

.site-header.scrolled {
    background-color: rgba(255, 255, 255, 0.95);
    box-shadow: var(--shadow-sm);
    backdrop-filter: blur(10px);
}

.header-top {
    background-color: var(--dark-color);
    padding: 10px 0;
    color: var(--white);
    font-size: 0.9rem;
}

.header-top a {
    color: var(--accent-light);
}

.header-top a:hover {
    color: var(--white);
}

.header-info {
    display: flex;
    gap: 1.5rem;
}

.header-info-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.header-social {
    display: flex;
    gap: 0.75rem;
}

.social-link {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--white);
    transition: var(--transition);
}

.social-link:hover {
    background-color: var(--accent-color);
    color: var(--white);
    transform: translateY(-3px);
}

.header-main {
    padding: 1rem 0;
    background-color: var(--white);
}

.site-branding {
    display: flex;
    align-items: center;
}

.custom-logo-link {
    display: inline-block;
}

.custom-logo {
    max-height: 60px;
    width: auto;
}

.site-title {
    font-size: 1.8rem;
    margin: 0;
    font-weight: 700;
}

.site-title a {
    color: var(--dark-color);
}

.site-title a:hover {
    color: var(--accent-color);
}

.main-navigation {
    display: flex;
    justify-content: flex-end;
}

.nav-menu {
    display: flex;
    gap: 1rem;
    padding: 0;
    margin: 0;
}

.nav-menu li a {
    padding: 0.5rem 1rem;
    font-weight: 600;
    font-size: 1rem;
    color: var(--dark-color);
    position: relative;
}

.nav-menu li a:hover,
.nav-menu li a.active {
    color: var(--accent-color);
}

.nav-menu li a:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 1rem;
    right: 1rem;
    height: 2px;
    background-color: var(--accent-color);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.3s ease;
}

.nav-menu li a:hover:after,
.nav-menu li a.active:after {
    transform: scaleX(1);
    transform-origin: left;
}

.menu-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 1.5rem;
    color: var(--dark-color);
    cursor: pointer;
}

/* Hero section */
.hero-section {
    position: relative;
    padding-top: 180px;
    padding-bottom: 100px;
    overflow: hidden;
    background-color: var(--dark-color);
    min-height: 100vh;
    display: flex;
    align-items: center;
}

/* Conteneur de la vidéo - position fixe pour éviter les conflits d'ancres */
.hero-video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

/* Vidéo d'arrière-plan */
.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
    opacity: 0.5;
}

/* Overlay pour assombrir la vidéo */
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(41, 54, 66, 0.95) 0%, rgba(62, 92, 110, 0.85) 100%);
    z-index: 1;
}

/* Correction pour les ancres - assurons-nous qu'elles fonctionnent correctement */
:target {
    scroll-margin-top: 120px; /* Ajuster selon la hauteur de votre header */
}

.hero-content {
    position: relative;
    z-index: 2;
    color: var(--white);
}

.hero-title {
    font-size: 3.75rem;
    margin-bottom: 1.5rem;
    color: var(--white);
    line-height: 1.1;
}

.hero-subtitle {
    font-size: 1.75rem;
    margin-bottom: 2rem;
    color: var(--white);
    opacity: 0.9;
    font-weight: 400;
}

.hero-text {
    margin-bottom: 2.5rem;
    color: var(--white);
    opacity: 0.85;
    max-width: 600px;
    font-size: 1.1rem;
}

.hero-feature-list {
    margin: 2rem 0;
}

.hero-feature-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1rem;
    padding: 1rem 1.5rem;
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: var(--border-radius);
}

.feature-icon {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--accent-color);
    border-radius: 50%;
    color: var(--white);
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    margin-top: 2.5rem;
}

.hero-image {
    position: relative;
    z-index: 2;
}

.hero-image img {
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-lg);
    position: relative;
}

.shape-blob {
    position: absolute;
    width: 300px;
    height: 300px;
    background-color: var(--accent-color);
    opacity: 0.1;
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    z-index: 1;
}

.shape-blob-1 {
    top: -150px;
    right: -150px;
    animation: blob-float 8s ease-in-out infinite;
}

.shape-blob-2 {
    bottom: -150px;
    left: -150px;
    background-color: var(--main-color);
    animation: blob-float 10s ease-in-out infinite reverse;
}

@keyframes blob-float {
    0% {
        transform: translate(0, 0) rotate(0deg) scale(1);
    }
    33% {
        transform: translate(30px, -50px) rotate(20deg) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) rotate(-10deg) scale(0.9);
    }
    100% {
        transform: translate(0, 0) rotate(0deg) scale(1);
    }
}

/* Services section - Structure en 2 colonnes */
.services-section {
    background-color: var(--bg-light);
    position: relative;
    overflow: hidden;
}

.services-section .row {
    display: flex;
    flex-wrap: wrap;
}

.services-section .col-md-6 {
    display: flex;
    flex-direction: column;
}

.service-column-title {
    margin-bottom: 1.5rem;
    color: var(--main-color);
    font-size: 1.5rem;
    position: relative;
    padding-left: 1rem;
    border-left: 4px solid var(--accent-color);
}

.service-card {
    background-color: var(--white);
    border-radius: var(--border-radius);
    overflow: hidden;
    transition: var(--transition);
    margin-bottom: 2rem;
    position: relative;
    padding: 2rem;
    box-shadow: var(--shadow-md);
    height: 100%;
    display: flex;
    flex-direction: column;
    min-height: 350px; /* Garantit une hauteur minimale pour l'alignement */
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
}

.service-card .btn {
    margin-top: auto; /* Pousse le bouton vers le bas */
}

.service-icon {
    color: var(--main-color);
    font-size: 2.5rem;
    margin-bottom: 1.25rem;
}

.service-title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.service-description {
    color: var(--text-light);
    margin-bottom: 1.5rem;
}

.service-list {
    padding: 0;
    margin: 0 0 1.5rem 0;
    flex-grow: 1;
}

.service-list li {
    margin-bottom: 0.75rem;
    padding-left: 1.75rem;
    position: relative;
}

.service-list li:before {
    content: '\f058';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--accent-color);
}

.service-card .btn {
    margin-top: auto;
    align-self: flex-start;
}

/* Advantages section */
.advantages-section {
    background-color: var(--white);
}

.advantages-row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -1rem;
}

.advantage-card {
    flex: 1 1 calc(25% - 2rem);
    margin: 0 1rem 2rem;
    padding: 2rem;
    background-color: var(--bg-light);
    border-radius: var(--border-radius);
    transition: var(--transition);
    text-align: center;
    box-shadow: var(--shadow-sm);
    display: flex;
    flex-direction: column;
    height: 100%;
}

.advantage-card:hover {
    transform: translateY(-7px);
    box-shadow: var(--shadow-md);
}

.advantage-icon {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--main-lightest);
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    color: var(--main-color);
    font-size: 1.75rem;
}

.advantage-title {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.advantage-text {
    color: var(--text-light);
    font-size: 1rem;
}

/* Testimonials section */
.testimonials-section {
    background-color: var(--bg-light);
    position: relative;
    overflow: hidden;
}

.testimonials-section .row {
    display: flex;
    flex-wrap: wrap;
}

.testimonial-card {
    background-color: var(--white);
    border-radius: var(--border-radius);
    padding: 2.5rem 2rem;
    box-shadow: var(--shadow-md);
    margin-bottom: 2rem;
    position: relative;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.testimonial-quote {
    font-size: 1.2rem;
    font-style: italic;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 1;
    flex-grow: 1;
    padding-left: 4rem;
}

.testimonial-quote:before {
    content: '\f10d';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0.5rem;
    top: -0.75rem;
    color: var(--main-lightest);
    font-size: 3rem;
    opacity: 0.5;
    z-index: -1;
}

.testimonial-author {
    display: flex;
    align-items: center;
    margin-top: 1.5rem;
}

.testimonial-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 1rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--main-lightest);
    color: var(--main-color);
    font-size: 2rem;
}

.testimonial-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-info {
    flex: 1;
}

.testimonial-name {
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 0.25rem;
}

.testimonial-position {
    color: var(--text-light);
    font-size: 0.9rem;
}

.testimonial-rating {
    color: var(--warning);
    margin-top: 0.5rem;
}

/* About section */
.about-section {
    background-color: var(--white);
}

.about-section .row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.about-image {
    position: relative;
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.about-image img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius);
}

.about-content {
    padding: 2rem 0;
}

.about-title {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
}

.about-text {
    margin-bottom: 2rem;
}

.about-stats {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    margin-top: 3rem;
}

.stat-item {
    flex: 1;
    min-width: 150px;
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--main-color);
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 1rem;
    color: var(--text-light);
}

.skills-box {
    margin-top: 2rem;
}

.skill-item {
    margin-bottom: 1.5rem;
}

.skill-name {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.skill-percent {
    color: var(--text-light);
}

.skill-bar {
    height: 8px;
    background-color: var(--main-lightest);
    border-radius: 4px;
    overflow: hidden;
}

.skill-progress {
    height: 100%;
    background-color: var(--main-color);
    border-radius: 4px;
}

/* Pricing section */
.pricing-section {
    background-color: var(--bg-light);
}

.pricing-toggle {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 3rem;
}

.pricing-option {
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    font-weight: 600;
}

.pricing-option.active {
    color: var(--accent-color);
}

.pricing-switch {
    position: relative;
    width: 60px;
    height: 32px;
    margin: 0 1rem;
    background-color: var(--main-lightest);
    border-radius: 16px;
    cursor: pointer;
}

.pricing-switch:after {
    content: '';
    position: absolute;
    width: 24px;
    height: 24px;
    top: 4px;
    left: 4px;
    background-color: var(--accent-color);
    border-radius: 50%;
    transition: var(--transition);
}

.pricing-switch.monthly:after {
    transform: translateX(0);
}

.pricing-switch.annually:after {
    transform: translateX(28px);
}

.pricing-save {
    display: inline-block;
    padding: 0.3rem 0.75rem;
    background-color: var(--accent-light);
    color: var(--accent-dark);
    font-size: 0.85rem;
    font-weight: 600;
    border-radius: 20px;
    margin-left: 0.75rem;
}

.pricing-row {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}

.pricing-card {
    flex: 1;
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-md);
    padding: 3rem 2rem;
    text-align: center;
    transition: var(--transition);
    min-width: 280px;
    max-width: 350px;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
}

.pricing-card.popular {
    border: 2px solid var(--accent-color);
    position: relative;
}

.popular-badge {
    position: absolute;
    top: 0;
    right: 2rem;
    background-color: var(--accent-color);
    color: var(--white);
    padding: 0.5rem 1rem;
    font-size: 0.85rem;
    font-weight: 600;
    border-radius: 0 0 var(--border-radius-sm) var(--border-radius-sm);
}

.pricing-icon {
    color: var(--main-color);
    font-size: 2.5rem;
    margin-bottom: 1.25rem;
}

.pricing-title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.pricing-description {
    color: var(--text-light);
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

.pricing-price {
    font-size: 3rem;
    font-weight: 700;
    color: var(--dark-color);
    margin-bottom: 2rem;
}

.pricing-period {
    font-size: 1rem;
    color: var(--text-light);
    font-weight: normal;
}

.pricing-features {
    text-align: left;
    margin-bottom: 2rem;
    flex-grow: 1;
}

.pricing-feature {
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: center;
}

.pricing-feature:last-child {
    border-bottom: none;
}

.pricing-feature i {
    color: var(--main-color);
    margin-right: 1rem;
}

.feature-included i {
    color: var(--success);
}

.feature-excluded {
    opacity: 0.5;
}

.feature-excluded i {
    color: var(--text-light);
}

/* FAQ section */
.faq-section {
    background-color: var(--white);
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    margin-bottom: 1.5rem;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    background-color: var(--white);
    overflow: hidden;
}

.faq-question {
    padding: 1.5rem;
    cursor: pointer;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.faq-question i {
    transition: var(--transition);
}

.faq-item.active .faq-question {
    color: var(--main-color);
}

.faq-item.active .faq-question i {
    transform: rotate(-180deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.faq-answer-inner {
    padding: 0 1.5rem 1.5rem;
    color: var(--text-light);
}

.faq-item.active .faq-answer {
    max-height: 500px;
}

/* Contact section - Mise à jour en colonnes */
.contact-section {
    background-color: var(--bg-light);
    position: relative;
}

.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1.5fr; /* Ratio 40%-60% */
    gap: 2rem;
    align-items: flex-start;
}

.contact-info-column {
    background-color: var(--white);
    border-radius: var(--border-radius);
    padding: 2rem;
    position: sticky;
    top: 100px;
    box-shadow: var(--shadow-md);
    height: fit-content;
}

.contact-form-column {
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-md);
}

.contact-info {
    margin-bottom: 2rem;
}

.contact-item {
    display: flex;
    margin-bottom: 1.5rem;
    gap: 1rem;
}

.contact-icon {
    width: 50px;
    height: 50px;
    background-color: var(--main-lightest);
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: var(--main-color);
    flex-shrink: 0;
}

.contact-content h4 {
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.contact-content p {
    color: var(--text-light);
    margin-bottom: 0;
}

.contact-cta {
    margin-top: 2rem;
    padding: 1.5rem;
    background-color: var(--main-color);
    color: var(--white);
    border-radius: var(--border-radius);
    text-align: center;
}

.contact-cta h3 {
    color: var(--white);
    font-size: 1.3rem;
    margin-bottom: 0.75rem;
}

.contact-cta p {
    color: rgba(255, 255, 255, 0.85);
    margin-bottom: 1.25rem;
}

.contact-form {
    padding: 2rem;
}

.contact-form h3 {
    margin-bottom: 1.5rem;
    color: var(--main-color);
}

.form-row {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1.5rem;
    width: 100%;
}

.form-group-half {
    flex: 1;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.form-control {
    width: 100%;
    padding: 0.875rem 1.25rem;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    font-size: 1rem;
    color: var(--text-color);
    transition: var(--transition);
}

.form-control:focus {
    outline: none;
    border-color: var(--main-color);
    box-shadow: 0 0 0 3px rgba(62, 92, 110, 0.1);
}

.form-control.is-invalid {
    border-color: var(--error);
    background-color: rgba(199, 92, 92, 0.05);
}

textarea.form-control {
    min-height: 150px;
    resize: vertical;
}

.form-select {
    width: 100%;
    padding: 0.875rem 1.25rem;
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    font-size: 1rem;
    color: var(--text-color);
    background-color: var(--white);
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%233a4a59' viewBox='0 0 16 16'%3E%3Cpath d='M2 5l6 6 6-6H2z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1.25rem center;
    background-size: 16px 12px;
}

.form-select:focus {
    outline: none;
    border-color: var(--main-color);
    box-shadow: 0 0 0 3px rgba(62, 92, 110, 0.1);
}

.form-check {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.form-check-input {
    margin-top: 0.3rem;
    width: 1.25em;
    height: 1.25em;
    background-color: var(--white);
    border: 1px solid var(--border-color);
    border-radius: 0.25em;
}

.form-check-label {
    font-size: 0.95rem;
    color: var(--text-light);
}

.form-submit {
    margin-top: 2rem;
    text-align: right;
}

/* Call to action */
.cta-box {
    background-color: var(--main-color);
    color: var(--white);
    border-radius: var(--border-radius);
    padding: 3rem;
    text-align: center;
    margin-top: 4rem;
}

.cta-title {
    font-size: 2rem;
    color: var(--white);
    margin-bottom: 1rem;
}

.cta-text {
    color: rgba(255, 255, 255, 0.85);
    max-width: 700px;
    margin: 0 auto 2rem;
}

/* Footer */
.footer-main {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 3rem;
    padding-bottom: 3rem;
}

.site-footer {
    background-color: var(--dark-color);
    color: var(--white);
    padding: 5rem 0 2rem;
    position: relative;
}

.footer-info-column, .footer-links-column, .footer-contact-column {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 2rem;
}

.footer-info h3,
.footer-hours h3,
.footer-links h3,
.footer-newsletter h3,
.footer-contact h3 {
    color: var(--white);
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
}

.footer-info p,
.footer-hours p,
.footer-contact p {
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 0.75rem;
}

.footer-icon {
    color: var(--accent-color);
    margin-right: 0.5rem;
}

.footer-info a,
.footer-links a {
    color: rgba(255, 255, 255, 0.7);
    transition: var(--transition);
}

.footer-info a:hover,
.footer-links a:hover {
    color: var(--accent-color);
}

.footer-links ul li {
    margin-bottom: 0.75rem;
}

.footer-links ul li a i {
    margin-right: 0.5rem;
    color: var(--accent-color);
}

.footer-links ul li a:hover {
    padding-left: 0.5rem;
}

.footer-newsletter p {
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 1.5rem;
}

.footer-newsletter-form {
    display: flex;
}

.footer-newsletter-input {
    flex-grow: 1;
    padding: 0.75rem 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--white);
    border-top-left-radius: var(--border-radius);
    border-bottom-left-radius: var(--border-radius);
}

.footer-newsletter-input:focus {
    outline: none;
    border-color: var(--accent-color);
}

.footer-newsletter-button {
    background-color: var(--accent-color);
    color: var(--white);
    border: none;
    padding: 0 1rem;
    cursor: pointer;
    border-top-right-radius: var(--border-radius);
    border-bottom-right-radius: var(--border-radius);
    transition: var(--transition);
}

.footer-newsletter-button:hover {
    background-color: var(--accent-dark);
}

.footer-social {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
}

.footer-social-link {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    transition: var(--transition);
}

.footer-social-link:hover {
    background-color: var(--accent-color);
    color: var(--white);
    transform: translateY(-3px);
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 2rem;
    margin-top: 4rem;
    text-align: center;
    color: rgba(255, 255, 255, 0.5);
    font-size: 0.9rem;
}

.footer-bottom a {
    color: rgba(255, 255, 255, 0.7);
}

.footer-bottom a:hover {
    color: var(--accent-color);
}

/* Back to top button */
.back-to-top {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 50px;
    height: 50px;
    background-color: var(--accent-color);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    cursor: pointer;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
    box-shadow: var(--shadow-md);
}

.back-to-top.active {
    opacity: 1;
    visibility: visible;
}

.back-to-top:hover {
    background-color: var(--accent-dark);
    transform: translateY(-5px);
}

/* Images de fond des sections de séparation */


.workspace-overlay {
    background: linear-gradient(to right, rgba(41, 54, 66, 0.8) 0%, rgba(255, 255, 255, 0) 100%);
}

.workspace-overlay-2 {
    background: linear-gradient(to left, rgba(41, 54, 66, 0.8) 0%, rgba(255, 255, 255, 0) 100%);
}

/* Images de fond des sections de séparation avec effet parallaxe */
.workspace-image {
    background-image: url('assets/pictures/desk1.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Ajoute l'effet parallaxe */
    height: 400px;
    position: relative;
    padding: 0;
    margin: 60px 0;
}

.workspace-image-2 {
    background-image: url('assets/pictures/desk2.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Ajoute l'effet parallaxe */
    height: 300px;
    position: relative;
    padding: 0;
    margin: 60px 0;
}

.workspace-overlay {
    background: linear-gradient(to right, rgba(41, 54, 66, 0.8) 0%, rgba(255, 255, 255, 0) 100%);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.workspace-overlay-2 {
    background: linear-gradient(to left, rgba(41, 54, 66, 0.8) 0%, rgba(255, 255, 255, 0) 100%);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* Correction pour les appareils mobiles où le parallaxe peut causer des problèmes */
@media (max-width: 768px) {
    .workspace-image,
    .workspace-image-2 {
        background-attachment: scroll; /* Désactive le parallaxe sur mobile */
    }
}



/* Messages de notification */
.contact-success,
.contact-error {
    padding: 15px 20px;
    border-radius: var(--border-radius);
    margin-bottom: 20px;
    text-align: center;
    position: fixed;
    top: 110px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    width: 90%;
    max-width: 600px;
    box-shadow: var(--shadow-md);
}

.contact-success {
    background-color: var(--success);
    color: var(--white);
}

.contact-error {
    background-color: var(--error);
    color: var(--white);
}

/* Animation fade-in */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}

.fade-in-delay-1 {
    transition-delay: 0.2s;
}

.fade-in-delay-2 {
    transition-delay: 0.4s;
}

.fade-in-delay-3 {
    transition-delay: 0.6s;
}

/* Correction pour empêcher le chevauchement avec le header */
#accueil {
    scroll-margin-top: 100px;
}

/* Correction pour les ancres */
:target {
    scroll-margin-top: 120px;
}

/* Responsive styles */
@media (max-width: 1200px) {
    :root {
        --section-spacing: 80px;
    }
    
    .container {
        max-width: 960px;
    }
    
    h1, .hero-title {
        font-size: 3rem;
    }
    
    h2, .section-title {
        font-size: 2.2rem;
    }
}

@media (max-width: 992px) {
    :root {
        --section-spacing: 70px;
    }
    
    .container {
        max-width: 720px;
    }
    
    h1, .hero-title {
        font-size: 2.75rem;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
    }
    
    .header-info {
        display: none;
    }
    
    .hero-section {
        padding-top: 150px;
    }
    
    .advantage-card {
        flex: 1 1 calc(50% - 2rem);
    }
    
    .pricing-card {
        flex: 0 0 calc(50% - 2rem);
    }
    
    .contact-wrapper {
        grid-template-columns: 1fr;
    }
    
    .contact-info-column {
        position: static;
    }
    
    .service-card {
        min-height: auto;
    }
    
    .footer-main {
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }
    
    .footer-info-column, .footer-links-column, .footer-contact-column {
        gap: 2rem;
    }
    
    #accueil {
        scroll-margin-top: 80px;
    }
}

@media (max-width: 768px) {
    :root {
        --section-spacing: 60px;
    }
    
    .container {
        max-width: 540px;
    }
    
    h1, .hero-title {
        font-size: 2.25rem;
    }
    
    h2, .section-title {
        font-size: 1.8rem;
    }
    
    .hero-subtitle {
        font-size: 1.25rem;
    }
    
    .header-top {
        display: none;
    }
    
    .header-main {
        padding: 1rem 0;
    }
    
    .menu-toggle {
        display: block;
    }
    
    .nav-menu {
        position: fixed;
        top: 80px;
        left: 0;
        right: 0;
        background-color: var(--white);
        box-shadow: var(--shadow-md);
        padding: 1.5rem;
        flex-direction: column;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px);
        transition: var(--transition);
        z-index: 100;
    }
    
    .nav-menu.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .nav-menu li {
        margin-bottom: 15px;
    }
    
    .nav-menu li a {
        padding: 0.5rem 0;
        display: block;
    }
    
    .hero-section {
        padding-top: 120px;
        text-align: center;
    }
    
    .hero-feature-list {
        max-width: 450px;
        margin: 2rem auto;
    }
    
    .hero-buttons {
        justify-content: center;
        flex-direction: column;
        gap: 1rem;
    }
    
    .hero-image {
        margin-top: 3rem;
    }
    
    .advantage-card {
        flex: 1 1 100%;
    }
    
    .pricing-card {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .about-image {
        margin-bottom: 2rem;
    }
    
    .cta-box {
        padding: 2rem;
    }
    
    .form-row {
        flex-direction: column;
        gap: 0;
    }
    
    .contact-form {
        padding: 1.5rem;
    }
    
    .workspace-image, 
    .workspace-image-2 {
        height: 250px;
    }
    
    .service-column-title {
        text-align: center;
        padding-left: 0;
        border-left: none;
        position: relative;
    }
    
    .service-column-title:after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: var(--accent-color);
        margin: 0.75rem auto 0;
    }
    
    .footer-main {
        grid-template-columns: 1fr;
    }
    
    #accueil {
        scroll-margin-top: 70px;
    }
}

@media (max-width: 576px) {
    :root {
        --section-spacing: 50px;
    }
    
    .container {
        width: 100%;
        padding: 0 1.25rem;
    }
    
    h1, .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
    }
    
    .section-title {
        margin-bottom: 2rem;
    }
    
    .section-subtitle {
        margin-bottom: 2rem;
    }
}

/* Classes utilitaires */
.mt-3 {
    margin-top: 1rem;
}

.mt-4 {
    margin-top: 1.5rem;
}

.mt-5 {
    margin-top: 3rem;
}

.text-center {
    text-align: center;
}

.text-end {
    text-align: right;
}

.align-items-center {
    align-items: center;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

/* Corrections spécifiques pour les problèmes d'affichage */

/* Correction pour les sections en deux colonnes */
.services-section .row,
.about-section .row,
.testimonials-section .row {
    display: flex;
    flex-wrap: wrap;
    margin-left: -15px;
    margin-right: -15px;
}

.services-section .col-md-6,
.about-section .col-md-5,
.about-section .col-md-7,
.testimonials-section .col-md-6 {
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: 30px;
}

/* Assurer la hauteur égale des cartes */
.service-card,
.testimonial-card,
.pricing-card,
.advantage-card {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.service-list,
.pricing-features {
    flex-grow: 1;
}

.service-card .btn,
.pricing-card .btn {
    margin-top: auto;
}

/* Correction pour le formulaire de contact */
.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 30px;
}

@media (max-width: 992px) {
    .contact-wrapper {
        grid-template-columns: 1fr;
    }
}

/* Correction pour le footer */
.footer-main {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 30px;
}

@media (max-width: 992px) {
    .footer-main {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 768px) {
    .footer-main {
        grid-template-columns: 1fr;
    }
}

/* Correction des bugs d'affichage pour les sections à pleine largeur */
.full-image-section {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: var(--white);
    padding: 80px 0;
    margin: 60px 0;
}

.full-image-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
}

.full-image-content h2 {
    color: var(--white);
    margin-bottom: 1.5rem;
    font-size: 2.5rem;
}

.full-image-content p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

/* Animation pour afficher les éléments lors du défilement */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}

/* Media queries supplémentaires pour corriger les problèmes spécifiques */
@media (max-width: 768px) {
    /* Correction pour les services en colonnes */
    .services-section .col-md-6 {
        width: 100%;
    }
    
    /* Correction pour la section À propos */
    .about-section .row .col-md-5,
    .about-section .row .col-md-7 {
        width: 100%;
    }
    
    /* Ajustement du padding pour les sections sur mobile */
    section {
        padding: var(--section-spacing) 0;
    }
    
    /* Correction pour le contact sur mobile */
    .contact-info-column,
    .contact-form-column {
        width: 100%;
    }
    
    /* Ajustement pour les formulaires sur mobile */
    .form-row {
        flex-direction: column;
    }
    
    .form-group-half {
        width: 100%;
    }
}

/* Correction pour les animations sur les navigateurs qui ne supportent pas IntersectionObserver */
@supports not (IntersectionObserver) {
    .fade-in {
        opacity: 1;
        transform: translateY(0);
    }
}






/* section à propos */
/* Styles pour la section À propos avec cartes */
.about-section {
    padding: var(--section-spacing) 0;
    background-color: var(--bg-light);
}

.about-intro {
    margin-bottom: 3rem;
}

/* Carte de profil */
.about-profile-card {
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-md);
    overflow: hidden;
    height: 100%;
}

.profile-image {
    height: 300px;
    overflow: hidden;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-info {
    padding: 1.5rem;
    text-align: center;
}

.profile-info h3 {
    margin-bottom: 0.5rem;
    color: var(--dark-color);
}

.profile-title {
    color: var(--main-color);
    font-weight: 600;
    margin-bottom: 1rem;
}

.profile-social {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 1rem;
}

.profile-social a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--main-lightest);
    color: var(--main-color);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
}

.profile-social a:hover {
    background-color: var(--main-color);
    color: var(--white);
    transform: translateY(-3px);
}

/* Cartes de compétences */
.about-card {
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-md);
    padding: 2rem;
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.about-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
}

.about-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background-color: var(--accent-color);
}

.intro-card {
    border-left: none;
}

.intro-card::before {
    display: none;
}

.about-card-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: var(--main-lightest);
    color: var(--main-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
}

.about-card-content h4 {
    margin-bottom: 1.25rem;
    color: var(--main-color);
    font-size: 1.3rem;
}

.about-card-list {
    padding-left: 0;
    list-style: none;
}

.about-card-list li {
    margin-bottom: 0.75rem;
    position: relative;
    padding-left: 1.5rem;
}

.about-card-list li::before {
    content: '\f054';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--accent-color);
    font-size: 0.8rem;
}

/* Styles spécifiques pour les langues */
.language-label {
    font-weight: 600;
}

.language-level {
    color: var(--text-light);
    font-style: italic;
}

/* Styles pour les valeurs */
.values-container {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.value-tag {
    background-color: var(--main-lightest);
    color: var(--main-color);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    transition: var(--transition);
}

.value-tag:hover {
    background-color: var(--accent-light);
    color: var(--accent-dark);
    transform: translateY(-3px);
}

/* Responsive */
@media (max-width: 992px) {
    .about-profile-card {
        margin-bottom: 2rem;
    }
}

@media (max-width: 768px) {
    .profile-image {
        height: 250px;
    }
    
    .about-card {
        padding: 1.5rem;
    }
}

/* 
