@extends('layouts.app')

@section('title', 'Expérience - Amadou Tangara')

@section('content')
<section class="hero" style="min-height:50vh;padding:120px 0 60px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center hero-content">
                <div class="badge-hero" style="display:inline-block;"><i class="fas fa-briefcase me-2"></i>EXPÉRIENCE</div>
                <h1 style="font-size:3rem;">Mon <span class="highlight">parcours professionnel</span></h1>
                <p style="max-width:600px;margin:0 auto 30px;color:rgba(255,255,255,0.6);">
                    Découvrez mon expérience en tant que développeur Full Stack.
                </p>
            </div>
        </div>
    </div>
</section>

<section style="padding:0 0 80px;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <!-- Expérience professionnelle -->
                <div class="project-card" style="padding:30px;" data-aos="fade-up" data-aos-duration="600">
                    <div style="display:flex;align-items:center;gap:20px;margin-bottom:20px;">
                        <div style="width:60px;height:60px;background:rgba(102,126,234,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:#667eea;">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h4 style="color:#fff;margin:0;">Développeur Full Stack PHP / Laravel</h4>
                            <p style="color:rgba(255,255,255,0.4);margin:0;">Solution | 2021 - 2025</p>
                        </div>
                    </div>
                    <ul style="color:rgba(255,255,255,0.7);line-height:2.2;padding-left:20px;">
                        <li>Développement d'applications web et solutions métiers</li>
                        <li>Conception et intégration d'API REST sécurisées</li>
                        <li>Gestion des bases de données MySQL</li>
                        <li>Authentification, gestion des rôles et permissions</li>
                        <li>Suivi des versions avec Git / GitHub</li>
                    </ul>
                </div>

                <!-- Formation -->
                <div class="project-card" style="padding:30px;margin-top:30px;" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div style="display:flex;align-items:center;gap:20px;margin-bottom:20px;">
                        <div style="width:60px;height:60px;background:rgba(102,126,234,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:#667eea;">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h4 style="color:#fff;margin:0;">Licence en Informatique</h4>
                            <p style="color:rgba(255,255,255,0.4);margin:0;">Université de Technologie et Management | 2018 - 2021</p>
                        </div>
                    </div>
                </div>

                <!-- Langues -->
                <div class="project-card" style="padding:30px;margin-top:30px;" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <h4 style="color:#fff;margin-bottom:20px;"><i class="fas fa-language" style="color:#667eea;margin-right:10px;"></i>Langues</h4>
                    <div style="display:flex;flex-wrap:wrap;gap:30px;">
                        <div>
                            <p style="color:#fff;margin:0;"><strong>Français</strong></p>
                            <p style="color:rgba(255,255,255,0.4);margin:0;">Courant - 100%</p>
                            <div style="width:150px;height:6px;background:rgba(255,255,255,0.05);border-radius:3px;margin-top:5px;">
                                <div style="width:100%;height:100%;background:linear-gradient(135deg,#667eea,#764ba2);border-radius:3px;"></div>
                            </div>
                        </div>
                        <div>
                            <p style="color:#fff;margin:0;"><strong>Anglais</strong></p>
                            <p style="color:rgba(255,255,255,0.4);margin:0;">Professionnel - 80%</p>
                            <div style="width:150px;height:6px;background:rgba(255,255,255,0.05);border-radius:3px;margin-top:5px;">
                                <div style="width:80%;height:100%;background:linear-gradient(135deg,#667eea,#764ba2);border-radius:3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection