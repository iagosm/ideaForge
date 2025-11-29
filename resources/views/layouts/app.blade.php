<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'IdeaForge' }}</title>

    {{-- Tailwind via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Lucide Icons --}}
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest"></script>
</head>

<body class="bg-white text-slate-900">

    {{-- Aqui vai o conteúdo das páginas --}}
    <main>
        @yield('content')
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            lucide.createIcons();
        });
    </script>

</body>
</html>
