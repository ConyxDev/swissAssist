/*
Theme Name: SwissAssist One-Page
Theme URI: https://swissassist.ch/
Author: SwissAssist
Author URI: https://swissassist.ch/
Description: Thème personnalisé one-page pour assistante administrative indépendante
Version: 2.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: swissassist
*/

/* Variables de couleurs principales - Palette moderne et dynamique */
:root {
    --primary-color: #4361ee;       /* Bleu primaire vif */
    --primary-light: #7aa5eb;       /* Bleu clair */
    --primary-dark: #2b3fce;        /* Bleu foncé */
    --secondary-color: #16213e;     /* Bleu nuit profond */
    --accent-color: #ff5678;        /* Rose vif - accent */
    --accent-color-alt: #4cc9f0;    /* Cyan - accent secondaire */
    --light-color: #f7f9fc;         /* Blanc très légèrement bleuté */
    --dark-color: #0f172a;          /* Bleu très foncé presque noir */
    --text-color: #334155;          /* Gris bleuté pour le texte */
    --text-light: #64748b;          /* Gris clair pour le texte secondaire */
    --success-color: #10b981;       /* Vert vibrant */
    --warning-color: #f59e0b;       /* Orange/Ambre vibrant */
    --border-color: #e2e8f0;        /* Gris très légèrement bleuté pour bordures */
    --card-bg: #ffffff;             /* Blanc pur pour les cartes */
    --white: #ffffff;               /* Blanc pur */
    --highlight-bg: rgba(239, 71, 111, 0.9); /* Couleur pour les éléments highlight */
    --accent-hover: #ff3e66;        /* Couleur hover pour les éléments accent */
    
    /* Effets et espacements */
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px rgba(15, 23, 42, 0.08);
    --shadow-lg: 0 10px 25px -5px rgba(15, 23, 42, 0.1), 0 8px 10px -6px rgba(15, 23, 42, 0.05);
    --shadow-xl: 0 20px 25px -5px rgba(15, 23, 42, 0.1), 0 10px 10px -5px rgba(15, 23, 42, 0.04);
    --transition-fast: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    --section-spacing: 100px;
    --border-radius-sm: 8px;
    --border-radius: 12px;
    --border-radius-lg: 20px;
    --border-radius-pill: 9999px;
}

/* Tous les styles contenant des couleurs, regroupés */
body {
    color: var(--text-color);
    background-color: var(--light-color);
}

::selection {
    background-color: var(--primary-color);
    color: var(--white);
}

h1, h2, h3, h4, h5, h6 {
    color: var(--secondary-color);
}

h2.section-title::after {
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
}

p, .lead {
    color: var(--text-color);
}

a {
    color: var(--primary-color);
}

a:hover {
    color: var(--accent-color);
}

.btn-primary {
    background: var(--primary-color);
    color: var(--white);
}

.btn-primary:hover {
    background: var(--primary-dark);
    color: var(--white);
}

.btn-accent {
    background: var(--accent-color);
    color: var(--white);
}

.btn-accent:hover {
    background-color: var(--accent-hover);
    color: var(--white);
}

.btn-secondary {
    background: var(--white);
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn-secondary:hover {
    background: var(--light-color);
}

.btn-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    color: var(--white);
}

.btn-gradient:hover {
    background: linear-gradient(135deg, var(--primary-dark), var(--accent-color));
    color: var(--white);
}

.header-top {
    background-color: var(--secondary-color);
    color: var(--light-color);
}

.header-info-item i {
    color: var(--accent-color-alt);
}

.social-icon-small {
    background-color: rgba(255, 255, 255, 0.1);
    color: var(--white);
}

.social-icon-small:hover {
    background-color: var(--accent-color);
    color: var(--white);
}

.header-main {
    background-color: rgba(255, 255, 255, 0.98);
}

.nav-menu .menu-item a {
    color: var(--secondary-color);
}

.nav-menu .menu-item a::after {
    background-color: var(--accent-color);
}

.menu-toggle {
    color: var(--secondary-color);
}

