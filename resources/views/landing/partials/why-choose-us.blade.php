{{-- Why Choose Us Section --}}
<section id="why-choose-us" class="relative py-20 lg:py-28 bg-gradient-to-br from-spesh-navy-dark via-spesh-navy to-spesh-purple overflow-hidden">
    {{-- Background image --}}
    <div class="absolute inset-0 opacity-10 bg-cover bg-center" style="background-image: url('{{ asset('1380.jpg') }}');"></div>
    {{-- Decorative shapes --}}
    <div class="absolute top-20 left-10 w-72 h-72 bg-spesh-green/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-80 h-80 bg-spesh-ocean/10 rounded-full blur-3xl"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 28px 28px;"></div>
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-spesh-green via-spesh-green-light to-spesh-green"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-14 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
                <span class="font-heading font-semibold text-xs text-spesh-green-light tracking-widest uppercase">Why Choose Us</span>
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white mb-4">
                The SPESH Advantage
            </h2>
            <p class="font-body text-base text-white/60 max-w-2xl mx-auto">
                We combine deep expertise, modern technology, and unwavering commitment to deliver logistics solutions that move your business forward.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            {{-- Left: Image --}}
            <div class="reveal relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                    <img src="{{ asset('1374 (1).jpg') }}" alt="SPESH Logistics Operations" class="w-full h-[400px] lg:h-[500px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-spesh-navy-dark/80 via-transparent to-transparent"></div>

                    {{-- Floating badge --}}
                    <div class="absolute top-6 left-6 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl px-4 py-3 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-spesh-green flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <p class="font-heading font-bold text-lg text-white leading-none">24h</p>
                            <p class="font-body text-xs text-white/60">Avg Response</p>
                        </div>
                    </div>

                    {{-- Bottom stats --}}
                    <div class="absolute bottom-6 left-6 right-6 grid grid-cols-3 gap-3">
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-3 text-center">
                            <p class="font-heading font-extrabold text-2xl text-spesh-green-light">100%</p>
                            <p class="font-body text-xs text-white/50 mt-0.5">On-time</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-3 text-center">
                            <p class="font-heading font-extrabold text-2xl text-spesh-green-light">8+</p>
                            <p class="font-body text-xs text-white/50 mt-0.5">Clients</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-3 text-center">
                            <p class="font-heading font-extrabold text-2xl text-spesh-green-light">5+</p>
                            <p class="font-body text-xs text-white/50 mt-0.5">Sectors</p>
                        </div>
                    </div>
                </div>

                {{-- Decorative accent --}}
                <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-spesh-green/20 rounded-2xl -z-10"></div>
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-spesh-purple/30 rounded-full -z-10"></div>
            </div>

            {{-- Right: Features --}}
            <div class="reveal space-y-5" style="transition-delay:0.2s;">
                @php
                    $features = [
                        ['title' => 'Expert Customs Clearing', 'desc' => 'TRA-licensed agents with deep knowledge of Tanzania customs regulations, ensuring smooth and compliant clearance every time.', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'spesh-green'],
                        ['title' => 'End-to-End Logistics', 'desc' => 'From origin to destination, we handle freight forwarding, warehousing, and last-mile delivery under one roof.', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'spesh-ocean'],
                        ['title' => 'Real-Time Tracking', 'desc' => 'Stay informed with live updates on your shipments, giving you full visibility and peace of mind throughout the journey.', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z', 'color' => 'spesh-purple'],
                        ['title' => 'Competitive Pricing', 'desc' => 'Transparent, fair pricing with no hidden costs. We optimize routes and processes to deliver value for your money.', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1', 'color' => 'spesh-green'],
                        ['title' => 'Dedicated Support', 'desc' => 'A personal account manager assigned to your business, available whenever you need assistance or advice.', 'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 5.656l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'spesh-ocean'],
                        ['title' => 'Fully Insured & Certified', 'desc' => 'TASAC-certified and fully insured operations, giving you complete protection and confidence in every shipment.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.062-.18-2.087-.514-3.049z', 'color' => 'spesh-purple'],
                    ];
                @endphp

                @foreach($features as $feature)
                    <div class="group flex items-start gap-4 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 hover:border-spesh-{{ $feature['color'] }}/30 transition-all duration-300 hover:translate-x-1">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-spesh-{{ $feature['color'] }}/20 flex items-center justify-center group-hover:bg-spesh-{{ $feature['color'] }} transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-spesh-{{ $feature['color'] }}-light group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $feature['icon'] }}"/></svg>
                        </div>
                        <div class="min-w-0">
                            <h3 class="font-heading font-bold text-base text-white mb-1">{{ $feature['title'] }}</h3>
                            <p class="font-body text-sm text-white/50 leading-relaxed">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
