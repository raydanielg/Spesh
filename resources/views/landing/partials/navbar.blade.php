{{-- Navbar --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-spesh-green to-spesh-green-dark flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2C8 6 6 10 6 14a6 6 0 0012 0c0-4-2-8-6-12z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 22c-3-4-4-7-4-10" stroke-linecap="round" stroke-linejoin="round" opacity="0.5"/>
                    </svg>
                </div>
                <div class="flex flex-col leading-none">
                    <span class="font-heading font-extrabold text-lg text-spesh-navy tracking-tight">SPESH</span>
                    <span class="font-heading font-light text-[10px] text-spesh-ocean tracking-widest uppercase">Company Limited</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-8">
                <a href="#home" class="nav-link font-heading font-medium text-sm text-spesh-body hover:text-spesh-green transition-colors">Home</a>
                <a href="#about" class="nav-link font-heading font-medium text-sm text-spesh-body hover:text-spesh-green transition-colors">About</a>
                <a href="#services" class="nav-link font-heading font-medium text-sm text-spesh-body hover:text-spesh-green transition-colors">Services</a>
                <a href="#clients" class="nav-link font-heading font-medium text-sm text-spesh-body hover:text-spesh-green transition-colors">Clients</a>
                <a href="#certifications" class="nav-link font-heading font-medium text-sm text-spesh-body hover:text-spesh-green transition-colors">Certifications</a>
                <a href="#contact" class="nav-link font-heading font-medium text-sm text-spesh-body hover:text-spesh-green transition-colors">Contact</a>
            </div>

            {{-- CTA --}}
            <div class="hidden lg:flex items-center gap-3">
                @guest
                    <a href="{{ route('login') }}" class="font-heading font-semibold text-sm text-spesh-navy hover:text-spesh-green transition-colors px-4 py-2">Login</a>
                    <a href="{{ route('register') }}" class="font-heading font-semibold text-sm text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green px-5 py-2.5 rounded-lg shadow-md hover:shadow-lg transition-all">Get Started</a>
                @else
                    <a href="{{ route('home') }}" class="font-heading font-semibold text-sm text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green px-5 py-2.5 rounded-lg shadow-md hover:shadow-lg transition-all">Dashboard</a>
                @endguest
            </div>

            {{-- Mobile Toggle --}}
            <button id="mobileToggle" class="lg:hidden flex flex-col gap-1.5 p-2" aria-label="Menu">
                <span class="block w-6 h-0.5 bg-spesh-navy transition-all"></span>
                <span class="block w-6 h-0.5 bg-spesh-navy transition-all"></span>
                <span class="block w-6 h-0.5 bg-spesh-navy transition-all"></span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="lg:hidden hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 py-4 space-y-1">
            <a href="#home" class="mobile-link block px-4 py-3 rounded-lg font-heading font-medium text-sm text-spesh-body hover:bg-spesh-gray/30 hover:text-spesh-green transition-colors">Home</a>
            <a href="#about" class="mobile-link block px-4 py-3 rounded-lg font-heading font-medium text-sm text-spesh-body hover:bg-spesh-gray/30 hover:text-spesh-green transition-colors">About</a>
            <a href="#services" class="mobile-link block px-4 py-3 rounded-lg font-heading font-medium text-sm text-spesh-body hover:bg-spesh-gray/30 hover:text-spesh-green transition-colors">Services</a>
            <a href="#clients" class="mobile-link block px-4 py-3 rounded-lg font-heading font-medium text-sm text-spesh-body hover:bg-spesh-gray/30 hover:text-spesh-green transition-colors">Clients</a>
            <a href="#certifications" class="mobile-link block px-4 py-3 rounded-lg font-heading font-medium text-sm text-spesh-body hover:bg-spesh-gray/30 hover:text-spesh-green transition-colors">Certifications</a>
            <a href="#contact" class="mobile-link block px-4 py-3 rounded-lg font-heading font-medium text-sm text-spesh-body hover:bg-spesh-gray/30 hover:text-spesh-green transition-colors">Contact</a>
            <div class="pt-3 border-t border-gray-100 flex gap-3">
                @guest
                    <a href="{{ route('login') }}" class="flex-1 text-center px-4 py-2.5 rounded-lg font-heading font-semibold text-sm text-spesh-navy border border-spesh-gray">Login</a>
                    <a href="{{ route('register') }}" class="flex-1 text-center px-4 py-2.5 rounded-lg font-heading font-semibold text-sm text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark">Get Started</a>
                @else
                    <a href="{{ route('home') }}" class="flex-1 text-center px-4 py-2.5 rounded-lg font-heading font-semibold text-sm text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark">Dashboard</a>
                @endguest
            </div>
        </div>
    </div>
</nav>

<script>
(function() {
    const navbar = document.getElementById('navbar');
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-md', 'bg-white/98');
            navbar.style.padding = '0';
        } else {
            navbar.classList.remove('shadow-md');
            navbar.style.padding = '0';
        }
    });

    mobileToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        const spans = mobileToggle.querySelectorAll('span');
        spans[0].classList.toggle('rotate-45');
        spans[0].classList.toggle('translate-y-2');
        spans[1].classList.toggle('opacity-0');
        spans[2].classList.toggle('-rotate-45');
        spans[2].classList.toggle('-translate-y-2');
    });

    mobileLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
    });
})();
</script>
