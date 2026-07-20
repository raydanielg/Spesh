{{-- Contact Section --}}
<section id="contact" class="relative py-20 lg:py-32 bg-gradient-to-br from-spesh-purple via-spesh-navy to-spesh-navy-dark overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-spesh-green via-spesh-green-light to-spesh-green"></div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-spesh-purple via-spesh-purple-light to-spesh-purple"></div>
    <div class="absolute top-20 right-20 w-72 h-72 bg-spesh-green/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-spesh-ocean/10 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-14 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
                <span class="font-heading font-semibold text-xs text-spesh-green-light tracking-widest uppercase">Get In Touch</span>
                <span class="w-8 h-1 rounded-full bg-spesh-green-light"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white mb-4">
                Contact Us
            </h2>
            <p class="font-body text-base text-white/60 max-w-2xl mx-auto">
                Ready to streamline your logistics? Reach out to us today and let's get your products moving.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">

            {{-- Left: Contact info --}}
            <div class="reveal space-y-5">
                {{-- Head Office --}}
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-spesh-green/20 flex items-center justify-center">
                        <i class="fas fa-location-dot text-xl text-spesh-green-light"></i>
                    </div>
                    <div>
                        <p class="font-heading font-bold text-sm text-white mb-1">Head Office</p>
                        <p class="font-body text-sm text-white/60 leading-relaxed">Samora House, 7th Floor<br>P.O. Box 60166 PSSSF<br>Dar es Salaam, Tanzania</p>
                    </div>
                </div>

                {{-- Tel / Mobile --}}
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-spesh-ocean/20 flex items-center justify-center">
                        <i class="fas fa-phone text-xl text-spesh-ocean-light"></i>
                    </div>
                    <div>
                        <p class="font-heading font-bold text-sm text-white mb-1">Tel / Mobile</p>
                        <p class="font-body text-sm text-white/60">+255 22 211 1744<br>+255 699 459 191</p>
                    </div>
                </div>

                {{-- Email --}}
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-spesh-purple/30 flex items-center justify-center">
                        <i class="fas fa-envelope text-xl text-spesh-purple-light"></i>
                    </div>
                    <div>
                        <p class="font-heading font-bold text-sm text-white mb-1">Email</p>
                        <p class="font-body text-sm text-white/60">info@spesh.co.tz</p>
                    </div>
                </div>

                {{-- Website --}}
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white/5 backdrop-blur-sm border border-white/10 hover:bg-white/10 transition-all">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-spesh-green/20 flex items-center justify-center">
                        <i class="fas fa-globe text-xl text-spesh-green-light"></i>
                    </div>
                    <div>
                        <p class="font-heading font-bold text-sm text-white mb-1">Website</p>
                        <p class="font-body text-sm text-white/60">www.spesh.co.tz</p>
                    </div>
                </div>
            </div>

            {{-- Right: Contact form --}}
            <div class="reveal bg-white rounded-2xl p-8 shadow-2xl" style="transition-delay:0.2s;">
                <h3 class="font-heading font-bold text-xl text-spesh-navy mb-6">Send Us a Message</h3>
                <form id="contactForm" class="space-y-5">
                    @csrf
                    {{-- Full Name --}}
                    <div>
                        <label for="contact-name" class="block text-sm font-semibold text-gray-700 mb-1.5">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </div>
                            <input id="contact-name" type="text" name="name" required
                                class="contact-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm"
                                placeholder="John Doe">
                        </div>
                        <p class="contact-error mt-1.5 text-sm text-red-600 hidden"></p>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="contact-email" class="block text-sm font-semibold text-gray-700 mb-1.5">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <input id="contact-email" type="email" name="email" required
                                class="contact-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm"
                                placeholder="john@example.com">
                        </div>
                        <p class="contact-error mt-1.5 text-sm text-red-600 hidden"></p>
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="contact-phone" class="block text-sm font-semibold text-gray-700 mb-1.5">Phone <span class="text-gray-400 font-normal">(Optional)</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <input id="contact-phone" type="tel" name="phone"
                                class="contact-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm"
                                placeholder="+255 XXX XXX XXX">
                        </div>
                        <p class="contact-error mt-1.5 text-sm text-red-600 hidden"></p>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label for="contact-message" class="block text-sm font-semibold text-gray-700 mb-1.5">Message</label>
                        <div class="relative">
                            <div class="absolute top-3.5 left-0 pl-3.5 flex items-start pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 3v-3z"/></svg>
                            </div>
                            <textarea id="contact-message" name="message" rows="4" required
                                class="contact-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm resize-none"
                                placeholder="How can we help you?"></textarea>
                        </div>
                        <p class="contact-error mt-1.5 text-sm text-red-600 hidden"></p>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" id="contactSubmit" class="w-full py-3 text-sm font-bold text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green rounded-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
