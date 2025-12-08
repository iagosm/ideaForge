<x-main-layout>
  {{-- Pesquisa das ideias --}}
  <section class="pt-5 mt-5 text-center">
      <div class="container py-5">
  
          <!-- Header -->
          <div
              class="gap-3 mb-5 d-flex flex-column flex-md-row align-items-md-center align-items-end justify-content-between">
              <div>
                  <h1 class="mb-1 text-start fw-bold">Explore Ideias</h1>
                  <p class="m-0 text-muted">Descubra o que a comunidade está criando.</p>
              </div>
  
              <a href="/create">
                  <button class="gap-2 shadow btn btn-dark d-inline-flex align-items-center rounded-pill">
                      <i data-lucide="plus" class="w-4 h-4"></i>
                      Criar ideia
                  </button>
              </a>
          </div>
  
          <div class="gap-3 mb-4 d-flex flex-column flex-md-row">
  
              <div class="gap-3 mb-4 d-flex flex-column flex-md-row">
  
                  <!-- Search -->
                  <div class="flex-grow-1 position-relative">
                      <svg style="left: 16px; top: 50%; transform: translateY(-50%);"
                          class="text-muted position-absolute" xmlns="http://www.w3.org/2000/svg" width="20"
                          height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="m21 21-4.34-4.34" />
                          <circle cx="11" cy="11" r="8" />
                      </svg>
  
                      <input type="text" class="form-control form-control-lg ps-5 rounded-4"
                          placeholder="Buscar ideias...">
                  </div>
  
                  <!-- Dropdown de Ordenação -->
                  <div class="dropdown">
                      <button class="btn btn-outline-secondary btn-lg rounded-4 dropdown-toggle"
                          data-bs-toggle="dropdown">
                          Ordenar
                      </button>
  
                      <ul class="p-2 shadow dropdown-menu rounded-4">
                          <li><button class="dropdown-item">Mais recentes</button></li>
                          <li><button class="dropdown-item">Mais antigos</button></li>
                          <li><button class="dropdown-item">Mais likes</button></li>
                          <li><button class="dropdown-item">Mais dislikes</button></li>
                      </ul>
                  </div>
  
                  <!-- Dropdown de Filtros (Tags) -->
                  <div class="dropdown">
                      <button class="btn btn-outline-secondary btn-lg rounded-4 dropdown-toggle"
                          data-bs-toggle="dropdown">
                          Tags
                      </button>
  
                      <ul class="p-3 shadow dropdown-menu rounded-4" style="min-width: 240px;"
                          data-bs-auto-close="outside">
  
                          <li>
                              <label class="gap-2 d-flex align-items-center">
                                  <input type="checkbox" class="form-check-input"> Sustainability
                              </label>
                          </li>
                          <li>
                              <label class="gap-2 d-flex align-items-center">
                                  <input type="checkbox" class="form-check-input"> AI
                              </label>
                          </li>
                          <li>
                              <label class="gap-2 d-flex align-items-center">
                                  <input type="checkbox" class="form-check-input"> Mobile App
                              </label>
                          </li>
                          <li>
                              <label class="gap-2 d-flex align-items-center">
                                  <input type="checkbox" class="form-check-input"> Education
                              </label>
                          </li>
                          <li>
                              <label class="gap-2 d-flex align-items-center">
                                  <input type="checkbox" class="form-check-input"> Community
                              </label>
                          </li>
  
                          <li class="pt-2 mt-2 text-center border-top">
                              <button class="btn btn-sm btn-light w-100">Limpar filtros</button>
                          </li>
                      </ul>
                  </div>
  
              </div>
  
          </div>
  
  
          <!-- LISTA DE IDEIAS -->
          <div class="row gy-4">
              <!-- CARD 1 -->
              <div class=" col-12 idea-card">
                  <a href="/idea/2" class="text-decoration-none text-reset">
                      <div class="p-4 transition bg-white border shadow-sm rounded-4 p-md-5 hover-shadow">
                          <div class="gap-4 d-flex flex-column flex-md-row">
                              <div class="flex-grow-1 text-start">
                                  <div class="gap-2 mb-2 d-flex align-items-center">
                                      <span class="px-3 py-1 badge bg-light text-dark rounded-pill">Educação</span>
                                      <span class="text-muted small">Atualizado 30/11/2025</span>
                                  </div>
  
                                  <h3 class="mb-2 fw-bold text-body">Troca de Habilidades – Plataforma Comunitária
                                  </h3>
  
                                  <p class="mb-3 text-muted">
                                      Uma plataforma onde moradores podem trocar habilidades entre si —
                                      programação por culinária, guitarra por jardinagem, e muito mais.
                                  </p>
  
                                  <div class="flex-wrap gap-2 d-flex">
                                      <span class="border badge bg-light text-muted rounded-pill">#Educação</span>
                                      <span
                                          class="border badge bg-light text-muted rounded-pill">#Comunidade</span>
                                      <span
                                          class="border badge bg-light text-muted rounded-pill">#PlataformaWeb</span>
                                  </div>
                              </div>
                              <div
                                  class="gap-3 pt-3 d-flex flex-md-column align-items-md-end border-start border-md-0 border-md-start ps-md-4">
                                  <div class="gap-3 d-flex align-items-center">
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-heart-icon lucide-heart">
                                              <path
                                                  d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                                          </svg>89
                                      </button>
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-thumbs-down-icon lucide-thumbs-down">
                                              <path d="M17 14V2" />
                                              <path
                                                  d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22a3.13 3.13 0 0 1-3-3.88Z" />
                                          </svg>8
                                      </button>
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-message-square-icon lucide-message-square">
                                              <path
                                                  d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z" />
                                          </svg> 12
                                      </button>
                                  </div>
                                  <div class="gap-2 mt-auto d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah"
                                          class="rounded-circle" width="28">
                                      <span class="text-muted small">Sarah Green</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-12 idea-card">
                  <a href="/idea/2" class="text-decoration-none text-reset">
                      <div class="p-4 transition bg-white border shadow-sm rounded-4 p-md-5 hover-shadow">
                          <div class="gap-4 d-flex flex-column flex-md-row">
                              <div class="flex-grow-1 text-start">
                                  <div class="gap-2 mb-2 d-flex align-items-center">
                                      <span
                                          class="px-3 py-1 badge bg-light text-dark rounded-pill">Bem-estar</span>
                                      <span class="text-muted small">Atualizado 30/11/2025</span>
                                  </div>
  
                                  <h3 class="mb-2 fw-bold text-body">MindCare – Check-in Diário de Humor</h3>
  
                                  <p class="mb-3 text-muted">
                                      Aplicativo simples para registrar humor, energia e estresse diariamente,
                                      gerando gráficos e recomendações personalizadas ao usuário.
                                  </p>
  
                                  <div class="flex-wrap gap-2 d-flex">
                                      <span
                                          class="border badge bg-light text-muted rounded-pill">#SaúdeMental</span>
                                      <span class="border badge bg-light text-muted rounded-pill">#BemEstar</span>
                                      <span
                                          class="border badge bg-light text-muted rounded-pill">#AutoCuidado</span>
                                  </div>
                              </div>
  
                              <div
                                  class="gap-3 pt-3 d-flex flex-md-column align-items-md-end border-start border-md-0 border-md-start ps-md-4">
                                  <div class="gap-3 d-flex align-items-center">
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-heart-icon lucide-heart">
                                              <path
                                                  d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                                          </svg>89
                                      </button>
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-thumbs-down-icon lucide-thumbs-down">
                                              <path d="M17 14V2" />
                                              <path
                                                  d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22a3.13 3.13 0 0 1-3-3.88Z" />
                                          </svg>8
                                      </button>
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-message-square-icon lucide-message-square">
                                              <path
                                                  d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z" />
                                          </svg> 12
                                      </button>
                                  </div>
                                  <div class="gap-2 mt-auto d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah"
                                          class="rounded-circle" width="28">
                                      <span class="text-muted small">Sarah Green</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-12 idea-card">
                  <a href="/idea/2" class="text-decoration-none text-reset">
                      <div class="p-4 transition bg-white border shadow-sm rounded-4 p-md-5 hover-shadow">
                          <div class="gap-4 d-flex flex-column flex-md-row">
                              <div class="flex-grow-1 text-start">
                                  <div class="gap-2 mb-2 d-flex align-items-center">
                                      <span
                                          class="px-3 py-1 badge bg-light text-dark rounded-pill">Produtividade</span>
                                      <span class="text-muted small">Atualizado 30/11/2025</span>
                                  </div>
  
                                  <h3 class="mb-2 fw-bold text-body">TaskFlow – Fluxo Inteligente de Tarefas</h3>
  
                                  <p class="mb-3 text-muted">
                                      Sistema de organização que usa IA para priorizar tarefas conforme tempo,
                                      urgência e energia disponível do usuário.
                                  </p>
  
                                  <div class="flex-wrap gap-2 d-flex">
                                      <span
                                          class="border badge bg-light text-muted rounded-pill">#Produtividade</span>
                                      <span class="border badge bg-light text-muted rounded-pill">#IA</span>
                                      <span
                                          class="border badge bg-light text-muted rounded-pill">#Organização</span>
                                  </div>
                              </div>
  
                              <div
                                  class="gap-3 pt-3 d-flex flex-md-column align-items-md-end border-start border-md-0 border-md-start ps-md-4">
                                  <div class="gap-3 d-flex align-items-center">
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-heart-icon lucide-heart">
                                              <path
                                                  d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
                                          </svg>89
                                      </button>
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-thumbs-down-icon lucide-thumbs-down">
                                              <path d="M17 14V2" />
                                              <path
                                                  d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22a3.13 3.13 0 0 1-3-3.88Z" />
                                          </svg>8
                                      </button>
                                      <button class="gap-1 p-0 btn d-flex align-items-center text-muted small">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                              class="lucide lucide-message-square-icon lucide-message-square">
                                              <path
                                                  d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z" />
                                          </svg> 12
                                      </button>
                                  </div>
                                  <div class="gap-2 mt-auto d-flex align-items-center">
                                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah"
                                          class="rounded-circle" width="28">
                                      <span class="text-muted small">Sarah Green</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </section>
</x-main-layout>