.hero-section {
    background-color: var(--secondary-color);
}

.hero-section::before {
    background: linear-gradient(150deg, rgba(22, 33, 62, 0.9) 30%, rgba(67, 97, 238, 0.8) 100%);
}

.hero-section h1 {
    color: var(--white);
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.subtitle {
    color: rgba(255, 255, 255, 0.9);
}

.value-props li {
    background-color: rgba(255, 255, 255, 0.92);
}

.check-icon {
    background-color: var(--primary-color);
    color: var(--white);
}

.highlight-badge {
    background: var(--accent-color);
    color: var(--white);
}

.highlight {
    color: var(--white);
    background-color: var(--highlight-bg);
}

.location {
    color: var(--white);
}

.pin-icon {
    color: var(--accent-color-alt);
}

.credentials {
    background-color: rgba(255, 255, 255, 0.95);
}

.credentials li {
    color: var(--secondary-color);
}

.hero-image {
    background-color: var(--white);
}

.hero-image::before {
    border: 2px solid var(--accent-color);
}

.about-section {
    background-color: var(--light-color);
}

.about-image::after {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
}

.section-separator::after {
    background: linear-gradient(0deg, var(--light-color), transparent 50%, var(--light-color));
}

.services-section {
    background-color: var(--white);
}

.services-section::before {
    background-image: radial-gradient(var(--border-color) 1px, transparent 1px);
}

.service-card {
    background-color: var(--card-bg);
    border: 1px solid var(--border-color);
}

.service-card::before {
    background: linear-gradient(to bottom, var(--primary-color), var(--accent-color));
}

.service-icon {
    color: var(--primary-color);
}

.service-card h3 {
    color: var(--secondary-color);
}

.service-card li::before {
    color: var(--primary-color);
}

.advantages-section {
    background-color: var(--secondary-color);
    color: var(--white);
}

.advantages-section::before {
    background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
}

.advantages-section::after {
    background: radial-gradient(circle, var(--accent-color) 0%, transparent 70%);
}

.advantages-section h2 {
    color: var(--white);
}

.advantages-section h2::after {
    background: linear-gradient(90deg, var(--accent-color-alt), var(--accent-color));
}

.advantage-card {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.advantage-card:hover {
    background-color: rgba(255, 255, 255, 0.08);
}

.advantage-icon {
    color: var(--accent-color-alt);
}

.advantage-card h3 {
    color: var(--white);
}

.advantage-card p {
    color: rgba(255, 255, 255, 0.8);
}

.testimonials-section {
    background-color: var(--light-color);
}

.testimonial-card {
    background-color: var(--card-bg);
    border: 1px solid var(--border-color);
}

.testimonial-icon {
    color: rgba(67, 97, 238, 0.1);
}

blockquote {
    color: var(--secondary-color);
}

.testimonial-author {
    color: var(--text-color);
}

.contact-section {
    background-color: var(--white);
}

.contact-icon {
    background-color: var(--primary-light);
    color: var(--white);
}

.form-label {
    color: var(--secondary-color);
}

.form-control {
    border: 1px solid var(--border-color);
    background-color: var(--light-color);
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
}

.contact-form {
    background-color: var(--card-bg);
    border: 1px solid var(--border-color);
}

.cta-block {
    background-color: var(--card-bg);
    border: 1px solid var(--border-color);
}

.back-to-top {
    background-color: var(--primary-color);
    color: var(--white);
}

.back-to-top:hover {
    background-color: var(--accent-color);
}

.site-footer {
    background-color: var(--secondary-color);
    color: var(--light-color);
}

.site-footer::before {
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color), var(--accent-color-alt), var(--primary-color));
}

.footer-info h3 {
    color: var(--white);
}

.footer-info p {
    color: rgba(255, 255, 255, 0.8);
}

.footer-icon {
    color: var(--accent-color-alt);
}

.footer-links h3 {
    color: var(--white);
}

.footer-menu-container a {
    color: rgba(255, 255, 255, 0.7);
}

