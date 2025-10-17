@extends('layouts.app')

@section('title', 'Terms and Conditions')

@section('content')
<div class="bg-white">
    {{-- Page Header --}}
    <section class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
            Terms and Conditions
        </h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Please read these terms carefully before using our service. Your access to and use of the service is conditioned on your acceptance of and compliance with these terms.
        </p>
    </section>

    {{-- Main Content with Sticky Sidebar --}}
    <section class="py-20 px-6" x-data="scrollSpy()">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-12">

            {{-- Sticky Sidebar (Table of Contents) --}}
            <aside class="lg:col-span-1">
                <div class="sticky top-24">
                    <h3 class="text-sm font-semibold uppercase text-gray-500 mb-4">On this page</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#agreement" @click.prevent="scrollTo('#agreement')" :class="{ 'text-blue-600 font-bold': activeSection === 'agreement' }" class="hover:text-blue-600 transition-colors">Agreement to Terms</a></li>
                        <li><a href="#accounts" @click.prevent="scrollTo('#accounts')" :class="{ 'text-blue-600 font-bold': activeSection === 'accounts' }" class="hover:text-blue-600 transition-colors">User Accounts</a></li>
                        <li><a href="#conduct" @click.prevent="scrollTo('#conduct')" :class="{ 'text-blue-600 font-bold': activeSection === 'conduct' }" class="hover:text-blue-600 transition-colors">Rules of Conduct</a></li>
                        <li><a href="#earnings" @click.prevent="scrollTo('#earnings')" :class="{ 'text-blue-600 font-bold': activeSection === 'earnings' }" class="hover:text-blue-600 transition-colors">Earnings Disclaimer</a></li>
                        <li><a href="#termination" @click.prevent="scrollTo('#termination')" :class="{ 'text-blue-600 font-bold': activeSection === 'termination' }" class="hover:text-blue-600 transition-colors">Termination</a></li>
                        <li><a href="#contact" @click.prevent="scrollTo('#contact')" :class="{ 'text-blue-600 font-bold': activeSection === 'contact' }" class="hover:text-blue-600 transition-colors">Contact Us</a></li>
                    </ul>
                </div>
            </aside>

            {{-- Terms Content --}}
            <main class="lg:col-span-3 prose lg:prose-lg max-w-full">
                <p class="lead"><strong>Last updated:</strong> {{ now()->format('F d, Y') }}</p>

                 <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded-md my-8 not-prose" role="alert">
                    <p class="font-bold">Important Notice</p>
                    <p class="text-sm">This document is a template and not legal advice. Consult a qualified legal professional to ensure compliance with all applicable laws.</p>
                </div>

                <section id="agreement">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 1. Agreement to Terms</h2>
                    <p>By creating an account or using the SphareMLM platform ("spharemlm.com"), you agree to be bound by these Terms and Conditions. If you disagree with any part of the terms, then you may not access the service.</p>
                </section>

                <section id="accounts">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> 2. User Accounts</h2>
                    <ul class="space-y-3 !pl-0 list-none">
                        <li class="flex items-start gap-3"><svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <span><strong>Eligibility:</strong> You must be at least 18 years of age to create an account.</span></li>
                        <li class="flex items-start gap-3"><svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <span><strong>Account Accuracy:</strong> You agree to provide accurate, current, and complete information during the registration process.</span></li>
                        <li class="flex items-start gap-3"><svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <span><strong>Account Security:</strong> You are responsible for safeguarding your password and for any activities under your account.</span></li>
                    </ul>
                </section>

                <section id="conduct">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg> 3. Rules of Conduct</h2>
                    <p>As a member, you agree not to engage in spamming, make false income claims, misrepresent the compensation plan, or engage in "cross-sponsoring."</p>
                </section>

                <section id="earnings">
                     <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg> 4. Compensation and Earnings Disclaimer</h2>
                    <p>SphareMLM makes no guarantees regarding income. Success depends on individual skill, effort, and business acumen. Any earnings figures presented are for illustrative purposes only and should not be considered a guarantee of income.</p>
                </section>

                <section id="termination">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 5. Termination</h2>
                    <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason, including if you breach these Terms. Upon termination, your right to use the service will immediately cease.</p>
                </section>

                <section id="contact">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> 6. Contact Us</h2>
                    <p>If you have any questions about these Terms, please contact us by email at <a href="mailto:legal@spharemlm.com">legal@spharemlm.com</a> or through our <a href="{{-- route('contact') --}}">Contact Page</a>.</p>
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
                // Initialize sections and set the first one as active
                this.sections = Array.from(document.querySelectorAll('main section[id]'));
                this.activeSection = this.sections[0]?.id || null;
                // Add scroll event listener
                window.addEventListener('scroll', () => this.updateActiveSection());
            },
            updateActiveSection() {
                let current = '';
                this.sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    // Check if the scroll position is past the top of the section, with an offset
                    if (window.scrollY >= sectionTop - 120) {
                        current = section.getAttribute('id');
                    }
                });
                this.activeSection = current || this.sections[0]?.id;
            },
            scrollTo(id) {
                const element = document.querySelector(id);
                if (element) {
                    // Scroll to the element with an offset
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
