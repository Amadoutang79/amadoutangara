<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('accueil') }}">
            <i class="fas fa-code me-2"></i>Amadou Tangara
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}" 
                       href="{{ route('accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}" 
                       href="{{ route('apropos') }}">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('competences') ? 'active' : '' }}" 
                       href="{{ route('competences') }}">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('projets.*') ? 'active' : '' }}" 
                       href="{{ route('projets.index') }}">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}" 
                       href="{{ route('experience') }}">Expérience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" 
                       href="{{ route('contact') }}">Contact</a>
                </li>
                @auth
                    @if(auth()->user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-user-shield"></i> Admin
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>