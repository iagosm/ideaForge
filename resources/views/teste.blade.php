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

          .floating-logo {
              display: flex;
              justify-content: center;
          }

          .logo-img {
              width: 90px;
              /* ajuste se quiser maior/menor */
              border-radius: 12px;
              /* ← leve arredondamento */
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
      </style>
  </head>

  <body>

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

      <!-- Hero Section -->
      <section class="pt-5 mt-5 text-center">
          <div class="container">
              <div class="mb-4 floating-logo">
                  <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo-img">
              </div>
              <h1 class="mb-3 display-4 fw-bold">Crie sua próxima <span class="gradient-text">ideia</span></h1>
              <p class="mb-4 lead text-muted">IdeaForge é a plataforma minimalista para transformar suas ideias em
                  realidade, aperfeiçoá-las e compartilhá-las. Inteligência artificial e comunidade movem sua
                  criatividade.</p>
              {{-- Uma plataforma minimalista para transformar e evoluir suas ideias com inteligência artificial e comunidade. --}}
              <div class="flex-wrap gap-3 d-flex justify-content-center">
                  <a href="/create" class="gap-2 btn btn-dark btn-lg d-flex align-items-center">
                      Crie sua Ideia <svg class="lucide lucide-arrow-right" width="20" height="20"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                  </a>
                  <a href="/how-it-works" class="btn btn-outline-secondary btn-lg">
                      Guia
                  </a>
              </div>
              <div class="gap-2 mt-3 mb-3 badge bg-light text-dark d-inline-flex align-items-center fs-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="lucide lucide-sparkles-icon lucide-sparkles">
                      <path
                          d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z" />
                      <path d="M20 2v4" />
                      <path d="M22 4h-4" />
                      <circle cx="4" cy="20" r="2" />
                  </svg> Onde ideias se tornam realidades
              </div>
          </div>
      </section>

      <!-- Featured Ideas -->
      <section class="py-5">
          <div class="container">
              <div class="mb-4 d-flex justify-content-between align-items-center">
                  <h2 class="fw-bold">Ideias em Destaque</h2>
                  <a href="/dashboard" class="gap-1 btn btn-outline-secondary btn-sm d-flex align-items-center">
                      Ver tudo <svg class="lucide lucide-arrow-right" width="16" height="16"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <line x1="5" y1="12" x2="19" y2="12"></line>
                          <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                  </a>
              </div>

              <div class="row g-4">
                  <!-- Card 1 -->
                  <div class="col-12 col-md-4">
                      <div class="border-0 shadow-sm card h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-2 d-flex justify-content-between align-items-start">
                                  <span class="badge bg-light text-dark">Environment</span>
                                  <small class="text-muted">#001</small>
                              </div>
                              <h5 class="mb-2 card-title">EcoTrack - Sustainable Living Assistant</h5>
                              <p class="card-text text-muted" style="rgb(100 116 139 / var(--tw-text-opacity, 1))">An
                                  AI-powered app that helps users track their carbon footprint and suggests
                                  personalized, actionable steps to live more sustainably.</p>
                              <div
                                  class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                  <div class="gap-2 d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah"
                                          alt="Sarah Green" class="rounded-circle" width="24" height="24">
                                      <span>Sarah Green</span>
                                  </div>
                                  <div class="gap-1 d-flex align-items-center">
                                      <svg class="lucide lucide-trending-up text-muted" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                          <polyline points="17 6 23 6 23 12"></polyline>
                                      </svg> 124
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Card 2 -->
                  <div class="col-12 col-md-4">
                      <div class="border-0 shadow-sm card h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-2 d-flex justify-content-between align-items-start">
                                  <span class="badge bg-light text-dark">Education</span>
                                  <small class="text-muted">#002</small>
                              </div>
                              <h5 class="mb-2 card-title">SkillSwap - Community Learning Platform</h5>
                              <p class="card-text text-muted">A local community platform where neighbors can swap
                                  skills and teach each other—coding for cooking, guitar for gardening.</p>
                              <div
                                  class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                  <div class="gap-2 d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Mike" alt="Mike Chen"
                                          class="rounded-circle" width="24" height="24">
                                      <span>Mike Chen</span>
                                  </div>
                                  <div class="gap-1 d-flex align-items-center">
                                      <svg class="lucide lucide-trending-up text-muted" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                          <polyline points="17 6 23 6 23 12"></polyline>
                                      </svg> 89
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Card 3 -->
                  <div class="col-12 col-md-4">
                      <div class="border-0 shadow-sm card h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-2 d-flex justify-content-between align-items-start">
                                  <span class="badge bg-light text-dark">Health</span>
                                  <small class="text-muted">#003</small>
                              </div>
                              <h5 class="mb-2 card-title">FitFlow - Adaptive Workout Generator</h5>
                              <p class="card-text text-muted">Generates dynamic workout routines based on available
                                  equipment, time, and energy levels using machine learning.</p>
                              <div
                                  class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                  <div class="gap-2 d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Jess"
                                          alt="Jessica Fit" class="rounded-circle" width="24" height="24">
                                      <span>Jessica Fit</span>
                                  </div>
                                  <div class="gap-1 d-flex align-items-center">
                                      <svg class="lucide lucide-trending-up text-muted" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                          <polyline points="17 6 23 6 23 12"></polyline>
                                      </svg> 256
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-4">
                      <div class="border-0 shadow-sm card h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-2 d-flex justify-content-between align-items-start">
                                  <span class="badge bg-light text-dark">Environment</span>
                                  <small class="text-muted">#001</small>
                              </div>
                              <h5 class="mb-2 card-title">EcoTrack - Sustainable Living Assistant</h5>
                              <p class="card-text text-muted" style="rgb(100 116 139 / var(--tw-text-opacity, 1))">An
                                  AI-powered app that helps users track their carbon footprint and suggests
                                  personalized, actionable steps to live more sustainably.</p>
                              <div
                                  class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                  <div class="gap-2 d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah"
                                          alt="Sarah Green" class="rounded-circle" width="24" height="24">
                                      <span>Sarah Green</span>
                                  </div>
                                  <div class="gap-1 d-flex align-items-center">
                                      <svg class="lucide lucide-trending-up text-muted" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                          <polyline points="17 6 23 6 23 12"></polyline>
                                      </svg> 124
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Card 2 -->
                  <div class="col-12 col-md-4">
                      <div class="border-0 shadow-sm card h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-2 d-flex justify-content-between align-items-start">
                                  <span class="badge bg-light text-dark">Education</span>
                                  <small class="text-muted">#002</small>
                              </div>
                              <h5 class="mb-2 card-title">SkillSwap - Community Learning Platform</h5>
                              <p class="card-text text-muted">A local community platform where neighbors can swap
                                  skills and teach each other—coding for cooking, guitar for gardening.</p>
                              <div
                                  class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                  <div class="gap-2 d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Mike" alt="Mike Chen"
                                          class="rounded-circle" width="24" height="24">
                                      <span>Mike Chen</span>
                                  </div>
                                  <div class="gap-1 d-flex align-items-center">
                                      <svg class="lucide lucide-trending-up text-muted" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                          <polyline points="17 6 23 6 23 12"></polyline>
                                      </svg> 89
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Card 3 -->
                  <div class="col-12 col-md-4">
                      <div class="border-0 shadow-sm card h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-2 d-flex justify-content-between align-items-start">
                                  <span class="badge bg-light text-dark">Health</span>
                                  <small class="text-muted">#003</small>
                              </div>
                              <h5 class="mb-2 card-title">FitFlow - Adaptive Workout Generator</h5>
                              <p class="card-text text-muted">Generates dynamic workout routines based on available
                                  equipment, time, and energy levels using machine learning.</p>
                              <div
                                  class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                  <div class="gap-2 d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Jess"
                                          alt="Jessica Fit" class="rounded-circle" width="24" height="24">
                                      <span>Jessica Fit</span>
                                  </div>
                                  <div class="gap-1 d-flex align-items-center">
                                      <svg class="lucide lucide-trending-up text-muted" width="16" height="16"
                                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                          <polyline points="17 6 23 6 23 12"></polyline>
                                      </svg> 256
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="py-5 bg-white">
          <div class="container">
              <div class="row g-4">
                  <div class="col-12 col-md-4">
                      <div class="border-0 h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-3 text-center"
                                  style="background-color: #F9FAFB;max-width: fit-content;padding: 10px;border-radius: 10px;margin: 0 auto;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-lightbulb-icon lucide-lightbulb">
                                      <path
                                          d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                                      <path d="M9 18h6" />
                                      <path d="M10 22h4" />
                                  </svg>
                              </div>
                              <h5 class="mb-2 text-center card-title">Capture Instantaneamente</h5>
                              <p class="text-center card-text text-muted"
                                  style="rgb(100 116 139 / var(--tw-text-opacity, 1))">Não deixe grandes ideias
                                  escaparem. Registre tudo em um ambiente limpo, focado e livre de distrações, feito
                                  para você pensar melhor.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-4">
                      <div class="border-0 h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-3 text-center"
                                  style="background-color: #F9FAFB;max-width: fit-content;padding: 10px;border-radius: 10px;margin: 0 auto;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-zap-icon lucide-zap">
                                      <path
                                          d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                                  </svg>
                              </div>
                              <h5 class="mb-2 text-center card-title">IA que faz sua ideia evoluir</h5>
                              <p class="text-center card-text text-muted"
                                  style="rgb(100 116 139 / var(--tw-text-opacity, 1))">Travou em algum detalhe? Nossa
                                  IA integrada ajuda você a expandir, criticar e polir seus conceitos de forma
                                  automática e inteligente.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-4">
                      <div class="border-0 h-100">
                          <div class="card-body d-flex flex-column">
                              <div class="mb-3 text-center"
                                  style="background-color: #F9FAFB;max-width: fit-content;padding: 10px;border-radius: 10px;margin: 0 auto;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-users-icon lucide-users">
                                      <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                      <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                      <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                      <circle cx="9" cy="7" r="4" />
                                  </svg>
                              </div>
                              <h5 class="mb-2 text-center card-title">Feedback da Comunidade</h5>
                              <p class="text-center card-text text-muted"
                                  style="rgb(100 116 139 / var(--tw-text-opacity, 1))">Compartilhe com uma comunidade
                                  de inovadores. Receba curtidas, comentários e feedback construtivo para evoluir suas
                                  ideias.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Footer -->
      <footer class="py-5 mt-5 bg-white border-top">
          <div class="container gap-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
              <div class="gap-2 opacity-75 d-flex align-items-center">
                  <img src="https://static.lumi.new/84/84c3144583cb0323d2b554872c67df8d.webp" alt="Logo"
                      width="32" height="32" class="rounded">
                  <span class="fw-semibold">IdeaForge</span>
              </div>
              <small class="text-muted">© 2025 IdeaForge. Todos os direitos reservados.</small>
              <div class="gap-3 d-flex">
                  <a href="/how-it-works" class="text-muted text-decoration-none">Guia</a>
                  <a href="/dashboard" class="text-muted text-decoration-none">Descobrir</a>
                  <a href="#" class="text-muted text-decoration-none">Privacidade</a>
              </div>
          </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>

  {{-- # nav bar --}}
  {{-- normal = rgb(100 116 139 / var(--tw-text-opacity, 1)) --}}
  {{-- active = rgb(15 23 42 / var(--tw-text-opacity, 1)) --}}
