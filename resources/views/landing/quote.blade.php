@extends('layouts.landing')

@section('title', 'Get a Quote — SPESH Company Limited')
@section('meta-description', 'Request a free logistics quote from SPESH Company Limited. Customs clearing, freight forwarding, project logistics, warehousing & more. Get a response within 24 hours.')
@section('meta-keywords', 'logistics quote Tanzania, freight quote Dar es Salaam, customs clearing quote, shipping quote, cargo quote, SPESH quote')
@section('og-title', 'Get a Free Logistics Quote — SPESH Company Limited')
@section('og-description', 'Request a tailored quote for customs clearing, freight forwarding, project logistics & more. Response within 24 hours.')

@section('content')
    @include('landing.partials.navbar')

    {{-- Quote Section --}}
    <section class="relative min-h-screen flex items-center pt-24 pb-16 lg:pt-20 lg:pb-20 bg-gradient-to-br from-spesh-gray/30 to-white overflow-hidden">
        {{-- Decorative shapes --}}
        <div class="absolute top-20 right-10 w-72 h-72 bg-spesh-green/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 bg-spesh-purple/5 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="reveal bg-white rounded-2xl shadow-2xl overflow-hidden">
                <div class="grid lg:grid-cols-5 gap-0">

                    {{-- Left: Image panel --}}
                    <div class="lg:col-span-2 relative min-h-[300px] lg:min-h-full">
                        {{-- Background image --}}
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('24177.jpg') }}');"></div>

                        {{-- Gradient overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-spesh-navy-dark/95 via-spesh-navy/80 to-spesh-purple/70"></div>
                        <div class="absolute inset-0 bg-gradient-to-br from-spesh-green/20 to-transparent"></div>

                        {{-- Content --}}
                        <div class="relative z-10 h-full p-8 lg:p-10 flex flex-col justify-between min-h-[300px]">
                            <div>
                                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                                    <span class="w-2 h-2 rounded-full bg-spesh-green animate-pulse"></span>
                                    <span class="font-heading text-xs font-medium text-white/90 tracking-wide">Get a Quote</span>
                                </div>
                                <h2 class="font-heading font-extrabold text-2xl lg:text-3xl text-white leading-tight mb-4 drop-shadow-lg">
                                    Let's Get Your
                                    <span class="bg-gradient-to-r from-spesh-green-light to-spesh-green bg-clip-text text-transparent">Cargo Moving</span>
                                </h2>
                                <p class="font-body text-sm text-white/70 leading-relaxed drop-shadow">
                                    Tell us about your shipment and our team will get back to you with a tailored quote within 24 hours.
                                </p>
                            </div>

                            {{-- Trust indicators --}}
                            <div class="space-y-3 mt-8">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-spesh-green/20 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-file-shield text-spesh-green-light"></i>
                                    </div>
                                    <div>
                                        <p class="font-heading font-semibold text-sm text-white">TRA Registered Agent</p>
                                        <p class="font-body text-xs text-white/50">Licence No. 100568</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-spesh-ocean/20 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-bolt text-spesh-ocean-light"></i>
                                    </div>
                                    <div>
                                        <p class="font-heading font-semibold text-sm text-white">Fast Response</p>
                                        <p class="font-body text-xs text-white/50">Within 24 hours</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-spesh-purple/30 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-shield-halved text-spesh-purple-light"></i>
                                    </div>
                                    <div>
                                        <p class="font-heading font-semibold text-sm text-white">Fully Insured</p>
                                        <p class="font-body text-xs text-white/50">TASAC Certified C&F</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right: Form --}}
                    <div class="lg:col-span-3 p-8 lg:p-12 bg-white">
                        <div class="mb-6">
                            <h3 class="font-heading font-extrabold text-2xl text-spesh-navy mb-2">Request a Quote</h3>
                            <p class="font-body text-sm text-spesh-body">Fill in the details below and we'll prepare a customized logistics quote for you.</p>
                        </div>

                        <form id="quoteForm" class="space-y-5">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Full Name --}}
                                <div>
                                    <label for="quote-name" class="block text-sm font-semibold text-gray-700 mb-1.5">Full Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                        </div>
                                        <input id="quote-name" type="text" name="name" required class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm" placeholder="John Doe">
                                    </div>
                                    <p class="quote-error mt-1.5 text-sm text-red-600 hidden"></p>
                                </div>

                                {{-- Email --}}
                                <div>
                                    <label for="quote-email" class="block text-sm font-semibold text-gray-700 mb-1.5">Email Address</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </div>
                                        <input id="quote-email" type="email" name="email" required class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm" placeholder="name@example.com">
                                    </div>
                                    <p class="quote-error mt-1.5 text-sm text-red-600 hidden"></p>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Phone --}}
                                <div>
                                    <label for="quote-phone" class="block text-sm font-semibold text-gray-700 mb-1.5">Phone Number</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                        </div>
                                        <input id="quote-phone" type="tel" name="phone" required class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm" placeholder="+255 --- --- ---">
                                    </div>
                                    <p class="quote-error mt-1.5 text-sm text-red-600 hidden"></p>
                                </div>

                                {{-- Company --}}
                                <div>
                                    <label for="quote-company" class="block text-sm font-semibold text-gray-700 mb-1.5">Company <span class="text-gray-400 font-normal">(Optional)</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                        </div>
                                        <input id="quote-company" type="text" name="company" class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm" placeholder="Company Ltd">
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Service Type --}}
                                <div>
                                    <label for="quote-service" class="block text-sm font-semibold text-gray-700 mb-1.5">Service Type</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                        </div>
                                        <select id="quote-service" name="service_type" required class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm appearance-none">
                                            <option value="" selected disabled>Select a service</option>
                                            <option value="Customs Clearing">Customs Clearing</option>
                                            <option value="Freight Forwarding">Freight Forwarding</option>
                                            <option value="Project Logistics">Project Logistics</option>
                                            <option value="Warehousing">Warehousing</option>
                                            <option value="Small Parcel & Loose Cargo">Small Parcel & Loose Cargo</option>
                                            <option value="Insurance & Bonds">Insurance & Bonds</option>
                                            <option value="General Trading">General Trading</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- Shipment Type --}}
                                <div>
                                    <label for="quote-shipment" class="block text-sm font-semibold text-gray-700 mb-1.5">Shipment Type</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                        </div>
                                        <select id="quote-shipment" name="shipment_type" class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm appearance-none">
                                            <option value="" selected disabled>Select type</option>
                                            <option value="Sea Freight">Sea Freight</option>
                                            <option value="Air Freight">Air Freight</option>
                                            <option value="Road Transport">Road Transport</option>
                                            <option value="Rail Transport">Rail Transport</option>
                                            <option value="Multi-modal">Multi-modal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Origin --}}
                                <div>
                                    <label for="quote-origin" class="block text-sm font-semibold text-gray-700 mb-1.5">Origin / Port of Loading</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        </div>
                                        <input id="quote-origin" type="text" name="origin" class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm" placeholder="e.g. Shanghai, China">
                                    </div>
                                </div>

                                {{-- Destination --}}
                                <div>
                                    <label for="quote-destination" class="block text-sm font-semibold text-gray-700 mb-1.5">Destination / Port of Discharge</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                                        </div>
                                        <input id="quote-destination" type="text" name="destination" class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm" placeholder="e.g. Dar es Salaam, Tanzania">
                                    </div>
                                </div>
                            </div>

                            {{-- Cargo Description --}}
                            <div>
                                <label for="quote-cargo" class="block text-sm font-semibold text-gray-700 mb-1.5">Cargo Description</label>
                                <div class="relative">
                                    <div class="absolute top-3 left-0 pl-3.5 flex items-start pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                                    </div>
                                    <textarea id="quote-cargo" name="cargo_description" rows="3" class="quote-input w-full pl-11 pr-4 py-2.5 rounded-lg border border-gray-200 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm resize-none" placeholder="Describe your cargo — type, weight, dimensions, special handling requirements, etc."></textarea>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="pt-2">
                                <button type="submit" id="quoteSubmit" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-3 text-sm font-bold text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green rounded-lg shadow-md hover:shadow-lg transition-all">
                                    <span>Request Quote</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection

