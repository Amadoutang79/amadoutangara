@extends('layouts.app')

@section('title', 'Amadou Tangara - Développeur Full Stack')

@section('content')

<!-- ============ HERO SECTION ============ -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6 hero-content">
                <div class="badge-hero">
                    <i class="fas fa-rocket me-2"></i>DISPONIBLE POUR DE NOUVEAUX DÉFIS
                </div>
                <h1 class="hero-title">
                    Je transforme vos idées en <span class="highlight">solutions digitales</span>
                </h1>
                <p class="hero-description">
                    Développeur Full Stack PHP / Laravel passionné par la conception d'applications web modernes, 
                    performantes et sécurisées. Spécialisé dans la création de solutions sur mesure.
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('projets.index') }}" class="btn-primary-custom">
                        <i class="fas fa-project-diagram me-2"></i>Voir mes projets
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline-custom">
                        <i class="fas fa-envelope me-2"></i>Me contacter
                    </a>
                </div>
            </div>
            <div class="col-lg-6 hero-stats text-center">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">4+</div>
                        <div class="stat-label">Années d'expérience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Projets réalisés</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Clients satisfaits</div>
                    </div>
                </div>
                <div class="tech-icons">
                    <span class="tech-icon"><i class="fab fa-php"></i> PHP</span>
                    <span class="tech-icon"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="tech-icon"><i class="fas fa-database"></i> MySQL</span>
                    <span class="tech-icon"><i class="fab fa-js"></i> JavaScript</span>
                    <span class="tech-icon"><i class="fab fa-html5"></i> HTML5</span>
                    <span class="tech-icon"><i class="fab fa-css3-alt"></i> CSS3</span>
                    <span class="tech-icon"><i class="fab fa-git-alt"></i> Git</span>
                    <span class="tech-icon"><i class="fab fa-docker"></i> Docker</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ ABOUT SECTION ============ -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 about-image">
                <div class="about-img-wrapper">
                    <img src="{{ asset('images/amadou.png') }}" alt="Amadou Tangara" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 about-content">
                <span class="badge-hero">À PROPOS DE MOI</span>
                <h2 class="section-title">Je transforme vos idées en <span class="highlight">solutions digitales</span></h2>
                <p class="about-text">
                    Développeur Full Stack spécialisé en <strong>PHP, Laravel et MySQL</strong> avec plus de 
                    <strong>4 ans d'expérience</strong> dans la conception d'applications web robustes et évolutives.
                </p>
                <p class="about-text">
                    J'accompagne les entreprises et organisations dans leur transformation digitale en concevant 
                    des applications robustes, évolutives et centrées sur l'utilisateur.
                </p>
                <a href="{{ route('apropos') }}" class="btn-primary-custom">
                    <i class="fas fa-user me-2"></i>En savoir plus
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============ PROJECTS SECTION ============ -->
<section class="projects-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge-hero">MES PROJETS PHARES</span>
            <h2 class="section-title">Découvrez mes <span class="highlight">réalisations</span></h2>
        </div>

        <div class="row g-4">
            @php
                $projects = [
                    [
                        'title' => 'EduConnect AI Sahel',
                        'category' => 'Education',
                        'desc' => 'Plateforme éducative intégrant l\'IA pour l\'apprentissage et la gestion scolaire.',
                        'tech' => ['Laravel', 'MySQL', 'AI']
                    ],
                    [
                        'title' => 'POS App',
                        'category' => 'Gestion commerciale',
                        'desc' => 'Système de point de vente avec gestion des stocks, ventes et clients.',
                        'tech' => ['Laravel', 'MySQL', 'Bootstrap']
                    ],
                    [
                        'title' => 'Clinique Management',
                        'category' => 'Santé',
                        'desc' => 'Gestion de clinique : patients, rendez-vous, dossiers médicaux et facturation.',
                        'tech' => ['Laravel', 'MySQL', 'Bootstrap']
                    ],
                    [
                        'title' => 'Système Scolaire',
                        'category' => 'Education',
                        'desc' => 'Gestion des élèves, notes, présences et tableaux de bord pour écoles.',
                        'tech' => ['Laravel', 'MySQL', 'Bootstrap']
                    ],
                    [
                        'title' => 'SiteShop',
                        'category' => 'E-commerce',
                        'desc' => 'Plateforme e-commerce avec catalogue produits et gestion des commandes.',
                        'tech' => ['Laravel', 'MySQL', 'Bootstrap']
                    ],
                ];
            @endphp

            @foreach($projects as $project)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #1a1a4e, #667eea); height:200px; display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.15); font-size:3rem;">
                            <i class="fas fa-{{ $project['category'] == 'Education' ? 'graduation-cap' : ($project['category'] == 'Santé' ? 'hospital' : 'project-diagram') }}"></i>
                        </div>
                        <div class="project-body">
                            <span class="project-category">{{ $project['category'] }}</span>
                            <h5>{{ $project['title'] }}</h5>
                            <p>{{ $project['desc'] }}</p>
                            <div class="tech-stack">
                                @foreach($project['tech'] as $tech)
                                    <span class="tech">{{ $tech }}</span>
                                @endforeach
                            </div>
                            <a href="#" class="btn-details">
                                Voir le projet <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('projets.index') }}" class="btn-outline-custom">
                Voir tous mes projets <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============ EXPERIENCE SECTION ============ -->
