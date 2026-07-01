@extends('layouts.app')

@section('title', 'Amadou Tangara - Développeur Full Stack')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center min-vh-100 bg-gradient-primary text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-1 fw-bold mb-4">
                        <span class="wave">👋</span> Amadou Tangara
                    </h1>
                    <h2 class="display-4 fw-light mb-4">Développeur Full Stack PHP / Laravel</h2>
                    <p class="lead mb-4">
                        Je conçois et développe des applications web modernes, performantes et sécurisées 
                        avec Laravel, PHP, MySQL et JavaScript. J'aide les entreprises et organisations 
                        à digitaliser leurs processus et à atteindre leurs objectifs.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('projets.index') }}" class="btn btn-light btn-lg">
                            <i class="fas fa-project-diagram me-2"></i>Voir mes projets
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-envelope me-2"></i>Me contacter
                        </a>
                    </div>
                    <!-- ============================================================ -->
                    <!-- BOUTON TÉLÉCHARGER CV AJOUTÉ ICI -->
                    <!-- ============================================================ -->
                    <div class="mt-4">
                        <a href="{{ asset('cv/CV_Amadou_Tangara_Style_Francais.pdf') }}" 
                           class="btn btn-success btn-lg px-5" 
                           target="_blank"
                           download>
                            <i class="fas fa-file-pdf me-2"></i>Télécharger mon CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image du développeur Full Stack -->
    <section class="developer-image-section py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 text-center">
                    <div class="developer-card p-4">
                        <div class="developer-avatar">
                            <img src="{{ asset('images/amadou.png') }}" 
                                 alt="Amadou Tangara - Développeur Full Stack" 
                                 class="img-fluid rounded-circle shadow-lg"
                                 style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #667eea;">
                        </div>
                        <h3 class="mt-3 text-white">Amadou Tangara</h3>
                        <p class="text-muted">Full Stack Developer PHP / Laravel</p>
                        <div class="tech-badges d-flex flex-wrap justify-content-center gap-2 mt-3">
                            <span class="badge bg-primary">PHP</span>
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-primary">MySQL</span>
                            <span class="badge bg-primary">JavaScript</span>
                            <span class="badge bg-primary">Git</span>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-success me-2"><i class="fas fa-check-circle"></i> DISCIPLINE</span>
                            <span class="badge bg-info me-2"><i class="fas fa-code"></i> CODE</span>
                            <span class="badge bg-warning text-dark"><i class="fas fa-trophy"></i> SUCCESS</span>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted small mb-1">Projets réalisés :</p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <span class="badge bg-secondary">EduConnect</span>
                                <span class="badge bg-secondary">POS App</span>
                                <span class="badge bg-secondary">Clinique Management</span>
                                <span class="badge bg-secondary">School Management</span>
                            </div>
                        </div>
                        <!-- ============================================================ -->
                        <!-- BOUTON TÉLÉCHARGER CV DANS LA CARTE DÉVELOPPEUR -->
                        <!-- ============================================================ -->
                        <div class="mt-4">
                            <a href="{{ asset('cv/CV_Amadou_Tangara_Style_Francais.pdf') }}" 
                               class="btn btn-success w-100" 
                               target="_blank"
                               download>
                                <i class="fas fa-file-pdf me-2"></i>Télécharger mon CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistiques -->
    <section class="stats-section py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                @foreach($statistiques as $stat)
                    <div class="col-6 col-md-3 text-center">
                        <div class="stat-card p-4">
                            <i class="{{ $stat->icone }} fa-3x text-primary mb-3"></i>
                            <h3 class="display-4 fw-bold">{{ $stat->valeur }}</h3>
                            <p class="text-muted mb-0">{{ $stat->titre }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projets récents -->
    <section class="projects-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Mes projets phares</h2>
                <p class="text-muted">Découvrez quelques-unes de mes réalisations</p>
            </div>
            <div class="row g-4">
                @foreach($projetsRecents as $projet)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm hover-card">
                            @if($projet->image)
                                <img src="{{ asset('storage/' . $projet->image) }}" 
                                     class="card-img-top" 
                                     alt="{{ $projet->titre }}"
                                     style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body">
                                <span class="badge bg-primary mb-2">{{ $projet->categorie }}</span>
                                <h5 class="card-title">{{ $projet->titre }}</h5>
                                <p class="card-text">{{ $projet->description_courte }}</p>
                                <div class="d-flex flex-wrap gap-1 mb-3">
                                    @foreach($projet->technologies as $tech)
                                        <span class="badge bg-secondary">{{ $tech->nom }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('projets.show', $projet->slug) }}" 
                                   class="btn btn-outline-primary btn-sm">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('projets.index') }}" class="btn btn-primary">
                    Voir tous les projets <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="tech-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Technologies maîtrisées</h2>
                <p class="text-muted">Mes compétences techniques</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($technologies->take(8) as $tech)
                    <div class="col-3 col-md-2 text-center">
                        <div class="tech-item p-3 bg-white rounded shadow-sm">
                            <i class="{{ $tech->icone }} fa-3x" style="color: {{ $tech->couleur }}"></i>
                            <p class="mt-2 mb-0 small">{{ $tech->nom }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('competences') }}" class="btn btn-outline-primary">
                    Voir toutes mes compétences
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* ============ HERO ============ */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #0a0a2e 0%, #1a1a4e 50%, #0a0a2e 100%) !important;
        position: relative;
        overflow: hidden;
    }
    .bg-gradient-primary::before {
        content: '';
        position: absolute;
        top: -30%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(102, 126, 234, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        animation: floatBg 20s infinite ease-in-out;
    }
    .bg-gradient-primary::after {
        content: '';
        position: absolute;
        bottom: -20%;
        left: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(118, 75, 162, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        animation: floatBg 25s infinite ease-in-out reverse;
    }
    @keyframes floatBg {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-30px, 30px) scale(1.1); }
    }

    .hero-section h1 {
        font-size: 4rem;
        font-weight: 900;
    }
    .hero-section h1 .wave {
        display: inline-block;
        animation: wave 2s infinite;
    }
    @keyframes wave {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(20deg); }
        75% { transform: rotate(-20deg); }
    }
    .hero-section h2 {
        font-weight: 300;
        color: rgba(255,255,255,0.8);
    }
    .hero-section .lead {
        color: rgba(255,255,255,0.6);
        max-width: 700px;
        margin: 0 auto;
    }

    /* ============ BOUTON CV ============ */
    .btn-success {
        background: linear-gradient(135deg, #28a745, #20c997) !important;
        border: none !important;
        border-radius: 50px !important;
        padding: 14px 40px !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 10px 30px rgba(40, 167, 69, 0.3) !important;
    }
    .btn-success:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 20px 40px rgba(40, 167, 69, 0.4) !important;
        background: linear-gradient(135deg, #20c997, #28a745) !important;
    }

    /* ============ DEVELOPPER CARD ============ */
    .developer-image-section {
        background: #0a0a2e;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .developer-card {
        background: rgba(255,255,255,0.03);
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,0.05);
        transition: all 0.3s ease;
    }
    .developer-card:hover {
        transform: translateY(-5px);
        border-color: rgba(102,126,234,0.2);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }
    .developer-avatar {
        position: relative;
        display: inline-block;
    }
    .developer-avatar::after {
        content: '';
        position: absolute;
        top: -4px;
        left: -4px;
        right: -4px;
        bottom: -4px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea, #764ba2);
        z-index: -1;
        animation: avatarPulse 3s infinite;
    }
    @keyframes avatarPulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.05); opacity: 1; }
    }
    .developer-card .tech-badges .badge {
        padding: 6px 14px;
        font-weight: 500;
        border-radius: 50px;
        background: rgba(102,126,234,0.15);
        color: #667eea;
        border: 1px solid rgba(102,126,234,0.1);
    }
    .developer-card .badge.bg-success {
        background: rgba(40, 167, 69, 0.2) !important;
        color: #28a745;
        border: 1px solid rgba(40, 167, 69, 0.2);
    }
    .developer-card .badge.bg-info {
        background: rgba(23, 162, 184, 0.2) !important;
        color: #17a2b8;
        border: 1px solid rgba(23, 162, 184, 0.2);
    }
    .developer-card .badge.bg-warning {
        background: rgba(255, 193, 7, 0.2) !important;
        color: #ffc107;
        border: 1px solid rgba(255, 193, 7, 0.2);
    }
    .developer-card .badge.bg-secondary {
        background: rgba(255,255,255,0.05) !important;
        color: rgba(255,255,255,0.6);
        border: 1px solid rgba(255,255,255,0.05);
        padding: 4px 12px;
    }
    .developer-card .btn-success {
        background: linear-gradient(135deg, #28a745, #20c997) !important;
        border: none !important;
        border-radius: 50px !important;
        padding: 12px !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 10px 30px rgba(40, 167, 69, 0.2) !important;
    }
    .developer-card .btn-success:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 20px 40px rgba(40, 167, 69, 0.3) !important;
    }

    /* ============ STATS ============ */
    .stats-section {
        background: rgba(255, 255, 255, 0.02) !important;
        border-top: 1px solid rgba(255,255,255,0.05);
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .stat-card {
        background: rgba(255,255,255,0.03);
        border-radius: 16px;
        border: 1px solid rgba(255,255,255,0.05);
        transition: transform 0.3s;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        background: rgba(255,255,255,0.05);
        border-color: rgba(102,126,234,0.2);
    }
    .stat-card .display-4 {
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 900;
    }
    .stat-card .text-muted {
        color: rgba(255,255,255,0.6) !important;
    }
    .stat-card .text-primary {
        color: rgba(102,126,234,0.4) !important;
    }

    /* ============ PROJECTS ============ */
    .projects-section {
        background: #0a0a2e;
    }
    .projects-section .display-5 {
        color: #fff;
    }
    .projects-section .text-muted {
        color: rgba(255,255,255,0.5) !important;
    }
    .hover-card {
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.05);
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 16px;
        overflow: hidden;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        border-color: rgba(102,126,234,0.2);
    }
    .hover-card .card-body {
        background: transparent;
    }
    .hover-card .card-title {
        color: #fff;
    }
    .hover-card .card-text {
        color: rgba(255,255,255,0.6);
    }
    .hover-card .badge.bg-primary {
        background: rgba(102,126,234,0.15) !important;
        color: #667eea;
    }
    .hover-card .badge.bg-secondary {
        background: rgba(255,255,255,0.05) !important;
        color: rgba(255,255,255,0.5);
    }

    /* ============ TECH ============ */
    .tech-section {
        background: rgba(255, 255, 255, 0.02) !important;
        border-top: 1px solid rgba(255,255,255,0.05);
    }
    .tech-section .display-5 {
        color: #fff;
    }
    .tech-section .text-muted {
        color: rgba(255,255,255,0.5) !important;
    }
    .tech-item {
        background: rgba(255,255,255,0.03) !important;
        border: 1px solid rgba(255,255,255,0.05);
        border-radius: 12px;
        transition: transform 0.3s;
    }
    .tech-item:hover {
        transform: scale(1.1);
        border-color: rgba(102,126,234,0.2);
        background: rgba(255,255,255,0.05) !important;
    }
    .tech-item p {
        color: rgba(255,255,255,0.7);
    }

    /* ============ RESPONSIVE ============ */
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem;
        }
        .hero-section h2 {
            font-size: 1.5rem;
        }
        .developer-card {
            padding: 20px !important;
        }
        .developer-avatar img {
            width: 150px !important;
            height: 150px !important;
        }
        .stat-card .display-4 {
            font-size: 2.5rem;
        }
        .btn-success {
            padding: 12px 25px !important;
            font-size: 0.9rem !important;
        }
    }
</style>
@endpush