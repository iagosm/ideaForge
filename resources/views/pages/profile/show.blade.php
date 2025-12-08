<x-main-layout>
  {{-- Perfil --}}
  <section class="container pt-5 mt-5" style="max-width: 900px;">
      <!-- Card Perfil -->
      <div class="p-4 mb-4 border rounded-3"
          style="background: linear-gradient(to bottom right, #f9fafb, #ffffff);">
          <div class="row g-4 align-items-center">
              <!-- Avatar -->
              <div class="text-center col-md-auto">
                  <div class="rounded-circle d-flex align-items-center justify-content-center"
                      style="width: 96px; height: 96px; background: linear-gradient(to bottom right, #1f2937, #000); color: white; font-size: 32px; font-weight: bold;">
                      A
                  </div>
              </div>
              <!-- Infos -->
              <div class="col">
                  <h1 class="mb-2 fw-bold fs-2">Ana Silva</h1>
                  <!-- Linha info -->
                  <div class="flex-wrap gap-3 mb-3 d-flex small text-muted">
                      <div class="gap-1 d-flex align-items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                          ana.silva@email.com
                      </div>
                      <div class="gap-1 d-flex align-items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                          Membro desde Janeiro 2024
                      </div>
                  </div>
                  <p class="mb-3 text-muted">
                      Desenvolvedora apaixonada por projetos sociais e sustentabilidade...
                  </p>
                  <div class="gap-2 d-flex">
                      <button class="px-4 py-2 btn btn-dark rounded-pill">Editar Perfil</button>
                      <button class="px-4 py-2 btn btn-outline-dark rounded-pill">Seguir</button>
                  </div>
              </div>
          </div>
          <!-- Estatísticas -->
          <div class="pt-4 mt-4 text-center row row-cols-2 row-cols-md-5 border-top">
              <div class="mb-3 col">
                  <div class="gap-1 mb-1 text-muted small d-flex justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
                      Ideias
                  </div>
                  <p class="m-0 fs-3 fw-bold">12</p>
              </div>
              <div class="mb-3 col">
                  <div class="gap-1 mb-1 text-muted small d-flex justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up-icon lucide-trending-up"><path d="M16 7h6v6"/><path d="m22 7-8.5 8.5-5-5L2 17"/></svg>
                      Curtidas
                  </div>
                  <p class="m-0 fs-3 fw-bold">1847</p>
              </div>
              <div class="mb-3 col">
                  <div class="gap-1 mb-1 text-muted small d-flex justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-icon lucide-message-square"><path d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z"/></svg>
                       Comentários
                  </div>
                  <p class="m-0 fs-3 fw-bold">234</p>
              </div>
              <div class="mb-3 col">
                  <div class="gap-1 mb-1 text-muted small d-flex justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                       Seguidores
                  </div>
                  <p class="m-0 fs-3 fw-bold">89</p>
              </div>
              <div class="mb-3 col">
                  <div class="gap-1 mb-1 text-muted small d-flex justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy-icon lucide-trophy"><path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"/><path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"/><path d="M18 9h1.5a1 1 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"/><path d="M6 9H4.5a1 1 0 0 1 0-5H6"/></svg>
                      Badges
                  </div>
                  <p class="m-0 fs-3 fw-bold">3</p>
              </div>
          </div>
      </div>
      <!-- Conquistas -->
      <div class="p-4 mb-4 border rounded-3"
          style="background: linear-gradient(to bottom right, #f9fafb, #ffffff);">
          <h2 class="mb-4 fw-bold fs-3">Conquistas</h2>
          <div class="row row-cols-2 row-cols-md-4 g-3">
              <!-- Card 01 -->
              <div class="col">
                  <div class="p-4 text-center rounded-3"
                      style="background:#eff6ff; cursor:pointer; transition:.2s;">
                      <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                          style="width:64px; height:64px; background:#eff6ff;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star-icon lucide-star"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                      </div>
                      <h3 class="mb-1 fw-bold small">Iniciante</h3>
                      <p class="m-0 text-muted small">Primeira ideia publicada</p>
                  </div>
              </div>
              <!-- Card 02 -->
              <div class="col">
                  <div class="p-4 text-center rounded-3"
                      style="background:#fef9c3; cursor:pointer; transition:.2s;">
                      <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                          style="width:64px; height:64px; background:#fef9c3;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap-icon lucide-zap"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
                      </div>
                      <h3 class="mb-1 fw-bold small">Inovador</h3>
                      <p class="m-0 text-muted small">10 ideias publicadas</p>
                  </div>
              </div>
              <!-- Card 03 -->
              <div class="col">
                  <div class="p-4 text-center rounded-3"
                      style="background:#f3e8ff; cursor:pointer; transition:.2s;">
                      <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                          style="width:64px; height:64px; background:#f3e8ff;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy-icon lucide-trophy"><path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"/><path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"/><path d="M18 9h1.5a1 1 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"/><path d="M6 9H4.5a1 1 0 0 1 0-5H6"/></svg>
                      </div>
                      <h3 class="mb-1 fw-bold small">Veterano</h3>
                      <p class="m-0 text-muted small">1000 curtidas recebidas</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- NAV TABS -->
      <ul class="mb-4 nav nav-tabs" id="ideaTabs" role="tablist">
          <li class="nav-item" role="presentation">
              <button class="nav-link active" id="publicadas-tab" data-bs-toggle="tab"
                  data-bs-target="#publicadas" type="button" role="tab">
                  Ideias Publicadas
              </button>
          </li>
  
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="salvas-tab" data-bs-toggle="tab" data-bs-target="#salvas"
                  type="button" role="tab">
                  Ideias Salvas
              </button>
          </li>
      </ul>
      <!-- TAB CONTENT -->
      <div class="tab-content" id="ideaTabsContent">
          <!-- ============= ABA: IDEIAS PUBLICADAS ============= -->
          <div class="tab-pane fade show active" id="publicadas" role="tabpanel">
              <div class="row g-4">
                  <div class="col-md-6">
                      <div class="border-0 cursor-pointer card border-bottom shadow-sm-hover"
                          style="transition: .2s ease">
                          <div class="card-body">
                              <div class="gap-3 d-flex">
                                  <div class="flex-shrink-0">
                                      <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                          style="width: 40px; height: 40px; background: linear-gradient(135deg, #333, #000); color: #fff; font-weight: bold;">
                                          A
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <div class="mb-1 d-flex justify-content-between align-items-start">
                                          <div class="flex-wrap gap-2 d-flex align-items-center">
                                              <span class="fw-semibold small">Ana Silva</span>
                                              <span class="text-muted small">· 2h</span>
                                              <span class="badge bg-light text-muted small">Sustentabilidade</span>
                                          </div>
                                          <button class="p-1 btn rounded-circle">
                                              <div class="p-2 rounded-circle bg-light">
                                                  <i class="bi bi-three-dots-vertical text-muted"></i>
                                              </div>
                                          </button>
                                      </div>
                                      <h5 class="mb-1 fw-bold">App de Troca de Livros Local</h5>
                                      <p class="mb-3 text-muted small">
                                          Uma plataforma para conectar leitores do mesmo bairro...
                                      </p>
                                      <div class="gap-4 mt-2 d-flex">
                                          <button class="gap-1 p-0 btn d-flex align-items-center text-muted">
                                              <i class="bi bi-heart"></i> <span class="small fw-medium">124</span>
                                          </button>
                                          <button class="gap-1 p-0 btn d-flex align-items-center text-muted">
                                              <i class="bi bi-heart-fill"></i> <span
                                                  class="small fw-medium">8</span>
                                          </button>
                                          <button class="gap-1 p-0 btn d-flex align-items-center text-muted">
                                              <i class="bi bi-chat-dots"></i> <span
                                                  class="small fw-medium">45</span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ============= ABA: IDEIAS SALVAS ============= -->
          <div class="tab-pane fade" id="salvas" role="tabpanel">
              <div class="row g-4">
                  <div class="col-md-6">
                      <div class="border-0 cursor-pointer card border-bottom shadow-sm-hover"
                          style="transition: .2s ease">
                          <div class="card-body">
                              <div class="gap-3 d-flex">
                                  <div class="flex-shrink-0">
                                      <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                          style="width: 40px; height: 40px; background: linear-gradient(135deg, #333, #000); color: #fff; font-weight: bold;">
                                          A
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <div class="mb-1 d-flex justify-content-between align-items-start">
                                          <div class="flex-wrap gap-2 d-flex align-items-center">
                                              <span class="fw-semibold small">Ana Silva</span>
                                              <span class="text-muted small">· 1 dia</span>
                                              <span class="badge bg-light text-muted small">Mobilidade</span>
                                          </div>
                                          <button class="p-1 btn rounded-circle">
                                              <div class="p-2 rounded-circle bg-light">
                                                  <i class="bi bi-three-dots-vertical text-muted"></i>
                                              </div>
                                          </button>
                                      </div>
                                      <h5 class="mb-1 fw-bold">Sistema de Carona Solidária</h5>
                                      <p class="mb-3 text-muted small">
                                          Aplicativo para organizar caronas entre vizinhos...
                                      </p>
                                      <div class="gap-4 mt-2 d-flex">
                                          <button class="gap-1 p-0 btn d-flex align-items-center text-muted">
                                              <i class="bi bi-heart"></i> <span class="small fw-medium">89</span>
                                          </button>
                                          <button class="gap-1 p-0 btn d-flex align-items-center text-muted">
                                              <i class="bi bi-heart-fill"></i> <span
                                                  class="small fw-medium">8</span>
                                          </button>
                                          <button class="gap-1 p-0 btn d-flex align-items-center text-muted">
                                              <i class="bi bi-chat-dots"></i> <span
                                                  class="small fw-medium">23</span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</x-main-layout>