.footer-menu-container a:hover {
    color: var(--white);
}

.footer-contact h3 {
    color: var(--white);
}

.social-icon {
    background-color: rgba(255, 255, 255, 0.08);
    color: var(--white);
}

.social-icon:hover {
    background-color: var(--accent-color);
    color: var(--white);
}

.site-info {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.6);
}

.divider {
    background-color: var(--white);
}

.divider-accent {
    background-color: var(--accent-color);
}

.divider-primary {
    background-color: var(--primary-color);
}

.divider-wave .shape-fill {
    fill: var(--light-color);
}

.full-image-section {
    color: var(--white);
}

.full-image-section::before {
    background: linear-gradient(45deg, rgba(67, 97, 238, 0.7), rgba(255, 86, 120, 0.7));
}

.full-image-section h2 {
    color: var(--white);
}

/* Styles globaux modernisés */
html {
    scroll-behavior: smooth;
    font-size: 16px;
}

body {
    font-family: 'Inter', 'Plus Jakarta Sans', sans-serif;
    line-height: 1.7;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* Typographie moderne */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Plus Jakarta Sans', 'Manrope', sans-serif;
    font-weight: 800;
    letter-spacing: -0.025em;
    line-height: 1.2;
    margin-top: 0;
}

h1 {
    font-size: 3.75rem;
    margin-bottom: 1.5rem;
    line-height: 1.1;
}

h2 {
    font-size: 2.75rem;
    margin-bottom: 2rem;
    position: relative;
}

h2.section-title {
    text-align: center;
    margin-bottom: 3rem;
}

h2.section-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    border-radius: var(--border-radius-pill);
}

h3 {
    font-size: 2rem;
    margin-bottom: 1.25rem;
}

p {
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
}

.lead {
    font-size: 1.25rem;
    font-weight: 500;
    margin-bottom: 2rem;
}

a {
    text-decoration: none;
    transition: var(--transition-fast);
    font-weight: 500;
}

img {
    max-width: 100%;
    height: auto;
    border-radius: var(--border-radius);
}

/* Structure des sections */
section {
    padding: var(--section-spacing) 0;
    position: relative;
    overflow: hidden;
}

.container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 24px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -20px;
}

[class*="col-"] {
    padding: 0 20px;
    width: 100%;
}

/* Éléments d'UI */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.875rem 1.75rem;
    font-weight: 600;
    border-radius: var(--border-radius);
    transition: var(--transition);
    border: none;
    cursor: pointer;
    font-size: 1rem;
    line-height: 1.5;
    letter-spacing: 0.025em;
    gap: 0.5rem;
    box-shadow: var(--shadow-md);
    text-align: center;
}

.btn-lg {
    padding: 1rem 2.5rem;
    font-size: 1.125rem;
}

.btn-icon {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-icon i {
    transition: var(--transition-fast);
}

.btn-icon:hover i {
    transform: translateX(4px);
}

/* Header Moderne avec navigation fixe */
.site-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    transition: var(--transition);
    background-color: transparent;
}

.header-top {
    padding: 10px 0;
    font-size: 0.875rem;
}

