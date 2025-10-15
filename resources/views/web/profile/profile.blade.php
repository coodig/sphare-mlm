@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="min-h-screen bg-gray-100 p-6 md:p-10">

    {{-- ✅ Profile Header --}}
    <section class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center justify-between mb-8">
        <div class="flex items-center gap-5">
            <img src="{{ asset('images/user.png') }}" alt="Profile" class="w-20 h-20 rounded-full border-4 border-blue-500 shadow">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">{{ $user->username }}</h1>
                <p class="text-gray-500 text-sm">{{ $user->email }}</p>
                <p class="text-green-600 text-sm mt-1 font-medium">Joined on {{ $user->created_at->format('d M, Y') }}</p>
            </div>
        </div>
        <div>
            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">Edit Profile</button>
        </div>
    </section>

    {{-- ✅ Wallet & Stats --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <h2 class="text-gray-500 font-medium mb-3">Wallet Balance</h2>
            <p class="text-3xl font-bold text-green-600">₹5,200</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <h2 class="text-gray-500 font-medium mb-3">Total Downline</h2>
            <p class="text-3xl font-bold text-blue-600">48 Members</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <h2 class="text-gray-500 font-medium mb-3">Rank</h2>
            <p class="text-3xl font-bold text-purple-600">Silver</p>
        </div>
    </section>

    {{-- ✅ Referral Section --}}
    <section class="bg-white rounded-2xl shadow p-6 mb-10">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">Referral Information</h3>
        <p class="text-sm text-gray-500 mb-4">Invite your friends to join and earn rewards!</p>

        <div class="flex flex-col md:flex-row gap-3">
            <input type="text" readonly value="{{ url('/register?ref=' . $user->username) }}" class="border rounded-lg px-3 py-2 w-full md:w-2/3 text-gray-600 focus:outline-none">
            <button onclick="copyLink()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Copy Link</button>
        </div>
    </section>

    {{-- ✅ Personal Info --}}
    <section class="bg-white rounded-2xl shadow p-6 mb-10">
        <h3 class="text-xl font-semibold text-gray-800 mb-5">Personal Information</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-gray-600 mb-1 font-medium">Full Name</p>
                <p class="text-gray-900">{{ $user->name ?? 'Not Provided' }}</p>
            </div>
            <div>
                <p class="text-gray-600 mb-1 font-medium">Email</p>
                <p class="text-gray-900">{{ $user->email }}</p>
            </div>
            <div>
                <p class="text-gray-600 mb-1 font-medium">Sponsor ID</p>
                <p class="text-gray-900">{{ $user->sponsor_id ?? 'N/A' }}</p>
            </div>
            <div>
                <p class="text-gray-600 mb-1 font-medium">Status</p>
                <span class="text-green-600 font-semibold">Active</span>
            </div>
        </div>
    </section>

    {{-- ✅ Recent Activities --}}
    <section>
        <h3 class="text-xl font-semibold text-gray-800 mb-5">Recent Activities</h3>

        <div class="bg-white rounded-2xl shadow overflow-x-auto">
            <table class="min-w-full text-left text-gray-700">
                <thead class="bg-blue-100 text-blue-600">
                    <tr>
                        <th class="py-3 px-4 font-bold">Date</th>
                        <th class="py-3 px-4 font-bold">Activity</th>
                        <th class="py-3 px-4 font-bold">Amount</th>
                        <th class="py-3 px-4 font-bold">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">2025-10-10</td>
                        <td class="py-3 px-4">Referral Bonus from <b>Rohit</b></td>
                        <td class="py-3 px-4 text-green-600 font-semibold">₹150</td>
                        <td class="py-3 px-4 text-green-600 font-semibold">Completed</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">2025-10-05</td>
                        <td class="py-3 px-4">Level 2 Bonus</td>
                        <td class="py-3 px-4 text-green-600 font-semibold">₹350</td>
                        <td class="py-3 px-4 text-green-600 font-semibold">Completed</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">2025-09-29</td>
                        <td class="py-3 px-4">New Member Joined (Anjali)</td>
                        <td class="py-3 px-4 text-gray-700">-</td>
                        <td class="py-3 px-4 text-blue-600 font-semibold">Info</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

{{-- ✅ Copy Referral Link Script --}}
<script>
function copyLink() {
    const input = document.querySelector('input[type="text"]');
    navigator.clipboard.writeText(input.value);
    alert("Referral link copied!");
}
</script>
@endsection
