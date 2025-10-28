@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="min-h-screen bg-gray-100 p-6 md:p-10">

        <section class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center justify-between mb-8">
            <div class="flex items-center gap-5">

                <form action="" method="POST" enctype="multipart/form-data" class="text-center my-8">
                    @csrf

                    <input type="file" name="profile-img" id="profile-img" accept="image/*" class="hidden"
                        onchange="previewImage(event)">

                    <label for="profile-img" class="cursor-pointer inline-block relative">
                        <img id="image-preview" src="{{ asset('assets/images/default-profile.png') }}" alt="Profile Image"
                            class="w-24 h-24 rounded-full object-cover border-4 border-blue-600 shadow-lg hover:shadow-xl transition-shadow ease-in-out duration-300">

                        {{-- <span
                            class="absolute bottom-1 right-1 block bg-blue-600 text-white p-2 rounded-full shadow-md border-2 border-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.536L16.732 3.732z" />
                            </svg>
                        </span> --}}
                    </label>

                    {{-- <div>
                        <button type="submit"
                            class="mt-6 py-2 px-6 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                            Update Profile
                        </button>
                    </div> --}}
                </form>

                {{-- <form action="#" method="">
                    @csrf
                    <img src="{{ asset('assets/images/default-profile.png') }}" alt="Profile"
                        class="w-24 h-24 rounded-full border-4 border-blue-500 shadow cursor-pointer">
                    <input type="file" name="profile-img" id="profile-img" accept="image/*" hidden>
                </form> --}}
                <div class="py-1 gap-y-2">
                    <p class="font-bold text-blue-500 mb-0.5"><span class="bg-blue-100 rounded-full px-2 pb-0.5">
                            {{ $user->username }}</p>
                    </span>
                    <p class="text-gray-500 text-sm font-semibold mb-0.5">{{ $user->email }}</p>
                    <p class="text-green-600 text-sm mt-1 font-medium mb-0.5">{{ $user->created_at->format('d M, Y') }}</p>
                </div>
            </div>

        </section>


        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <h2 class="text-gray-500 font-medium mb-2">Wallet Balance</h2>
                <p class="text-3xl font-bold text-green-600">₹7,850</p>
            </div>
            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <h2 class="text-gray-500 font-medium mb-2">Total Downlines</h2>
                <p class="text-3xl font-bold text-blue-600">62 Members</p>
            </div>
            <div class="bg-white rounded-2xl shadow p-6 text-center">
                <h2 class="text-gray-500 font-medium mb-2">Current Rank</h2>
                <p class="text-3xl font-bold text-purple-600">Gold</p>
            </div>
        </section>


        <section class="bg-white rounded-2xl shadow p-6 mb-10">
            {{-- <h3 class="text-xl font-semibold text-gray-800 mb-4">Plan Information</h3> --}}
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Plan Information</h3>
                {{-- <a href="{{ route('plans.index') }}" --}} <a href="#"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition duration-300">
                    Update Plan
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Package Name</p>
                    <p class="text-gray-900 font-bold">Elite Growth Plan</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Package Price</p>
                    <p class="text-gray-900 font-bold">₹5,000</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Activation Date</p>
                    <p class="text-gray-900 font-bold">15 Jan, 2025</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Expiry Date</p>
                    <p class="text-gray-900 font-bold">15 Jan, 2026</p>
                </div>
            </div>
        </section>


        <section class="bg-white rounded-2xl shadow p-6 mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Referral Information</h3>
            <p class="text-sm text-gray-500 mb-4">Invite your friends to join and earn rewards!</p>

            <div class="flex flex-col md:flex-row gap-3">
                <input type="text" readonly value="{{ url('/register?ref=' . $user->username) }}"
                    class="border rounded-lg px-3 py-2 w-full md:w-2/3 text-gray-600 focus:outline-none ">
                <button onclick="copyLink()"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition flex items-center justify-center gap-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M20.829 12.861c.171-.413.171-.938.171-1.986s0-1.573-.171-1.986a2.25 2.25 0 0 0-1.218-1.218c-.413-.171-.938-.171-1.986-.171H11.1c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C7.5 9.209 7.5 9.839 7.5 11.1v6.525c0 1.048 0 1.573.171 1.986c.229.551.667.99 1.218 1.218c.413.171.938.171 1.986.171s1.573 0 1.986-.171m7.968-7.968a2.25 2.25 0 0 1-1.218 1.218c-.413.171-.938.171-1.986.171s-1.573 0-1.986.171a2.25 2.25 0 0 0-1.218 1.218c-.171.413-.171.938-.171 1.986s0 1.573-.171 1.986a2.25 2.25 0 0 1-1.218 1.218m7.968-7.968a11.68 11.68 0 0 1-7.75 7.9l-.218.068M16.5 7.5v-.9c0-1.26 0-1.89-.245-2.371a2.25 2.25 0 0 0-.983-.984C14.79 3 14.16 3 12.9 3H6.6c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C3 4.709 3 5.339 3 6.6v6.3c0 1.26 0 1.89.245 2.371c.216.424.56.768.984.984c.48.245 1.111.245 2.372.245H7.5" />
                    </svg>
                </button>
            </div>
        </section>
{{--
        <section class="bg-white rounded-2xl shadow p-6 mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-5">Personal Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Username</p>
                    <p class="font-bold text-blue-500"><span class="bg-blue-100 rounded-full px-2 pb-0.5">
                            {{ $user->username }}</p>
                    </span>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Full Name</p>
                    <p class="font-bold text-gray-900">{{ $user->profile->full_name ?? 'Not Available' }}</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Email</p>
                    <p class="font-bold text-gray-900">{{ $user->email }}</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">DOB</p>
                    <p class="font-bold text-gray-900">{{ $user->profile->dob ?? 'Not Available' }}</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Sponsor ID</p>
                    <p class="font-bold text-gray-900">{{ $user->sponsor_id ?? 'Not Available' }}</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Role</p>
                    <p class="font-bold text-gray-900">{{ $user->role_id ?? 'Not Available' }}</p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Status</p>
                    @php

                        $statusClass = '';

                        switch ($user->status->name) {
                            case 'active':
                                $statusClass = 'text-green-600 rounded bg-green-100 px-2 py-1';
                                break;

                            case 'pending':
                                $statusClass = 'text-yellow-600 rounded bg-yellow-100 px-2 py-1';
                                break;

                            case 'suspended':
                                $statusClass = 'text-orange-600 rounded bg-orange-100 px-2 py-1';
                                break;

                            case 'banned':
                            case 'inactive':
                                $statusClass = 'text-red-600 rounded bg-red-100 px-2 py-1' ;
                                break;

                            default:
                                $statusClass = 'text-gray-600 rounded bg-gray-100 px-2 py-1';
                        }
                    @endphp
                    <span class="{{ $statusClass }} font-bold">
                        {{ ucfirst($user->status->label) }}
                    </span>
                </div>
            </div>
        </section> --}}

        <section class="bg-white rounded shadow p-6 mb-10">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-xl font-semibold text-gray-800">Personal Information</h3>
                <button
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition flex items-center gap-1 cursor-pointer text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="m402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6m156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8M460.1 174L402 115.9L216.2 301.8l-7.3 65.3l65.3-7.3zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1l30.9-30.9c4-4.2 4-10.8-.1-14.9" />
                    </svg>
                    Update Profile
                </button>
            </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        {{-- <div>
            <p class="text-gray-600 text-sm font-medium">Username</p>
            <p class="font-bold text-blue-500">{{ $user->username }}</p>
        </div> --}}
        <div>
            <p class="text-gray-600 text-sm font-medium">Full Name</p>
            <p class="font-bold text-gray-900">{{ $user->profile->full_name ?? 'N/A' }}</p>
        </div>
        {{-- <div>
            <p class="text-gray-600 text-sm font-medium">Email</p>
            <p class="font-bold text-gray-900">{{ $user->email }}</p>
        </div> --}}
        <div>
            <p class="text-gray-600 text-sm font-medium">Mobile Number</p> {{-- Added Mobile --}}
            <p class="font-bold text-gray-900">{{ $user->profile->mobile ?? 'N/A' }}</p>
        </div>
        <div>
            <p class="text-gray-600 text-sm font-medium">Date of Birth</p>
            {{-- <p class="font-bold text-gray-900">{{ $user->profile->dob ? \Carbon\Carbon::parse($user->profile->dob)->format('d M, Y') : 'N/A' ?? 'not available' }}</p> --}}
            <p class="font-bold text-gray-900">{{ $user->profile?->dob ? \Carbon\Carbon::parse($user->profile->dob)->format('d M, Y') : 'N/A' }}</p>
        </div>

        <div>
            <p class="text-gray-600 text-sm font-medium">Joining Date</p>
            <p class="font-bold text-gray-900">{{ $user->created_at->format('d M, Y') }}</p>
        </div>
        <div>
            <p class="text-gray-600 text-sm font-medium">Sponsor</p>

            <p class="font-bold text-gray-900">{{ $user->genealogyNode->sponsor->username ?? 'COMPANY' }}</p>
        </div>
        <div>
            <p class="text-gray-600 text-sm font-medium">Referrer</p>
            <p class="font-bold text-gray-900">{{ $user->genealogyNode->referrer->username ?? 'N/A' }}</p>
        </div>
        <div>
            <p class="text-gray-600 text-sm font-medium">Placement</p>
            <p class="font-bold text-gray-900">Left</p>
            {{-- <p class="font-bold text-gray-900">{{ $user->genealogyNode->position == 'L' ? 'Left Leg' : ($user->genealogyNode->position == 'R' ? 'Right Leg' : 'N/A') }}</p> --}}
        </div>
        <div>
            <p class="text-gray-600 text-sm font-medium">Status</p>
            @php
                $statusClass = 'text-gray-600 bg-gray-100';
                $statusLabel = 'Unknown';
                if ($user->status) {
                    $statusLabel = ucfirst($user->status->label ?? $user->status->name);
                    switch ($user->status->name) {
                        case 'active': $statusClass = 'text-green-700 bg-green-100'; break;
                        case 'pending': $statusClass = 'text-yellow-700 bg-yellow-100'; break;
                        case 'suspended': $statusClass = 'text-orange-700 bg-orange-100'; break;
                        case 'banned': case 'inactive': $statusClass = 'text-red-700 bg-red-100'; break;
                    }
                }
            @endphp
            <span class="{{ $statusClass }} font-semibold text-xs px-2 py-1 rounded-full inline-block">
                {{ $statusLabel }}
            </span>
        </div>
        {{-- Address can be added here or in a separate section --}}
        {{-- <div class="md:col-span-2">
             <p class="text-gray-600 text-sm font-medium">Address</p>
             <p class="font-bold text-gray-900">{{ $user->profile->address ?? 'N/A' }}</p>
        </div> --}}

    </div>
