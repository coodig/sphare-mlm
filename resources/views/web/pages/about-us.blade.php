@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="bg-gray-50">

        {{-- ✅ 1. Page Header Section --}}
        <section class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
                About <span class="text-blue-600">SphareMLM</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Our mission is to empower individuals by providing a transparent, reliable, and powerful platform for
                network marketing success.
            </p>
        </section>

        {{-- ✅ 2. Our Story Section --}}
        <section class="py-20 px-6">
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Story</h2>
                    <p class="text-gray-600 mb-4">
                        Founded in 2025 by a team of experienced networking professionals, SphareMLM was born from a simple
                        idea: to create a fair, transparent, and user-centric platform that puts its members first.
                    </p>
                    <p class="text-gray-600">
                        We were tired of complex compensation plans and unreliable software. We envisioned a system where
                        anyone, regardless of their background, could build a sustainable business and achieve their
                        financial dreams. Today, that vision is a reality.
                    </p>
                </div>
                <div>
                    {{-- You can replace this with a real image of your office or team --}}
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                        alt="Our Team" class="rounded-2xl shadow-lg">
                </div>
            </div>
        </section>

        {{-- ✅ 3. Our Core Values Section --}}
        <section class="py-20 px-6 bg-white">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Core Values</h2>
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Value 1: Integrity --}}
                <div class="text-center">
                    <div
                        class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 20.417l9 2.021 9-2.021a12.02 12.02 0 00-2.382-11.377z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Integrity</h3>
                    <p class="text-gray-600 mt-2">We operate with unwavering honesty and transparency in all our dealings.
                    </p>
                </div>
                {{-- Value 2: Community --}}
                <div class="text-center">
                    <div
                        class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.125-1.274-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.125-1.274.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Community</h3>
                    <p class="text-gray-600 mt-2">We foster a supportive network where members help each other grow and
                        succeed.</p>
                </div>
                {{-- Value 3: Innovation --}}
                <div class="text-center">
                    <div
                        class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Innovation</h3>
                    <p class="text-gray-600 mt-2">We continuously improve our platform with the latest technology to serve
                        you better.</p>
                </div>
                {{-- Value 4: Empowerment --}}
                <div class="text-center">
                    <div
                        class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Empowerment</h3>
                    <p class="text-gray-600 mt-2">We provide the tools, training, and opportunity for you to take control of
                        your future.</p>
                </div>
            </div>
        </section>

        {{-- ✅ 4. Meet the Team Section --}}
        <section class="py-20 px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Meet the Leadership</h2>
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                {{-- Team Member 1 --}}
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/images/default-profile.png') }}"
                        class="w-32 h-32 rounded-full shadow-lg mb-4" alt="CEO">
                    <h3 class="text-xl font-semibold text-gray-900">Arvind Verma</h3>
                    <p class="text-blue-600 font-medium">Founder & CEO</p>
                    <p class="text-sm text-gray-500 mt-2">"Our goal is to build the most trusted network marketing platform
                        in the world."</p>
                </div>
                {{-- Team Member 2 --}}
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/images/default-profile.png') }}"
                        class="w-32 h-32 rounded-full shadow-lg mb-4" alt="CTO">
                    <h3 class="text-xl font-semibold text-gray-900">Shubham Kumar</h3>
                    <p class="text-blue-600 font-medium">Chief Technology Officer</p>
                    <p class="text-sm text-gray-500 mt-2">"We leverage cutting-edge tech to ensure a seamless and secure
                        user experience."</p>
                </div>
                {{-- Team Member 3 --}}
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/images/default-profile.png') }}"
                        class="w-32 h-32 rounded-full shadow-lg mb-4" alt="Head of Network Growth">
                    <h3 class="text-xl font-semibold text-gray-900">Adarsh Vishwakarama</h3>
                    <p class="text-blue-600 font-medium">Head of Network Growth</p>
                    <p class="text-sm text-gray-500 mt-2">"Your success is our success. We're here to support you every step
                        of the way."</p>
                </div>
            </div>
        </section>

        {{-- ✅ 5. Final Call-to-Action Section --}}
        <section class="py-20 px-6 bg-blue-600 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Be Part of Our Story?</h2>
            <p class="text-blue-200 max-w-2xl mx-auto mb-8">Join a community that's dedicated to your growth and success.
                Your journey starts here.</p>
            <a href="https://github.com/coodig/sphare-mlm" target="_blank"
                class="inline-block bg-white text-blue-600 font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition-transform transform hover:scale-105">
                Join Our Community
            </a>
        </section>
    </div>
@endsection
