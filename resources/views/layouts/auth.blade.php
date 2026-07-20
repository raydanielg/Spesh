<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#1A8251">

    <title>@yield('title', 'SPESH — Sign In')</title>
    <meta name="description" content="SPESH Company Limited client portal — sign in or create an account to manage your shipments.">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- Toastify-JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js@1.12.0/src/toastify.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <style>
        @keyframes simpleFadeIn { from { opacity:0; transform:translateY(12px); } to { opacity:1; transform:translateY(0); } }
        @keyframes floatText { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-10px); } }
        @keyframes slideUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }
        @keyframes pulseGlow { 0%,100% { opacity:0.4; } 50% { opacity:0.7; } }
        @keyframes gridPulse { 0%,100% { opacity:0.3; } 50% { opacity:1; } }
        @keyframes dotFloat { 0%,100% { transform:translateY(0) scale(1); opacity:0.3; } 50% { transform:translateY(-20px) scale(1.3); opacity:0.8; } }
        @keyframes lineSlide { 0% { transform:translateX(-30%) rotate(-15deg); opacity:0; } 50% { opacity:1; } 100% { transform:translateX(30%) rotate(-15deg); opacity:0; } }
        .ajax-loader { position:fixed; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, #1A8251, #216482, #1A8251); background-size: 200% 100%; animation: ajaxProgress 1s linear infinite; z-index:9999; display:none; }
        @keyframes ajaxProgress { 0% { background-position: 100% 0; } 100% { background-position: -100% 0; } }
        .page-transition { animation: simpleFadeIn 0.35s ease-out both; }
        .float-text { animation: floatText 4s ease-in-out infinite; }
        .slide-up { animation: slideUp 0.6s ease-out both; }
        .slide-up-delay-1 { animation: slideUp 0.6s ease-out 0.15s both; }
        .slide-up-delay-2 { animation: slideUp 0.6s ease-out 0.3s both; }
        .slide-up-delay-3 { animation: slideUp 0.6s ease-out 0.45s both; }
        .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: { 50:'#E8F5EE',100:'#C8E6D5',200:'#A8D7BC',300:'#88C8A3',400:'#68B98A',500:'#1A8251',600:'#177448',700:'#14663E',800:'#115835',900:'#0E4A2B' },
                        gold: { 50:'#E8F0F5',100:'#C8DCE8',200:'#A8C8DB',300:'#88B4CE',400:'#558DA1',500:'#216482',600:'#1D5A75',700:'#195068',800:'#15465B',900:'#113C4E' },
                        navy: { 50:'#F0EDF2',100:'#E0DAE5',200:'#D0C8D8',300:'#B0A6C0',400:'#807498',500:'#504070',600:'#3D334F',700:'#302740',800:'#221A2E',900:'#150F1A' }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-['Nunito',sans-serif] antialiased text-slate-800 min-h-screen">

    {{-- Auth Background --}}
    <div class="fixed inset-0 z-0 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('flat-abstract-background-pattern-vector_822782-866.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-navy-800/85 via-navy-700/80 to-navy-600/75"></div>
        <div class="absolute top-0 left-0 w-96 h-96 bg-gold-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl"></div>
    </div>

    {{-- AJAX Progress Bar --}}
    <div id="ajaxLoader" class="ajax-loader"></div>

    <main id="authMain" class="relative z-10 min-h-screen flex items-center justify-center py-0 px-0 sm:py-8 sm:px-6 lg:px-8">
        <div class="w-full max-w-5xl grid lg:grid-cols-2 gap-0 lg:gap-8 items-center">

            {{-- Left Column: Branding + Features (hidden on mobile) --}}
            <div class="hidden lg:flex flex-col justify-center relative overflow-hidden rounded-3xl h-[600px] shadow-2xl bg-gradient-to-br from-navy-800 to-navy-700">
                {{-- Decorative dots --}}
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 24px 24px;"></div>
                <div class="absolute top-0 right-0 w-72 h-72 bg-gold-500/15 rounded-full blur-3xl pulse-glow"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-emerald-400/10 rounded-full blur-3xl pulse-glow"></div>

                {{-- Content --}}
                <div class="relative z-10 p-12 flex flex-col justify-center h-full">
                    {{-- Brand name --}}
                    <div class="mb-8 slide-up">
                        <h1 class="text-3xl font-extrabold text-white tracking-tight">SPESH</h1>
                        <p class="text-gold-300 text-sm font-medium mt-1">Company Limited</p>
                    </div>

                    {{-- Animated Headlines --}}
                    <div class="space-y-6 mt-4">
                        <div class="slide-up-delay-1">
                            <h2 class="text-3xl font-extrabold text-white leading-tight">
                                Manage Everything<br>
                                <span class="text-gold-400">In One Place</span>
                            </h2>
                        </div>

                        <div class="slide-up-delay-2 space-y-4">
                            <div class="flex items-start gap-3 float-text" style="animation-delay: 0s;">
                                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gauge-high text-gold-400"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-base">Smart Dashboard</p>
                                    <p class="text-emerald-100/80 text-sm">Track everything in real-time with analytics</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 float-text" style="animation-delay: 1s;">
                                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-shield-halved text-gold-400"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-base">Secure Platform</p>
                                    <p class="text-emerald-100/80 text-sm">Your data is protected with enterprise-grade security</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3 float-text" style="animation-delay: 2s;">
                                <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-sm flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-truck-fast text-gold-400"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-base">Fast & Reliable</p>
                                    <p class="text-emerald-100/80 text-sm">Built for speed and performance at every level</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="mt-auto pt-8 slide-up-delay-3">
                        <div class="flex items-center gap-2 text-emerald-100/60 text-xs">
                            <i class="fas fa-circle-check"></i>
                            <span>Trusted by organizations across Tanzania</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Form --}}
            <div class="w-full lg:max-w-md lg:mx-0 lg:ml-auto" style="animation: simpleFadeIn 0.4s ease-out both;">
                @yield('content')
            </div>

        </div>
    </main>

    {{-- Toastify-JS Toast System --}}
    <style>
        .toastify {
            font-family: 'Nunito', sans-serif !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.2) !important;
            padding: 14px 18px !important;
            min-width: 300px !important;
            max-width: 380px !important;
        }
        .toastify-colse-btn {
            opacity: 0.6 !important;
            transition: opacity 0.2s !important;
        }
        .toastify-colse-btn:hover { opacity: 1 !important; }
        .toastify-title {
            font-weight: 800 !important;
            font-size: 14px !important;
            margin-bottom: 2px !important;
        }
        .toastify-message {
            font-weight: 500 !important;
            font-size: 13px !important;
            opacity: 0.9 !important;
        }
        .toastify-icon {
            width: 22px !important;
            height: 22px !important;
            flex-shrink: 0 !important;
        }
        .toastify-progress {
            position: absolute !important;
            bottom: 0 !important;
            left: 0 !important;
            height: 3px !important;
            border-radius: 0 0 0 12px !important;
            opacity: 0.7 !important;
        }
        @keyframes toastProgress {
            from { width: 100%; }
            to { width: 0%; }
        }
    </style>
    <script>
    (function() {
        const icons = {
            success: '<svg class="toastify-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            error: '<svg class="toastify-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
            warning: '<svg class="toastify-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>',
            info: '<svg class="toastify-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
        };

        const styles = {
            success: { bg: 'linear-gradient(135deg, #1A8251, #14663E)', accent: '#7AABA7' },
            error:   { bg: 'linear-gradient(135deg, #dc2626, #991b1b)', accent: '#fca5a5' },
            warning: { bg: 'linear-gradient(135deg, #d97706, #92400e)', accent: '#fde68a' },
            info:    { bg: 'linear-gradient(135deg, #2563eb, #1e3a8a)', accent: '#93c5fd' }
        };

        function showToast(type, title, message) {
            const s = styles[type] || styles.info;
            const icon = icons[type] || icons.info;
            const html = '<div style="display:flex;align-items:flex-start;gap:10px;">' +
                '<div style="color:' + s.accent + ';">' + icon + '</div>' +
                '<div style="flex:1;min-width:0;">' +
                    '<div class="toastify-title">' + title + '</div>' +
                    (message ? '<div class="toastify-message">' + message + '</div>' : '') +
                '</div>' +
                '</div>';

            const toast = Toastify({
                node: undefined,
                text: html,
                escapeMarkup: false,
                duration: 5000,
                close: true,
                gravity: 'top',
                position: 'right',
                stopOnFocus: true,
                style: {
                    background: s.bg,
                    color: '#fff',
                },
                onClick: function() {},
                offset: { x: 20, y: 20 },
            });

            toast.showToast();

            setTimeout(function() {
                const el = document.querySelector('.toastify:last-child');
                if (el) {
                    const bar = document.createElement('div');
                    bar.className = 'toastify-progress';
                    bar.style.background = s.accent;
                    bar.style.animation = 'toastProgress 5s linear forwards';
                    el.style.position = 'relative';
                    el.style.overflow = 'hidden';
                    el.appendChild(bar);
                }
            }, 50);
        }

        window.showToast = showToast;

        @if(session('status'))
            showToast('success', 'Success', {!! json_encode(session('status')) !!});
        @endif
        @if(session('error'))
            showToast('error', 'Error', {!! json_encode(session('error')) !!});
        @endif
        @if(session('warning'))
            showToast('warning', 'Warning', {!! json_encode(session('warning')) !!});
        @endif
        @if(session('info'))
            showToast('info', 'Info', {!! json_encode(session('info')) !!});
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                showToast('error', 'Validation Error', {!! json_encode($error) !!});
            @endforeach
        @endif
    })();
    </script>

</body>
</html>