</section>

        <section class="bg-white rounded-2xl shadow p-6 mb-10">
            <h3 class="text-xl font-semibold text-gray-800 mb-5">Bank & KYC Details</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Account Holder</p>
                    <p class="font-bold text-gray-900"></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Bank Name</p>
                    <p class="font-bold text-gray-900"></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">Account Number</p>
                    <p class="font-bold text-gray-900"></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">IFSC Code</p>
                    <p class="font-bold text-gray-900"></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">UPI ID</p>
                    <p class="font-bold text-gray-900"></p>
                </div>
                <div>
                    <p class="text-gray-600 mb-1 font-medium">KYC Status</p><span class="font-bold text-green-600"></span>
                </div>
            </div>
        </section>

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
                            <td class="py-3 px-4">2025-10-12</td>
                            <td class="py-3 px-4">Referral Bonus from <b>Rohit</b></td>
                            <td class="py-3 px-4 text-green-600 font-semibold">₹250</td>
                            <td class="py-3 px-4 text-green-600 font-semibold">Completed</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">2025-10-06</td>
                            <td class="py-3 px-4">Binary Pair Income</td>
                            <td class="py-3 px-4 text-green-600 font-semibold">₹1,200</td>
                            <td class="py-3 px-4 text-green-600 font-semibold">Completed</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">2025-09-30</td>
                            <td class="py-3 px-4">New Downline Added (Anjali)</td>
                            <td class="py-3 px-4 text-gray-700">-</td>
                            <td class="py-3 px-4 text-blue-600 font-semibold">Info</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script>
        function copyLink() {
            const input = document.querySelector('input[type="text"]');
            navigator.clipboard.writeText(input.value);
            alert("Referral link copied!");
        }
    </script>
@endsection

<script>
    function previewImage(event) {
        if (event.target.files && event.target.files[0]) {
            var reader = new FileReader();

            reader.onload = function () {
                var output = document.getElementById('image-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
