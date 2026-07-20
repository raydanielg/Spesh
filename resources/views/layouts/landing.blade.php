<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta --}}
    <title>@yield('title', 'SPESH Company Limited — Logistics & Customs Clearing in Tanzania')</title>
    <meta name="description" content="@yield('meta-description', 'SPESH Company Limited is a regional leader in logistics based in Dar es Salaam, Tanzania. We offer customs clearing, freight forwarding, project logistics, warehousing, insurance & bonds, and small parcel handling. TRA-registered & TASAC-certified.')">
    <meta name="keywords" content="@yield('meta-keywords', 'SPESH, logistics Tanzania, customs clearing Dar es Salaam, freight forwarding Tanzania, project logistics, warehousing Tanzania, TRA clearing agent, TASAC certified, cargo insurance, shipping Tanzania, ocean freight, air freight, inland transport')">
    <meta name="author" content="SPESH Company Limited">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="theme-color" content="#1A8251">
    <link rel="canonical" href="{{ config('app.url') }}{{ request()->path() === '/' ? '' : '/' . request()->path() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SPESH Company Limited">
    <meta property="og:title" content="@yield('og-title', 'SPESH Company Limited — Logistics & Customs Clearing in Tanzania')">
    <meta property="og:description" content="@yield('og-description', 'Regional leader in logistics — customs clearing, freight forwarding, project logistics, warehousing & more. Dar es Salaam, Tanzania.')">
    <meta property="og:url" content="{{ config('app.url') }}{{ request()->path() === '/' ? '' : '/' . request()->path() }}">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <meta property="og:image:alt" content="SPESH Company Limited Logo">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter-title', 'SPESH Company Limited — Logistics & Customs Clearing in Tanzania')">
    <meta name="twitter:description" content="@yield('twitter-description', 'Regional leader in logistics — customs clearing, freight forwarding, project logistics, warehousing & more. Dar es Salaam, Tanzania.')">
    <meta name="twitter:image" content="{{ asset('logo.png') }}">
    <meta name="twitter:image:alt" content="SPESH Company Limited Logo">

    {{-- Structured Data --}}
    @php
        $orgSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'SPESH Company Limited',
            'url' => config('app.url'),
            'logo' => asset('logo.png'),
            'description' => 'Regional leader in logistics — customs clearing, freight forwarding, project logistics, warehousing, insurance & bonds.',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Samora House, 7th Floor',
                'addressLocality' => 'Dar es Salaam',
                'addressCountry' => 'TZ',
                'postalCode' => '60166 PSSSF',
            ],
            'telephone' => ['+255222111744', '+255699459191'],
            'email' => 'info@spesh.co.tz',
            'foundingDate' => '2021',
            'sameAs' => [],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>

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

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Toastify --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>

    <style>
        @keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes floatY { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-15px); } }
        @keyframes floatCard1 { 0%,100% { transform:translateY(0) rotate(-2deg); } 50% { transform:translateY(-18px) rotate(-2deg); } }
        @keyframes floatCard2 { 0%,100% { transform:translateY(0) rotate(1deg); } 50% { transform:translateY(-12px) rotate(1deg); } }
        @keyframes floatCard3 { 0%,100% { transform:translateY(0) rotate(-1deg); } 50% { transform:translateY(-20px) rotate(-1deg); } }
        @keyframes floatCard4 { 0%,100% { transform:translateY(0) rotate(2deg); } 50% { transform:translateY(-14px) rotate(2deg); } }
        @keyframes slideInLeft { from { opacity:0; transform:translateX(-40px); } to { opacity:1; transform:translateX(0); } }
        @keyframes slideInRight { from { opacity:0; transform:translateX(40px); } to { opacity:1; transform:translateX(0); } }
        @keyframes pulseRing { 0% { transform:scale(0.95); opacity:0.7; } 70% { transform:scale(1.3); opacity:0; } 100% { opacity:0; } }
        @keyframes gradientShift { 0% { background-position:0% 50%; } 50% { background-position:100% 50%; } 100% { background-position:0% 50%; } }
        @keyframes scrollDown { 0% { transform:translateY(0); opacity:0; } 40% { opacity:1; } 80% { transform:translateY(12px); opacity:0; } 100% { opacity:0; } }

        .fade-in-up { animation: fadeInUp 0.7s ease-out both; }
        .fade-in { animation: fadeIn 0.8s ease-out both; }
        .float-y { animation: floatY 5s ease-in-out infinite; }
        .float-card-1 { animation: floatCard1 4s ease-in-out infinite; }
        .float-card-2 { animation: floatCard2 5s ease-in-out infinite 0.5s; }
        .float-card-3 { animation: floatCard3 4.5s ease-in-out infinite 1s; }
        .float-card-4 { animation: floatCard4 5.5s ease-in-out infinite 0.3s; }
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

        {{-- Page Loader --}}
        @keyframes logoPulse { 0%,100% { transform:scale(1); opacity:1; } 50% { transform:scale(1.08); opacity:0.8; } }
        @keyframes loaderRing { 0% { transform:rotate(0deg); } 100% { transform:rotate(360deg); } }
        @keyframes loaderFadeOut { to { opacity:0; visibility:hidden; } }
        .page-loader { position:fixed; inset:0; z-index:99999; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#ffffff; transition:opacity 0.5s ease, visibility 0.5s ease; }
        .page-loader.loaded { animation: loaderFadeOut 0.5s ease forwards; }
        .loader-logo { animation: logoPulse 1.5s ease-in-out infinite; }
        .loader-ring { position:absolute; width:100px; height:100px; border:3px solid rgba(26,130,81,0.15); border-top-color:#1A8251; border-radius:50%; animation: loaderRing 1s linear infinite; }
        .loader-text { margin-top:20px; font-family:'Nunito',sans-serif; font-size:13px; font-weight:700; color:#302740; letter-spacing:2px; text-transform:uppercase; }
    </style>
</head>
<body class="bg-white overflow-x-hidden antialiased">

    {{-- Page Loader --}}
    <div id="pageLoader" class="page-loader">
        <div class="relative flex items-center justify-center">
            <div class="loader-ring"></div>
            <img src="{{ asset('logo.png') }}" alt="SPESH" class="loader-logo w-14 h-14 object-contain relative z-10">
        </div>
        <p class="loader-text">SPESH</p>
    </div>

    @yield('content')

    {{-- Page Loader Script --}}
    <script>
    (function() {
        window.addEventListener('load', function() {
            const loader = document.getElementById('pageLoader');
            if (loader) {
                setTimeout(function() { loader.classList.add('loaded'); }, 600);
            }
        });
    })();
    </script>

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
