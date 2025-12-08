<x-main-layout>
  {{-- Notificações --}}
  <section class="container pt-5 mt-5" style="max-width: 900px;">
      <!-- Título -->
      <div class="gap-3 mb-4 d-flex align-items-center">
          <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="text-dark">
              <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
              <path
                  d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326">
              </path>
          </svg>
          <h1 class="fw-bold display-6">Notificações</h1>
      </div>
      <div class="mb-5">
          <h2 class="px-2 mb-3 small fw-bold text-dark">Hoje</h2>
          <div class="gap-2 d-flex flex-column">
              <!-- ITEM -->
              <div class="gap-3 p-3 d-flex rounded-4 bg-light notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #fee2e2;">
                      <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" class="text-danger">
                          <path
                              d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                          </path>
                      </svg>
                  </div>
  
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>Carlos Mendes</strong> curtiu sua ideia 'App de Troca de Livros Local'
                      </p>
                      <p class="text-muted small">há 5 minutos</p>
                  </div>
  
                  <div class="flex-shrink-0 mt-1">
                      <span class="d-block rounded-circle bg-dark" style="width: 8px; height: 8px;"></span>
                  </div>
              </div>
              <!-- ITEM -->
              <div class="gap-3 p-3 d-flex rounded-4 bg-light notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #eff6ff;">
                      <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                          class="text-primary">
                          <path
                              d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z">
                          </path>
                      </svg>
                  </div>
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>Beatriz Costa</strong> comentou em 'App de Troca de Livros Local'
                      </p>
                      <p class="text-muted small">há 1 hora</p>
                  </div>
                  <div class="flex-shrink-0 mt-1">
                      <span class="d-block rounded-circle bg-dark" style="width: 8px; height: 8px;"></span>
                  </div>
              </div>
              <!-- ITEM -->
              <div class="gap-3 p-3 bg-white border d-flex rounded-4 notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #ecfdf5;">
                      <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2"
                          class="text-success">
                          <circle cx="9" cy="7" r="4"></circle>
                          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                          <line x1="19" x2="19" y1="8" y2="14"></line>
                          <line x1="22" x2="16" y1="11" y2="11"></line>
                      </svg>
                  </div>
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>Ricardo Souza</strong> começou a seguir você
                      </p>
                      <p class="text-muted small">há 3 horas</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- ===================================================================== -->
      <!-- ============================== ONTEM ================================ -->
      <!-- ===================================================================== -->
      <div class="mb-5">
          <h2 class="px-2 mb-3 small fw-bold text-dark">Ontem</h2>
          <div class="gap-2 d-flex flex-column">
              <div class="gap-3 p-3 d-flex rounded-4 bg-light notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #fef9c3;">
                      <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2"
                          class="text-warning">
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M12 6v6l4 2"></path>
                      </svg>
                  </div>
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>Ana Paula</strong> reagiu ao seu comentário
                      </p>
                      <p class="text-muted small">Ontem às 18:12</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- ===================================================================== -->
      <!-- ============================ ÚLTIMOS 7 DIAS ========================= -->
      <!-- ===================================================================== -->
      <div class="mb-5">
          <h2 class="px-2 mb-3 small fw-bold text-dark">Últimos 7 dias</h2>
          <div class="gap-2 d-flex flex-column">
              <div class="gap-3 p-3 bg-white border d-flex rounded-4 notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #e0f2fe;">
                      <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2"
                          class="text-info">
                          <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                          <path d="M21 18H3"></path>
                      </svg>
                  </div>
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>Lucas Martins</strong> adicionou uma nova ideia
                      </p>
                      <p class="text-muted small">3 dias atrás</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- ===================================================================== -->
      <!-- =========================== ÚLTIMOS 30 DIAS ========================= -->
      <!-- ===================================================================== -->
      <div class="mb-5">
          <h2 class="px-2 mb-3 small fw-bold text-dark">Últimos 30 dias</h2>
          <div class="gap-2 d-flex flex-column">
              <div class="gap-3 p-3 d-flex rounded-4 bg-light notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #f3e8ff;">
                      <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2"
                          class="text-purple">
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M12 8v4l3 3"></path>
                      </svg>
                  </div>
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>Mariana Lima</strong> marcou você em uma publicação
                      </p>
                      <p class="text-muted small">2 semanas atrás</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- ===================================================================== -->
      <!-- ============================ MAIS ANTIGAS =========================== -->
      <!-- ===================================================================== -->
      <div class="mb-5">
          <h2 class="px-2 mb-3 small fw-bold text-dark">Mais antigas</h2>
          <div class="gap-2 d-flex flex-column">
              <div class="gap-3 p-3 bg-white border d-flex rounded-4 notification-item">
                  <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle"
                      style="width: 48px; height: 48px; background: #e2e8f0;">
                      <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2"
                          class="text-secondary">
                          <circle cx="12" cy="12" r="10"></circle>
                          <path d="M12 7v5h4"></path>
                      </svg>
                  </div>
                  <div class="flex-grow-1">
                      <p class="mb-1 text-dark small">
                          <strong>João Vieira</strong> comentou na sua ideia antiga
                      </p>
                      <p class="text-muted small">há 3 meses</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
</x-main-layout>