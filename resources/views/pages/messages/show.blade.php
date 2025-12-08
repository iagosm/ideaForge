
<x-main-layout hideFooter="true">
      <section class="container mx-auto d-flex flex-column"
        style="max-width: 768px; height: calc(100vh - 70px); margin-top: 70px; position: relative;">
        <!-- Cabeçalho do chat -->
        <div class="px-4 py-3 bg-white position-fixed start-50 translate-middle-x border-bottom d-flex align-items-center justify-content-between"
            style="width: 100%; max-width: 768px; top: 70px; z-index: 1000; flex-shrink: 0;">
            <div class="gap-3 d-flex align-items-center">
                <!-- Botão voltar -->
                <button class="p-2 btn btn-light rounded-circle chat-header-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-muted" aria-hidden="true">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                </button>
                <!-- Usuário -->
                <div class="gap-3 d-flex align-items-center">
                    <div class="flex-shrink-0 text-white rounded-circle d-flex justify-content-center align-items-center"
                        style="width:40px; height:40px; background: linear-gradient(135deg, #1f2937, #000); font-size:0.875rem; font-weight:bold;">
                        C
                    </div>
                    <div>
                        <h6 class="mb-0 fw-semibold text-dark">Carlos Mendes</h6>
                        <small class="text-success">Online</small>
                    </div>
                </div>
            </div>
            <!-- Ações -->
            <div class="gap-2 d-flex align-items-center">
                <button class="p-2 btn btn-light rounded-circle chat-header-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-muted" aria-hidden="true">
                        <path
                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                        </path>
                    </svg>
                </button>
                <button class="p-2 btn btn-light rounded-circle chat-header-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-muted" aria-hidden="true">
                        <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                    </svg>
                </button>
                <button class="p-2 btn btn-light rounded-circle chat-header-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="text-muted" aria-hidden="true">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mensagens -->
        <div id="chatMessages" class="px-4 py-4 overflow-auto flex-fill"
            style="min-height: 0; margin-top: 60px; padding-bottom: 100px;">
            <div class="mb-4 d-flex justify-content-start">
                <div class="gap-3 d-flex" style="max-width: 28rem;">
                    <div class="flex-shrink-0 text-white rounded-circle d-flex justify-content-center align-items-center"
                        style="width:32px; height:32px; background: linear-gradient(135deg, #1f2937, #000); font-size:0.75rem; font-weight:bold;">
                        C
                    </div>
                    <div class="px-4 py-3 bg-light text-dark rounded-3 rounded-bottom-start">
                        <p class="mb-1 small">Olá! Vi sua ideia sobre troca de livros. Adorei o conceito!</p>
                        <small class="text-muted">10:30</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-end">
                <div class="flex-row-reverse gap-3 d-flex" style="max-width: 28rem;">
                    <div class="px-4 py-3 text-white bg-dark rounded-3 rounded-bottom-end">
                        <p class="mb-1 small">Obrigada! Fico feliz que tenha gostado. Tem alguma sugestão?</p>
                        <small class="text-white-50">10:32</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-start">
                <div class="gap-3 d-flex" style="max-width: 28rem;">
                    <div class="flex-shrink-0 text-white rounded-circle d-flex justify-content-center align-items-center"
                        style="width:32px; height:32px; background: linear-gradient(135deg, #1f2937, #000); font-size:0.75rem; font-weight:bold;">
                        C
                    </div>
                    <div class="px-4 py-3 bg-light text-dark rounded-3 rounded-bottom-start">
                        <p class="mb-1 small">Sim! Que tal adicionar um sistema de avaliação dos livros?</p>
                        <small class="text-muted">10:35</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-end">
                <div class="flex-row-reverse gap-3 d-flex" style="max-width: 28rem;">
                    <div class="px-4 py-3 text-white bg-dark rounded-3 rounded-bottom-end">
                        <p class="mb-1 small">Excelente ideia! Vou adicionar isso ao roadmap 🚀</p>
                        <small class="text-white-50">10:36</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-start">
                <div class="gap-3 d-flex" style="max-width: 28rem;">
                    <div class="flex-shrink-0 text-white rounded-circle d-flex justify-content-center align-items-center"
                        style="width:32px; height:32px; background: linear-gradient(135deg, #1f2937, #000); font-size:0.75rem; font-weight:bold;">
                        C
                    </div>
                    <div class="px-4 py-3 bg-light text-dark rounded-3 rounded-bottom-start">
                        <p class="mb-1 small">Outra coisa: talvez permitir trocar não só livros físicos, mas PDFs
                            legais.</p>
                        <small class="text-muted">10:38</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-end">
                <div class="flex-row-reverse gap-3 d-flex" style="max-width: 28rem;">
                    <div class="px-4 py-3 text-white bg-dark rounded-3 rounded-bottom-end">
                        <p class="mb-1 small">Ótimo ponto! E também posso incluir filtros por gênero e autor.</p>
                        <small class="text-white-50">10:40</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-start">
                <div class="gap-3 d-flex" style="max-width: 28rem;">
                    <div class="flex-shrink-0 text-white rounded-circle d-flex justify-content-center align-items-center"
                        style="width:32px; height:32px; background: linear-gradient(135deg, #1f2937, #000); font-size:0.75rem; font-weight:bold;">
                        C
                    </div>
                    <div class="px-4 py-3 bg-light text-dark rounded-3 rounded-bottom-start">
                        <p class="mb-1 small">Perfeito! Isso deixaria tudo muito mais organizado.</p>
                        <small class="text-muted">10:41</small>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-flex justify-content-end">
                <div class="flex-row-reverse gap-3 d-flex" style="max-width: 28rem;">
                    <div class="px-4 py-3 text-white bg-dark rounded-3 rounded-bottom-end">
                        <p class="mb-1 small">Obrigada pelas ideias! Você está realmente contribuindo muito 😊</p>
                        <small class="text-white-50">10:42</small>
                    </div>
                </div>
            </div>

        </div>
        <!-- Input -->
        <div class="bottom-0 px-4 py-3 bg-white position-fixed start-50 translate-middle-x border-top"
            style="width: 100%; max-width: 768px; z-index: 1000; flex-shrink: 0;">
            <div class="gap-3 d-flex">
                <input type="text" class="px-4 py-3 form-control flex-fill rounded-3 chat-input"
                    placeholder="Digite sua mensagem..."
                    style="background-color: #f9fafb; border: 1px solid #e5e7eb;">
                <button
                    class="gap-2 px-4 py-3 btn btn-dark rounded-3 fw-semibold d-flex align-items-center chat-send-btn"
                    disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                        </path>
                        <path d="m21.854 2.147-10.94 10.939"></path>
                    </svg>
                    Enviar
                </button>
            </div>
        </div>
    </section>
</x-main-layout>