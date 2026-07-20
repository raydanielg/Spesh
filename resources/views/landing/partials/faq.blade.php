{{-- FAQ Section --}}
<section id="faq" class="relative py-20 lg:py-28 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    {{-- Background image --}}
    <div class="absolute inset-0 opacity-5 bg-cover bg-center" style="background-image: url('{{ asset('735 (1).jpg') }}');"></div>
    {{-- Decorative shapes --}}
    <div class="absolute top-20 right-20 w-72 h-72 bg-spesh-green/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-spesh-purple/5 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-14 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-green"></span>
                <span class="font-heading font-semibold text-xs text-spesh-green tracking-widest uppercase">FAQ</span>
                <span class="w-8 h-1 rounded-full bg-spesh-green"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-spesh-navy mb-4">
                Frequently Asked Questions
            </h2>
            <p class="font-body text-base text-spesh-body max-w-2xl mx-auto">
                Got questions? We've got answers. Here are some of the most common things our clients ask us.
            </p>
        </div>

        {{-- FAQ Items as Stepper --}}
        <ol class="relative text-spesh-body border-s border-gray-200">
            @php
                $faqs = [
                    ['q' => 'What services does SPESH Company Limited offer?', 'a' => 'We offer a comprehensive range of logistics services including customs clearing, freight forwarding (sea, air, road, and rail), project logistics, warehousing, small parcel and loose cargo handling, insurance and bonds, as well as general trading of ICT, electrical, mechanical, and telecom equipment.', 'icon' => 'fa-circle-question'],
                    ['q' => 'How long does the customs clearing process take?', 'a' => 'Typically, customs clearing takes 24-48 hours for standard shipments, provided all documentation is complete and accurate. Our experienced TRA-licensed agents work diligently to ensure the fastest possible clearance times.', 'icon' => 'fa-clock'],
                    ['q' => 'Are you licensed and certified?', 'a' => 'Yes, we are fully licensed and certified. We hold a BRELA Certificate of Incorporation, TRA Customs Agent\'s Licence, TASAC Certificate of Registration, TAFFA Membership, and all required municipal and tax compliance documents.', 'icon' => 'fa-certificate'],
                    ['q' => 'Do you provide insurance for shipments?', 'a' => 'Absolutely. We offer comprehensive cargo insurance and customs bonds to protect your shipments throughout the entire logistics process. Our TASAC-certified operations ensure full compliance and protection.', 'icon' => 'fa-shield-halved'],
                    ['q' => 'Can you handle project logistics and oversized cargo?', 'a' => 'Yes, project logistics is one of our core specialties. We have the expertise and equipment to handle oversized, heavy-lift, and complex project cargo, including planning, route surveys, and multi-modal transport solutions.', 'icon' => 'fa-tower-cell'],
                    ['q' => 'How can I get a quote for my shipment?', 'a' => 'You can request a quote by filling out our online quote form, calling us directly at +255 22 211 1744 or +255 699 459 191, or emailing us at info@spesh.co.tz. Our team typically responds within 24 hours with a tailored quote.', 'icon' => 'fa-file-invoice-dollar'],
                    ['q' => 'Do you operate outside Tanzania?', 'a' => 'While we are headquartered in Dar es Salaam, Tanzania, we handle international freight forwarding across the East African region and beyond, including imports and exports through major ports and border crossings.', 'icon' => 'fa-globe'],
                ];
            @endphp

            @foreach($faqs as $index => $faq)
                <li class="mb-10 ms-7 group reveal" style="transition-delay: {{ $index * 0.1 }}s;">
                    <span class="absolute flex items-center justify-center w-8 h-8 rounded-full -start-4 ring-4 ring-gray-50 bg-spesh-green/10 text-spesh-green group-hover:bg-spesh-green group-hover:text-white transition-all duration-300 group-hover:scale-110 shadow-sm">
                        <i class="fas {{ $faq['icon'] }} text-sm"></i>
                    </span>
                    <div class="faq-item bg-white rounded-xl p-5 shadow-sm border border-gray-100 group-hover:border-spesh-green/30 group-hover:shadow-lg transition-all duration-300 overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between gap-4 text-left" onclick="toggleFaq({{ $index }})">
                            <h3 class="font-heading font-semibold text-sm sm:text-base text-spesh-navy group-hover:text-spesh-green transition-colors leading-tight">{{ $faq['q'] }}</h3>
                            <div class="faq-icon flex-shrink-0 w-7 h-7 rounded-lg bg-spesh-green/10 flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-chevron-down text-xs text-spesh-green transition-transform duration-300" id="faq-icon-{{ $index }}"></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out" id="faq-content-{{ $index }}">
                            <div class="pt-4 mt-4 border-t border-gray-100">
                                <p class="font-body text-sm text-spesh-body leading-relaxed">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>

        {{-- CTA --}}
        <div class="reveal text-center mt-12" style="transition-delay:0.2s;">
            <p class="font-body text-sm text-spesh-body mb-4">Still have questions?</p>
            <a href="{{ route('quote') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-heading font-semibold text-white bg-gradient-to-r from-spesh-green to-spesh-green-dark hover:from-spesh-green-light hover:to-spesh-green shadow-md hover:shadow-lg transition-all hover:scale-[1.02]">
                <span>Get a Free Quote</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
            </a>
        </div>
    </div>
</section>

<script>
function toggleFaq(index) {
    const content = document.getElementById('faq-content-' + index);
    const icon = document.querySelectorAll('.faq-icon')[index]?.querySelector('svg');
    const item = document.querySelectorAll('.faq-item')[index];

    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

    if (isOpen) {
        content.style.maxHeight = '0px';
        if (icon) icon.style.transform = 'rotate(0deg)';
        if (item) item.classList.remove('border-spesh-green/30', 'shadow-md');
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        if (icon) icon.style.transform = 'rotate(180deg)';
        if (item) item.classList.add('border-spesh-green/30', 'shadow-md');
    }
}
</script>
