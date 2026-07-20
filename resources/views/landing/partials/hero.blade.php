{{-- Hero Section --}}
<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-spesh-navy via-spesh-purple to-spesh-navy-dark gradient-animate">
    {{-- Decorative arch --}}
    <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-spesh-green via-spesh-green-light to-spesh-green"></div>
    <div class="absolute top-2 left-0 right-0 h-1 bg-gradient-to-r from-spesh-purple via-spesh-purple-light to-spesh-purple"></div>

    {{-- Floating shapes --}}
    <div class="absolute top-20 right-10 w-72 h-72 bg-spesh-green/10 rounded-full blur-3xl float-y"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-spesh-purple/15 rounded-full blur-3xl float-y" style="animation-delay:2s;"></div>
    <div class="absolute top-1/3 left-1/4 w-40 h-40 bg-spesh-ocean/10 rounded-full blur-2xl float-y" style="animation-delay:4s;"></div>

    {{-- Dot pattern --}}
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16 lg:pt-0 lg:pb-0 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Text --}}
            <div class="text-center lg:text-left fade-in-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-spesh-green animate-pulse"></span>
                    <span class="font-heading text-xs font-medium text-white/90 tracking-wide">Regional Leader in Logistics</span>
                </div>

                <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white leading-tight mb-6">
                    Delivering
                    <span class="bg-gradient-to-r from-spesh-green-light to-spesh-green bg-clip-text text-transparent">Excellence</span>
                    Across Borders
                </h1>

                <p class="font-body text-base sm:text-lg text-white/70 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Spesh Company Limited — your trusted partner in customs clearing, freight forwarding, and project logistics. Getting products to market quickly, efficiently, and safely since 2021.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#services" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl font-heading font-semibold text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green shadow-lg hover:shadow-xl transition-all hover:scale-[1.02]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        Explore Services
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl font-heading font-semibold text-spesh-navy bg-white hover:bg-spesh-gray shadow-lg hover:shadow-xl transition-all hover:scale-[1.02]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Contact Us
                    </a>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-white/10">
                    <div>
                        <p class="font-heading font-extrabold text-3xl text-spesh-green-light">2021</p>
                        <p class="font-body text-xs text-white/60 mt-1">Established</p>
                    </div>
                    <div>
                        <p class="font-heading font-extrabold text-3xl text-spesh-green-light">7+</p>
                        <p class="font-body text-xs text-white/60 mt-1">Core Services</p>
                    </div>
                    <div>
                        <p class="font-heading font-extrabold text-3xl text-spesh-green-light">8+</p>
                        <p class="font-body text-xs text-white/60 mt-1">Major Clients</p>
                    </div>
                </div>
            </div>

            {{-- Right: Porthole image --}}
            <div class="hidden lg:flex justify-center items-center fade-in" style="animation-delay:0.3s;">
                <div class="relative">
                    {{-- Pulse rings --}}
                    <div class="absolute inset-0 rounded-full border-2 border-spesh-green/20" style="animation: pulseRing 3s ease-out infinite;"></div>
                    <div class="absolute inset-0 rounded-full border-2 border-spesh-green/20" style="animation: pulseRing 3s ease-out infinite 1s;"></div>

                    {{-- Porthole --}}
                    <div class="porthole w-80 h-80 lg:w-96 lg:h-96 relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-spesh-ocean/30 to-spesh-navy/30 rounded-full"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="w-40 h-40 text-white/80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 19a3 3 0 01-3-3m14-3a3 3 0 013 3" stroke-linecap="round" stroke-linejoin="round" opacity="0.5"/>
                                <path d="M12 7v8m-4-4l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>

                    {{-- Floating badges --}}
                    <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-xl px-4 py-3 float-y">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 rounded-xl bg-spesh-green/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-spesh-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="font-heading font-bold text-xs text-spesh-navy">TRA Registered</p>
                                <p class="font-body text-[10px] text-spesh-body">Clearing Agent</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl px-4 py-3 float-y" style="animation-delay:1.5s;">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 rounded-xl bg-spesh-ocean/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-spesh-ocean" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                            </div>
                            <div>
                                <p class="font-heading font-bold text-xs text-spesh-navy">TASAC Certified</p>
                                <p class="font-body text-[10px] text-spesh-body">C&F Agent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:block">
        <div class="flex flex-col items-center gap-2">
            <span class="font-body text-xs text-white/40 tracking-widest uppercase">Scroll</span>
            <div class="w-6 h-10 rounded-full border-2 border-white/20 flex justify-center pt-2">
                <span class="w-1 h-2 rounded-full bg-white/50 scroll-indicator"></span>
            </div>
        </div>
    </div>

    {{-- Bottom gradient transition --}}
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-white"></div>
</section>
