{{-- Certifications Section --}}
<section id="certifications" class="relative py-20 lg:py-28 bg-white overflow-hidden">
    <div class="section-watermark" style="color:rgba(33,100,130,0.03);">CERTIFIED</div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section header --}}
        <div class="text-center mb-14 reveal">
            <div class="inline-flex items-center gap-2 mb-4">
                <span class="w-8 h-1 rounded-full bg-spesh-ocean"></span>
                <span class="font-heading font-semibold text-xs text-spesh-ocean tracking-widest uppercase">Certifications & Licenses</span>
                <span class="w-8 h-1 rounded-full bg-spesh-ocean"></span>
            </div>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-spesh-navy mb-4">
                Licensed & Certified
            </h2>
            <p class="font-body text-base text-spesh-body max-w-2xl mx-auto">
                Fully compliant with all regulatory bodies and industry standards in Tanzania.
            </p>
        </div>

        {{-- Certifications grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
                $certs = [
                    ['title' => 'BRELA Certificate of Incorporation', 'number' => 'No. 141454870', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Business Licence — Kinondoni Municipal', 'number' => 'BL01396912022-2300006776', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5'],
                    ['title' => 'TRA Customs Agent\'s Licence', 'number' => 'No. 100568', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'TRA Taxpayer Identification Number', 'number' => 'CTIN 1477898', 'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
                    ['title' => 'Tax Clearance Certificate — TASAC', 'number' => 'TASAC Approved', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'TASAC Certificate of Registration', 'number' => 'No. CLF101425214', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5'],
                    ['title' => 'TAFFA Certificate of Membership 2023', 'number' => 'No. 00937', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                ];
            @endphp

            @foreach($certs as $cert)
                <div class="reveal group flex items-start gap-4 p-5 rounded-xl bg-gradient-to-br from-gray-50 to-white border border-gray-100 hover:border-spesh-green/30 hover:shadow-lg transition-all">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-gradient-to-br from-spesh-green/10 to-spesh-ocean/10 flex items-center justify-center group-hover:from-spesh-green group-hover:to-spesh-green-dark transition-all">
                        <svg class="w-5 h-5 text-spesh-green group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $cert['icon'] }}"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-heading font-semibold text-sm text-spesh-navy leading-snug">{{ $cert['title'] }}</p>
                        <p class="font-body text-xs text-spesh-body mt-1">{{ $cert['number'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