<section class="experience-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <span class="badge-hero">EXPÉRIENCE PROFESSIONNELLE</span>
                <h2 class="section-title">Mon <span class="highlight">parcours</span></h2>
                <div class="experience-card">
                    <div class="experience-header">
                        <div>
                            <h4>Développeur Full Stack PHP / Laravel</h4>
                            <p class="company"><i class="far fa-calendar-alt me-2"></i>2021 - 2025</p>
                        </div>
                    </div>
                    <ul class="experience-list">
                        <li><i class="fas fa-check-circle"></i> Développement d'applications web et solutions métiers</li>
                        <li><i class="fas fa-check-circle"></i> Conception et intégration d'API REST sécurisées</li>
                        <li><i class="fas fa-check-circle"></i> Gestion des bases de données MySQL</li>
                        <li><i class="fas fa-check-circle"></i> Authentification, gestion des rôles et permissions</li>
                        <li><i class="fas fa-check-circle"></i> Suivi des versions avec Git / GitHub</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="side-info">
                    <div class="info-card">
                        <i class="fas fa-code"></i>
                        <h5>Compétences</h5>
                        <div class="skills-list">
                            <span>PHP / Laravel</span>
                            <span>JavaScript</span>
                            <span>MySQL</span>
                            <span>HTML / CSS</span>
                            <span>API REST</span>
                            <span>Git / GitHub</span>
                        </div>
                    </div>
                    <div class="info-card mt-4">
                        <i class="fas fa-graduation-cap"></i>
                        <h5>Formation</h5>
                        <p>Licence en Informatique</p>
                        <span>Université de Technologie et Management</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ TESTIMONIALS SECTION ============ -->
<section class="testimonials-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge-hero">CE QUE LES AUTRES DISENT</span>
            <h2 class="section-title">Témoignages</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="0">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="text">
                        "Amadou est un développeur sérieux, compétent et très impliqué. 
                        Il livre toujours un travail de qualité dans les délais."
                    </p>
                    <div class="author">
                        <div class="author-info">
                            <div class="name">M. Diarra</div>
                            <div class="role">Chef de projet, Isolution</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="text">
                        "Excellent développeur, force de proposition et très autonome. 
                        Je recommande vivement !"
                    </p>
                    <div class="author">
                        <div class="author-info">
                            <div class="name">A. Koné</div>
                            <div class="role">CEO, StartUp Mali</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="text">
                        "Travail propre, code bien structuré et respect des bonnes pratiques. 
                        Un vrai professionnel."
                    </p>
                    <div class="author">
                        <div class="author-info">
                            <div class="name">S. Traoré</div>
                            <div class="role">CTO, Tech Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ CONTACT SECTION ============ -->
<section class="contact-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="badge-hero">ME CONTACTER</span>
                <h2 class="section-title">Vous avez un projet ? <span class="highlight">Discutons-en</span></h2>
                <p class="contact-text">
                    Je suis à votre écoute pour vos projets. Contactez-moi dès maintenant !
                </p>
                <div class="contact-info-list">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>amadoutangara91@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+223 71 70 79 12</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bamako, Mali</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-github"></i>
                        <span>github.com/Amadoutang79</span>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary-custom mt-3">
                    <i class="fas fa-paper-plane me-2"></i>Me contacter
                </a>
            </div>
            <div class="col-lg-6 text-center">
                <div class="contact-illustration">
                    <img src="{{ asset('images/amadou.png') }}" alt="Amadou Tangara" class="img-fluid rounded-circle" style="width:300px;height:300px;object-fit:cover;border:4px solid #667eea;">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* ============ HERO ============ */
.hero-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 120px 0 80px;
    background: linear-gradient(135deg, #0a0a2e 0%, #1a1a4e 50%, #0a0a2e 100%);
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(102,126,234,0.05) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatBg 20s infinite ease-in-out;
}

