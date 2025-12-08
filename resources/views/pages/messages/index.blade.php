<x-main-layout hideFooter="true">
    <!-- Hero Section -->
    <section class="container pt-5 mt-5" style="max-width: 900px;">
        <h1 color>Mensagens</h1>
        <p style="color:rgb(107, 114, 128); font-size: 18px;">
            Você tem <span style="font-weight: bold; color:black;">0</span> mensagens não lidas
        </p>
        <div class="mb-4 position-relative">
            <span class="position-absolute ms-3 text-muted" style="top: 25%;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    style="color:rgb(156, 163, 175);" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.34-4.34"></path>
                </svg>
            </span>
            <input id="searchChat" type="text" class="py-3 border-2 form-control ps-5 rounded-pill"
                style="background-color:rgb(249, 250, 251);" placeholder="Buscar conversas...">
        </div>
        <div class="gap-3 mb-5 d-flex flex-column">
            <!-- ITEM 1 -->
            <a href="/messages/mariana" class="text-decoration-none">
                <div class="p-4 transition bg-white border shadow-sm rounded-4 hover-shadow">

                    <div class="gap-3 d-flex align-items-center">

                        <!-- Avatar + status -->
                        <div class="flex-shrink-0 position-relative">
                            <div class="text-white rounded-circle bg-dark d-flex align-items-center justify-content-center fs-4 fw-bold"
                                style="width: 56px; height: 56px;">
                                M
                            </div>

                            <!-- Status online -->
                            <span class="bottom-0 border border-white position-absolute end-0 bg-success rounded-circle"
                                style="width: 14px; height: 14px;"></span>
                        </div>

                        <!-- Conteúdo -->
                        <div class="flex-grow-1 text-dark">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold text-truncate" style="max-width: 150px;">Mariana Silva</h5>
                                <span class="text-muted small">2 min</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-muted small text-truncate me-2" style="max-width: 230px;">
                                    Adorei sua ideia! Vamos conversar mais sobre isso?
                                </p>

                                <span class="badge bg-dark rounded-pill">2</span>
                            </div>
                        </div>

                    </div>

                </div>
            </a>
            <!-- ITEM 2 -->
            <a href="/messages/teste" class="text-decoration-none">
                <div class="p-4 transition bg-white border shadow-sm rounded-4 hover-shadow">

                    <div class="gap-3 d-flex align-items-center">

                        <div class="flex-shrink-0 position-relative">
                            <div class="text-white rounded-circle bg-dark d-flex align-items-center justify-content-center fs-4 fw-bold"
                                style="width: 56px; height: 56px;">
                                C
                            </div>
                            <span class="bottom-0 border border-white position-absolute end-0 bg-success rounded-circle"
                                style="width: 14px; height: 14px;"></span>
                        </div>

                        <div class="flex-grow-1 text-dark">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold text-truncate">Carlos Mendes</h5>
                                <span class="text-muted small">1h</span>
                            </div>

                            <p class="text-muted small text-truncate me-2">Obrigado pelo feedback! 🚀</p>
                        </div>

                    </div>

                </div>
            </a>
            <a href="/messages/teste1" class="text-decoration-none">
                <div class="p-4 transition bg-white border shadow-sm rounded-4 hover-shadow">

                    <div class="gap-3 d-flex align-items-center">

                        <div class="flex-shrink-0 position-relative">
                            <div class="text-white rounded-circle bg-dark d-flex align-items-center justify-content-center fs-4 fw-bold"
                                style="width: 56px; height: 56px;">
                                J
                            </div>
                            <span class="bottom-0 border border-white position-absolute end-0 bg-success rounded-circle"
                                style="width: 14px; height: 14px;"></span>
                        </div>

                        <div class="flex-grow-1 text-dark">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold text-truncate">Julia Rodrigues</h5>
                                <span class="text-muted small">3h</span>
                            </div>

                            <p class="text-muted small text-truncate me-2">Posso te ajudar com o design?</p>
                        </div>

                    </div>

                </div>
            </a>
            <a href="/messages/teste2" class="text-decoration-none">
                <div class="p-4 transition bg-white border shadow-sm rounded-4 hover-shadow">

                    <div class="gap-3 d-flex align-items-center">

                        <div class="flex-shrink-0 position-relative">
                            <div class="text-white rounded-circle bg-dark d-flex align-items-center justify-content-center fs-4 fw-bold"
                                style="width: 56px; height: 56px;">
                                P
                            </div>
                            <span class="bottom-0 border border-white position-absolute end-0 bg-success rounded-circle"
                                style="width: 14px; height: 14px;"></span>
                        </div>

                        <div class="flex-grow-1 text-dark">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold text-truncate">Pedro Santos</h5>
                                <span class="text-muted small">Ontem</span>
                            </div>

                            <p class="text-muted small text-truncate me-2">Vi sua implementação, ficou top!!</p>
                        </div>

                    </div>

                </div>
            </a>
            <a href="/messages/teste3" class="text-decoration-none">
                <div class="p-4 transition bg-white border shadow-sm rounded-4 hover-shadow">

                    <div class="gap-3 d-flex align-items-center">

                        <div class="flex-shrink-0 position-relative">
                            <div class="text-white rounded-circle bg-dark d-flex align-items-center justify-content-center fs-4 fw-bold"
                                style="width: 56px; height: 56px;">
                                A
                            </div>
                            <span class="bottom-0 border border-white position-absolute end-0 bg-success rounded-circle"
                                style="width: 14px; height: 14px;"></span>
                        </div>
                        <div class="flex-grow-1 text-dark">
                            <div class="mb-1 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 fw-bold text-truncate">Ana Costa</h5>
                                <span class="text-muted small">2 dias</span>
                            </div>
                            <p class="text-muted small text-truncate me-2">Vamos fazer esse projeto juntos??</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
</x-main-layout>
