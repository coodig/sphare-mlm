@extends('layouts.app')

@section('title', 'Frequently Asked Questions')

@section('content')
{{-- We use a single Alpine.js component to manage the state of tabs and open questions --}}
<div x-data="{ tab: 'general', openQuestion: null }" class="bg-gray-50">

    {{-- ✅ 1. Page Header Section --}}
    <section class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
            Frequently Asked Questions
        </h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            Have questions? We've got answers. Find the information you're looking for below.
        </p>
    </section>

    {{-- ✅ 2. Tabs and Accordion Section --}}
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto">

            {{-- Tab Navigation --}}
            <div class="border-b border-gray-200 mb-8">
                <nav class="-mb-px flex space-x-6" aria-label="Tabs">
                    <button @click="tab = 'general'"
                            :class="{'border-blue-600 text-blue-600': tab === 'general', 'border-transparent text-gray-500 hover:text-gray-700': tab !== 'general'}"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-lg transition-colors">
                        General
                    </button>
                    <button @click="tab = 'account'"
                            :class="{'border-blue-600 text-blue-600': tab === 'account', 'border-transparent text-gray-500 hover:text-gray-700': tab !== 'account'}"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-lg transition-colors">
                        Account
                    </button>
                    <button @click="tab = 'financial'"
                            :class="{'border-blue-600 text-blue-600': tab === 'financial', 'border-transparent text-gray-500 hover:text-gray-700': tab !== 'financial'}"
                            class="whitespace-nowrap py-3 px-1 border-b-2 font-medium text-lg transition-colors">
                        Financial
                    </button>
                </nav>
            </div>

            {{-- Accordion Content --}}
            <div class="space-y-4">
                {{-- General Questions --}}
                <div x-show="tab === 'general'" x-cloak class="space-y-4">
                    <div class="bg-white rounded-lg shadow-sm">
                        <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full text-left p-5 font-semibold flex justify-between items-center">
                            What is Multi-Level Marketing (MLM)?
                            <span x-show="openQuestion !== 1" class="text-gray-400">&plus;</span>
                            <span x-show="openQuestion === 1" class="text-blue-600">&minus;</span>
                        </button>
                        <div x-show="openQuestion === 1" x-cloak x-transition class="px-5 pb-5 text-gray-600">
                            MLM is a business model that involves a pyramid-structured network of people who sell a company's products. Participants earn money from their own sales and from the sales made by the people they recruit.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm">
                        <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full text-left p-5 font-semibold flex justify-between items-center">
                            Is SphareMLM a legal business?
                            <span x-show="openQuestion !== 2" class="text-gray-400">&plus;</span>
                            <span x-show="openQuestion === 2" class="text-blue-600">&minus;</span>
                        </button>
                        <div x-show="openQuestion === 2" x-cloak x-transition class="px-5 pb-5 text-gray-600">
                            Yes, absolutely. SphareMLM operates in full compliance with all local and national regulations governing network marketing. Our business plan is designed to be fair, transparent, and sustainable.
                        </div>
                    </div>
                </div>

                {{-- Account Questions --}}
                <div x-show="tab === 'account'" x-cloak class="space-y-4">
                    <div class="bg-white rounded-lg shadow-sm">
                        <button @click="openQuestion = openQuestion === 3 ? null : 3" class="w-full text-left p-5 font-semibold flex justify-between items-center">
                            How do I create an account?
                            <span x-show="openQuestion !== 3" class="text-gray-400">&plus;</span>
                            <span x-show="openQuestion === 3" class="text-blue-600">&minus;</span>
                        </button>
                        <div x-show="openQuestion === 3" x-cloak x-transition class="px-5 pb-5 text-gray-600">
                            You can create an account by clicking the "Register Now" button on our website. If you were invited by an existing member, be sure to use their referral link to join their network.
                        </div>
                    </div>
                     <div class="bg-white rounded-lg shadow-sm">
                        <button @click="openQuestion = openQuestion === 4 ? null : 4" class="w-full text-left p-5 font-semibold flex justify-between items-center">
                            How do I update my profile or bank details?
                            <span x-show="openQuestion !== 4" class="text-gray-400">&plus;</span>
                            <span x-show="openQuestion === 4" class="text-blue-600">&minus;</span>
                        </button>
                        <div x-show="openQuestion === 4" x-cloak x-transition class="px-5 pb-5 text-gray-600">
                            Once you are logged in, navigate to the "Settings" page from your dashboard. There you will find separate tabs to update your personal profile, security settings, and payout information.
                        </div>
                    </div>
                </div>

                {{-- Financial Questions --}}
                <div x-show="tab === 'financial'" x-cloak class="space-y-4">
                     <div class="bg-white rounded-lg shadow-sm">
                        <button @click="openQuestion = openQuestion === 5 ? null : 5" class="w-full text-left p-5 font-semibold flex justify-between items-center">
                            How do I earn commissions?
                            <span x-show="openQuestion !== 5" class="text-gray-400">&plus;</span>
                            <span x-show="openQuestion === 5" class="text-blue-600">&minus;</span>
                        </button>
                        <div x-show="openQuestion === 5" x-cloak x-transition class="px-5 pb-5 text-gray-600">
                            You can earn commissions through various methods, including direct sales bonuses, bonuses from recruiting new members (direct referrals), and a percentage of the sales made by your downline team (binary and level income). For more details, please see our Business Plan.
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm">
                        <button @click="openQuestion = openQuestion === 6 ? null : 6" class="w-full text-left p-5 font-semibold flex justify-between items-center">
                            How can I withdraw my earnings?
                            <span x-show="openQuestion !== 6" class="text-gray-400">&plus;</span>
                            <span x-show="openQuestion === 6" class="text-blue-600">&minus;</span>
                        </button>
                        <div x-show="openQuestion === 6" x-cloak x-transition class="px-5 pb-5 text-gray-600">
                            You can request a withdrawal from the "E-Wallet" section of your dashboard. Simply enter the amount you wish to withdraw, and the funds will be transferred to your registered bank account after a short processing period.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ✅ 3. Final Call-to-Action Section --}}
    <section class="py-20 px-6 bg-white text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Still Have Questions?</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-8">If you can't find the answer you're looking for, please don't hesitate to reach out to our support team.</p>
        <a href="{{-- route('contact') --}}" class="inline-block bg-blue-600 text-white font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition-transform transform hover:scale-105">
            Contact Support
        </a>
    </section>
</div>
@endsection
