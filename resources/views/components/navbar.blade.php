<!-- Navbar Component -->
<nav class="bg-white shadow-sm navbar navbar-expand-md navbar-light fixed-top border-bottom">
    <div class="container">
        <a class="gap-2 navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="rounded shadow-sm" width="40" height="40">
            <span class="fw-bold">IdeaForge</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="gap-2 nav-link d-flex align-items-center {{ request()->is('/') ? 'text-dark' : 'text-muted' }}" href="/">
                        <svg class="lucide lucide-home" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg> Início
                    </a>
                </li>

                <li class="nav-item">
                    <a class="gap-2 nav-link d-flex align-items-center {{ request()->is('explore') || request()->is('dashboard') ? 'text-dark' : 'text-muted' }}" href="/explore">
                        <svg class="lucide lucide-grid" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg> Descobrir
                    </a>
                </li>

                <li class="nav-item">
                    <a class="gap-2 nav-link d-flex align-items-center {{ request()->is('how-it-works') ? 'text-dark' : 'text-muted' }}" href="/how-it-works">
                        <svg class="lucide lucide-help-circle" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4M12 8h.01"></path>
                        </svg> Guia
                    </a>
                </li>

                <li class="nav-item ms-3">
                    <button class="gap-2 btn btn-dark d-flex align-items-center">
                        <svg class="lucide lucide-log-in" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                            <polyline points="10 17 15 12 10 7"></polyline>
                            <line x1="15" y1="12" x2="3" y2="12"></line>
                        </svg> Entrar
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

