@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100 p-6 md:p-10">

    {{-- ✅ Stats Overview --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <h2 class="text-gray-500 font-medium mb-5">Total Downline</h2>
            <p class="text-4xl font-bold text-blue-600">42</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-6 text-center ">
            <h2 class="text-gray-500 font-medium mb-5">Earnings</h2>
            <p class="text-4xl font-bold text-green-600">₹12,560</p>
        </div>
        <div class="bg-white rounded-2xl shadow p-6 text-center ">
            <h2 class="text-gray-500 font-medium mb-5">Active Members</h2>
            <p class="text-4xl font-bold text-purple-600">18</p>
        </div>
    </section>

    {{-- ✅ Referral Link --}}
    <section class="mb-10">
        <div class="bg-white rounded-2xl shadow p-6  flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Your Referral Link</h3>
                <p class="text-sm text-gray-500">Share this with your friends to grow your network.</p>
            </div>
            <div class="flex items-center gap-2 w-full md:w-auto">
                <input type="text" readonly value="{{ url('/register?ref=' . $user->username) }}" class="border rounded-lg px-3 py-2 w-full md:w-80 text-gray-600 focus:outline-none">
                <button onclick="copyLink()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.829 12.861c.171-.413.171-.938.171-1.986s0-1.573-.171-1.986a2.25 2.25 0 0 0-1.218-1.218c-.413-.171-.938-.171-1.986-.171H11.1c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C7.5 9.209 7.5 9.839 7.5 11.1v6.525c0 1.048 0 1.573.171 1.986c.229.551.667.99 1.218 1.218c.413.171.938.171 1.986.171s1.573 0 1.986-.171m7.968-7.968a2.25 2.25 0 0 1-1.218 1.218c-.413.171-.938.171-1.986.171s-1.573 0-1.986.171a2.25 2.25 0 0 0-1.218 1.218c-.171.413-.171.938-.171 1.986s0 1.573-.171 1.986a2.25 2.25 0 0 1-1.218 1.218m7.968-7.968a11.68 11.68 0 0 1-7.75 7.9l-.218.068M16.5 7.5v-.9c0-1.26 0-1.89-.245-2.371a2.25 2.25 0 0 0-.983-.984C14.79 3 14.16 3 12.9 3H6.6c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C3 4.709 3 5.339 3 6.6v6.3c0 1.26 0 1.89.245 2.371c.216.424.56.768.984.984c.48.245 1.111.245 2.372.245H7.5"/></svg></button>
            </div>
        </div>
    </section>

    {{-- ✅ Team Overview --}}
    <section>
        <h2 class="text-2xl font-semibold text-gray-800 mb-5">Team Overview</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-2xl">
                <thead class=" text-blue-600 bg-blue-100">
                    <tr>
                        <th class="py-3 px-4 text-left font-bold">Member Name</th>
                        <th class="py-3 px-4 text-left font-bold">Email</th>
                        <th class="py-3 px-4 text-left font-bold">Join Date</th>
                        <th class="py-3 px-4 text-left font-bold">Status</th>
                        <th class="py-3 px-4 text-left font-bold">Earnings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">Rohit Singh</td>
                        <td class="py-3 px-4">rohit9@example.com</td>
                        <td class="py-3 px-4">2025-02-10</td>
                        <td class="py-3 px-4 text-green-600 font-semibold">Active</td>
                        <td class="py-3 px-4 text-gray-700">₹1,200</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">Anjali Verma</td>
                        <td class="py-3 px-4">anjali@example.com</td>
                        <td class="py-3 px-4">2025-03-21</td>
                        <td class="py-3 px-4 text-yellow-600 font-semibold">Inactive</td>
                        <td class="py-3 px-4 text-gray-700">₹0</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">Manish Gupta</td>
                        <td class="py-3 px-4">manish@example.com</td>
                        <td class="py-3 px-4">2025-05-15</td>
                        <td class="py-3 px-4 text-green-600 font-semibold">Active</td>
                        <td class="py-3 px-4 text-gray-700">₹2,450</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

{{-- ✅ Copy Referral Link Script --}}
{{-- <script>
function copyLink() {
    const input = document.querySelector('input[type="text"]');
    navigator.clipboard.writeText(input.value);
    alert("Referral link copied!");
}
</script> --}}
@endsection
