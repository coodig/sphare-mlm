{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME | SphareMLM</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-4xl p-6 bg-black rounded-2xl shadow-xl">
        <h1 class="text-4xl text-white font-semibold leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda tempore distinctio, eius blanditiis magnam illo quo excepturi.
            Ducimus rerum sapiente iusto eos expedita porro corporis quibusdam nemo.
            Alias, quos nesciunt?
        </h1>
    </div>
</body>

</html> --}}


<!-- ✅ Tailwind CDN link -->
{{--
<script src="https://cdn.tailwindcss.com"></script> --}}

<!-- Optional: custom theme (agar chahe to color customize kar sakte ho) -->
{{--
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#2563eb', // blue-600
                },
            },
        },
    };
</script> --}}

{{--
@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
  <div class="p-8 text-center">
    <h2 class="text-4xl font-bold mb-4 text-gray-800">Welcome to <span class="text-blue-600">SphareMLM</span></h2>
    <p class="text-gray-600 text-lg mb-6">
      Your trusted platform for smart networking and business growth.
    </p>
    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
      Get Started
    </button>
  </div>
@endsection --}}

{{--

@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="bg-gray-50">

    <div class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h2 class="text-5xl font-extrabold text-gray-800 mb-4">
            Welcome to <span class="text-blue-600">SphareMLM</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
            Your trusted platform for smart networking and business growth. Unlock your potential with our powerful tools.
        </p>
        <a href="#" class="inline-flex items-center bg-blue-600 text-white font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition-transform transform hover:scale-105">
            Get Started
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>

    <div class="py-16 px-6">
        <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Choose Us?</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 mb-2">Intuitive Dashboard</h4>
                <p class="text-gray-600">Manage your network, track earnings, and view reports from one single, easy-to-use interface.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.125-1.274-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.125-1.274.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 mb-2">Member Management</h4>
                <p class="text-gray-600">Easily add, view, and manage your downline. Keep track of everyone in your network effortlessly.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V7a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 mb-2">Detailed Reports</h4>
                <p class="text-gray-600">Get insightful reports on your performance, team growth, and commissions to make data-driven decisions.</p>
            </div>

        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('title', 'Welcome to SphareMLM')

@section('content')
<div class="bg-gray-50">

    {{-- ✅ 1. Hero Section --}}
    <section class="text-center py-24 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-800 mb-4 tracking-tight">
            Build Your Network, Achieve Your Dreams
        </h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
            Welcome to SphareMLM, the ultimate platform designed to empower your networking journey. Join thousands of successful entrepreneurs and start earning today.
        </p>
        <a href="#" class="inline-flex items-center bg-blue-600 text-white font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition-transform transform hover:scale-105">
            Join Now
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
        </a>
    </section>

    {{-- ✅ 2. How It Works Section --}}
    <section class="py-20 px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Start Earning in 3 Simple Steps</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            {{-- Step 1 --}}
            <div class="flex flex-col items-center">
                <div class="bg-blue-100 text-blue-600 rounded-full h-20 w-20 flex items-center justify-center font-bold text-2xl border-4 border-white shadow-md">1</div>
                <h3 class="text-xl font-semibold text-gray-900 mt-4 mb-2">Create Account</h3>
                <p class="text-gray-600">Quickly register and create your personalized account to get started.</p>
            </div>
            {{-- Step 2 --}}
            <div class="flex flex-col items-center">
                <div class="bg-blue-100 text-blue-600 rounded-full h-20 w-20 flex items-center justify-center font-bold text-2xl border-4 border-white shadow-md">2</div>
                <h3 class="text-xl font-semibold text-gray-900 mt-4 mb-2">Choose Your Plan</h3>
                <p class="text-gray-600">Select a membership plan that fits your goals and unlocks powerful tools.</p>
            </div>
            {{-- Step 3 --}}
            <div class="flex flex-col items-center">
                <div class="bg-blue-100 text-blue-600 rounded-full h-20 w-20 flex items-center justify-center font-bold text-2xl border-4 border-white shadow-md">3</div>
                <h3 class="text-xl font-semibold text-gray-900 mt-4 mb-2">Build & Earn</h3>
                <p class="text-gray-600">Share your referral link, build your downline, and watch your commissions grow.</p>
            </div>
        </div>
    </section>

    {{-- ✅ 3. Pricing Plans Section --}}
    <section class="py-20 px-6 bg-white">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Membership Plans</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- Plan 1: Starter --}}
            <div class="border rounded-xl p-8 flex flex-col">
                <h3 class="text-2xl font-semibold text-gray-900">Starter</h3>
                <p class="text-gray-500 mt-2">Perfect for beginners.</p>
                <p class="text-4xl font-bold text-gray-800 mt-6">₹1,000</p>
                <ul class="space-y-3 mt-8 text-gray-600 flex-1">
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Direct Referral Bonus: 10%</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Binary Matching Bonus: 8%</li>
                    <li class="flex items-center gap-2 text-gray-400"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>Level Income (Up to 3 Levels)</li>
                </ul>
                <a href="#" class="mt-8 block text-center bg-gray-200 text-gray-800 font-bold py-3 rounded-lg hover:bg-gray-300 transition">Choose Plan</a>
            </div>
            {{-- Plan 2: Pro (Most Popular) --}}
            <div class="border-2 border-blue-600 rounded-xl p-8 flex flex-col relative">
                <span class="absolute top-0 -translate-y-1/2 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">MOST POPULAR</span>
                <h3 class="text-2xl font-semibold text-gray-900">Pro</h3>
                <p class="text-gray-500 mt-2">For serious networkers.</p>
                <p class="text-4xl font-bold text-gray-800 mt-6">₹5,000</p>
                <ul class="space-y-3 mt-8 text-gray-600 flex-1">
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Direct Referral Bonus: 15%</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Binary Matching Bonus: 10%</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Level Income (Up to 7 Levels)</li>
                </ul>
                <a href="#" class="mt-8 block text-center bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">Choose Plan</a>
            </div>
             {{-- Plan 3: Elite --}}
            <div class="border rounded-xl p-8 flex flex-col">
                <h3 class="text-2xl font-semibold text-gray-900">Elite</h3>
                <p class="text-gray-500 mt-2">For top leaders.</p>
                <p class="text-4xl font-bold text-gray-800 mt-6">₹10,000</p>
                <ul class="space-y-3 mt-8 text-gray-600 flex-1">
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Direct Referral Bonus: 20%</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Binary Matching Bonus: 12%</li>
                    <li class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Level Income (Up to 15 Levels)</li>
                </ul>
                <a href="#" class="mt-8 block text-center bg-gray-200 text-gray-800 font-bold py-3 rounded-lg hover:bg-gray-300 transition">Choose Plan</a>
            </div>
        </div>
    </section>

    {{-- ✅ 4. Testimonials Section --}}
    <section class="py-20 px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Success Stories from Our Members</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md">
                <p class="text-gray-600 mb-4">"Joining SphareMLM was the best decision of my career. The platform is incredibly user-friendly, and the support team is always there to help. I achieved my financial goals in just six months!"</p>
                <div class="flex items-center">
                    <img src="https://placehold.co/48x48/E2E8F0/4A5568?text=RS" class="w-12 h-12 rounded-full" alt="Rohit S.">
                    <div class="ml-4">
                        <p class="font-semibold text-gray-900">Rohit S.</p>
                        <p class="text-sm text-gray-500">Diamond Member</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md">
                <p class="text-gray-600 mb-4">"The transparency in commission calculation is amazing. I can track every single earning in real-time. This platform truly delivers what it promises. Highly recommended for everyone."</p>
                <div class="flex items-center">
                    <img src="https://placehold.co/48x48/E2E8F0/4A5568?text=AV" class="w-12 h-12 rounded-full" alt="Anjali V.">
                    <div class="ml-4">
                        <p class="font-semibold text-gray-900">Anjali V.</p>
                        <p class="text-sm text-gray-500">Gold Member</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ✅ 5. FAQ Section --}}
    <section class="py-20 px-6 bg-white" x-data="{ open: null }">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Frequently Asked Questions</h2>
        <div class="max-w-3xl mx-auto space-y-4">
            {{-- Question 1 --}}
            <div class="border rounded-lg">
                <button @click="open = open === 1 ? null : 1" class="w-full text-left p-4 font-semibold flex justify-between items-center">
                    What is Multi-Level Marketing (MLM)?
                    <span x-show="open !== 1">&plus;</span>
                    <span x-show="open === 1">&minus;</span>
                </button>
                <div x-show="open === 1" x-cloak class="p-4 pt-0 text-gray-600">
                    MLM is a business model that involves a pyramid-structured network of people who sell a company's products. Participants earn money from their own sales and from the sales made by the people they recruit.
                </div>
            </div>
            {{-- Question 2 --}}
            <div class="border rounded-lg">
                <button @click="open = open === 2 ? null : 2" class="w-full text-left p-4 font-semibold flex justify-between items-center">
                    How do I earn commissions?
                    <span x-show="open !== 2">&plus;</span>
                    <span x-show="open === 2">&minus;</span>
                </button>
                <div x-show="open === 2" x-cloak class="p-4 pt-0 text-gray-600">
                    You can earn commissions through various methods, including direct sales, bonuses from recruiting new members (direct referrals), and a percentage of the sales made by your downline team (binary and level income).
                </div>
            </div>
            {{-- Question 3 --}}
            <div class="border rounded-lg">
                <button @click="open = open === 3 ? null : 3" class="w-full text-left p-4 font-semibold flex justify-between items-center">
                    Is my data secure?
                    <span x-show="open !== 3">&plus;</span>
                    <span x-show="open === 3">&minus;</span>
                </button>
                <div x-show="open === 3" x-cloak class="p-4 pt-0 text-gray-600">
                    Absolutely. We use industry-standard encryption and security protocols to protect all your personal and financial data. Your privacy and security are our top priorities.
                </div>
            </div>
        </div>
    </section>

     {{-- ✅ 6. Final Call-to-Action Section --}}
    <section class="py-20 px-6 bg-blue-600 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to Start Your Journey?</h2>
        <p class="text-blue-200 max-w-2xl mx-auto mb-8">Join our fast-growing community today and take the first step towards financial freedom.</p>
        <a href="#" class="inline-block bg-white text-blue-600 font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition-transform transform hover:scale-105">
            Register Now
        </a>
    </section>
</div>
@endsection
