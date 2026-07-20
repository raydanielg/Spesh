{{-- Clients Section --}}
<section id="clients" class="relative py-20 lg:py-28 bg-spesh-navy overflow-hidden">
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 28px 28px;"></div>
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-spesh-green via-spesh-green-light to-spesh-green"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-14 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
                <span class="font-heading font-semibold text-xs text-spesh-green-light tracking-widest uppercase">Our Clients</span>
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white mb-4">
                Trusted By Industry Leaders
            </h2>
            <p class="font-body text-base text-white/60 max-w-2xl mx-auto">
                We are proud to serve a diverse portfolio of clients across various sectors in Tanzania.
            </p>
        </div>

        {{-- Clients grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
            @php
                $clients = [
                    'Kilimanjaro Biochem Ltd',
                    'Tanzania Cigarette Company (TCC)',
                    'RML Automotive Solutions',
                    'RSA 4x4 Products',
                    'Asyx Group',
                    'Medical Stores Department (MSD)',
                    'Mcharo Kombe',
                    'Dedun Resources',
                ];
            @endphp

            @foreach($clients as $client)
                <div class="reveal group bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 hover:border-spesh-green/30 transition-all">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-gradient-to-br from-spesh-green/20 to-spesh-purple/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-spesh-green-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <p class="font-heading font-semibold text-sm text-white/90 leading-snug">{{ $client }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
