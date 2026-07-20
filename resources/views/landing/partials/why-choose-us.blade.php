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
            {{-- Left: Image Carousel --}}
            <div class="reveal relative h-[500px] lg:h-[560px]">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl h-full">
                    @php
                        $slides = ['1374 (1).jpg', '1380.jpg', '735 (1).jpg', '24177.jpg', '1200 (1).jpg'];
                    @endphp
                    @foreach($slides as $index => $slide)
                        <div class="why-slide absolute inset-0 transition-opacity duration-1000 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}" data-index="{{ $index }}">
                            <img src="{{ asset($slide) }}" alt="SPESH Logistics {{ $index + 1 }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-spesh-navy-dark/80 via-spesh-navy/20 to-transparent"></div>
                        </div>
                    @endforeach

                    {{-- Dot indicators --}}
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-2 z-20">
                        @foreach($slides as $index => $slide)
                            <button class="why-dot w-2 h-2 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-spesh-green-light w-6' : 'bg-white/40' }}" data-index="{{ $index }}"></button>
                        @endforeach
                    </div>
                </div>

                {{-- Decorative accents --}}
                <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-spesh-green/20 rounded-2xl -z-10"></div>
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-spesh-purple/30 rounded-full -z-10"></div>
            </div>

            {{-- Right: Features as Stepper --}}
            <div class="reveal" style="transition-delay:0.2s;">
                @php
                    $features = [
                        ['title' => 'Expert Customs Clearing', 'desc' => 'TRA-licensed agents with deep knowledge of Tanzania customs regulations, ensuring smooth and compliant clearance every time.', 'icon' => 'fa-file-shield', 'color' => 'spesh-green'],
                        ['title' => 'End-to-End Logistics', 'desc' => 'From origin to destination, we handle freight forwarding, warehousing, and last-mile delivery under one roof.', 'icon' => 'fa-route', 'color' => 'spesh-ocean'],
                        ['title' => 'Real-Time Tracking', 'desc' => 'Stay informed with live updates on your shipments, giving you full visibility and peace of mind throughout the journey.', 'icon' => 'fa-satellite-dish', 'color' => 'spesh-purple'],
                        ['title' => 'Competitive Pricing', 'desc' => 'Transparent, fair pricing with no hidden costs. We optimize routes and processes to deliver value for your money.', 'icon' => 'fa-tags', 'color' => 'spesh-green'],
                        ['title' => 'Dedicated Support', 'desc' => 'A personal account manager assigned to your business, available whenever you need assistance or advice.', 'icon' => 'fa-headset', 'color' => 'spesh-ocean'],
                        ['title' => 'Fully Insured & Certified', 'desc' => 'TASAC-certified and fully insured operations, giving you complete protection and confidence in every shipment.', 'icon' => 'fa-certificate', 'color' => 'spesh-purple'],
                    ];
                @endphp

                <ol class="relative text-white/60 border-s border-white/15">
                    @foreach($features as $index => $feature)
                        <li class="{{ $index < count($features) - 1 ? 'mb-8' : '' }} ms-7 group" style="transition-delay: {{ $index * 0.1 }}s;">
                            <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -start-4 ring-4 ring-spesh-navy bg-spesh-{{ $feature['color'] }}/20 text-spesh-{{ $feature['color'] }}-light group-hover:bg-spesh-{{ $feature['color'] }} group-hover:text-white transition-all duration-300 group-hover:scale-110 shadow-sm">
                                <i class="fas {{ $feature['icon'] }} text-sm"></i>
                            </span>
                            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-5 border border-white/10 group-hover:bg-white/10 group-hover:border-spesh-{{ $feature['color'] }}/30 group-hover:shadow-lg transition-all duration-300 group-hover:translate-x-1">
                                <h3 class="font-heading font-bold text-base text-white mb-1 leading-tight">{{ $feature['title'] }}</h3>
                                <p class="font-body text-sm text-white/50 leading-relaxed">{{ $feature['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>

<script>
(function() {
    const slides = document.querySelectorAll('.why-slide');
    const dots = document.querySelectorAll('.why-dot');
    if (slides.length <= 1) return;

    let current = 0;

    function goTo(index) {
        slides.forEach(function(s, i) {
            s.classList.toggle('opacity-100', i === index);
            s.classList.toggle('opacity-0', i !== index);
        });
        dots.forEach(function(d, i) {
            if (i === index) {
                d.classList.add('bg-spesh-green-light', 'w-6');
                d.classList.remove('bg-white/40', 'w-2');
            } else {
                d.classList.add('bg-white/40', 'w-2');
                d.classList.remove('bg-spesh-green-light', 'w-6');
            }
        });
        current = index;
    }

    dots.forEach(function(dot) {
        dot.addEventListener('click', function() {
            goTo(parseInt(this.dataset.index));
        });
    });

    setInterval(function() {
        goTo((current + 1) % slides.length);
    }, 4000);
})();
</script>
