{{-- Clients Section --}}
<section id="clients" class="relative py-20 lg:py-28 bg-white overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(48,39,64,0.5) 1px, transparent 1px); background-size: 28px 28px;"></div>
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-spesh-green via-spesh-green-light to-spesh-green"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-14 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
                <span class="font-heading font-semibold text-xs text-spesh-green tracking-widest uppercase">Our Clients</span>
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-spesh-navy mb-4">
                Trusted By Industry Leaders
            </h2>
            <p class="font-body text-base text-spesh-body max-w-2xl mx-auto">
                We are proud to serve a diverse portfolio of clients across various sectors in Tanzania.
            </p>
        </div>
    </div>

    {{-- Auto-scrolling marquee --}}
    <div class="relative z-10 overflow-hidden">
        {{-- Edge fades --}}
        <div class="absolute left-0 top-0 bottom-0 w-20 lg:w-32 bg-gradient-to-r from-white to-transparent z-20 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-20 lg:w-32 bg-gradient-to-l from-white to-transparent z-20 pointer-events-none"></div>

        {{-- Track --}}
        <div class="clients-marquee flex items-center gap-8 lg:gap-12 w-max">
            @php
                $clients = [
                    ['name' => 'Asyx Group', 'logo' => 'clients/Asyx Group.png'],
                    ['name' => 'Dedun Resources', 'logo' => 'clients/Dedun Resources.jpg'],
                    ['name' => 'Kilimanjaro Biochem Ltd', 'logo' => 'clients/Kilimanjaro Biochem Ltd.png'],
                    ['name' => 'Mcharo Kombe', 'logo' => 'clients/Mcharo Kombe.png'],
                    ['name' => 'Medical Stores Department', 'logo' => 'clients/Medical Stores Department (MSD).svg'],
                    ['name' => 'RML Automotive Solutions', 'logo' => 'clients/RMLAutomotiveSolutions.png'],
                    ['name' => 'RSA 4x4 Products', 'logo' => 'clients/RSA 4x4 Products.png'],
                    ['name' => 'Tanzania Cigarette Company', 'logo' => 'clients/tcc.png'],
                ];
            @endphp

            {{-- First set --}}
            @foreach($clients as $client)
                <div class="client-card flex-shrink-0 group bg-spesh-gray/20 border border-gray-200 rounded-2xl px-8 py-6 flex items-center justify-center hover:bg-spesh-gray/30 hover:border-spesh-green/40 hover:shadow-lg transition-all duration-300 hover:scale-105">
                    <img src="{{ asset($client['logo']) }}" alt="{{ $client['name'] }}" class="h-16 lg:h-20 w-auto object-contain opacity-70 group-hover:opacity-100 transition-opacity duration-300" loading="lazy">
                </div>
            @endforeach

            {{-- Duplicate set for seamless loop --}}
            @foreach($clients as $client)
                <div class="client-card flex-shrink-0 group bg-spesh-gray/20 border border-gray-200 rounded-2xl px-8 py-6 flex items-center justify-center hover:bg-spesh-gray/30 hover:border-spesh-green/40 hover:shadow-lg transition-all duration-300 hover:scale-105" aria-hidden="true">
                    <img src="{{ asset($client['logo']) }}" alt="{{ $client['name'] }}" class="h-16 lg:h-20 w-auto object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300" loading="lazy">
                </div>
            @endforeach
        </div>
    </div>

    {{-- Stats bar --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-14">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center reveal">
                <p class="font-heading font-extrabold text-3xl lg:text-4xl text-spesh-green">8+</p>
                <p class="font-body text-xs text-spesh-body/60 mt-1 uppercase tracking-wide">Major Clients</p>
            </div>
            <div class="text-center reveal" style="transition-delay:0.1s;">
                <p class="font-heading font-extrabold text-3xl lg:text-4xl text-spesh-green">100%</p>
                <p class="font-body text-xs text-spesh-body/60 mt-1 uppercase tracking-wide">Client Retention</p>
            </div>
            <div class="text-center reveal" style="transition-delay:0.2s;">
                <p class="font-heading font-extrabold text-3xl lg:text-4xl text-spesh-green">5+</p>
                <p class="font-body text-xs text-spesh-body/60 mt-1 uppercase tracking-wide">Sectors Served</p>
            </div>
            <div class="text-center reveal" style="transition-delay:0.3s;">
                <p class="font-heading font-extrabold text-3xl lg:text-4xl text-spesh-green">2021</p>
                <p class="font-body text-xs text-spesh-body/60 mt-1 uppercase tracking-wide">Since</p>
            </div>
        </div>
    </div>
</section>

<style>
    .clients-marquee {
        animation: clientsScroll 30s linear infinite;
    }
    .clients-marquee:hover {
        animation-play-state: paused;
    }
    @keyframes clientsScroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
</style>
