<x-main-layout>
    <x-slot name="title">IdeaForge - Crie sua próxima ideia</x-slot>
    <section class="container pt-5 mt-5 text-center" style="max-width: 900px;">
        <div class="mb-4 floating-logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo-img">
        </div>
        <h1 class="mb-3 display-3 fw-bold">Crie sua próxima <span class="gradient-text">ideia</span></h1>
        <p class="mb-4 lead text-muted">IdeaForge é a plataforma minimalista para transformar suas ideias em
            realidade, aperfeiçoá-las e compartilhá-las. Inteligência artificial e comunidade movem sua
            criatividade.</p>
        <div class="flex-wrap gap-3 d-flex justify-content-center">
            <a href="/create" class="gap-2 btn btn-dark btn-lg d-flex align-items-center">
                Crie sua Ideia <svg class="lucide lucide-arrow-right" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
            <a href="/how-it-works" class="btn btn-outline-secondary btn-lg">
                Guia
            </a>
        </div>
        <div class="gap-2 mt-3 mb-3 badge bg-light text-dark d-inline-flex align-items-center fs-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-sparkles-icon lucide-sparkles">
                <path
                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z" />
                <path d="M20 2v4" />
                <path d="M22 4h-4" />
                <circle cx="4" cy="20" r="2" />
            </svg> Onde ideias se tornam realidades
        </div>
    </section>
    <!-- Ideias em Destaque -->
    <section class="py-5">
        <div class="container">
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h2 class="fw-bold">Ideias em Destaque</h2>
                <a href="/explore" class="gap-1 btn btn-outline-secondary btn-sm d-flex align-items-center">
                    Ver tudo <svg class="lucide lucide-arrow-right" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-4">
                    <div class="p-2 border-0 shadow-sm card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-2 d-flex justify-content-between align-items-start">
                                <span class="badge bg-light text-dark">Environment</span>
                                <small class="text-muted">#001</small>
                            </div>
                            <h5 class="mb-2 card-title">EcoTrack - Sustainable Living Assistant</h5>
                            <p class="card-text text-muted">An
                                AI-powered app that helps users track their carbon footprint and suggests
                                personalized, actionable steps to live more sustainably.</p>
                            <div
                                class="pt-3 mt-auto d-flex justify-content-between align-items-center border-top border-light">
                                <div class="gap-2 d-flex align-items-center">
                                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah" alt="Sarah Green"
                                        class="rounded-circle" width="24" height="24">
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
                    <div class="p-2 border-0 shadow-sm card h-100">
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
                    <div class="p-2 border-0 shadow-sm card h-100">
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
                                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Jess" alt="Jessica Fit"
                                        class="rounded-circle" width="24" height="24">
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
    <!-- Funcionalidades -->
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
                            <p class="text-center card-text text-muted">Não deixe grandes ideias
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
                            <p class="text-center card-text text-muted">Travou em algum detalhe? Nossa
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
                            <p class="text-center card-text text-muted">Compartilhe com uma comunidade
                                de inovadores. Receba curtidas, comentários e feedback construtivo para evoluir suas
                                ideias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
