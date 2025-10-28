@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-6 md:p-8">

        @if (session('success'))
            {{-- Display the message in a styled alert box --}}
            <div  id="success-alert" class="mb-4 rounded-lg bg-green-100 p-4 text-sm text-green-700" role="alert">
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        @endif

        {{-- ✅ Welcome Header --}}
        <section class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 flex gap-x-2">Welcome, {{ ucfirst(Auth::user()->username) }}<svg
                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
                    <g fill="none">
                        <path fill="#ffc83d"
                            d="M20.593 7.252c1.216 2.681 2.709 5.972 3.829 7.28c.219-.509.195-1.36.445-3.438c.226-1.877 1.774-2.055 2.438-1.922c1.468.306 1.916 1.795 1.867 2.344c-.078.875-.082.845-.242 2.96c-.235 3.094.96 5.43 1.07 8.079C30 27.547 25.625 30 22.563 30c-2.45 0-4.901-1.568-5.82-2.352l-4.595-4.195c-.562-.437-1.952-1.88-2.562-2.71c-1.663-2.263.742-3.821 2.094-3.43c-.107-.082-.748-1.123-1.055-1.633c-.825-1.657 0-2.76.61-3.063c1.382-.687 2.398.086 2.718.508c-.122-.208-.506-1.05-1.125-2.594s.378-2.497.953-2.781c1.25-.578 2.438.156 2.735.813c.145.32.93 2.038 1.27 2.796c-.257-.628-.723-1.876-.888-2.453c-.328-1.36.461-2.291.961-2.531c.696-.333 2.146-.42 2.72.844z" />
                        <path fill="#d67d00"
                            d="M17.782 6.915c.106-.34.251-.546.361-.648q-.157.046-.284.108c-.5.24-1.289 1.172-.96 2.531c.164.577.63 1.825.888 2.453l-.124-.274c.564 1.295 1.267 2.69 1.797 3.59a.5.5 0 1 0 .862-.507c-.86-1.461-2.168-4.235-2.543-5.612a3 3 0 0 1 .003-1.64m-7.157 8.764c.232.386.655 1.075.894 1.423c.316.38.662.745 1.012 1.092c.4.395.815.777 1.208 1.139l.033.03c.406.374.785.725 1.114 1.058a.5.5 0 0 0 .712-.703c-.349-.353-.746-.72-1.149-1.09l-.028-.026c-.396-.365-.8-.737-1.186-1.12c-.798-.79-1.48-1.584-1.842-2.385c-.257-.566-.32-1.229-.25-1.777a2.2 2.2 0 0 1 .176-.654a1 1 0 0 1 .068-.12q-.075.032-.153.07c-.609.303-1.434 1.406-.609 3.063m3.258-7.974c-.107.072-.253.246-.346.584c-.105.381-.12.917.055 1.563c.254.936.892 2.192 1.621 3.422a41 41 0 0 0 2.034 3.086a.5.5 0 1 1-.807.59a42 42 0 0 1-2.087-3.166q-.302-.506-.582-1.024a49 49 0 0 1-.943-2.23c-.619-1.543.378-2.497.953-2.78q.051-.025.102-.045m10.793 5.238c-.073.794-.115 1.248-.245 1.566l-.023.273a.5.5 0 0 0 .996.09q.022-.245.045-.567c.059-.793.142-1.924.387-3.346c.102-.59.367-1.102.67-1.436c.235-.257.437-.356.576-.381c-.737-.052-2.012.261-2.215 1.95a61 61 0 0 0-.191 1.85" />
                        <path fill="#5092ff"
                            d="M24.038 7.557a.5.5 0 1 0 1-.007c-.015-2.295-1.76-5.488-5.51-5.464a.5.5 0 0 0 .007 1c3.032-.02 4.49 2.547 4.503 4.47" />
                        <path fill="#5092ff"
                            d="M22.877 9.986a.5.5 0 0 1-.503-.496c-.006-.91-.381-2.12-1.177-3.095c-.784-.96-1.967-1.682-3.62-1.671a.5.5 0 0 1-.007-1c1.988-.013 3.448.872 4.401 2.038c.94 1.151 1.395 2.583 1.403 3.721a.5.5 0 0 1-.497.503M4.875 17.61a.5.5 0 0 0-1 0c0 1.137.445 2.572 1.378 3.73c.946 1.172 2.4 2.066 4.388 2.066a.5.5 0 0 0 0-1c-1.653 0-2.832-.73-3.61-1.694c-.789-.98-1.156-2.194-1.156-3.103" />
                        <path fill="#5092ff"
                            d="M3.199 19.531a.5.5 0 1 0-1 0c0 2.295 1.723 5.5 5.473 5.5a.5.5 0 0 0 0-1c-3.032 0-4.473-2.576-4.473-4.5" />
                    </g>
                </svg></h1>
            <p class="text-gray-500 mt-1">Here's a dashboard of your network's performance.</p>
        </section>

        {{-- ✅ Stats Overview (4 Cards) --}}
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow p-6 flex items-center gap-4">
                <div class="bg-green-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15c0-1.09 1.01-1.85 2.7-1.85c1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61c0 2.31 1.91 3.46 4.7 4.13c2.5.6 3 1.48 3 2.41c0 .69-.49 1.79-2.7 1.79c-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55c0-2.84-2.43-3.81-4.7-4.4z" />
                    </svg>
                </div>
                <div><a href="{{ route('e-wallet', ['username' => Auth::user()->username]) }}">
                        <h2 class="text-gray-500 font-medium">Wallet Balance</h2>
                        <p class="text-2xl font-bold text-gray-800">₹12,560</p>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow p-6 flex items-center gap-4">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05c1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5" />
                    </svg>
                </div>
                <div><a href="{{ route('genealogy-tree', ['username' => Auth::user()->username]) }}">
                        <h2 class="text-gray-500 font-medium">Total Downline</h2>
                        <p class="text-2xl font-bold text-gray-800">42 Members</p>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow p-6 flex items-center gap-4">
                <div class="bg-purple-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                </div>
                <div><a href="{{ route('rankings', ['username' => Auth::user()->username]) }}">

                        <h2 class="text-gray-500 font-medium">Current Rank</h2>
                        <p class="text-2xl font-bold text-gray-800">Gold</p>
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow p-6 flex items-center gap-4">
                <div class="bg-orange-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                    </svg>
                </div>
                <div>
                    <a href="{{ route('referrals', ['username' => Auth::user()->username]) }}">
                        <h2 class="text-gray-500 font-medium">Direct Referrals</h2>
                        <p class="text-2xl font-bold text-gray-800">18</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="mb-10">
            <div
                class="bg-white rounded-2xl shadow p-6  flex flex-col md:flex-row justify-between items-start md:items-center gap-4">

                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Your Referral Link</h3>
                    <p class="text-sm text-gray-500">Share this with your friends to grow your network.</p>
                </div>
                <div class="flex items-center gap-2 w-full md:w-auto">
                    <input type="text" readonly value="{{ url('/register?ref=' . $user->username) }}"
                        class="border rounded-lg px-3 py-2 w-full md:w-80 text-gray-600 focus:outline-none">
                    <button onclick="copyLink()"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition cursor-pointer"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M20.829 12.861c.171-.413.171-.938.171-1.986s0-1.573-.171-1.986a2.25 2.25 0 0 0-1.218-1.218c-.413-.171-.938-.171-1.986-.171H11.1c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C7.5 9.209 7.5 9.839 7.5 11.1v6.525c0 1.048 0 1.573.171 1.986c.229.551.667.99 1.218 1.218c.413.171.938.171 1.986.171s1.573 0 1.986-.171m7.968-7.968a2.25 2.25 0 0 1-1.218 1.218c-.413.171-.938.171-1.986.171s-1.573 0-1.986.171a2.25 2.25 0 0 0-1.218 1.218c-.171.413-.171.938-.171 1.986s0 1.573-.171 1.986a2.25 2.25 0 0 1-1.218 1.218m7.968-7.968a11.68 11.68 0 0 1-7.75 7.9l-.218.068M16.5 7.5v-.9c0-1.26 0-1.89-.245-2.371a2.25 2.25 0 0 0-.983-.984C14.79 3 14.16 3 12.9 3H6.6c-1.26 0-1.89 0-2.371.245a2.25 2.25 0 0 0-.984.984C3 4.709 3 5.339 3 6.6v6.3c0 1.26 0 1.89.245 2.371c.216.424.56.768.984.984c.48.245 1.111.245 2.372.245H7.5" />
                        </svg></button>
                </div>
            </div>
        </section>

        {{-- ✅ Charts & Top Performers Section --}}
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            {{-- Earnings Chart --}}
            <div class="lg:col-span-2 bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Monthly Earnings (₹)</h3>
                <canvas id="earningsChart"></canvas>
            </div>
            {{-- Top Performers --}}
            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Top Performers</h3>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <img src="https://placehold.co/40x40/E2E8F0/4A5568?text=RS" alt="Avatar"
                            class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-semibold text-gray-800">Rohit Singh</p>
                            <p class="text-sm text-green-600">₹2,450 earned</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <img src="https://placehold.co/40x40/E2E8F0/4A5568?text=MG" alt="Avatar"
                            class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-semibold text-gray-800">Manish Gupta</p>
                            <p class="text-sm text-green-600">₹1,800 earned</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <img src="https://placehold.co/40x40/E2E8F0/4A5568?text=AV" alt="Avatar"
                            class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-semibold text-gray-800">Anjali Verma</p>
                            <p class="text-sm text-green-600">₹1,200 earned</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        {{-- ✅ Recent Joinings --}}
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-5">Recent Joinings</h2>
            <div class="bg-white rounded-2xl shadow overflow-x-auto">
                <table class="min-w-full">
                    <thead class="text-blue-600 bg-blue-100">
                        <tr>
                            <th class="py-3 px-4 text-left font-bold">Member Name</th>
                            <th class="py-3 px-4 text-left font-bold">Sponsor</th>
                            <th class="py-3 px-4 text-left font-bold">Join Date</th>
                            <th class="py-3 px-4 text-left font-bold">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="hover:bg-gray-50 border-b border-gray-200">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="https://placehold.co/32x32/E2E8F0/4A5568?text=PK" alt="Avatar"
                                    class="w-8 h-8 rounded-full">
                                Priya Kumar
                            </td>
                            <td class="py-3 px-4">Rohit Singh</td>
                            <td class="py-3 px-4">2025-10-15</td>
                            <td class="py-3 px-4">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">Active</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 border-b border-gray-200">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="https://placehold.co/32x32/E2E8F0/4A5568?text=AS" alt="Avatar"
                                    class="w-8 h-8 rounded-full">
                                Amit Sharma
                            </td>
                            <td class="py-3 px-4">You</td>
                            <td class="py-3 px-4">2025-10-14</td>
                            <td class="py-3 px-4">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">Active</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="https://placehold.co/32x32/E2E8F0/4A5568?text=SM" alt="Avatar"
                                    class="w-8 h-8 rounded-full">
                                Sunita Mehta
                            </td>
                            <td class="py-3 px-4">Manish Gupta</td>
                            <td class="py-3 px-4">2025-10-11</td>
                            <td class="py-3 px-4">
                                <span
                                    class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-2 py-1 rounded-full">Pending</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    {{-- ✅ Scripts for Chart.js and Copy Link --}}
    @push('scripts')
        <script>
            function copyLink() {
                const input = document.querySelector('input[readonly]');
                navigator.clipboard.writeText(input.value).then(() => {
                    alert("Referral link copied!");
                }).catch(err => {
                    console.error('Failed to copy: ', err);
                });
            }

            const ctx = document.getElementById('earningsChart').getContext('2d');
            const earningsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    datasets: [{
                        label: 'Earnings',
                        data: [1200, 1900, 3000, 5000, 2200, 3100],
                        backgroundColor: 'rgba(59, 130, 246, 0.5)',
                        borderColor: 'rgba(59, 130, 246, 1)',
                        borderWidth: 1,
                        borderRadius: 8,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(200, 200, 200, 0.2)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            // document.addEventListener('DOMContentLoaded', (event) => {
                const alertBox = document.getElementById('success-alert');

                if (alertBox) {
                    setTimeout(() => {
                        alertBox.style.transition = 'opacity 0.5s ease';
                        alertBox.style.opacity = '0';

                        setTimeout(() => alertBox.style.display ='none', 500);
                    }, 5000);
                }
            // });

        </script>

    @endpush
@endsection