@keyframes floatBg {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-30px, 30px) scale(1.1); }
}

.hero-content {
    position: relative;
    z-index: 1;
}

.badge-hero {
    display: inline-block;
    background: rgba(102,126,234,0.15);
    color: #667eea;
    padding: 8px 24px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 20px;
    border: 1px solid rgba(102,126,234,0.15);
    animation: pulseBadge 2s infinite;
}

@keyframes pulseBadge {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 900;
    line-height: 1.2;
    margin-bottom: 20px;
}

.hero-title .highlight {
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-description {
    font-size: 1.15rem;
    color: rgba(255,255,255,0.6);
    max-width: 550px;
    line-height: 1.8;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn-primary-custom {
    background: linear-gradient(135deg, #667eea, #764ba2);
    border: none;
    padding: 14px 30px;
    border-radius: 50px;
    font-weight: 600;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
}

.btn-primary-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(102,126,234,0.4);
    color: #fff;
}

.btn-outline-custom {
    border: 2px solid rgba(102,126,234,0.3);
    color: #fff;
    padding: 14px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    background: transparent;
}

.btn-outline-custom:hover {
    background: rgba(102,126,234,0.1);
    border-color: #667eea;
    transform: translateY(-3px);
    color: #fff;
}

/* Stats Grid */
.hero-stats {
    position: relative;
    z-index: 1;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.stat-item {
    background: rgba(255,255,255,0.03);
    padding: 25px 15px;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.05);
    text-align: center;
    transition: all 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    border-color: rgba(102,126,234,0.3);
    background: rgba(255,255,255,0.05);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 900;
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: block;
}

.stat-label {
    color: rgba(255,255,255,0.5);
    font-size: 0.85rem;
    margin-top: 5px;
}

.tech-icons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.tech-icon {
    background: rgba(255,255,255,0.05);
    padding: 8px 16px;
    border-radius: 50px;
    font-size: 0.8rem;
    color: rgba(255,255,255,0.6);
    border: 1px solid rgba(255,255,255,0.05);
    transition: all 0.3s ease;
}

.tech-icon:hover {
    background: rgba(102,126,234,0.1);
    border-color: rgba(102,126,234,0.2);
    color: #fff;
    transform: translateY(-2px);
}

.tech-icon i {
    margin-right: 6px;
    color: #667eea;
}

/* ============ ABOUT ============ */
.about-section {
    padding: 100px 0;
    background: rgba(255,255,255,0.02);
}

.about-img-wrapper {
    position: relative;
    max-width: 400px;
    margin: 0 auto;
}

.about-img-wrapper img {
    border-radius: 20px;
    width: 100%;
    height: auto;
    border: 1px solid rgba(255,255,255,0.05);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: #fff;
    margin: 15px 0;
}

.section-title .highlight {
    background: linear-gradient(135deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.about-text {
    color: rgba(255,255,255,0.7);
    line-height: 1.9;
    font-size: 1.05rem;
}

.about-text strong {
    color: #fff;
}

/* ============ PROJECTS ============ */
.projects-section {
    padding: 100px 0;
    background: #0a0a2e;
}

.project-card {
    background: rgba(255,255,255,0.03);
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.05);
    transition: all 0.4s ease;
    height: 100%;
}

.project-card:hover {
    transform: translateY(-8px);
    border-color: rgba(102,126,234,0.2);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.project-image {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: rgba(255,255,255,0.15);
    background: linear-gradient(135deg, #1a1a4e, #667eea);
}

.project-body {
    padding: 20px;
}

.project-body h5 {
    color: #fff;
    font-weight: 700;
    margin-bottom: 10px;
}

.project-body p {
    color: rgba(255,255,255,0.6);
    font-size: 0.9rem;
    line-height: 1.6;
}

.project-body .tech-stack {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin: 12px 0;
}

.project-body .tech-stack .tech {
    background: rgba(255,255,255,0.05);
    padding: 4px 12px;
    border-radius: 50px;
    font-size: 0.7rem;
    color: rgba(255,255,255,0.5);
    transition: all 0.3s ease;
}

.project-body .tech-stack .tech:hover {
    background: rgba(102,126,234,0.2);
    color: #667eea;
}

.project-category {
    display: inline-block;
    background: rgba(102,126,234,0.15);
    color: #667eea;
    padding: 2px 12px;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
}

.btn-details {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
}

.btn-details:hover {
    color: #764ba2;
    gap: 5px;
}

/* ============ EXPERIENCE ============ */
.experience-section {
    padding: 100px 0;
    background: rgba(255,255,255,0.02);
}

.experience-card {
    background: rgba(255,255,255,0.03);
    border-radius: 16px;
    padding: 30px;
    border: 1px solid rgba(255,255,255,0.05);
}

.experience-header h4 {
    color: #fff;
    margin: 0;
}

.experience-header .company {
    color: rgba(255,255,255,0.4);
    margin: 5px 0 15px;
}

.experience-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.experience-list li {
    color: rgba(255,255,255,0.7);
    padding: 8px 0;
    display: flex;
    align-items: center;
    gap: 12px;
    border-bottom: 1px solid rgba(255,255,255,0.03);
}

.experience-list li:last-child {
    border-bottom: none;
}

.experience-list li i {
    color: #28a745;
    flex-shrink: 0;
}

.side-info .info-card {
    background: rgba(255,255,255,0.03);
    border-radius: 16px;
    padding: 25px;
    border: 1px solid rgba(255,255,255,0.05);
}

.side-info .info-card i {
    font-size: 2rem;
    color: #667eea;
    margin-bottom: 10px;
}

.side-info .info-card h5 {
    color: #fff;
    margin-bottom: 15px;
}

.skills-list {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.skills-list span {
    background: rgba(102,126,234,0.1);
    color: #667eea;
    padding: 4px 14px;
    border-radius: 50px;
    font-size: 0.8rem;
    border: 1px solid rgba(102,126,234,0.1);
    transition: all 0.3s ease;
}

.skills-list span:hover {
    background: rgba(102,126,234,0.2);
    transform: translateY(-2px);
}

.side-info .info-card p {
    color: rgba(255,255,255,0.7);
    margin: 0;
}

.side-info .info-card span {
    color: rgba(255,255,255,0.4);
    font-size: 0.85rem;
}

/* ============ TESTIMONIALS ============ */
.testimonials-section {
    padding: 100px 0;
    background: #0a0a2e;
}

.testimonial-card {
    background: rgba(255,255,255,0.03);
    border-radius: 16px;
    padding: 30px;
    border: 1px solid rgba(255,255,255,0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    border-color: rgba(102,126,234,0.2);
}

.testimonial-card .quote-icon {
    font-size: 2rem;
    color: rgba(102,126,234,0.2);
    margin-bottom: 15px;
}

.testimonial-card .text {
    color: rgba(255,255,255,0.7);
    font-size: 1rem;
    line-height: 1.8;
    font-style: italic;
}

.testimonial-card .author {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,0.05);
}

.testimonial-card .author .name {
    font-weight: 600;
    color: #fff;
}

.testimonial-card .author .role {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.4);
}

/* ============ CONTACT ============ */
.contact-section {
    padding: 100px 0;
    background: rgba(255,255,255,0.02);
}

.contact-text {
    color: rgba(255,255,255,0.6);
    font-size: 1.1rem;
    max-width: 450px;
}

.contact-info-list {
    margin-top: 25px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 10px 0;
    color: rgba(255,255,255,0.7);
    transition: all 0.3s ease;
}

.contact-item:hover {
    transform: translateX(5px);
    color: #fff;
}

.contact-item i {
    width: 40px;
    height: 40px;
    background: rgba(102,126,234,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #667eea;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.contact-illustration {
    position: relative;
    display: inline-block;
}

.contact-illustration img {
    border: 4px solid #667eea;
}

/* ============ RESPONSIVE ============ */
@media (max-width: 992px) {
    .hero-title { font-size: 2.8rem; }
    .hero-buttons { flex-direction: column; }
    .hero-buttons .btn-primary-custom,
    .hero-buttons .btn-outline-custom { justify-content: center; }
    .stats-grid { grid-template-columns: repeat(3, 1fr); }
    .about-img-wrapper { max-width: 300px; margin-bottom: 30px; }
    .about-content { text-align: center; }
    .about-content .badge-hero { display: inline-block; }
}

@media (max-width: 768px) {
    .hero-title { font-size: 2rem; }
    .hero-description { font-size: 1rem; }
    .stats-grid { grid-template-columns: repeat(3, 1fr); gap: 10px; }
    .stat-item { padding: 15px 10px; }
    .stat-number { font-size: 1.8rem; }
    .stat-label { font-size: 0.7rem; }
    .section-title { font-size: 2rem; }
    .tech-icons { gap: 6px; }
    .tech-icon { font-size: 0.7rem; padding: 4px 12px; }
    .contact-illustration img { width: 200px !important; height: 200px !important; }
}
</style>
@endpush