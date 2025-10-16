@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="min-h-screen bg-gray-100 p-6 md:p-10">

    {{-- ✅ Profile Header --}}
    <section class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center justify-between mb-8">
        <div class="flex items-center gap-5">
            <img src="{{ asset('images/user.png') }}" alt="Profile" class="w-20 h-20 rounded-full border-4 border-blue-500 shadow cursor-pointer">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">{{ ucfirst( $user->username )}}</h1>
                <p class="text-gray-500 text-sm">{{ $user->email }}</p>
                <p class="text-green-600 text-sm mt-1 font-medium">Joined on {{ $user->created_at->format('d M, Y') }}</p>
            </div>
        </div>
        <div>
            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition cursor-pointer">Edit Profile</button>
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
            <button onclick="copyLink()" class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.829 12.861c.171-.413.171-.938.171-1.986s0-1.573-.171-1.986a2.25 2.25 0 0 0-1.218-1.218c-.413-.171-.938-.171-1.986-.171H11.1c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C7.5 9.209 7.5 9.839 7.5 11.1v6.525c0 1.048 0 1.573.171 1.986c.229.551.667.99 1.218 1.218c.413.171.938.171 1.986.171s1.573 0 1.986-.171m7.968-7.968a2.25 2.25 0 0 1-1.218 1.218c-.413.171-.938.171-1.986.171s-1.573 0-1.986.171a2.25 2.25 0 0 0-1.218 1.218c-.171.413-.171.938-.171 1.986s0 1.573-.171 1.986a2.25 2.25 0 0 1-1.218 1.218m7.968-7.968a11.68 11.68 0 0 1-7.75 7.9l-.218.068M16.5 7.5v-.9c0-1.26 0-1.89-.245-2.371a2.25 2.25 0 0 0-.983-.984C14.79 3 14.16 3 12.9 3H6.6c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C3 4.709 3 5.339 3 6.6v6.3c0 1.26 0 1.89.245 2.371c.216.424.56.768.984.984c.48.245 1.111.245 2.372.245H7.5"/></svg></button>
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
