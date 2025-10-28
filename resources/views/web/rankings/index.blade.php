@extends('layouts.app') {{-- (या आपका मुख्य लेआउट) --}}

@section('title', 'My Rank')

@section('content')
<div class="p-6 md:p-10">

    <h1 class="text-3xl font-bold text-gray-800 mb-2">Rank Achievement</h1>
    <p class="text-gray-600 mb-8">
        Track your progress and see the benefits of your current rank.
    </p>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 space-y-8">

            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Your Current Rank</h2>
                <div class="flex items-center space-x-4">
                    <span class="p-3 rounded-full bg-purple-100 text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m17.56 21.03l-3.39-1.94l-3.39 1.94a.5.5 0 0 1-.72-.45l.91-4.08l-3.1-2.69a.5.5 0 0 1 .28-.88l4.17-.36l1.64-3.89a.5.5 0 0 1 .9 0l1.64 3.89l4.17.36a.5.5 0 0 1 .28.88l-3.1 2.69l.91 4.08a.5.5 0 0 1-.72.45M12 2C6.47 2 2 6.5 2 12s4.47 10 10 10s10-4.5 10-10S17.53 2 12 2" />
                        </svg>
                    </span>
                    <div>
                        {{-- डेटाबेस से आएगा --}}
                        <h3 class="text-4xl font-bold text-gray-900">Gold</h3>
                        <p class="text-gray-500">Achieved on: 15 Oct 2025</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Next Rank: <span class="text-blue-600">Platinum</span></h2>
                    <span class="text-gray-500 font-medium">70% Complete</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-6">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
                </div>

                <ul class="space-y-4">
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600">Total Downline</span>
                        {{-- (Current / Required) --}}
                        <span class="font-medium text-green-600">42 / 100 Members</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600">Direct Referrals</span>
                        {{-- (Current / Required) --}}
                        <span class="font-medium text-green-600">18 / 25 Members</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600">Total Team Business</span>
                        {{-- (Current / Required) --}}
                        <span class="font-medium text-red-600">₹80,000 / ₹1,50,000</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 h-fit">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">"Gold" Rank Benefits</h2>
            <ul class="space-y-3">
                <li class="flex items-center space-x-3">
                    <span class="text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8z" />
                        </svg>
                    </span>
                    <span class="text-gray-700">5% Direct Referral Commission</span>
                </li>
                <li class="flex items-center space-x-3">
                    <span class="text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8z" />
                        </svg>
                    </span>
                    <span class="text-gray-700">2% Team Performance Bonus</span>
                </li>
                <li class="flex items-center space-x-3">
                    <span class="text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8z" />
                        </svg>
                    </span>
                    <span class="text-gray-700">Access to "Gold" Webinars</span>
                </li>
            </ul>
        </div>

    </div>

</div>
@endsection
