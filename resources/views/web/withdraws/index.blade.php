@extends('layouts.app') {{-- Apne main layout ko extend karein --}}

@section('title', 'Withdraw Funds')

@section('content')
<div class="container mx-auto max-w-4xl px-4 py-12"> {{-- Max width kam rakha hai form ke liye --}}

    {{-- 1. Page Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Withdraw Funds
        </h1>
        <p class="mt-1 text-sm text-gray-600">Apne wallet balance ko apne bank account mein transfer karein.</p>
    </div>

    {{-- 2. Summary Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

        <div class="bg-blue-600 text-white rounded-xl shadow-lg p-6">
            <p class="text-sm font-medium text-blue-100 uppercase">Available Balance</p>
            <p class="mt-2 text-4xl font-extrabold">
                ₹475.50
            </p>
            <p class="mt-2 text-xs text-blue-200">Yeh amount aap abhi withdraw kar sakte hain.</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <p class="text-sm font-medium text-gray-500 uppercase">Withdrawal Rules</p>
            <div class="mt-4 space-y-2">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Minimum Payout:</span>
                    <span class="font-semibold text-gray-900">₹100.00</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Transaction Fee:</span>
                    <span class="font-semibold text-gray-900">5%</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Payout Time:</span>
                    <span class="font-semibold text-gray-900">24-48 hours</span>
                </div>
            </div>
        </div>
    </div>

    {{-- 3. Withdrawal Form Card --}}
    <div class="bg-white rounded-xl shadow-lg">
        <h2 class="text-xl font-bold text-gray-900 p-6 border-b border-gray-200">
            New Withdrawal Request
        </h2>

        <form method="POST" action="#" class="space-y-6 p-6">
            {{-- @csrf --}}

            {{-- Amount Input --}}
            <div>
                <label for="amount" class="block text-sm font-medium text-gray-700">Amount to Withdraw (INR)</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm">₹</span>
                    </div>
                    <input type="number" id="amount" name="amount"
                           placeholder="0.00"
                           required
                           class="block w-full pl-7 pr-12 py-3 border rounded-md
                                  border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <span class="text-gray-500 sm:text-sm">INR</span>
                    </div>
                </div>
                @error('amount')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Payout Method (Static Display) --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">Payout Method</label>
                <div class="mt-1 flex justify-between items-center p-4 border border-gray-200 rounded-md bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        <div class="ml-3">
                            <p class="text-sm font-semibold text-gray-900">State Bank of India</p>
                            <p class="text-sm text-gray-500">Account ending in **** 1234</p>
                        </div>
                    </div>
                    {{-- TODO: 'Change' button ka link add karein --}}
                    <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Change</a>
                </div>
            </div>

            {{-- Summary Calculation (Static Example) --}}
            <div class="space-y-3 pt-4 border-t border-dashed">
                <div class="flex justify-between text-sm">
                    <p class="text-gray-600">Withdrawal Amount:</p>
                    <p class="font-medium text-gray-900">₹100.00</p>
                </div>
                <div class="flex justify-between text-sm">
                    <p class="text-gray-600">Transaction Fee (5%):</p>
                    <p class="font-medium text-red-600">- ₹5.00</p>
                </div>
                <div class="flex justify-between text-lg font-bold">
                    <p class="text-gray-900">You Will Receive:</p>
                    <p class="text-green-600">₹95.00</p>
                </div>
            </div>

            {{-- Submit Button --}}
            <div>
                <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer">
                    Request Withdrawal
                </button>
            </div>

        </form>
    </div>

    {{-- 4. Recent Withdrawal History (Optional Table) --}}
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">
            Recent Withdrawals
        </h2>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full min-w-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        {{-- Static Row 1 --}}
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 20, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹500.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Paid
                                </span>
                            </td>
                        </tr>
                        {{-- Static Row 2 --}}
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 15, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹274.50</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Paid
                                </span>
                            </td>
                        </tr>
                        {{-- Static Row 3 (Example) --}}
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Oct 25, 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹100.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Processing
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
