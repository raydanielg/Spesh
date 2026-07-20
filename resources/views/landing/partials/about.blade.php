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
                                <svg class="w-6 h-6 text-spesh-green-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
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
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <h3 class="font-heading font-bold text-xl text-white">Our Mission</h3>
                        </div>
                        <p class="font-body text-sm text-white/80 leading-relaxed">
                            To deliver a distinguished, reliable client experience while setting the standard for professionalism and technological excellence — operating profitably while ensuring a safe, secure, and healthy environment for clients and employees alike.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Right: Core Values --}}
            <div class="reveal" style="transition-delay:0.2s;">
                <h3 class="font-heading font-bold text-2xl text-spesh-navy mb-6">Our Core Values</h3>
                <div class="space-y-4">
                    {{-- Innovation --}}
                    <div class="flex items-start gap-4 p-5 rounded-xl border border-spesh-gray hover:border-spesh-green hover:shadow-lg transition-all group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-spesh-green to-spesh-green-dark flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg text-spesh-navy mb-1">Innovation</h4>
                            <p class="font-body text-sm text-spesh-body">Embracing technology and creative solutions to stay ahead in a dynamic logistics landscape.</p>
                        </div>
                    </div>

                    {{-- Professionalism --}}
                    <div class="flex items-start gap-4 p-5 rounded-xl border border-spesh-gray hover:border-spesh-purple hover:shadow-lg transition-all group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-spesh-purple to-spesh-purple-dark flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A48.108 48.108 0 0112 21c-2.272 0-4.459-.334-6.512-.929M21 13.255a48.096 48.096 0 00-3.51-7.48M21 13.255a9.027 9.027 0 01-9 9M3.514 8.775A48.099 48.099 0 0012 3c2.272 0 4.459.334 6.512.929M3.514 8.775a9.027 9.027 0 009 9m-9-9a48.11 48.11 0 016.512-.929"/></svg>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg text-spesh-navy mb-1">Professionalism</h4>
                            <p class="font-body text-sm text-spesh-body">Maintaining the highest standards in every interaction, transaction, and delivery we make.</p>
                        </div>
                    </div>

                    {{-- Transparency --}}
                    <div class="flex items-start gap-4 p-5 rounded-xl border border-spesh-gray hover:border-spesh-ocean hover:shadow-lg transition-all group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-spesh-ocean to-spesh-ocean-dark flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg text-spesh-navy mb-1">Transparency</h4>
                            <p class="font-body text-sm text-spesh-body">Open, honest, and accountable in all our operations — building trust with every client.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