@push('scripts')
<script>
(function() {
    const form = document.getElementById('quoteForm');
    if (!form) return;

    const submitBtn = document.getElementById('quoteSubmit');
    const originalBtnHTML = submitBtn.innerHTML;
    const inputs = form.querySelectorAll('.quote-input');
    const errorEls = form.querySelectorAll('.quote-error');

    function clearErrors() {
        errorEls.forEach(function(el) { el.classList.add('hidden'); el.textContent = ''; });
        inputs.forEach(function(el) {
            el.classList.remove('border-red-300', 'ring-2', 'ring-red-100');
            el.classList.add('border-gray-200');
        });
    }

    function setLoading(loading) {
        if (loading) {
            submitBtn.innerHTML = '<span>Submitting...</span><svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>';
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
            const errEl = this.closest('div').parentElement.querySelector('.quote-error');
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
                    text: res.message || 'Thank you! Your quote request has been submitted. Our team will contact you within 24 hours.',
                    duration: 6000,
                    gravity: 'top',
                    position: 'right',
                    style: { background: 'linear-gradient(135deg, #1A8251, #0E5C38)' }
                }).showToast();
                form.reset();
            } else if (res.errors) {
                Object.keys(res.errors).forEach(function(field) {
                    const input = form.querySelector('[name="' + field + '"]');
                    if (input) {
                        input.classList.remove('border-gray-200');
                        input.classList.add('border-red-300', 'ring-2', 'ring-red-100');
                        const errEl = input.closest('div').parentElement.querySelector('.quote-error');
                        if (errEl) {
                            errEl.textContent = res.errors[field][0];
                            errEl.classList.remove('hidden');
                        }
                    }
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
