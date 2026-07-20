{{-- Services Section --}}
<section id="services" class="relative py-20 lg:py-32 bg-gradient-to-b from-spesh-gray/30 to-white overflow-hidden">
    <div class="section-watermark" style="color:rgba(91,30,99,0.03);">SERVICES</div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-purple"></span>
                <span class="font-heading font-semibold text-xs text-spesh-purple tracking-widest uppercase">What We Do</span>
                <span class="w-8 h-1 rounded-full bg-spesh-purple"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-spesh-navy mb-4">
                Our Services
            </h2>
            <p class="font-body text-base text-spesh-body max-w-2xl mx-auto">
                Comprehensive logistics solutions tailored to meet your needs — from customs clearing to project logistics and beyond.
            </p>
        </div>

        {{-- Services grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Customs Clearing --}}
            <div class="reveal group bg-white rounded-xl p-7 shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 flex items-center justify-center mb-5 rounded-xl bg-spesh-green/10 text-spesh-green group-hover:bg-spesh-green group-hover:text-white group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-file-shield text-2xl"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-spesh-navy mb-2">Customs Clearing</h3>
                <p class="font-body text-sm text-spesh-body leading-relaxed mb-4">TRA-registered Clearing Agent since 2021. Handling sea & air shipments across all Tanzanian ports and borders.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-spesh-green/10 text-spesh-green text-xs font-semibold">Sea Freight</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-green/10 text-spesh-green text-xs font-semibold">Air Freight</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-green/10 text-spesh-green text-xs font-semibold">All Ports</span>
                </div>
            </div>

            {{-- Freight Forwarding --}}
            <div class="reveal group bg-white rounded-xl p-7 shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-300 hover:-translate-y-1" style="transition-delay:0.1s;">
                <div class="w-14 h-14 flex items-center justify-center mb-5 rounded-xl bg-spesh-ocean/10 text-spesh-ocean group-hover:bg-spesh-ocean group-hover:text-white group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-ship text-2xl"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-spesh-navy mb-2">Freight Forwarding</h3>
                <p class="font-body text-sm text-spesh-body leading-relaxed mb-4">Air freight, ocean freight, and inland transport (road & rail). Partnering with major shipping lines worldwide.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-spesh-ocean/10 text-spesh-ocean text-xs font-semibold">Maersk</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-ocean/10 text-spesh-ocean text-xs font-semibold">Hapag-Lloyd</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-ocean/10 text-spesh-ocean text-xs font-semibold">+10 more</span>
                </div>
            </div>

            {{-- Project Logistics --}}
            <div class="reveal group bg-white rounded-xl p-7 shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-300 hover:-translate-y-1" style="transition-delay:0.2s;">
                <div class="w-14 h-14 flex items-center justify-center mb-5 rounded-xl bg-spesh-purple/10 text-spesh-purple group-hover:bg-spesh-purple group-hover:text-white group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-tower-cell text-2xl"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-spesh-navy mb-2">Project Logistics</h3>
                <p class="font-body text-sm text-spesh-body leading-relaxed mb-4">Survey, planning, monitoring, insurance, and customs clearance for oil/gas/energy, dangerous goods, heavy lift, and more.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-spesh-purple/10 text-spesh-purple text-xs font-semibold">Oil & Gas</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-purple/10 text-spesh-purple text-xs font-semibold">Heavy Lift</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-purple/10 text-spesh-purple text-xs font-semibold">Ro/Ro</span>
                </div>
            </div>

            {{-- Warehousing --}}
            <div class="reveal group bg-white rounded-xl p-7 shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-300 hover:-translate-y-1" style="transition-delay:0.3s;">
                <div class="w-14 h-14 flex items-center justify-center mb-5 rounded-xl bg-spesh-steel/15 text-spesh-steel group-hover:bg-spesh-steel group-hover:text-white group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-warehouse text-2xl"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-spesh-navy mb-2">Warehousing</h3>
                <p class="font-body text-sm text-spesh-body leading-relaxed mb-4">Free and bonded warehousing facilities for secure storage of your goods while in transit or awaiting clearance.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-spesh-steel/15 text-spesh-ocean text-xs font-semibold">Free Warehouse</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-steel/15 text-spesh-ocean text-xs font-semibold">Bonded</span>
                </div>
            </div>

            {{-- Small Parcel / Loose Cargo --}}
            <div class="reveal group bg-white rounded-xl p-7 shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-300 hover:-translate-y-1" style="transition-delay:0.4s;">
                <div class="w-14 h-14 flex items-center justify-center mb-5 rounded-xl bg-spesh-green-light/10 text-spesh-green-light group-hover:bg-spesh-green-light group-hover:text-white group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-box-open text-2xl"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-spesh-navy mb-2">Small Parcel & Loose Cargo</h3>
                <p class="font-body text-sm text-spesh-body leading-relaxed mb-4">Import and export handling for small parcels and loose cargo from China, UAE, and UK.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-spesh-green/10 text-spesh-green text-xs font-semibold">China</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-green/10 text-spesh-green text-xs font-semibold">UAE</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-green/10 text-spesh-green text-xs font-semibold">UK</span>
                </div>
            </div>

            {{-- Insurance & Bonds --}}
            <div class="reveal group bg-white rounded-xl p-7 shadow-sm hover:shadow-lg border border-gray-100 transition-all duration-300 hover:-translate-y-1" style="transition-delay:0.5s;">
                <div class="w-14 h-14 flex items-center justify-center mb-5 rounded-xl bg-spesh-navy/10 text-spesh-navy group-hover:bg-spesh-navy group-hover:text-white group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-shield-halved text-2xl"></i>
                </div>
                <h3 class="font-heading font-bold text-lg text-spesh-navy mb-2">Insurance & Bonds</h3>
                <p class="font-body text-sm text-spesh-body leading-relaxed mb-4">Motor, Fire, Home, Marine, Engineering, GIT insurance. Customs Bonds (CB1–CB12), Performance & Bid/Tender Bonds.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-md bg-spesh-navy/10 text-spesh-navy text-xs font-semibold">Marine</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-navy/10 text-spesh-navy text-xs font-semibold">Customs Bonds</span>
                    <span class="px-3 py-1 rounded-md bg-spesh-navy/10 text-spesh-navy text-xs font-semibold">GIT</span>
                </div>
            </div>
        </div>

        {{-- General Trading banner --}}
        <div class="reveal mt-8 bg-gradient-to-r from-spesh-navy via-spesh-purple to-spesh-navy-dark rounded-2xl p-8 lg:p-10 shadow-xl overflow-hidden relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-spesh-green/10 rounded-full blur-3xl"></div>
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-6">
                <div class="text-center lg:text-left">
                    <h3 class="font-heading font-bold text-2xl text-white mb-2">General Trading</h3>
                    <p class="font-body text-sm text-white/70 max-w-xl">Import, export & supply of ICT, electrical, mechanical, electro-mechanical & telecom equipment.</p>
                </div>
                <a href="{{ route('quote') }}" class="flex-shrink-0 inline-flex items-center gap-2 px-6 py-3 rounded-xl font-heading font-semibold text-spesh-navy bg-white hover:bg-spesh-gray shadow-lg transition-all hover:scale-[1.02]">
                    Get a Quote
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
