@extends('layouts.app')

@section('title', 'My E-Wallet')

@section('content')
{{-- कंटेनर को max-w-5xl कर दिया गया है --}}
<div class="container mx-auto max-w-5xl p-4 md:p-8">

    <h1 class="text-3xl font-bold text-gray-900 mb-6">My E-Wallet 🪙</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="md:col-span-1 space-y-6">

            {{-- bg-blue-600 को ग्रेडिएंट से बदल दिया गया है --}}
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 text-white p-6 rounded-2xl shadow-lg">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-sm font-medium opacity-80">Total Balance</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <div class="text-4xl font-extrabold tracking-tight">
                    $1,234.56
                </div>
                <div class="text-sm font-medium opacity-80 mt-1">
                    Your available funds
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl shadow-md border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
                <div class="space-y-3">
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Add Money
                    </button>
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-400 focus:outline-none transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Withdraw
                    </button>
                    <button class="w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-400 focus:outline-none transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        Send / Transfer
                    </button>
                </div>
            </div>

        </div>

        <div class="md:col-span-2">
            <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 h-full">
                <h3 class="text-xl font-semibold text-gray-800 mb-5">Recent Transactions</h3>

                {{-- -mb-4 को हटा दिया गया है और space-y-4 जोड़ा गया है --}}
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 space-y-4">

                        <li class="pt-4 first:pt-0"> {{-- पहले आइटम से फालतू पैडिंग हटी --}}
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-100">
                                        <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">Deposit from Bank</p>
                                    <p class="text-sm text-gray-500 truncate">Oct 21, 2025</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-semibold text-green-600">+ $500.00</p>
                                    <p class="text-xs text-gray-500">Completed</p>
                                </div>
                            </div>
                        </li>

                        <li class="pt-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="flex items-center justify-center h-10 w-10 rounded-full bg-red-100">
                                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">Sent to @johndoe</p>
                                    <p class="text-sm text-gray-500 truncate">Oct 20, 2025</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-semibold text-red-600">- $50.00</p>
                                    <p class="text-xs text-gray-500">Completed</p>
                                </div>
                            </div>
                        </li>

                        <li class="pt-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="flex items-center justify-center h-10 w-10 rounded-full bg-blue-100">
                                        <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">Referral Bonus</p>
                                    <p class="text-sm text-gray-500 truncate">Oct 19, 2025</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-semibold text-green-600">+ $5.00</p>
                                    <p class="text-xs text-gray-500">Completed</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="text-center mt-6 pt-4 border-t border-gray-100">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                        View all transactions &rarr;
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
