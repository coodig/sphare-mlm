@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="p-6 md:p-8">

    {{-- ✅ Page Header --}}
    <section class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Settings</h1>
        <p class="text-gray-500 mt-1">Manage your profile, security, and notification preferences.</p>
    </section>

    {{-- ✅ Tabbed Interface using Alpine.js --}}
    <div x-data="{ tab: 'profile' }" class="bg-white rounded-2xl shadow-lg p-4 md:p-6">

        {{-- Tab Navigation --}}
        <div class="border-b border-gray-200 mb-6">
            <nav class="flex space-x-2" aria-label="Tabs">
                <button @click="tab = 'profile'"
                        :class="{'border-blue-600 text-blue-600': tab === 'profile', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== 'profile'}"
                        class="whitespace-nowrap py-3 px-4 border-b-2 font-medium text-sm transition-colors cursor-pointer">
                    Profile
                </button>
                <button @click="tab = 'security'"
                        :class="{'border-blue-600 text-blue-600': tab === 'security', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== 'security'}"
                        class="whitespace-nowrap py-3 px-4 border-b-2 font-medium text-sm transition-colors cursor-pointer">
                    Security
                </button>
                <button @click="tab = 'payouts'"
                        :class="{'border-blue-600 text-blue-600': tab === 'payouts', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== 'payouts'}"
                        class="whitespace-nowrap py-3 px-4 border-b-2 font-medium text-sm transition-colors cursor-pointer">
                    Payouts
                </button>
                <button @click="tab = 'notifications'"
                        :class="{'border-blue-600 text-blue-600': tab === 'notifications', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab !== 'notifications'}"
                        class="whitespace-nowrap py-3 px-4 border-b-2 font-medium text-sm transition-colors cursor-pointer">
                    Notifications
                </button>
            </nav>
        </div>

        {{-- Tab Content --}}
        <div>
            {{-- 1. Profile Settings --}}
            <div x-show="tab === 'profile'" x-cloak>
                <form class="space-y-6">
                    <div class="flex items-center gap-5">
                        <img src="https://placehold.co/80x80/E2E8F0/4A5568?text=A" alt="Profile Picture" class="w-20 h-20 rounded-full">
                        <div>
                            <button type="button" class="bg-blue-600 text-white px-4 py-2 text-sm rounded-lg hover:bg-blue-700 transition cursor-pointer">Upload New Photo</button>
                            <p class="text-xs text-gray-500 mt-2">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="full_name" value="Amrita Singh" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="text" id="phone_number" value="+91 98765 43210" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea id="address" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">123, ABC Colony, Lucknow, Uttar Pradesh</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition font-semibold cursor-pointer">Save Changes</button>
                    </div>
                </form>
            </div>

            {{-- 2. Security Settings --}}
            <div x-show="tab === 'security'" x-cloak>
                <form class="space-y-6">
                     <div>
                        <h3 class="text-lg font-semibold text-gray-800">Change Password</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                <input type="password" id="current_password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                             <div>
                                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                                <input type="password" id="new_password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Two-Factor Authentication (2FA)</h3>
                        <div class="flex items-center justify-between mt-4 p-4 bg-gray-50 rounded-lg">
                           <p class="text-sm text-gray-600">Secure your account with an extra layer of protection.</p>
                           <button class="bg-green-600 text-white px-4 py-2 text-sm rounded-lg hover:bg-green-700 transition font-semibold cursor-pointer">Enable 2FA</button>
                        </div>
                    </div>
                     <hr>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition font-semibold cursor-pointer">Update Security</button>
                    </div>
                </form>
            </div>

            {{-- 3. Payout Settings --}}
            <div x-show="tab === 'payouts'" x-cloak>
                 <form class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Bank Account Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                            <div>
                                <label for="acc_holder" class="block text-sm font-medium text-gray-700">Account Holder Name</label>
                                <input type="text" id="acc_holder" value="Amrita Singh" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="bank_name" class="block text-sm font-medium text-gray-700">Bank Name</label>
                                <input type="text" id="bank_name" value="State Bank of India" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                             <div>
                                <label for="acc_number" class="block text-sm font-medium text-gray-700">Account Number</label>
                                <input type="text" id="acc_number" value="**** **** **** 1234" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                             <div>
                                <label for="ifsc_code" class="block text-sm font-medium text-gray-700">IFSC Code</label>
                                <input type="text" id="ifsc_code" value="SBIN0001234" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                     <hr>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">KYC Verification</h3>
                         <div class="mt-4 p-4 bg-gray-50 rounded-lg flex items-center justify-between">
                            <p class="text-sm flex items-center gap-2">
                                <span class="bg-green-100 text-green-700 font-semibold px-2 py-1 rounded-full text-xs">Verified</span>
                                <span class="text-gray-600">Your KYC documents have been successfully verified.</span>
                            </p>
                            <button type="button" class="text-blue-600 hover:underline text-sm font-semibold cursor-pointer">View Documents</button>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition font-semibold cursor-pointer">Save Payout Info</button>
                    </div>
                </form>
            </div>

            {{-- 4. Notification Settings --}}
            <div x-show="tab === 'notifications'" x-cloak>
                <div class="space-y-5">
                    <h3 class="text-lg font-semibold text-gray-800">Email Notifications</h3>
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div>
                            <p class="font-medium text-gray-800">New Downline Member</p>
                            <p class="text-sm text-gray-500">Notify me when someone joins my network.</p>
                        </div>
                        <button type="button" class="w-12 h-6 rounded-full bg-green-500 relative transition-colors focus:outline-none cursor-pointer">
                           <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform transform translate-x-6"></span>
                        </button>
                    </div>
                     <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div>
                            <p class="font-medium text-gray-800">Commission Earned</p>
                            <p class="text-sm text-gray-500">Notify me when I receive a new commission.</p>
                        </div>
                         <button type="button" class="w-12 h-6 rounded-full bg-green-500 relative transition-colors focus:outline-none cursor-pointer">
                           <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform transform translate-x-6"></span>
                        </button>
                    </div>
                     <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div>
                            <p class="font-medium text-gray-800">Withdrawal Updates</p>
                            <p class="text-sm text-gray-500">Notify me about the status of my fund withdrawals.</p>
                        </div>
                         <button type="button" class="w-12 h-6 rounded-full bg-gray-300 relative transition-colors focus:outline-none cursor-pointer">
                           <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-transform"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
