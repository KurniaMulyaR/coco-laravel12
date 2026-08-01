<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'COCO ')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/Logo_Coco Agency_White.png') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    {{-- load main JS from public folder (static) so it works without Vite) --}}
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/button-click-logger.js') }}" defer></script>
</head>
<body class="bg-white">

    {{-- COCO Navbar --}}
    @include('components.coco-navbar')

    {{-- Content --}}
    @yield('content')

    {{-- SweetAlert2 (success notification) --}}
    @include('components.sweetalert2-success')

    {{-- COCO Footer --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>

