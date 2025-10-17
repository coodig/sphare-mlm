@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="bg-white">
    {{-- Page Header --}}
    <section class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Privacy Policy</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Your privacy is important to us. Here’s how we collect, use, and protect your information.</p>
    </section>

    {{-- Main Content with Sticky Sidebar --}}
    <section class="py-20 px-6" x-data="scrollSpy()">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-12">

            {{-- Sticky Sidebar (Table of Contents) --}}
            <aside class="lg:col-span-1">
                <div class="sticky top-24">
                    <h3 class="text-sm font-semibold uppercase text-gray-500 mb-4">On this page</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><a href="#introduction" @click.prevent="scrollTo('#introduction')" :class="{ 'text-blue-600 font-bold': activeSection === 'introduction' }" class="hover:text-blue-600 transition-colors">Introduction</a></li>
                        <li><a href="#information-collection" @click.prevent="scrollTo('#information-collection')" :class="{ 'text-blue-600 font-bold': activeSection === 'information-collection' }" class="hover:text-blue-600 transition-colors">Information We Collect</a></li>
                        <li><a href="#information-use" @click.prevent="scrollTo('#information-use')" :class="{ 'text-blue-600 font-bold': activeSection === 'information-use' }" class="hover:text-blue-600 transition-colors">How We Use Information</a></li>
                        <li><a href="#information-sharing" @click.prevent="scrollTo('#information-sharing')" :class="{ 'text-blue-600 font-bold': activeSection === 'information-sharing' }" class="hover:text-blue-600 transition-colors">Information Sharing</a></li>
                        <li><a href="#security" @click.prevent="scrollTo('#security')" :class="{ 'text-blue-600 font-bold': activeSection === 'security' }" class="hover:text-blue-600 transition-colors">Data Security</a></li>
                        <li><a href="#contact" @click.prevent="scrollTo('#contact')" :class="{ 'text-blue-600 font-bold': activeSection === 'contact' }" class="hover:text-blue-600 transition-colors">Contact Us</a></li>
                    </ul>
                </div>
            </aside>

            {{-- Policy Content --}}
            <main class="lg:col-span-3 prose lg:prose-lg max-w-full">
                <p class="lead"><strong>Last updated:</strong> {{ now()->format('F d, Y') }}</p>

                <section id="introduction">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Introduction</h2>
                    <p>Welcome to SphareMLM. We are committed to protecting your personal information. This policy explains what information we collect, how we use it, and your rights in relation to it.</p>
                </section>

                <section id="information-collection">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg> What Information We Collect</h2>
                    <p>We collect information you provide to us directly when you register, contact us, or use our services. This includes:</p>
                    <ul class="space-y-3 !pl-0 list-none">
                        <li class="flex items-start gap-3"><svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <span><strong>Personal Identification:</strong> Name, username, email, phone number, address.</span></li>
                        <li class="flex items-start gap-3"><svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <span><strong>Financial Data:</strong> Bank account details and Tax ID for commission payouts.</span></li>
                        <li class="flex items-start gap-3"><svg class="w-5 h-5 text-blue-500 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <span><strong>Technical Data:</strong> IP address, browser type, and device information.</span></li>
                    </ul>
                </section>

                <section id="information-use">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> How We Use Your Information</h2>
                    <p>Your information is used to facilitate account creation, manage your network, process commissions, send administrative updates, prevent fraud, and comply with legal requirements.</p>
                </section>

                <section id="information-sharing">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12s-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path></svg> Will Your Information Be Shared?</h2>
                    <p>We only share information with your consent, to comply with laws, or with service providers (like payment processors) who perform services for us.</p>
                </section>

                <section id="security">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 20.417l9 2.021 9-2.021a12.02 12.02 0 00-2.382-11.377z"></path></svg> Data Security</h2>
                    <p>We use technical and organizational measures to protect your data. However, no method of transmission over the internet is 100% secure.</p>
                </section>

                <section id="contact">
                    <h2 class="flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> Contact Us</h2>
                    <p>If you have questions, email us at <a href="mailto:privacy@spharemlm.com">privacy@spharemlm.com</a>.</p>
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
                    if (window.scrollY >= sectionTop - 120) { // 120px offset
                        current = section.getAttribute('id');
                    }
                });
                this.activeSection = current || this.sections[0]?.id;
            },
            scrollTo(id) {
                const element = document.querySelector(id);
                if (element) {
                    window.scrollTo({
                        top: element.offsetTop - 100, // 100px offset for better positioning
                        behavior: 'smooth'
                    });
                }
            }
        };
    }
</script>
@endpush
@endsection