(function() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const submitBtn = document.getElementById('contactSubmit');
    const originalBtnHTML = submitBtn.innerHTML;
    const inputs = form.querySelectorAll('.contact-input');
    const errorEls = form.querySelectorAll('.contact-error');

    function clearErrors() {
        errorEls.forEach(function(el) { el.classList.add('hidden'); el.textContent = ''; });
        inputs.forEach(function(el) {
            el.classList.remove('border-red-300', 'ring-2', 'ring-red-100');
            el.classList.add('border-gray-200');
        });
    }

    function showError(field, message) {
        const errorEl = form.querySelector('[data-field="' + field + '"]') || form.querySelector('#contact-' + field.replace('_', '-'))?.parentElement.nextElementSibling;
        const input = form.querySelector('[name="' + field + '"]');
        if (input) {
            input.classList.remove('border-gray-200');
            input.classList.add('border-red-300', 'ring-2', 'ring-red-100');
        }
        const errEl = input?.closest('div').parentElement.querySelector('.contact-error');
        if (errEl) {
            errEl.textContent = message;
            errEl.classList.remove('hidden');
        }
    }

    function setLoading(loading) {
        if (loading) {
            submitBtn.innerHTML = '<svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg><span>Sending...</span>';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';
        } else {
            submitBtn.innerHTML = originalBtnHTML;
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
        }
    }

    inputs.forEach(function(input) {
        input.addEventListener('input', function() {
            this.classList.remove('border-red-300', 'ring-2', 'ring-red-100');
            this.classList.add('border-gray-200');
            const errEl = this.closest('div').parentElement.querySelector('.contact-error');
            if (errEl) errEl.classList.add('hidden');
        });
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        clearErrors();

        const formData = new FormData(form);
        const data = {};
        formData.forEach(function(value, key) { data[key] = value; });

        setLoading(true);

        fetch(form.action || window.location.href, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || data._token,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(function(response) { return response.json(); })
        .then(function(res) {
            setLoading(false);
            if (res.success) {
                Toastify({
                    text: res.message || 'Thank you! Your message has been sent. We\'ll get back to you soon.',
                    duration: 5000,
                    gravity: 'top',
                    position: 'right',
                    style: { background: 'linear-gradient(135deg, #1A8251, #0E5C38)' }
                }).showToast();
                form.reset();
            } else if (res.errors) {
                Object.keys(res.errors).forEach(function(field) {
                    showError(field, res.errors[field][0]);
                });
                Toastify({
                    text: 'Please fix the errors above.',
                    duration: 4000,
                    gravity: 'top',
                    position: 'right',
                    style: { background: 'linear-gradient(135deg, #dc2626, #991b1b)' }
                }).showToast();
            }
        })
        .catch(function() {
            setLoading(false);
            Toastify({
                text: 'Something went wrong. Please try again or call us directly.',
                duration: 5000,
                gravity: 'top',
                position: 'right',
                style: { background: 'linear-gradient(135deg, #dc2626, #991b1b)' }
            }).showToast();
        });
    });
})();
</script>
@endpush
