@extends('layouts.app') {{-- Apne main layout ko extend karein --}}

@section('title', 'Commission Details')

@section('content')
<div class="container mx-auto max-w-7xl px-4 py-12">

    {{-- 1. Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Commission Details
        </h1>
        <p class="mt-1 text-sm text-gray-600">Apni earnings, wallet balance, aur commission history yahan track karein.</p>
    </div>

    {{-- 2. Summary Cards Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start">
                    <p class="text-sm font-medium text-gray-500 uppercase">Total Earnings</p>
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01M12 14v.01M12 14v.01M12 14v.01M12 14a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                </div>
                <p class="mt-2 text-3xl font-extrabold text-gray-900">
                    ₹1,250.00
                </p>
            </div>
            <p class="mt-4 text-xs text-gray-500">Aapki ab tak ki kul kamai.</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start">
                    <p class="text-sm font-medium text-gray-500 uppercase">Wallet Balance</p>
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                </div>
                <p class="mt-2 text-3xl font-extrabold text-blue-600">
                    ₹475.50
                </p>
            </div>
            <button class="mt-4 w-full bg-blue-600 text-white text-sm font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Withdraw Funds
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start">
                    <p class="text-sm font-medium text-gray-500 uppercase">Total Withdrawn</p>
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9H4V4m.002 0l1.06 1.06M3 7l1.06-1.06M20 20v-5h-.581m-15.357-2A8.001 8.001 0 0019.418 15H20v5m.001 0l-1.06-1.06M21 17l-1.06 1.06"></path></svg>
                </div>
                <p class="mt-2 text-3xl font-extrabold text-gray-900">
                    ₹774.50
                </p>
            </div>
            <p class="mt-4 text-xs text-gray-500">Aapke bank mein bheja gaya kul paisa.</p>
        </div>

    </div>

    {{-- 3. Commission History Table --}}
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <h2 class="text-xl font-bold text-gray-900 p-6 border-b border-gray-200">
            Commission History
        </h2>

        <div class="overflow-x-auto">
            <table class="w-full min-w-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            From User
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Amount
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    {{-- Static Row 1 --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 24, 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Direct Referral</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">@rahul82</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Cleared
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-green-600">+ ₹100.00</td>
                    </tr>

                    {{-- Static Row 2 --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 23, 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Binary Match</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">--</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Cleared
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-green-600">+ ₹150.00</td>
                    </tr>

                    {{-- Static Row 3 --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 22, 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Level Bonus (L3)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">@priya_s</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Cleared
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-green-600">+ ₹25.50</td>
                    </tr>

                    {{-- Static Row 4 --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 21, 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Direct Referral</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">@amit_k</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-gray-500">+ ₹100.00</td>
                    </tr>

                    {{-- Static Row 5 (Withdrawal) --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 20, 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Withdrawal</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">To Bank</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Paid
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-red-600">- ₹500.00</td>
                    </tr>

                </tbody>
            </table>
        </div>

        {{-- Static Pagination --}}
        <div class="p-6 bg-white border-t border-gray-200">
            <nav class="flex items-center justify-between">
                <span class="text-sm text-gray-600">
                    Showing 1 to 5 of 20 results
                </span>
                <div class="flex space-x-1">
                    <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-sm font-medium text-gray-500 bg-gray-100 cursor-not-allowed">Previous</a>
                    <a href="#" class="px-3 py-1 rounded-md border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Next</a>
                </div>
            </nav>
        </div>

    </div>

</div>
@endsection
