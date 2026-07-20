@extends('layouts.landing')

@section('title', 'Get a Quote — SPESH Company Limited')

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
                                        <svg class="w-5 h-5 text-spesh-green-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>
                                    <div>
                                        <p class="font-heading font-semibold text-sm text-white">TRA Registered Agent</p>
                                        <p class="font-body text-xs text-white/50">Licence No. 100568</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-spesh-ocean/20 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-spesh-ocean-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                    </div>
                                    <div>
                                        <p class="font-heading font-semibold text-sm text-white">Fast Response</p>
                                        <p class="font-body text-xs text-white/50">Within 24 hours</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-lg bg-spesh-purple/30 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-spesh-purple-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2L4 6v6c0 5 3.5 9 8 10 4.5-1 8-5 8-10V6l-8-4z"/></svg>
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
                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Full Name --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Full Name</label>
                                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body" placeholder="John Doe">
                                </div>

                                {{-- Email --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Email Address</label>
                                    <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body" placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Phone --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Phone Number</label>
                                    <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body" placeholder="+255 --- --- ---">
                                </div>

                                {{-- Company --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Company (Optional)</label>
                                    <input type="text" name="company" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body" placeholder="Company Ltd">
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Service Type --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Service Type</label>
                                    <select name="service_type" required class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body">
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

                                {{-- Shipment Type --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Shipment Type</label>
                                    <select name="shipment_type" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body">
                                        <option value="" selected disabled>Select type</option>
                                        <option value="Sea Freight">Sea Freight</option>
                                        <option value="Air Freight">Air Freight</option>
                                        <option value="Road Transport">Road Transport</option>
                                        <option value="Rail Transport">Rail Transport</option>
                                        <option value="Multi-modal">Multi-modal</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-5">
                                {{-- Origin --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Origin / Port of Loading</label>
                                    <input type="text" name="origin" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body" placeholder="e.g. Shanghai, China">
                                </div>

                                {{-- Destination --}}
                                <div>
                                    <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Destination / Port of Discharge</label>
                                    <input type="text" name="destination" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body" placeholder="e.g. Dar es Salaam, Tanzania">
                                </div>
                            </div>

                            {{-- Cargo Description --}}
                            <div>
                                <label class="block font-heading font-semibold text-xs text-spesh-body mb-2 uppercase tracking-wide">Cargo Description</label>
                                <textarea name="cargo_description" rows="3" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-100 focus:border-spesh-green focus:ring-2 focus:ring-spesh-green/20 outline-none transition-all text-sm font-body resize-none" placeholder="Describe your cargo — type, weight, dimensions, special handling requirements, etc."></textarea>
                            </div>

                            {{-- Submit --}}
                            <div class="pt-2">
                                <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl font-heading font-bold text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[1.02]">
                                    <span>Request Quote</span>
                                    <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                    </div>
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
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<span>Submitting...</span><div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center"><svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg></div>';
            btn.disabled = true;

            setTimeout(function() {
                Toastify({
                    text: "Thank you! Your quote request has been submitted. Our team will contact you within 24 hours.",
                    duration: 6000,
                    gravity: 'top',
                    position: 'right',
                    style: { background: 'linear-gradient(135deg, #1A8251, #0E5C38)' }
                }).showToast();
                form.reset();
                btn.innerHTML = originalHTML;
                btn.disabled = false;
            }, 1500);
        });
    }
})();
</script>
@endpush
