@extends('layouts.app')

@section('title', 'Mes Projets - Amadou Tangara')

@section('content')
<section class="hero" style="min-height:50vh;padding:120px 0 60px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center hero-content">
                <div class="badge-hero" style="display:inline-block;"><i class="fas fa-project-diagram me-2"></i>MES PROJETS</div>
                <h1 style="font-size:3rem;">Découvrez mes <span class="highlight">réalisations</span></h1>
                <p style="max-width:600px;margin:0 auto 30px;color:rgba(255,255,255,0.6);">
                    Des solutions concrètes pour des besoins réels dans l'éducation, la santé, le commerce et la gestion.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========== FILTRES ========== -->
<section style="padding:0 0 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <button class="btn btn-outline-primary active" data-filter="all" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">Tous</button>
                    <button class="btn btn-outline-primary" data-filter="education" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">Education</button>
                    <button class="btn btn-outline-primary" data-filter="commerce" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">Commerce</button>
                    <button class="btn btn-outline-primary" data-filter="sante" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">Santé</button>
                    <button class="btn btn-outline-primary" data-filter="ecommerce" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">E-commerce</button>
                    <button class="btn btn-outline-primary" data-filter="outils" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">Outils</button>
                    <button class="btn btn-outline-primary" data-filter="gestion" style="border-color:rgba(102,126,234,0.3);color:#fff;border-radius:50px;padding:8px 24px;transition:all 0.3s ease;">Gestion</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== PROJETS ========== -->
<section class="projects-section" style="padding-top:0;">
    <div class="container">
        <div class="row g-4">
            @php
                $allProjects = [
                    ['name' => 'EduConnect AI Sahel', 'category' => 'education', 'icon' => 'graduation-cap', 'color' => '#667eea', 'desc' => 'Plateforme éducative intégrant l\'IA pour l\'apprentissage et la gestion scolaire.', 'tech' => ['Laravel', 'MySQL', 'AI', 'Bootstrap'], 'github' => 'educonnect-ai-sahel'],
                    ['name' => 'POS App', 'category' => 'commerce', 'icon' => 'store', 'color' => '#28a745', 'desc' => 'Système de point de vente avec gestion des stocks, ventes et clients.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'pos-app'],
                    ['name' => 'Clinique Management', 'category' => 'sante', 'icon' => 'hospital', 'color' => '#dc3545', 'desc' => 'Gestion de clinique : patients, rendez-vous, dossiers médicaux et facturation.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'clinique-management'],
                    ['name' => 'Système Scolaire', 'category' => 'education', 'icon' => 'school', 'color' => '#17a2b8', 'desc' => 'Gestion des élèves, notes, présences et tableaux de bord pour écoles.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'management-school-system'],
                    ['name' => 'SiteShop', 'category' => 'ecommerce', 'icon' => 'shopping-cart', 'color' => '#ffc107', 'desc' => 'Plateforme e-commerce avec catalogue produits et gestion des commandes.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'siteShop'],
                    ['name' => 'Todo App Laravel', 'category' => 'outils', 'icon' => 'tasks', 'color' => '#6f42c1', 'desc' => 'Application de gestion des tâches avec authentification et CRUD complet.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'Todo_app-larvel'],
                    ['name' => 'Calculatrice Web', 'category' => 'outils', 'icon' => 'calculator', 'color' => '#20c997', 'desc' => 'Application interactive de calculatrice développée en JavaScript pur.', 'tech' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap'], 'github' => 'Mon-projet-calculatrice'],
                    ['name' => 'Jekaf-n', 'category' => 'gestion', 'icon' => 'globe', 'color' => '#fd7e14', 'desc' => 'Application web de gestion et services numériques pour entreprises.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'Jekaf-n'],
                    ['name' => 'Projet Test', 'category' => 'outils', 'icon' => 'flask', 'color' => '#e83e8c', 'desc' => 'Développement et validation de fonctionnalités web avec Laravel.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'projet-test'],
                    ['name' => 'Informatique', 'category' => 'education', 'icon' => 'laptop-code', 'color' => '#6610f2', 'desc' => 'Projet éducatif pour l\'apprentissage de l\'informatique et du développement.', 'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'], 'github' => 'informatique'],
                ];
            @endphp

            @foreach($allProjects as $projet)
                <div class="col-md-4 project-item" data-category="{{ $projet['category'] }}" data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="project-card">
                        <div class="card-img-top" style="background:linear-gradient(135deg, #1a1a4e, {{ $projet['color'] }});">
                            <img src="https://via.placeholder.com/400x220/{{ ltrim($projet['color'], '#') }}/ffffff?text={{ urlencode($projet['name']) }}" 
                                 alt="{{ $projet['name'] }}" 
                                 style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0.2;">
                            <i class="fas fa-{{ $projet['icon'] }}" style="position:relative;z-index:1;font-size:3.5rem;color:rgba(255,255,255,0.8);"></i>
                        </div>
                        <div class="card-body">
                            <span class="badge-category">{{ ucfirst($projet['category']) }}</span>
                            <h5>{{ $projet['name'] }}</h5>
                            <p>{{ $projet['desc'] }}</p>
                            <div class="tech-stack">
                                @foreach($projet['tech'] as $tech)
                                    <span class="tech">{{ $tech }}</span>
                                @endforeach
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <a href="https://github.com/Amadoutang79/{{ $projet['github'] }}" target="_blank" class="btn-outline-custom w-50" style="padding:8px;font-size:0.8rem;justify-content:center;border-radius:50px;border:2px solid rgba(102,126,234,0.3);color:#fff;text-decoration:none;transition:all 0.3s ease;display:inline-flex;align-items:center;gap:8px;background:transparent;">
                                    <i class="fab fa-github"></i> Code
                                </a>
                                <a href="#" class="btn-primary-custom w-50" style="padding:8px;font-size:0.8rem;justify-content:center;border-radius:50px;background:linear-gradient(135deg,#667eea,#764ba2);border:none;color:#fff;text-decoration:none;transition:all 0.3s ease;display:inline-flex;align-items:center;gap:8px;">
                                    <i class="fas fa-eye"></i> Voir
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .btn-outline-primary:hover,
    .btn-outline-primary.active {
        background: linear-gradient(135deg, #667eea, #764ba2) !important;
        border-color: transparent !important;
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102,126,234,0.3);
    }
    .project-item {
        animation: fadeIn 0.5s ease;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('[data-filter]');
        const projects = document.querySelectorAll('.project-item');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                buttons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filter = this.dataset.filter;
                projects.forEach(project => {
                    const category = project.dataset.category;
                    project.style.display = (filter === 'all' || category === filter) ? 'block' : 'none';
                });
            });
        });
    });
</script>
@endpush