.header-contact-info {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.header-info-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.header-social {
    display: flex;
    gap: 12px;
}

.social-icon-small {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: var(--transition);
}

.header-main {
    padding: 18px 0;
    backdrop-filter: blur(10px);
    transition: var(--transition);
}

.header-main.scrolled {
    padding: 12px 0;
    box-shadow: var(--shadow-md);
}

.site-branding {
    display: flex;
    align-items: center;
}

.site-title {
    font-size: 1.625rem;
    margin: 0;
    font-weight: 800;
}

.logo-site {
    height: 42px;
    width: auto;
    margin-right: 12px;
}

.main-navigation {
    display: flex;
    justify-content: flex-end;
}

.nav-menu {
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
    gap: 10px;
}

.nav-menu .menu-item a {
    padding: 10px 18px;
    font-weight: 600;
    position: relative;
    font-size: 1.05rem;
}

.nav-menu .menu-item a::after {
    content: '';
    position: absolute;
    bottom: 2px;
    left: 18px;
    right: 18px;
    height: 2px;
    opacity: 0;
    transform: scaleX(0);
    transform-origin: right center;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.nav-menu .menu-item a:hover::after,
.nav-menu .menu-item.current-menu-item a::after {
    opacity: 1;
    transform: scaleX(1);
    transform-origin: left center;
}

.menu-toggle {
    display: none;
    background: none;
    border: none;
    font-size: 1.5rem;
    padding: 5px;
    cursor: pointer;
}

/* Section Hero Moderne avec Image en Couverture */
.hero-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 160px;
    padding-bottom: 100px;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}

.video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

.video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-section .container {
    position: relative;
    z-index: 2;
}

.hero-section h1 {
    margin-bottom: 1.5rem;
    max-width: 800px;
}

.subtitle {
    font-size: 1.375rem;
    margin-bottom: 2.5rem;
    max-width: 700px;
    font-weight: 500;
}

.value-props {
    list-style: none;
    padding: 0;
    margin-bottom: 2.5rem;
    max-width: 650px;
}

.value-props li {
    padding: 16px 22px;
    margin-bottom: 12px;
    border-radius: var(--border-radius);
    display: flex;
    align-items: center;
    box-shadow: var(--shadow-md);
    transform: translateX(-10px);
    opacity: 0;
    animation: slideInFromLeft 0.5s ease forwards;
}

.value-props li:nth-child(1) {
    animation-delay: 0.2s;
}

.value-props li:nth-child(2) {
    animation-delay: 0.4s;
}

.value-props li:nth-child(3) {
    animation-delay: 0.6s;
}

@keyframes slideInFromLeft {
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.check-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    margin-right: 15px;
    border-radius: 50%;
    flex-shrink: 0;
}

.hero-buttons {
    display: flex;
    gap: 15px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.highlight-badge {
    display: inline-block;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: var(--border-radius-pill);
    margin-bottom: 20px;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.highlight {
    font-weight: 700;
    font-size: 1.2rem;
    padding: 18px 25px;
    border-radius: var(--border-radius);
    display: inline-block;
    margin-bottom: 1.5rem;
    box-shadow: var(--shadow-md);
    transform: rotate(-1deg);
}

.location {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

.credentials {
    list-style: none;
    padding: 25px;
    border-radius: var(--border-radius);
    margin-bottom: 2.5rem;
    box-shadow: var(--shadow-md);
}

.credentials li {
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 500;
}

.credentials li:last-child {
    margin-bottom: 0;
}

.hero-image {
    padding: 20px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-xl);
    transform: rotate(2deg);
    position: relative;
    z-index: 2;
}

.hero-image img {
    border-radius: calc(var(--border-radius) - 5px);
    box-shadow: var(--shadow-sm);
}

.hero-image::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 15px;
    left: 15px;
    border-radius: var(--border-radius);
    z-index: -1;
}

/* Section À propos moderne */
.about-section {
    position: relative;
    overflow: hidden;
}

.about-content {
    position: relative;
    z-index: 1;
}

.about-image {
    position: relative;
    border-radius: var(--border-radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}

.about-image::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 30%;
    z-index: 1;
}

.section-separator {
    padding: 0;
    height: 400px;
    overflow: hidden;
    position: relative;
}

.section-separator img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.section-separator::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

/* Cartes modernes pour les services */
.services-section {
    position: relative;
}

.services-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: 20px 20px;
    opacity: 0.5;
    pointer-events: none;
}

.service-card {
    border-radius: var(--border-radius);
    padding: 35px;
    margin-bottom: 30px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 60px;
    border-radius: 0 0 4px 0;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 25px;
    display: inline-block;
}

.service-card h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.service-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-card li {
    padding: 8px 0;
    position: relative;
    padding-left: 25px;
    font-size: 1.05rem;
}

.service-card li::before {
    content: '→';
    position: absolute;
    left: 0;
}

.service-card .btn {
    margin-top: auto;
    align-self: flex-start;
    margin-top: 25px;
}

/* Section Avantages moderne */
.advantages-section {
    position: relative;
    overflow: hidden;
}

.advantages-section::before {
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    width: 400px;
    height: 400px;
    opacity: 0.1;
    border-radius: 50%;
    transform: translate(50%, -50%);
}

.advantages-section::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 300px;
    height: 300px;
    opacity: 0.1;
    border-radius: 50%;
    transform: translate(-50%, 50%);
}

