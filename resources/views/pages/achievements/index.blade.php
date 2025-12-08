<x-main-layout>
  <section class="container pt-5 mt-5" style="max-width: 900px;">
      <!-- Card principal -->
      <div class="p-4 mb-4 border shadow-sm card rounded-4"
          style="background: linear-gradient(135deg, #f9fafb, #ffffff);">
          <div class="gap-3 mb-3 d-flex align-items-center">
              <div class="d-flex align-items-center justify-content-center rounded-3"
                  style="width: 64px; height: 64px; background: linear-gradient(135deg, #1f2937, #000000); color: #fff;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-trophy" aria-hidden="true">
                      <path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path>
                      <path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path>
                      <path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path>
                      <path d="M4 22h16"></path>
                      <path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path>
                      <path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path>
                  </svg>
              </div>
              <div>
                  <h1 class="mb-1 h3 fw-bold">Conquistas</h1>
                  <p class="mb-0 text-muted">Acompanhe seu progresso e desbloqueie badges especiais</p>
              </div>
          </div>
  
          <!-- Progresso Global -->
          <div class="mb-4">
              <div class="mb-1 d-flex justify-content-between">
                  <span class="small fw-medium text-muted">Progresso Global</span>
                  <span class="small fw-bold text-dark">3/11</span>
              </div>
              <div class="progress rounded-pill" style="height: 12px;">
                  <div class="progress-bar bg-dark" role="progressbar" style="width: 27.27%;" aria-valuenow="27"
                      aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
      </div>
  
      <!-- Desbloqueadas -->
      <div class="mb-5">
          <h2 class="mb-3 h4 fw-bold">Desbloqueadas (3)</h2>
          <div class="row g-3">
              <!-- Badge exemplo -->
              <div class="col-6 col-md-4 col-lg-3">
                  <div
                      class="p-3 text-center border-0 shadow-sm cursor-pointer card rounded-3 bg-primary bg-opacity-10 hover-scale">
                      <div class="mx-auto mb-2 d-flex align-items-center justify-content-center rounded-circle"
                          style="width: 64px; height: 64px; background-color: #e0f2ff;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="lucide lucide-star text-primary" aria-hidden="true">
                              <path
                                  d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                              </path>
                          </svg>
                      </div>
                      <h3 class="mb-1 fw-bold">Iniciante</h3>
                      <p class="mb-1 small text-muted">Primeira ideia publicada</p>
                      <div class="small text-muted">✓ Completo</div>
                  </div>
              </div>
              <!-- Replicar badges -->
          </div>
      </div>
  
      <!-- Em Progresso -->
      <div class="mb-5">
          <h2 class="mb-3 h4 fw-bold">Em Progresso (8)</h2>
          <div class="row g-3">
              <div class="col-12 col-md-6">
                  <div class="p-3 border card rounded-3 hover-border">
                      <div class="gap-3 d-flex align-items-start">
                          <div class="d-flex align-items-center justify-content-center rounded-2 bg-warning bg-opacity-10"
                              style="width: 56px; height: 56px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-crown text-warning">
                                  <path
                                      d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                  </path>
                                  <path d="M5 21h14"></path>
                              </svg>
                          </div>
                          <div class="flex-grow-1">
                              <h3 class="mb-1 fw-bold">Lenda</h3>
                              <p class="mb-2 small text-muted">50 ideias publicadas</p>
                              <p class="mb-2 small text-muted">Publique 50 ideias (12/50)</p>
                              <div>
                                  <div class="mb-1 d-flex justify-content-between">
                                      <span class="small text-muted">Progresso</span>
                                      <span class="small fw-bold text-dark">24%</span>
                                  </div>
                                  <div class="progress rounded-pill" style="height: 10px;">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 24%;"
                                          aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Replicar cards de progresso -->
          </div>
      </div>
  
      <!-- Estatísticas -->
      <div class="p-4 text-white card"
          style="background: linear-gradient(135deg, #111827, #000000); border-radius: 2rem;">
          <h2 class="mb-4 h4 fw-bold">Estatísticas de Conquistas</h2>
          <div class="text-center row g-3">
              <div class="col-6 col-md-3">
                  <div class="mb-1 h2 fw-bold">3</div>
                  <div class="small text-secondary">Desbloqueadas</div>
              </div>
              <div class="col-6 col-md-3">
                  <div class="mb-1 h2 fw-bold">8</div>
                  <div class="small text-secondary">Restantes</div>
              </div>
              <div class="col-6 col-md-3">
                  <div class="mb-1 h2 fw-bold">27%</div>
                  <div class="small text-secondary">Completo</div>
              </div>
              <div class="col-6 col-md-3">
                  <div class="mb-1 h2 fw-bold">4</div>
                  <div class="small text-secondary">Em Progresso</div>
              </div>
          </div>
      </div>
  </section>
</x-main-layout>
