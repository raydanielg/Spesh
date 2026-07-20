{{-- About Section --}}
<section id="about" class="relative py-20 lg:py-32 bg-white overflow-hidden">
    <div class="section-watermark">SPESH</div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-16 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-green"></span>
                <span class="font-heading font-semibold text-xs text-spesh-green tracking-widest uppercase">About Us</span>
                <span class="w-8 h-1 rounded-full bg-spesh-green"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-spesh-navy mb-4">
                Who We Are
            </h2>
            <p class="font-body text-base text-spesh-body max-w-2xl mx-auto">
                A regional leader in logistics — combining professionalism, innovation, and outstanding customer experience.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Left: Vision & Mission --}}
            <div class="space-y-6 reveal">
                {{-- Vision Card --}}
                <div class="relative bg-gradient-to-br from-spesh-navy to-spesh-navy-dark rounded-2xl p-8 shadow-xl overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-spesh-green/10 rounded-full blur-2xl group-hover:bg-spesh-green/20 transition-colors"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-spesh-green/20 flex items-center justify-center">
                                <i class="fas fa-eye text-xl text-spesh-green-light"></i>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-white">Our Vision</h3>
                        </div>
                        <p class="font-body text-sm text-white/70 leading-relaxed">
                            To become a regional leader in the logistics sector — a key partner that helps clients build sustainable competitive advantage by getting products to market quickly, efficiently, and safely.
                        </p>
                    </div>
                </div>

                {{-- Mission Card --}}
                <div class="relative bg-gradient-to-br from-spesh-ocean to-spesh-ocean-dark rounded-2xl p-8 shadow-xl overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 rounded-xl bg-white/15 flex items-center justify-center">
                                <i class="fas fa-rocket text-xl text-white"></i>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-white">Our Mission</h3>
                        </div>
                        <p class="font-body text-sm text-white/80 leading-relaxed">
                            To deliver a distinguished, reliable client experience while setting the standard for professionalism and technological excellence — operating profitably while ensuring a safe, secure, and healthy environment for clients and employees alike.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Right: Core Values Stepper --}}
            <div class="reveal" style="transition-delay:0.2s;">
                <h3 class="font-heading font-bold text-2xl text-spesh-navy mb-8 text-center lg:text-left">Our Core Values</h3>

                <ol class="relative text-spesh-body border-s border-gray-200">
                    {{-- Step 1: Innovation --}}
                    <li class="mb-10 ms-7 group reveal">
                        <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -start-4 ring-4 ring-white bg-spesh-green/10 text-spesh-green group-hover:bg-spesh-green group-hover:text-white transition-all duration-300 group-hover:scale-110 shadow-sm">
                            <i class="fas fa-lightbulb text-sm"></i>
                        </span>
                        <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 group-hover:border-spesh-green/40 group-hover:shadow-lg transition-all duration-300">
                            <h3 class="font-heading font-bold text-lg text-spesh-navy leading-tight mb-1">Innovation</h3>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Embracing technology and creative solutions to stay ahead in a dynamic logistics landscape.</p>
                        </div>
                    </li>

                    {{-- Step 2: Professionalism --}}
                    <li class="mb-10 ms-7 group reveal" style="transition-delay:0.15s;">
                        <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -start-4 ring-4 ring-white bg-spesh-purple/10 text-spesh-purple group-hover:bg-spesh-purple group-hover:text-white transition-all duration-300 group-hover:scale-110 shadow-sm">
                            <i class="fas fa-user-tie text-sm"></i>
                        </span>
                        <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 group-hover:border-spesh-purple/40 group-hover:shadow-lg transition-all duration-300">
                            <h3 class="font-heading font-bold text-lg text-spesh-navy leading-tight mb-1">Professionalism</h3>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Maintaining the highest standards in every interaction, transaction, and delivery we make.</p>
                        </div>
                    </li>

                    {{-- Step 3: Transparency --}}
                    <li class="mb-10 ms-7 group reveal" style="transition-delay:0.3s;">
                        <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -start-4 ring-4 ring-white bg-spesh-ocean/10 text-spesh-ocean group-hover:bg-spesh-ocean group-hover:text-white transition-all duration-300 group-hover:scale-110 shadow-sm">
                            <i class="fas fa-handshake text-sm"></i>
                        </span>
                        <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 group-hover:border-spesh-ocean/40 group-hover:shadow-lg transition-all duration-300">
                            <h3 class="font-heading font-bold text-lg text-spesh-navy leading-tight mb-1">Transparency</h3>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Open, honest, and accountable in all our operations — building trust with every client.</p>
                        </div>
                    </li>

                    {{-- Step 4: Customer Experience --}}
                    <li class="ms-7 group reveal" style="transition-delay:0.45s;">
                        <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -start-4 ring-4 ring-white bg-spesh-green-light/10 text-spesh-green-light group-hover:bg-spesh-green-light group-hover:text-white transition-all duration-300 group-hover:scale-110 shadow-sm">
                            <i class="fas fa-heart text-sm"></i>
                        </span>
                        <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 group-hover:border-spesh-green-light/40 group-hover:shadow-lg transition-all duration-300">
                            <h3 class="font-heading font-bold text-lg text-spesh-navy leading-tight mb-1">Customer Experience</h3>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Delivering outstanding service that exceeds expectations and builds lasting partnerships.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
