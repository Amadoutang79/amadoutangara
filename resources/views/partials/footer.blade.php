<footer class="bg-dark text-white py-5 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-code me-2"></i>Amadou Tangara
                </h5>
                <p>Développeur Full Stack PHP / Laravel passionné par la création de solutions digitales innovantes et utiles.</p>
                <div class="social-links">
                    <a href="https://github.com/Amadoutang79" target="_blank" class="text-white me-3">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="text-white me-3">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="text-white me-3">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Liens rapides</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('accueil') }}" class="text-white text-decoration-none">Accueil</a></li>
                    <li><a href="{{ route('apropos') }}" class="text-white text-decoration-none">À propos</a></li>
                    <li><a href="{{ route('competences') }}" class="text-white text-decoration-none">Compétences</a></li>
                    <li><a href="{{ route('projets.index') }}" class="text-white text-decoration-none">Projets</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">Contact</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope me-2"></i>amadoutangara91@gmail.com</li>
                    <li><i class="fas fa-phone me-2"></i>+223 71 70 79 12</li>
                    <li><i class="fas fa-map-marker-alt me-2"></i>Bamako, Mali</li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Amadou Tangara. Tous droits réservés.</p>
        </div>
    </div>
</footer>