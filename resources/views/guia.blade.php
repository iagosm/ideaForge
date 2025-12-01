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
                          <a class="gap-2 nav-link d-flex align-items-center text-muted" href="/explore">
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
              <div class="mb-3 text-center">
                  <h1 class="mb-3 display-4 fw-bold">
                      Como o IdeaForge Funciona
                  </h1>
                  <p class="mx-auto lead text-muted" style="max-width: 750px;">
                      Um fluxo de trabalho simples e poderoso para transformar seus pensamentos em projetos concretos.
                  </p>
              </div>
              <div class="position-relative">
                  <div class="top-0 bottom-0 d-none d-md-block position-absolute start-50 translate-middle-x"
                      style="width:1px; background:#e2e8f0; z-index:0;">
                  </div>
                  <div class="container py-5">
                      <!-- ITEM 01 -->
                      <div class="mb-5 row align-items-center position-relative" style="z-index:10;">
                          <div class="text-center col-md-5 text-md-end">
                              <h3 class="mb-2 fw-bold">Publique Sua Ideia</h3>
                              <p class="text-muted">Comece com um título e uma descrição.
                                  Categorize e adicione tags.
                                  Nosso editor limpo permite que você foque no conteúdo, não na formatação.</p>
                          </div>

                          <div class="col-auto mx-auto my-4">
                              <div class="bg-black border border-white shadow-lg d-flex align-items-center justify-content-center rounded-3 text-light"
                                  style="width:64px; height:64px;">
                                  <!-- Ícone -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-pen-tool-icon lucide-pen-tool">
                                      <path
                                          d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z" />
                                      <path
                                          d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18" />
                                      <path d="m2.3 2.3 7.286 7.286" />
                                      <circle cx="11" cy="11" r="2" />
                                  </svg>
                              </div>
                          </div>

                          <div class="col-md-5 d-none d-md-block text-muted fw-bold user-select-none"
                              style="font-size:8rem; opacity:.2;">
                              01
                          </div>
                      </div>

                      <!-- ITEM 02 -->
                      <div class="mb-5 row align-items-center flex-md-row-reverse position-relative"
                          style="z-index:10;">
                          <div class="text-center col-md-5 text-md-start">
                              <h3 class="mb-2 fw-bold">Engaje com a Comunidade</h3>
                              <p class="text-muted">Outros podem ver sua ideia, deixar likes para mostrar apoio e
                                  comentar
                                  com sugestões. É um espaço colaborativo para crescimento.</p>
                          </div>

                          <div class="col-auto mx-auto my-4">
                              <div class="bg-black border border-white shadow-lg d-flex align-items-center justify-content-center rounded-3 text-light"
                                  style="width:64px; height:64px;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-thumbs-up-icon lucide-thumbs-up">
                                      <path d="M7 10v12" />
                                      <path
                                          d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z" />
                                  </svg>
                              </div>
                          </div>

                          <div class="col-md-5 d-none d-md-block text-muted fw-bold user-select-none"
                              style="font-size:8rem; opacity:.2;">
                              02
                          </div>
                      </div>

                      <!-- ITEM 03 -->
                      <div class="mb-5 row align-items-center position-relative" style="z-index:10;">
                          <div class="text-center col-md-5 text-md-end">
                              <h3 class="mb-2 fw-bold">Refinamento com IA</h3>
                              <p class="text-muted">Use o botão "Gerar Insights" para acionar nossa IA.
                                  Ela pode sugerir melhorias, gerar roadmaps ou fazer o papel de advogado do diabo para
                                  fortalecer seu pitch.
                              </p>
                          </div>

                          <div class="col-auto mx-auto my-4">
                              <div class="bg-black border border-white shadow-lg d-flex align-items-center justify-content-center rounded-3 text-light"
                                  style="width:64px; height:64px;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-bot-icon lucide-bot">
                                      <path d="M12 8V4H8" />
                                      <rect width="16" height="12" x="4" y="8" rx="2" />
                                      <path d="M2 14h2" />
                                      <path d="M20 14h2" />
                                      <path d="M15 13v2" />
                                      <path d="M9 13v2" />
                                  </svg>
                              </div>
                          </div>

                          <div class="col-md-5 d-none d-md-block text-muted fw-bold user-select-none"
                              style="font-size:8rem; opacity:.2;">
                              03
                          </div>
                      </div>

                      <!-- ITEM 04 -->
                      <div class="mb-5 row align-items-center flex-md-row-reverse position-relative"
                          style="z-index:10;">
                          <div class="text-center col-md-5 text-md-start">
                              <h3 class="mb-2 fw-bold">Acompanhe a Evolução</h3>
                              <p class="text-muted">Cada edição é registrada.
                                  O recurso "Changelog" mantém um histórico de como sua ideia evoluiu ao longo do tempo,
                                  garantindo transparência e acompanhamento do progresso.</p>
                          </div>

                          <div class="col-auto mx-auto my-4">
                              <div class="text-white bg-black border border-white shadow-lg d-flex align-items-center justify-content-center rounded-3"
                                  style="width:64px; height:64px;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-history-icon lucide-history">
                                      <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                                      <path d="M3 3v5h5" />
                                      <path d="M12 7v5l4 2" />
                                  </svg>
                              </div>
                          </div>

                          <div class="col-md-5 d-none d-md-block text-muted fw-bold user-select-none"
                              style="font-size:8rem; opacity:.2;">
                              04
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
