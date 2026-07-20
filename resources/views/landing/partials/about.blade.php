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

                <div class="relative">
                    {{-- Vertical connecting line --}}
                    <div class="absolute left-6 top-6 bottom-6 w-0.5 bg-gradient-to-b from-spesh-green via-spesh-purple to-spesh-ocean opacity-30"></div>

                    {{-- Step 1: Innovation --}}
                    <div class="stepper-item relative flex items-start gap-5 mb-8 group reveal">
                        <div class="flex-shrink-0 relative z-10">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-spesh-green to-spesh-green-dark flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <span class="font-heading font-extrabold text-white text-lg">I</span>
                            </div>
                            <div class="absolute inset-0 rounded-full bg-spesh-green/20 animate-ping opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="flex-1 bg-white rounded-xl p-5 shadow-md border border-gray-100 group-hover:border-spesh-green/40 group-hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-lightbulb text-base text-spesh-green"></i>
                                <h4 class="font-heading font-bold text-lg text-spesh-navy">Innovation</h4>
                            </div>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Embracing technology and creative solutions to stay ahead in a dynamic logistics landscape.</p>
                        </div>
                    </div>

                    {{-- Step 2: Professionalism --}}
                    <div class="stepper-item relative flex items-start gap-5 mb-8 group reveal" style="transition-delay:0.15s;">
                        <div class="flex-shrink-0 relative z-10">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-spesh-purple to-spesh-purple-dark flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <span class="font-heading font-extrabold text-white text-lg">II</span>
                            </div>
                            <div class="absolute inset-0 rounded-full bg-spesh-purple/20 animate-ping opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="flex-1 bg-white rounded-xl p-5 shadow-md border border-gray-100 group-hover:border-spesh-purple/40 group-hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-user-tie text-base text-spesh-purple"></i>
                                <h4 class="font-heading font-bold text-lg text-spesh-navy">Professionalism</h4>
                            </div>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Maintaining the highest standards in every interaction, transaction, and delivery we make.</p>
                        </div>
                    </div>

                    {{-- Step 3: Transparency --}}
                    <div class="stepper-item relative flex items-start gap-5 group reveal" style="transition-delay:0.3s;">
                        <div class="flex-shrink-0 relative z-10">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-spesh-ocean to-spesh-ocean-dark flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <span class="font-heading font-extrabold text-white text-base">III</span>
                            </div>
                            <div class="absolute inset-0 rounded-full bg-spesh-ocean/20 animate-ping opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="flex-1 bg-white rounded-xl p-5 shadow-md border border-gray-100 group-hover:border-spesh-ocean/40 group-hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-handshake text-base text-spesh-ocean"></i>
                                <h4 class="font-heading font-bold text-lg text-spesh-navy">Transparency</h4>
                            </div>
                            <p class="font-body text-sm text-spesh-body leading-relaxed">Open, honest, and accountable in all our operations — building trust with every client.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