.advantage-card {
    padding: 30px;
    border-radius: var(--border-radius);
    margin-bottom: 30px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    height: 100%;
    backdrop-filter: blur(5px);
}

.advantage-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}

.advantage-icon {
    font-size: 2.5rem;
    margin-bottom: 20px;
    display: inline-block;
}

.advantage-card h3 {
    margin-bottom: 15px;
}

.advantage-card p {
    font-size: 1.1rem;
}

/* Témoignages avec design moderne */
.testimonials-section {
    position: relative;
}

.testimonial-card {
    border-radius: var(--border-radius);
    padding: 35px;
    margin-bottom: 30px;
    box-shadow: var(--shadow-md);
    position: relative;
    overflow: hidden;
    height: 100%;
    transition: var(--transition);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.testimonial-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 2.5rem;
    z-index: 0;
}

blockquote {
    font-style: italic;
    font-size: 1.25rem;
    line-height: 1.7;
    position: relative;
    z-index: 1;
    margin: 0 0 25px 0;
    padding: 0;
}

.testimonial-author {
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 1.05rem;
}

/* Contact section moderne */
.contact-section {
    position: relative;
}

.contact-info {
    margin-bottom: 30px;
}

.contact-info-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.contact-icon {
    display: inline-flex;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
    font-size: 1.25rem;
    box-shadow: var(--shadow-sm);
}

.contact-text {
    flex: 1;
}

.contact-text h4 {
    margin: 0 0 5px 0;
    font-size: 1.2rem;
}

.contact-form {
    padding: 40px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow-md);
}

.form-group {
    margin-bottom: 25px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
}

.form-control {
    width: 100%;
    padding: 14px 18px;
    border-radius: var(--border-radius-sm);
    font-size: 1rem;
    transition: var(--transition-fast);
}

.form-control:focus {
    outline: none;
}

textarea.form-control {
    min-height: 150px;
    resize: vertical;
}

.cta-block {
    border-radius: var(--border-radius);
    padding: 35px;
    box-shadow: var(--shadow-md);
    margin-top: 30px;
    text-align: center;
}

.cta-block h4 {
    margin-bottom: 20px;
    font-size: 1.5rem;
}

/* Back to top button moderne */
.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: var(--transition);
    box-shadow: var(--shadow-md);
}

.back-to-top.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.back-to-top:hover {
    transform: translateY(-5px);
}

/* Footer moderne */
.site-footer {
    padding: 80px 0 30px;
    position: relative;
    overflow: hidden;
}

.site-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 10px;
    background-size: 300% 100%;
    animation: gradient-animation 10s ease infinite;
}

@keyframes gradient-animation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.footer-info h3 {
    margin-bottom: 25px;
    font-size: 1.75rem;
}

.footer-info p {
    margin-bottom: 15px;
}

.footer-icon {
    display: inline-block;
    margin-right: 10px;
}

.footer-links h3 {
    margin-bottom: 25px;
    font-size: 1.5rem;
}

.footer-menu-container ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-menu-container li {
    margin-bottom: 12px;
}

.footer-menu-container a {
    transition: var(--transition-fast);
    display: inline-block;
}

.footer-menu-container a:hover {
    transform: translateX(5px);
}

.footer-contact h3 {
    margin-bottom: 25px;
    font-size: 1.5rem;
}

.social-links {
    display: flex;
    gap: 15px;
    margin-top: 25px;
}

