<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IdeaForge</title>

    <!-- JetBrains Mono NL via Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Lucide Icons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest"></script>

    <style>
        body {
            font-family: 'JetBrains Mono NL', 'JetBrains Mono', monospace;
            background-color: #FAFAFA;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
        }

        p,
        span,
        li,
        a {
            font-weight: 400;
        }

        .gradient-text {
            background: linear-gradient(to right, #1e293b, #64748b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s;
        }

        .floating-logo {
            display: flex;
            justify-content: center;
        }

        .logo-img {
            width: 90px;
            border-radius: 12px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0);
            }
        }

        /* Search do Chat */
        #searchChat:focus {
            outline: 2px solid black;
            border-color: transparent !important;
            box-shadow: none !important;
        }

        /* Hover da conversa */
        .hover-shadow:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .08) !important;
        }

        .transition {
            transition: all .25s ease;
        }

        .notification-item:hover {
            background-color: #f8f9fa !important;
            cursor: pointer;
            transition: 0.2s;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm navbar navbar-expand-md navbar-light fixed-top border-bottom">
        <div class="container">
            <a class="gap-2 navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="rounded shadow-sm" width="40"
                    height="40">
                <span class="fw-bold">IdeaForge</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="gap-2 nav-link d-flex align-items-center" href="/">
                            <svg class="lucide lucide-home" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg> Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="gap-2 nav-link d-flex align-items-center text-muted" href="/dashboard">
                            <svg class="lucide lucide-grid" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg> Descobrir
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="gap-2 nav-link d-flex align-items-center text-muted" href="/how-it-works">
                            <svg class="lucide lucide-help-circle" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4M12 8h.01"></path>
                            </svg> Guia
                        </a>
                    </li>

                    <li class="nav-item ms-3">
                        <button class="gap-2 btn btn-dark d-flex align-items-center">
                            <svg class="lucide lucide-log-in" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
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
    <style>
        .rounded-3xl {
            border-radius: 1.5rem;
        }

        .rounded-2xl {
            border-radius: 1rem;
        }

        .rounded-full {
            border-radius: 50%;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    {{-- <section class="container pt-5 mt-5" style="max-width: 900px;"> --}}
    <section class="container pt-5 mt-5" style="max-width: 900px;">

        <!-- Header -->
        <div class="mb-4">
            <h1 class="gap-2 mb-2 h2 fw-bold d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-users">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                </svg>
                Procurar Usuários
            </h1>
            <p class="text-muted">Busque pessoas pelo nome ou pela bio e descubra novos perfis.</p>
        </div>
        <!-- Search -->
        <div class="mb-4">
            <div class="position-relative" style="max-width: 600px;">
                <svg class="position-absolute top-50 translate-middle-y ms-3 text-muted" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
                <input type="text" class="py-3 shadow-sm form-control ps-5 rounded-pill"
                    placeholder="Buscar por usuário ou bio..." />
            </div>
        </div>
        <!-- Results count -->
        <p class="mb-4 text-muted small"><span>6</span> usuários encontrados</p>
        <!-- Users grid -->
        <div class="row g-4">
            <!-- CARD TEMPLATE (replicar para cada usuário) -->
            <div class="col-12 col-md-6 col-lg-4">
    <div class="border-0 shadow-sm card rounded-4 h-100 user-card hover-shadow">
        <div class="text-center card-body">
            <a href="/profile/u1" class="text-decoration-none text-dark">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah"
                     class="mb-3 shadow-sm rounded-4" width="100" height="100" />
                <h5 class="mb-1 fw-bold">Sarah Green</h5>
                <p class="mb-3 text-muted small">
                    Passionate about sustainability and using technology to create positive impact.
                </p>
            </a>

            <!-- Stats -->
            <div class="py-3 mb-3 d-flex justify-content-around border-top border-bottom">
                <div>
                    <p class="mb-0 fw-bold">3</p>
                    <p class="mb-0 text-muted small">Ideas</p>
                </div>
                <div>
                    <p class="mb-0 fw-bold">469</p>
                    <p class="mb-0 text-muted small">Seguindo</p>
                </div>
                <div>
                    <p class="mb-0 fw-bold">146</p>
                    <p class="mb-0 text-muted small">Seguidores</p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="gap-2 d-flex">
                <a href="/profile/u1" class="btn btn-outline-secondary rounded-pill flex-fill">Seguir</a>
                <a href="/profile/u1" class="btn btn-outline-secondary rounded-pill flex-fill">Perfil</a>

                <a href="/chat/u1"
                   class="btn btn-dark rounded-pill d-flex align-items-center justify-content-center"
                   style="width:44px; height:44px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-icon lucide-message-square"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/></svg>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- ===================== USER 2 ===================== -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="border-0 shadow-sm card rounded-4 h-100 user-card hover-shadow">
        <div class="text-center card-body">
            <a href="/profile/u2" class="text-decoration-none text-dark">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Lucas"
                     class="mb-3 shadow-sm rounded-4" width="100" height="100" />
                <h5 class="mb-1 fw-bold">Lucas Andrade</h5>
                <p class="mb-3 text-muted small">
                    Backend developer apaixonado por APIs, performance e arquitetura limpa.
                </p>
            </a>

            <div class="py-3 mb-3 d-flex justify-content-around border-top border-bottom">
                <div><p class="mb-0 fw-bold">12</p><p class="mb-0 text-muted small">Ideas</p></div>
                <div><p class="mb-0 fw-bold">320</p><p class="mb-0 text-muted small">Seguindo</p></div>
                <div><p class="mb-0 fw-bold">540</p><p class="mb-0 text-muted small">Seguidores</p></div>
            </div>

            <div class="gap-2 d-flex">
                <a href="/profile/u2" class="btn btn-outline-secondary rounded-pill flex-fill">Seguir</a>
                <a href="/profile/u2" class="btn btn-outline-secondary rounded-pill flex-fill">Perfil</a>

                <a href="/chat/u2"
                   class="btn btn-dark rounded-pill d-flex align-items-center justify-content-center"
                   style="width:44px; height:44px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-icon lucide-message-square"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/></svg>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- ===================== USER 3 ===================== -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="border-0 shadow-sm card rounded-4 h-100 user-card hover-shadow">
        <div class="text-center card-body">
            <a href="/profile/u3" class="text-decoration-none text-dark">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Marina"
                     class="mb-3 shadow-sm rounded-4" width="100" height="100" />
                <h5 class="mb-1 fw-bold">Marina Lopes</h5>
                <p class="mb-3 text-muted small">Designer UI/UX com foco em criar experiências acessíveis e modernas.</p>
            </a>

            <div class="py-3 mb-3 d-flex justify-content-around border-top border-bottom">
                <div><p class="mb-0 fw-bold">7</p><p class="mb-0 text-muted small">Ideas</p></div>
                <div><p class="mb-0 fw-bold">510</p><p class="mb-0 text-muted small">Seguindo</p></div>
                <div><p class="mb-0 fw-bold">812</p><p class="mb-0 text-muted small">Seguidores</p></div>
            </div>

            <div class="gap-2 d-flex">
                <a href="/profile/u3" class="btn btn-outline-secondary rounded-pill flex-fill">Seguir</a>
                <a href="/profile/u3" class="btn btn-outline-secondary rounded-pill flex-fill">Perfil</a>

                <a href="/chat/u3"
                   class="btn btn-dark rounded-pill d-flex align-items-center justify-content-center"
                   style="width:44px; height:44px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-icon lucide-message-square"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/></svg>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- ===================== USER 4 ===================== -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="border-0 shadow-sm card rounded-4 h-100 user-card hover-shadow">
        <div class="text-center card-body">
            <a href="/profile/u4" class="text-decoration-none text-dark">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Joao"
                     class="mb-3 shadow-sm rounded-4" width="100" height="100" />
                <h5 class="mb-1 fw-bold">João Pedro</h5>
                <p class="mb-3 text-muted small">Criador de conteúdo e entusiasta de automação com IA.</p>
            </a>

            <div class="py-3 mb-3 d-flex justify-content-around border-top border-bottom">
                <div><p class="mb-0 fw-bold">15</p><p class="mb-0 text-muted small">Ideas</p></div>
                <div><p class="mb-0 fw-bold">210</p><p class="mb-0 text-muted small">Seguindo</p></div>
                <div><p class="mb-0 fw-bold">398</p><p class="mb-0 text-muted small">Seguidores</p></div>
            </div>

            <div class="gap-2 d-flex">
                <a href="/profile/u4" class="btn btn-outline-secondary rounded-pill flex-fill">Seguir</a>
                <a href="/profile/u4" class="btn btn-outline-secondary rounded-pill flex-fill">Perfil</a>

                <a href="/chat/u4"
                   class="btn btn-dark rounded-pill d-flex align-items-center justify-content-center"
                   style="width:44px; height:44px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-icon lucide-message-square"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/></svg>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- ===================== USER 5 ===================== -->

<div class="col-12 col-md-6 col-lg-4">
    <div class="border-0 shadow-sm card rounded-4 h-100 user-card hover-shadow">
        <div class="text-center card-body">
            <a href="/profile/u5" class="text-decoration-none text-dark">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Bianca"
                     class="mb-3 shadow-sm rounded-4" width="100" height="100" />
                <h5 class="mb-1 fw-bold">Bianca Costa</h5>
                <p class="mb-3 text-muted small">Fotógrafa e criadora de projetos visuais colaborativos.</p>
            </a>

            <div class="py-3 mb-3 d-flex justify-content-around border-top border-bottom">
                <div><p class="mb-0 fw-bold">4</p><p class="mb-0 text-muted small">Ideas</p></div>
                <div><p class="mb-0 fw-bold">190</p><p class="mb-0 text-muted small">Seguindo</p></div>
                <div><p class="mb-0 fw-bold">250</p><p class="mb-0 text-muted small">Seguidores</p></div>
            </div>

            <div class="gap-2 d-flex">
                <a href="/profile/u5" class="btn btn-outline-secondary rounded-pill flex-fill">Seguir</a>
                <a href="/profile/u5" class="btn btn-outline-secondary rounded-pill flex-fill">Perfil</a>

                <a href="/chat/u5"
                   class="btn btn-dark rounded-pill d-flex align-items-center justify-content-center"
                   style="width:44px; height:44px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-icon lucide-message-square"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/></svg>
                </a>
            </div>

        </div>
    </div>
</div>

        </div>
    </section>
    <style>
        .user-card {
            transition: 0.25s ease;
        }

        .user-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08) !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
