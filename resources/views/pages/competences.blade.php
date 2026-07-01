@extends('layouts.app')

@section('title', 'Compétences - Amadou Tangara')

@section('content')
<section class="hero" style="min-height:50vh;padding:120px 0 60px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center hero-content">
                <div class="badge-hero" style="display:inline-block;"><i class="fas fa-code me-2"></i>COMPÉTENCES</div>
                <h1 style="font-size:3rem;">Mes <span class="highlight">compétences techniques</span></h1>
                <p style="max-width:600px;margin:0 auto 30px;color:rgba(255,255,255,0.6);">
                    Les technologies que je maîtrise pour créer des applications performantes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========== COMPÉTENCES PRINCIPALES ========== -->
<section class="tech-section" style="padding-top:0;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            @php
                $mainSkills = [
                    ['icon' => 'fab fa-php', 'name' => 'PHP', 'color' => '#777BB4', 'level' => 'Expert'],
                    ['icon' => 'fab fa-laravel', 'name' => 'Laravel', 'color' => '#FF2D20', 'level' => 'Expert'],
                    ['icon' => 'fas fa-database', 'name' => 'MySQL', 'color' => '#4479A1', 'level' => 'Avancé'],
                    ['icon' => 'fab fa-js', 'name' => 'JavaScript', 'color' => '#F7DF1E', 'level' => 'Avancé'],
                    ['icon' => 'fab fa-html5', 'name' => 'HTML5', 'color' => '#E34F26', 'level' => 'Expert'],
                    ['icon' => 'fab fa-css3-alt', 'name' => 'CSS3', 'color' => '#1572B6', 'level' => 'Expert'],
                ];
            @endphp
            @foreach($mainSkills as $skill)
                <div class="col-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="tech-item">
                        <i class="{{ $skill['icon'] }}" style="color:{{ $skill['color'] }};"></i>
                        <p>{{ $skill['name'] }}</p>
                        <span class="tech-level">{{ $skill['level'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== COMPÉTENCES SECONDAIRES ========== -->
<section class="tech-section" style="padding:40px 0 80px;background:rgba(255,255,255,0.02);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Autres <span class="highlight">compétences</span></h2>
            <p class="section-subtitle">Les technologies et outils que j'utilise au quotidien</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php
                $secondarySkills = [
                    ['icon' => 'fas fa-plug', 'name' => 'API REST', 'color' => '#667eea', 'level' => 'Avancé'],
                    ['icon' => 'fab fa-git-alt', 'name' => 'Git', 'color' => '#F05032', 'level' => 'Avancé'],
                    ['icon' => 'fab fa-github', 'name' => 'GitHub', 'color' => '#ffffff', 'level' => 'Avancé'],
                    ['icon' => 'fab fa-docker', 'name' => 'Docker', 'color' => '#2496ED', 'level' => 'Intermédiaire'],
                    ['icon' => 'fab fa-linux', 'name' => 'Linux', 'color' => '#FCC624', 'level' => 'Intermédiaire'],
                    ['icon' => 'fab fa-wordpress', 'name' => 'WordPress', 'color' => '#21759B', 'level' => 'Intermédiaire'],
                ];
            @endphp
            @foreach($secondarySkills as $skill)
                <div class="col-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="tech-item">
                        <i class="{{ $skill['icon'] }}" style="color:{{ $skill['color'] }};"></i>
                        <p>{{ $skill['name'] }}</p>
                        <span class="tech-level">{{ $skill['level'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== MÉTHODOLOGIES ========== -->
<section class="tech-section" style="padding:0 0 80px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Méthodologies <span class="highlight">& Frameworks</span></h2>
            <p class="section-subtitle">Les concepts et architectures que j'applique</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php
                $methodologies = [
                    ['icon' => 'fas fa-layer-group', 'name' => 'MVC', 'color' => '#667eea', 'level' => 'Expert'],
                    ['icon' => 'fas fa-database', 'name' => 'CRUD', 'color' => '#28a745', 'level' => 'Expert'],
                    ['icon' => 'fas fa-lock', 'name' => 'Authentification', 'color' => '#ffc107', 'level' => 'Avancé'],
                    ['icon' => 'fas fa-users-cog', 'name' => 'Gestion des rôles', 'color' => '#17a2b8', 'level' => 'Avancé'],
                ];
            @endphp
            @foreach($methodologies as $skill)
                <div class="col-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="tech-item">
                        <i class="{{ $skill['icon'] }}" style="color:{{ $skill['color'] }};"></i>
                        <p>{{ $skill['name'] }}</p>
                        <span class="tech-level">{{ $skill['level'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ========== STATISTIQUES ========== -->
<section class="stats-section py-5" style="background:rgba(255,255,255,0.02);border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3 text-center">
                <div class="stat-card p-4">
                    <div class="icon"><i class="fas fa-code fa-3x text-primary mb-3" style="color:rgba(102,126,234,0.4) !important;"></i></div>
                    <h3 class="display-4 fw-bold" style="background:linear-gradient(135deg, #667eea, #764ba2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">10+</h3>
                    <p class="text-muted mb-0" style="color:rgba(255,255,255,0.6) !important;">Technologies maîtrisées</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="stat-card p-4">
                    <div class="icon"><i class="fas fa-project-diagram fa-3x text-primary mb-3" style="color:rgba(102,126,234,0.4) !important;"></i></div>
                    <h3 class="display-4 fw-bold" style="background:linear-gradient(135deg, #667eea, #764ba2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">4+</h3>
                    <p class="text-muted mb-0" style="color:rgba(255,255,255,0.6) !important;">Années d'expérience</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="stat-card p-4">
                    <div class="icon"><i class="fas fa-check-circle fa-3x text-primary mb-3" style="color:rgba(102,126,234,0.4) !important;"></i></div>
                    <h3 class="display-4 fw-bold" style="background:linear-gradient(135deg, #667eea, #764ba2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">12+</h3>
                    <p class="text-muted mb-0" style="color:rgba(255,255,255,0.6) !important;">Projets réalisés</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="stat-card p-4">
                    <div class="icon"><i class="fas fa-rocket fa-3x text-primary mb-3" style="color:rgba(102,126,234,0.4) !important;"></i></div>
                    <h3 class="display-4 fw-bold" style="background:linear-gradient(135deg, #667eea, #764ba2);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">100%</h3>
                    <p class="text-muted mb-0" style="color:rgba(255,255,255,0.6) !important;">Engagement</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== BOUTON TÉLÉCHARGER CV ========== -->
<section class="py-5" style="background:#0a0a2e;">
    <div class="container text-center">
        <h2 class="section-title mb-4">Vous voulez en savoir <span class="highlight">plus sur moi</span> ?</h2>
        <p class="text-muted mb-4" style="color:rgba(255,255,255,0.5) !important;">
            Téléchargez mon CV complet pour découvrir mon parcours en détail
        </p>
        <a href="{{ asset('cv/CV_Amadou_Tangara_Style_Francais.pdf') }}" 
           class="btn btn-success btn-lg px-5" 
           target="_blank"
           download
           style="background:linear-gradient(135deg,#28a745,#20c997);border:none;border-radius:50px;padding:14px 40px;font-weight:600;transition:all 0.3s ease;box-shadow:0 10px 30px rgba(40,167,69,0.3);color:#fff;text-decoration:none;display:inline-flex;align-items:center;gap:10px;">
            <i class="fas fa-file-pdf me-2"></i>Télécharger mon CV
        </a>
    </div>
</section>
@endsection