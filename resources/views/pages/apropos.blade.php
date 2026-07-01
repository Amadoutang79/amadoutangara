@extends('layouts.app')

@section('title', 'À propos - Amadou Tangara')

@section('content')
<section class="hero" style="min-height:50vh;padding:120px 0 60px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center hero-content">
                <div class="badge-hero" style="display:inline-block;"><i class="fas fa-user me-2"></i>À PROPOS DE MOI</div>
                <h1 style="font-size:3rem;">Passionné par la création de <span class="highlight">solutions digitales</span></h1>
                <p style="max-width:600px;margin:0 auto 30px;color:rgba(255,255,255,0.6);">
                    Découvrez mon parcours et ma vision du développement web.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="about-section" style="padding-top:0;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8 mx-auto">
                <div class="about-text" style="text-align:center;">
                    <p style="font-size:1.2rem;margin-bottom:30px;">
                        <strong>Amadou Tangara</strong> est un développeur Full Stack spécialisé en 
                        <strong>PHP, Laravel et MySQL</strong> avec plus de <strong>4 ans d'expérience</strong> 
                        dans la conception d'applications web robustes et évolutives.
                    </p>
                    <p>
                        J'ai une forte capacité à comprendre les besoins métiers et à transformer des idées en 
                        solutions numériques efficaces dans les domaines de l'<strong>éducation</strong>, la 
                        <strong>santé</strong>, le <strong>commerce</strong> et la <strong>gestion</strong>.
                    </p>
                    <p>
                        Ma philosophie : <strong>"Code propre, solutions durables et impact positif"</strong>.
                    </p>
                    <div class="mt-4">
                        <a href="{{ asset('cv/CV_Amadou_Tangara_Style_Francais.pdf') }}" 
                           class="btn btn-success" 
                           target="_blank"
                           download
                           style="background:linear-gradient(135deg,#28a745,#20c997);border:none;border-radius:50px;padding:14px 40px;font-weight:600;transition:all 0.3s ease;box-shadow:0 10px 30px rgba(40,167,69,0.3);color:#fff;text-decoration:none;display:inline-flex;align-items:center;gap:10px;">
                            <i class="fas fa-file-pdf me-2"></i>Télécharger mon CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection