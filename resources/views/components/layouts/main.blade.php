<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'IdeaForge' }}</title>
    <!-- JetBrains Mono NL via Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Colors CSS -->
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <!-- Lucide Icons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest"></script>

    <style>
        body {
            font-family: 'JetBrains Mono NL', 'JetBrains Mono', monospace;
            background-color: var(--if-bg-secondary, #FAFAFA);
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }
        p, span, li, a {
            font-weight: 400;
        }
        .gradient-text {
            background: linear-gradient(to right, var(--if-gradient-start, #1e293b), var(--if-gradient-end, #64748b));
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
        .logo-img {
            width: 90px;
            border-radius: 12px;
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0); }
        }
        /* Search do Chat */
        #searchChat:focus {
            outline: 2px solid black;
            border-color: transparent !important;
            box-shadow: none !important;
        }
        /* Hover da conversa */
        .hover-shadow:hover {
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.08) !important;
        }
        .transition {
            transition: all .25s ease;
        }
        /* Chat styles */
        .chat-header-btn:hover {
            background-color: var(--if-hover-bg, #f8f9fa) !important;
        }
        .chat-input:focus {
            outline: 2px solid black !important;
            border-color: transparent !important;
            box-shadow: none !important;
        }
        .chat-send-btn:hover:not(:disabled) {
            background-color: var(--if-hover-dark, #1f2937) !important;
        }
        .chat-send-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        .notification-item:hover {
            background-color: var(--if-hover-bg, #f8f9fa) !important;
            cursor: pointer;
            transition: 0.2s;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white">
    <!-- Navbar -->
    <x-navbar />
    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>
    <!-- Footer -->
    <x-footer />
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