.social-icon {
    display: inline-flex;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    justify-content: center;
    align-items: center;
    transition: var(--transition);
    font-size: 1.2rem;
}

.social-icon:hover {
    transform: translateY(-5px);
}

.site-info {
    text-align: center;
    margin-top: 60px;
    padding-top: 25px;
    font-size: 0.95rem;
}

/* Animations pour les sections */
.fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in.animated {
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

/* Séparateurs de sections */
.divider {
    height: 100px;
    position: relative;
    overflow: hidden;
}

.divider-wave {
    position: absolute;
    width: 100%;
    left: 0;
    top: -2px;
    line-height: 0;
}

.divider-wave svg {
    width: 100%;
    height: 70px;
}

.divider-wave.bottom {
    top: auto;
    bottom: -2px;
    transform: rotate(180deg);
}

/* Section image pleine largeur */
.full-image-section {
    height: 500px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin: 0;
    padding: 0;
}

.full-image-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.full-image-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    padding: 0 20px;
}

.full-image-section h2 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.full-image-section p {
    font-size: 1.25rem;
    margin-bottom: 30px;
}

/* Media Queries pour la responsivité */
@media (min-width: 768px) {
    .col-md-3 {
        width: 25%;
    }
    .col-md-4 {
        width: 33.33%;
    }
    .col-md-5 {
        width: 41.66%;
    }
    .col-md-6 {
        width: 50%;
    }
    .col-md-7 {
        width: 58.33%;
    }
    .col-md-8 {
        width: 66.66%;
    }
    .col-md-9 {
        width: 75%;
    }
    .col-md-12 {
        width: 100%;
    }
}

@media (min-width: 992px) {
    .col-lg-3 {
        width: 25%;
    }
    .col-lg-4 {
        width: 33.33%;
    }
    .col-lg-6 {
        width: 50%;
    }
    .col-lg-8 {
        width: 66.66%;
    }
    .col-lg-9 {
        width: 75%;
    }
    .offset-lg-1 {
        margin-left: 8.33%;
    }
    .offset-lg-2 {
        margin-left: 16.66%;
    }
}

@media (max-width: 991px) {
    h1 {
        font-size: 3rem;
    }
    h2 {
        font-size: 2.4rem;
    }
    section {
        padding: 80px 0;
    }
    .value-props li {
        padding: 14px 16px;
    }
    .full-image-section {
        background-attachment: scroll;
    }
}

@media (max-width: 767px) {
    .header-main {
        padding: 12px 0;
    }
    .nav-menu {
        position: fixed;
        top: 80px;
        left: 0;
        width: 100%;
        background-color: var(--white);
        flex-direction: column;
        padding: 20px;
        box-shadow: var(--shadow-md);
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
    }
    .nav-menu.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }
    .menu-toggle {
        display: block;
    }
    h1 {
        font-size: 2.4rem;
    }
    h2 {
        font-size: 2rem;
    }
    .hero-section {
        padding-top: 120px;
    }
    .hero-buttons {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }
    .service-card, 
    .advantage-card, 
    .testimonial-card,
    .contact-form {
        padding: 25px;
    }
    .full-image-section h2 {
        font-size: 2.2rem;
    }
    .full-image-section p {
        font-size: 1.15rem;
    }
}

@media (max-width: 575px) {
    .container {
        padding: 0 20px;
    }
    h1 {
        font-size: 2.2rem;
    }
    h2 {
        font-size: 1.8rem;
    }
    .section-title {
        margin-bottom: 2.5rem;
    }
    section {
        padding: 70px 0;
    }
    .header-contact-info {
        display: none;
    }
    .header-top {
        justify-content: center;
    }
    .hero-section {
        padding-top: 100px;
    }
    .value-props li {
        padding: 12px 15px;
        font-size: 0.95rem;
    }
    .check-icon {
        margin-right: 10px;
    }
    .back-to-top {
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
    }
    .contact-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    .full-image-section {
        height: 400px;
    }
    .full-image-section h2 {
        font-size: 1.8rem;
    }
}