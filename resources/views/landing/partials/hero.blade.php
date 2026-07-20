{{-- Hero Section --}}
<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-spesh-navy-dark">

    {{-- Background image slideshow --}}
    <div class="absolute inset-0 z-0">
        @php
            $heroImages = ['735 (1).jpg', '1200 (1).jpg', '1374 (1).jpg', '1380.jpg', '24177.jpg'];
        @endphp
        @foreach($heroImages as $i => $img)
            <div class="hero-bg absolute inset-0 bg-cover bg-center transition-opacity duration-[2000ms] {{ $i === 0 ? 'opacity-100' : 'opacity-0' }}"
                 style="background-image: url('{{ asset($img) }}');"
                 data-index="{{ $i }}"></div>
        @endforeach

        {{-- Dark overlay for text readability --}}
        <div class="absolute inset-0 bg-gradient-to-br from-spesh-navy-dark/90 via-spesh-navy/80 to-spesh-purple/85"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-spesh-navy-dark/70 via-transparent to-spesh-navy-dark/50"></div>
    </div>

    {{-- Decorative arch --}}
    <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-spesh-green via-spesh-green-light to-spesh-green z-20"></div>
    <div class="absolute top-2 left-0 right-0 h-1 bg-gradient-to-r from-spesh-purple via-spesh-purple-light to-spesh-purple z-20"></div>

    {{-- Dot pattern --}}
    <div class="absolute inset-0 opacity-5 z-10" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 28px 28px;"></div>

    {{-- Slide indicators --}}
    <div class="absolute bottom-24 left-1/2 -translate-x-1/2 z-30 hidden lg:flex items-center gap-2">
        @foreach($heroImages as $i => $img)
            <button class="hero-dot w-2 h-2 rounded-full transition-all duration-300 {{ $i === 0 ? 'bg-spesh-green w-8' : 'bg-white/30 hover:bg-white/50' }}" data-index="{{ $i }}"></button>
        @endforeach
    </div>

    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16 lg:pt-0 lg:pb-0 w-full">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            {{-- Left: Text --}}
            <div class="text-center lg:text-left fade-in-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-spesh-green animate-pulse"></span>
                    <span class="font-heading text-xs font-medium text-white/90 tracking-wide">Regional Leader in Logistics</span>
                </div>

                <h1 class="font-heading font-extrabold text-4xl sm:text-5xl lg:text-6xl text-white leading-tight mb-6 drop-shadow-lg">
                    Delivering
                    <span class="bg-gradient-to-r from-spesh-green-light to-spesh-green bg-clip-text text-transparent">Excellence</span>
                    Across Borders
                </h1>

                <p class="font-body text-base sm:text-lg text-white/80 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed drop-shadow">
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
                        <p class="font-heading font-extrabold text-3xl text-spesh-green-light drop-shadow">2021</p>
                        <p class="font-body text-xs text-white/70 mt-1">Established</p>
                    </div>
                    <div>
                        <p class="font-heading font-extrabold text-3xl text-spesh-green-light drop-shadow">7+</p>
                        <p class="font-body text-xs text-white/70 mt-1">Core Services</p>
                    </div>
                    <div>
                        <p class="font-heading font-extrabold text-3xl text-spesh-green-light drop-shadow">8+</p>
                        <p class="font-body text-xs text-white/70 mt-1">Major Clients</p>
                    </div>
                </div>
            </div>

            {{-- Right: Porthole image --}}
            <div class="hidden lg:flex justify-center items-center fade-in" style="animation-delay:0.3s;">
                <div class="relative">
                    {{-- Pulse rings --}}
                    <div class="absolute inset-0 rounded-full border-2 border-spesh-green/20" style="animation: pulseRing 3s ease-out infinite;"></div>
                    <div class="absolute inset-0 rounded-full border-2 border-spesh-green/20" style="animation: pulseRing 3s ease-out infinite 1s;"></div>

                    {{-- Porthole with rotating images --}}
                    <div class="porthole w-80 h-80 lg:w-96 lg:h-96 relative overflow-hidden">
                        @foreach($heroImages as $i => $img)
                            <div class="porthole-img absolute inset-0 transition-opacity duration-[2000ms] {{ $i === 0 ? 'opacity-100' : 'opacity-0' }}"
                                 style="background-image: url('{{ asset($img) }}'); background-size: cover; background-position: center;"
                                 data-index="{{ $i }}"></div>
                        @endforeach
                        <div class="absolute inset-0 rounded-full" style="box-shadow: inset 0 0 40px rgba(48,39,64,0.4);"></div>
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
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:block z-30">
        <div class="flex flex-col items-center gap-2">
            <span class="font-body text-xs text-white/40 tracking-widest uppercase">Scroll</span>
            <div class="w-6 h-10 rounded-full border-2 border-white/20 flex justify-center pt-2">
                <span class="w-1 h-2 rounded-full bg-white/50 scroll-indicator"></span>
            </div>
        </div>
    </div>

    {{-- Bottom gradient transition --}}
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-white z-20"></div>
</section>

{{-- Slideshow script --}}
<script>
(function() {
    const bgSlides = document.querySelectorAll('.hero-bg');
    const portholeSlides = document.querySelectorAll('.porthole-img');
    const dots = document.querySelectorAll('.hero-dot');
    const totalSlides = bgSlides.length;
    let currentIndex = 0;
    let slideshowInterval;

    function showSlide(index) {
        bgSlides.forEach(function(slide, i) {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('opacity-0', i !== index);
        });
        portholeSlides.forEach(function(slide, i) {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('opacity-0', i !== index);
        });
        dots.forEach(function(dot, i) {
            if (i === index) {
                dot.classList.add('bg-spesh-green', 'w-8');
                dot.classList.remove('bg-white/30', 'w-2');
            } else {
                dot.classList.remove('bg-spesh-green', 'w-8');
                dot.classList.add('bg-white/30', 'w-2');
            }
        });
        currentIndex = index;
    }

    function nextSlide() {
        showSlide((currentIndex + 1) % totalSlides);
    }

    function startSlideshow() {
        slideshowInterval = setInterval(nextSlide, 5000);
    }

    function stopSlideshow() {
        clearInterval(slideshowInterval);
    }

    dots.forEach(function(dot) {
        dot.addEventListener('click', function() {
            stopSlideshow();
            showSlide(parseInt(this.dataset.index));
            startSlideshow();
        });
    });

    startSlideshow();
})();
</script>
