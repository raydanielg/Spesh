<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Spesh Company Limited — A regional leader in logistics. Customs clearing, freight forwarding, project logistics, warehousing & more. Dar es Salaam, Tanzania.">
    <meta name="keywords" content="Spesh, logistics, customs clearing, freight forwarding, Tanzania, Dar es Salaam, warehousing, project logistics">

    <title>@yield('title', config('app.name', 'SPESH') . ' Company Limited')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        spesh: {
                            green: '#1A8251',
                            'green-light': '#2BA066',
                            'green-dark': '#0E5C38',
                            purple: '#5B1E63',
                            'purple-light': '#7B3090',
                            'purple-dark': '#3D1244',
                            navy: '#302740',
                            'navy-light': '#4A3D5C',
                            'navy-dark': '#1C1528',
                            ocean: '#216482',
                            'ocean-light': '#3A7FA0',
                            'ocean-dark': '#15445A',
                            steel: '#558DA1',
                            gray: '#DADAD6',
                            'gray-dark': '#C0C0BC',
                            'body': '#3A3A3A',
                        }
                    },
                    fontFamily: {
                        heading: ['Nunito', 'sans-serif'],
                        body: ['Nunito', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    {{-- Toastify --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>

    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes floatY { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-15px); } }
        @keyframes slideInLeft { from { opacity:0; transform:translateX(-40px); } to { opacity:1; transform:translateX(0); } }
        @keyframes slideInRight { from { opacity:0; transform:translateX(40px); } to { opacity:1; transform:translateX(0); } }
        @keyframes pulseRing { 0% { transform:scale(0.95); opacity:0.7; } 70% { transform:scale(1.3); opacity:0; } 100% { opacity:0; } }
        @keyframes gradientShift { 0% { background-position:0% 50%; } 50% { background-position:100% 50%; } 100% { background-position:0% 50%; } }
        @keyframes scrollDown { 0% { transform:translateY(0); opacity:0; } 40% { opacity:1; } 80% { transform:translateY(12px); opacity:0; } 100% { opacity:0; } }

        .fade-in-up { animation: fadeInUp 0.7s ease-out both; }
        .fade-in { animation: fadeIn 0.8s ease-out both; }
        .float-y { animation: floatY 5s ease-in-out infinite; }
        .slide-in-left { animation: slideInLeft 0.7s ease-out both; }
        .slide-in-right { animation: slideInRight 0.7s ease-out both; }
        .gradient-animate { background-size: 200% 200%; animation: gradientShift 8s ease infinite; }

        .reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.active { opacity: 1; transform: translateY(0); }

        .scroll-indicator { animation: scrollDown 2s ease-in-out infinite; }

        .nav-link { position: relative; }
        .nav-link::after { content:''; position:absolute; bottom:-2px; left:0; width:0; height:2px; background:#1A8251; transition:width 0.3s ease; }
        .nav-link:hover::after { width:100%; }

        .porthole { border-radius: 50%; overflow: hidden; border: 4px solid #fff; box-shadow: 0 0 0 6px rgba(26,130,81,0.15), 0 20px 60px -10px rgba(0,0,0,0.3); }

        .section-watermark { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); font-family: 'Nunito', sans-serif; font-weight: 900; font-size: clamp(4rem, 12vw, 10rem); color: rgba(26,130,81,0.03); white-space: nowrap; pointer-events: none; z-index: 0; }

        html { scroll-behavior: smooth; }
        body { font-family: 'Nunito', sans-serif; color: #3A3A3A; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #302740; }
        ::-webkit-scrollbar-thumb { background: #1A8251; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #2BA066; }
    </style>
</head>
<body class="bg-white overflow-x-hidden antialiased">

    @yield('content')

    {{-- Scroll Reveal Script --}}
    <script>
    (function() {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        document.querySelectorAll('.reveal').forEach(function(el) { observer.observe(el); });
    })();
    </script>

    {{-- Toastify Session Messages --}}
    <script>
    (function() {
        @if(session('status'))
            Toastify({ text: "{!! session('status') !!}", duration: 4000, gravity: 'top', position: 'right', style: { background: 'linear-gradient(135deg, #1A8251, #0E5C38)' } }).showToast();
        @endif
        @if(session('error'))
            Toastify({ text: "{!! session('error') !!}", duration: 4000, gravity: 'top', position: 'right', style: { background: 'linear-gradient(135deg, #dc2626, #991b1b)' } }).showToast();
        @endif
    })();
    </script>

    @stack('scripts')
</body>
</html>
