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
      <!-- Hero Section -->
      <section class="container pt-5 mt-5 text-center" style="max-width: 900px;">
          <h2 class="mb-3 text-start display-3 fw-bold">App de Troca de Livros Local</h2>
          <div class="mb-4 border d-flex justify-content-between align-items-center">
              <div class="gap-3 d-flex">
                  <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Mariana Guedes" width="40"
                      height="40">
                  <div class="flex-column d-flex text-start">
                      <span>Mariana Guedes</span>
                      <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock">
                              <path d="M12 6v6l4 2" />
                              <circle cx="12" cy="12" r="10" />
                          </svg>
                          15 de Janeiro, 2024</span>
                  </div>
              </div>
              <div class="gap-4 d-flex">
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart">
                          <path
                              d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                      </svg> 15
                  </div>
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-thumbs-down-icon lucide-thumbs-down">
                          <path d="M17 14V2" />
                          <path
                              d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22a3.13 3.13 0 0 1-3-3.88Z" />
                      </svg> 13
                  </div>
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-share2-icon lucide-share-2">
                          <circle cx="18" cy="5" r="3" />
                          <circle cx="6" cy="12" r="3" />
                          <circle cx="18" cy="19" r="3" />
                          <line x1="8.59" x2="15.42" y1="13.51" y2="17.49" />
                          <line x1="15.41" x2="8.59" y1="6.51" y2="10.49" />
                      </svg>
                  </div>
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-sparkles-icon lucide-sparkles">
                          <path
                              d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z" />
                          <path d="M20 2v4" />
                          <path d="M22 4h-4" />
                          <circle cx="4" cy="20" r="2" />
                      </svg>
                      AI Insights
                  </div>
              </div>
          </div>
          <div>
              <div class="mb-3 text-start" style="background-color: #F9FAFB; border-radius:12px; padding:30px;">
                  <h3>Descrição</h3>
                  <p>Esta ideia propõe um <strong>aplicativo mobile</strong> que conecta pessoas da mesma região
                      interessadas em <strong>trocar livros físicos</strong>.<br>
                      O objetivo é promover a leitura, reduzir o desperdício e fortalecer comunidades locais através do
                      compartilhamento de conhecimento.</p>

                  <h2>Funcionalidades principais</h2>
                  <ul>
                      <li>Cadastro de livros com foto e descrição</li>
                      <li>Sistema de <em>matching</em> baseado em localização</li>
                      <li>Chat integrado para combinar trocas</li>
                      <li>Sistema de avaliação de usuários</li>
                      <li>Mapa com pontos de encontro seguros</li>
                  </ul>

                  <p>O app seria gratuito e focado em criar uma experiência simples e amigável para leitores de todas as
                      idades.</p>

                  <h3>Anexos</h3>
                  <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Mariana Guedes" width="180"
                      height="180">
              </div>

              <div>
                  <div class="p-4">
                      <h3 class="gap-2 mb-4 fw-bold d-flex align-items-center">
                          <!-- Ícone -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              class="lucide lucide-history">
                              <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                              <path d="M3 3v5h5"></path>
                              <path d="M12 7v5l4 2"></path>
                          </svg>
                          Changlog
                      </h3>

                      <div class="position-relative ps-4 border-start border-secondary">

                          <!-- ITEM 1 -->
                          <div class="mb-4 position-relative">
                              <div class="position-absolute"
                                  style="left:-13px; top:4px; width:12px; height:12px; border:2px solid #fff; background:#0d0d0d; border-radius:50%; box-shadow:0 0 3px rgba(0,0,0,0.3);">
                              </div>

                              <div class="mb-1 d-flex justify-content-between">
                                  <p class="mb-0 small fw-semibold">Version 1.2</p>
                                  <button class="px-2 py-0 btn btn-light btn-sm rounded-pill">View Changes</button>
                              </div>

                              <div class="gap-1 mb-2 d-flex align-items-center text-muted small">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="lucide lucide-user">
                                      <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                      <circle cx="12" cy="7" r="4"></circle>
                                  </svg>
                                  Sarah Green • 2h ago
                              </div>
                          </div>

                          <!-- ITEM 2 -->
                          <div class="mb-4 position-relative">
                              <div class="position-absolute"
                                  style="left:-13px; top:4px; width:12px; height:12px; border:2px solid #fff; background:#cbd5e1; border-radius:50%;">
                              </div>

                              <div class="mb-1 d-flex justify-content-between">
                                  <p class="mb-0 small fw-semibold text-secondary">Version 1.1</p>
                                  <button class="px-2 py-0 btn btn-light btn-sm rounded-pill">View Changes</button>
                              </div>

                              <div class="gap-1 mb-2 d-flex align-items-center text-muted small">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="lucide lucide-user">
                                      <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                      <circle cx="12" cy="7" r="4"></circle>
                                  </svg>
                                  Sarah Green • 1d ago
                              </div>
                          </div>

                          <!-- ITEM 3 -->
                          <div class="mb-4 position-relative">
                              <div class="position-absolute"
                                  style="left:-13px; top:4px; width:12px; height:12px; border:2px solid #fff; background:#cbd5e1; border-radius:50%;">
                              </div>

                              <div class="mb-1 d-flex justify-content-between">
                                  <p class="mb-0 small fw-semibold text-secondary">Version 1.0</p>
                                  <button class="px-2 py-0 btn btn-light btn-sm rounded-pill">View Changes</button>
                              </div>

                              <div class="gap-1 mb-2 d-flex align-items-center text-muted small">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="lucide lucide-user">
                                      <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                      <circle cx="12" cy="7" r="4"></circle>
                                  </svg>
                                  Sarah Green • 5d ago
                              </div>
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
