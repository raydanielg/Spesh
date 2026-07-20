{{-- Footer --}}
<footer class="relative bg-spesh-navy-dark overflow-hidden">
    {{-- Top gradient band --}}
    <div class="h-1 bg-gradient-to-r from-spesh-green via-spesh-purple to-spesh-green"></div>

    {{-- Diagonal ribbon --}}
    <div class="absolute top-0 left-0 right-0 h-32 bg-gradient-to-br from-spesh-purple/20 to-transparent" style="clip-path: polygon(0 0, 100% 0, 100% 60%, 0 100%);"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

            {{-- Brand --}}
            <div class="lg:col-span-1">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('logo.png') }}" alt="SPESH Company Limited" class="h-14 w-auto object-contain brightness-0 invert">
                </div>
                <p class="font-body text-sm text-white/50 leading-relaxed mb-4">
                    A regional leader in logistics — professionalism, innovation, and outstanding customer experience.
                </p>
                <div class="flex items-center gap-2 text-xs text-white/40 mb-5">
                    <i class="fas fa-circle-check text-spesh-green"></i>
                    <span>Established 2021</span>
                </div>
                {{-- Social Media --}}
                <div class="flex items-center gap-3">
                    <a href="#" aria-label="Facebook" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:bg-spesh-green hover:border-spesh-green transition-all duration-300 hover:scale-110"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:bg-spesh-green hover:border-spesh-green transition-all duration-300 hover:scale-110"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:bg-spesh-green hover:border-spesh-green transition-all duration-300 hover:scale-110"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:bg-spesh-green hover:border-spesh-green transition-all duration-300 hover:scale-110"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://wa.me/255699459191" aria-label="WhatsApp" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-white hover:bg-spesh-green hover:border-spesh-green transition-all duration-300 hover:scale-110"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="font-heading font-bold text-sm text-white mb-5 uppercase tracking-wide flex items-center gap-2">
                    Quick Links
                    <span class="h-0.5 w-8 bg-gradient-to-r from-spesh-green to-spesh-green-light rounded-full"></span>
                </h4>
                <ul class="space-y-2.5">
                    <li><a href="#home" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Home</a></li>
                    <li><a href="#about" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>About Us</a></li>
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Services</a></li>
                    <li><a href="#clients" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Clients</a></li>
                    <li><a href="#why-choose-us" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Why Choose Us</a></li>
                    <li><a href="#faq" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>FAQ</a></li>
                    <li><a href="#contact" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-green opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Contact</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-heading font-bold text-sm text-white mb-5 uppercase tracking-wide flex items-center gap-2">
                    Our Services
                    <span class="h-0.5 w-8 bg-gradient-to-r from-spesh-purple to-spesh-purple-light rounded-full"></span>
                </h4>
                <ul class="space-y-2.5">
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-purple opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Customs Clearing</a></li>
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-purple opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Freight Forwarding</a></li>
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-purple opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Project Logistics</a></li>
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-purple opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Warehousing</a></li>
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-purple opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>Insurance & Bonds</a></li>
                    <li><a href="#services" class="group font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors flex items-center gap-1.5"><span class="text-spesh-purple opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">›</span>General Trading</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="font-heading font-bold text-sm text-white mb-5 uppercase tracking-wide flex items-center gap-2">
                    Contact Info
                    <span class="h-0.5 w-8 bg-gradient-to-r from-spesh-ocean to-spesh-steel rounded-full"></span>
                </h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-location-dot w-4 text-spesh-green-light flex-shrink-0 mt-0.5"></i>
                        <span class="font-body text-sm text-white/50 leading-relaxed">Samora House, 7th Floor, Dar es Salaam, Tanzania</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-phone w-4 text-spesh-green-light flex-shrink-0 mt-0.5"></i>
                        <span class="font-body text-sm text-white/50">+255 22 211 1744<br>+255 699 459 191</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-envelope w-4 text-spesh-green-light flex-shrink-0 mt-0.5"></i>
                        <a href="mailto:info@spesh.co.tz" class="font-body text-sm text-white/50 hover:text-spesh-green-light transition-colors">info@spesh.co.tz</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="font-body text-xs text-white/40 text-center sm:text-left">
                &copy; {{ date('Y') }} Spesh Company Limited. All rights reserved.<br class="sm:hidden">
                <span class="hidden sm:inline"> · </span>TIN: 141-454-870 · BRELA No. 141454870
            </p>
            <div class="flex items-center gap-4">
                @guest
                    <a href="{{ route('login') }}" class="font-body text-xs text-white/40 hover:text-spesh-green-light transition-colors">Client Login</a>
                @else
                    <a href="{{ route('home') }}" class="font-body text-xs text-white/40 hover:text-spesh-green-light transition-colors">Dashboard</a>
                @endguest
                <span class="text-white/20">|</span>
                <a href="https://spesh.co.tz" class="font-body text-xs text-white/40 hover:text-spesh-green-light transition-colors">www.spesh.co.tz</a>
            </div>
        </div>
    </div>
</footer>
