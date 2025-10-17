@extends('layouts.app')

@section('title', 'Disclaimer')

@section('content')
<div class="bg-white">

    {{-- ✅ 1. Page Header Section --}}
    <section class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
            Disclaimer
        </h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Please read our disclaimer carefully. It outlines the limitations of liability and clarifies the nature of the information provided on our platform.
        </p>
    </section>

    {{-- ✅ 2. Main Content with Sticky Sidebar --}}
    <section class="py-20 px-6" x-data="scrollSpy()">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-12">

            {{-- Sticky Sidebar (Table of Contents) --}}
            <aside class="lg:col-span-1">
                <div class="sticky top-24">
                    <h3 class="text-sm font-semibold uppercase text-gray-500 mb-4">On this page</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#earnings-disclaimer" @click.prevent="scrollTo('#earnings-disclaimer')" :class="{ 'text-blue-600 font-bold': activeSection === 'earnings-disclaimer' }" class="hover:text-blue-600 transition-colors">Earnings Disclaimer</a></li>
                        <li><a href="#general-info" @click.prevent="scrollTo('#general-info')" :class="{ 'text-blue-600 font-bold': activeSection === 'general-info' }" class="hover:text-blue-600 transition-colors">General Information</a></li>
                        <li><a href="#no-professional-advice" @click.prevent="scrollTo('#no-professional-advice')" :class="{ 'text-blue-600 font-bold': activeSection === 'no-professional-advice' }" class="hover:text-blue-600 transition-colors">No Professional Advice</a></li>
                        <li><a href="#external-links" @click.prevent="scrollTo('#external-links')" :class="{ 'text-blue-600 font-bold': activeSection === 'external-links' }" class="hover:text-blue-600 transition-colors">External Links</a></li>
                    </ul>
                </div>
            </aside>

            {{-- Disclaimer Content --}}
            <main class="lg:col-span-3 prose lg:prose-lg max-w-full">
                <p class="lead"><strong>Last updated:</strong> {{ now()->format('F d, Y') }}</p>

                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded-md my-8 not-prose" role="alert">
                    <p class="font-bold">Legal Notice</p>
                    <p class="text-sm">This document is a general template and does not constitute legal advice. You must consult with a qualified legal professional to tailor it to your specific business needs.</p>
                </div>

                <section id="earnings-disclaimer">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg> 1. Earnings and Income Disclaimer</h2>
                    <p>
                        SphareMLM ("SphareMLM Pvt. Ltd.") is a platform that offers a business opportunity, but we make absolutely no guarantees about your ability to earn money with our program, information, or strategies. Your success depends entirely on your own effort, dedication, skill, and market conditions.
                    </p>
                    <p>
                        Any financial figures, success stories, or testimonials presented on our website (spharemlm.com) are for illustrative and educational purposes only. They represent exceptional results and are not intended to be a guarantee that you or others will achieve the same results. The average participant may earn significantly less or nothing at all.
                    </p>
                </section>

                <section id="general-info">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 2. General Information Disclaimer</h2>
                    <p>
                        The information provided by SphareMLM on our website is for general informational purposes only. All information is provided in good faith, however, we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, or completeness of any information on the site.
                    </p>
                </section>

                <section id="no-professional-advice">
                     <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> 3. No Professional Advice</h2>
                    <p>
                        The information on this website is not intended as, and shall not be understood or construed as, professional financial, legal, or tax advice. The content is for informational purposes only. Before making any business or financial decisions, you should consult with a qualified professional who is aware of your individual circumstances.
                    </p>
                </section>

                <section id="external-links">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg> 4. External Links Disclaimer</h2>
                    <p>
                        Our website may contain links to other websites or content belonging to or originating from third parties. Such external links are not investigated, monitored, or checked for accuracy by us. We do not warrant, endorse, guarantee, or assume responsibility for the accuracy or reliability of any information offered by third-party websites linked through our site.
                    </p>
                </section>

                 <section id="liability">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg> 5. Limitation of Liability</h2>
                    <p>
                        Under no circumstance shall we have any liability to you for any loss or damage of any kind incurred as a result of the use of the site or reliance on any information provided on the site. Your use of the site and your reliance on any information on the site is solely at your own risk.
                    </p>
                </section>
            </main>
        </div>
    </section>
</div>

@push('scripts')
<script>
    function scrollSpy() {
        return {
            activeSection: null,
            sections: [],
            init() {
                this.sections = Array.from(document.querySelectorAll('main section[id]'));
                this.activeSection = this.sections[0]?.id || null;
                window.addEventListener('scroll', () => this.updateActiveSection());
            },
            updateActiveSection() {
                let current = '';
                this.sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= sectionTop - 120) {
                        current = section.getAttribute('id');
                    }
                });
                this.activeSection = current || this.sections[0]?.id;
            },
            scrollTo(id) {
                const element = document.querySelector(id);
                if (element) {
                    window.scrollTo({
                        top: element.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            }
        };
    }
</script>
@endpush
@endsection
