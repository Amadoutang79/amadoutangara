@extends('layouts.app')

@section('title', 'Me Contacter - Amadou Tangara')

@section('content')
<section class="hero" style="min-height:50vh;padding:120px 0 60px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center hero-content">
                <div class="badge-hero" style="display:inline-block;"><i class="fas fa-envelope me-2"></i>ME CONTACTER</div>
                <h1 style="font-size:3rem;">Vous avez un projet ? <span class="highlight">Discutons-en</span></h1>
                <p style="max-width:600px;margin:0 auto 30px;color:rgba(255,255,255,0.6);">
                    Je suis à votre écoute pour vos projets. Contactez-moi dès maintenant !
                </p>
            </div>
        </div>
    </div>
</section>

<section class="contact-section" style="padding-top:0;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="600">
                <div class="contact-card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" 
                                       name="nom" placeholder="Votre nom" value="{{ old('nom') }}" required>
                                @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       name="email" placeholder="Votre email" value="{{ old('email') }}" required>
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control @error('sujet') is-invalid @enderror" 
                                       name="sujet" placeholder="Sujet" value="{{ old('sujet') }}" required>
                                @error('sujet')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <textarea class="form-control @error('message') is-invalid @enderror" 
                                          name="message" rows="4" placeholder="Votre message..." required>{{ old('message') }}</textarea>
                                @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-custom w-100" style="border:none;justify-content:center;border-radius:50px;">
                                    <i class="fas fa-paper-plane"></i>Envoyer le message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="600" data-aos-delay="100">
                <div class="contact-card">
                    <div class="text-center mb-4">
                        <div style="position:relative;display:inline-block;">
                            <div style="position:absolute;top:-4px;left:-4px;right:-4px;bottom:-4px;border-radius:50%;background:linear-gradient(135deg,#667eea,#764ba2);z-index:-1;animation:pulse 3s infinite;"></div>
                            <img src="{{ asset('images/amadou.png') }}" 
                                 alt="Amadou Tangara" 
                                 class="img-fluid rounded-circle shadow-lg"
                                 style="width:150px;height:150px;object-fit:cover;border:4px solid #667eea;">
                        </div>
                        <h4 class="mt-3 text-white">Amadou Tangara</h4>
                        <p class="text-muted">Développeur Full Stack PHP / Laravel</p>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge" style="background:rgba(102,126,234,0.15);color:#667eea;padding:6px 14px;border-radius:50px;border:1px solid rgba(102,126,234,0.1);">PHP</span>
                            <span class="badge" style="background:rgba(102,126,234,0.15);color:#667eea;padding:6px 14px;border-radius:50px;border:1px solid rgba(102,126,234,0.1);">Laravel</span>
                            <span class="badge" style="background:rgba(102,126,234,0.15);color:#667eea;padding:6px 14px;border-radius:50px;border:1px solid rgba(102,126,234,0.1);">MySQL</span>
                            <span class="badge" style="background:rgba(102,126,234,0.15);color:#667eea;padding:6px 14px;border-radius:50px;border:1px solid rgba(102,126,234,0.1);">JavaScript</span>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.05);">

                    <h5 style="font-weight:700;margin-bottom:25px;color:#fff;font-size:1.1rem;">
                        <i class="fas fa-info-circle" style="color:#667eea;"></i> Informations
                    </h5>
                    <div class="contact-info-item">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="info">
                            <div class="label">Email</div>
                            <div class="value">amadoutangara91@gmail.com</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="info">
                            <div class="label">Téléphone</div>
                            <div class="value">+223 71 70 79 12</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info">
                            <div class="label">Localisation</div>
                            <div class="value">Bamako, Mali</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><i class="fab fa-github"></i></div>
                        <div class="info">
                            <div class="label">GitHub</div>
                            <div class="value">github.com/Amadoutang79</div>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.05);">
                    <div class="text-center">
                        <span class="badge" style="background:rgba(40,167,69,0.2);color:#28a745;padding:6px 14px;border-radius:50px;border:1px solid rgba(40,167,69,0.2);"><i class="fas fa-check-circle"></i> DISCIPLINE</span>
                        <span class="badge" style="background:rgba(23,162,184,0.2);color:#17a2b8;padding:6px 14px;border-radius:50px;border:1px solid rgba(23,162,184,0.2);"><i class="fas fa-code"></i> CODE</span>
                        <span class="badge" style="background:rgba(255,193,7,0.2);color:#ffc107;padding:6px 14px;border-radius:50px;border:1px solid rgba(255,193,7,0.2);"><i class="fas fa-trophy"></i> SUCCESS</span>
                    </div>
                    <div class="text-center mt-2">
                        <small class="text-muted">
                            <i class="fas fa-clock me-1"></i>Réponse sous 24h
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection