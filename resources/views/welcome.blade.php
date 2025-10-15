{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME | SphareMLM</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-4xl p-6 bg-black rounded-2xl shadow-xl">
        <h1 class="text-4xl text-white font-semibold leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Assumenda tempore distinctio, eius blanditiis magnam illo quo excepturi.
            Ducimus rerum sapiente iusto eos expedita porro corporis quibusdam nemo.
            Alias, quos nesciunt?
        </h1>
    </div>
</body>

</html> --}}


<!-- ✅ Tailwind CDN link -->
{{--
<script src="https://cdn.tailwindcss.com"></script> --}}

<!-- Optional: custom theme (agar chahe to color customize kar sakte ho) -->
{{--
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#2563eb', // blue-600
                },
            },
        },
    };
</script> --}}

{{--
@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
  <div class="p-8 text-center">
    <h2 class="text-4xl font-bold mb-4 text-gray-800">Welcome to <span class="text-blue-600">SphareMLM</span></h2>
    <p class="text-gray-600 text-lg mb-6">
      Your trusted platform for smart networking and business growth.
    </p>
    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
      Get Started
    </button>
  </div>
@endsection --}}



@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="bg-gray-50">

    {{-- Hero Section --}}
    <div class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
        <h2 class="text-5xl font-extrabold text-gray-800 mb-4">
            Welcome to <span class="text-blue-600">SphareMLM</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
            Your trusted platform for smart networking and business growth. Unlock your potential with our powerful tools.
        </p>
        <a href="#" class="inline-flex items-center bg-blue-600 text-white font-bold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition-transform transform hover:scale-105">
            Get Started
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>

    {{-- Features Section --}}
    <div class="py-16 px-6">
        <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Choose Us?</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            {{-- Feature Card 1 --}}
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    {{-- Icon: Dashboard --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 mb-2">Intuitive Dashboard</h4>
                <p class="text-gray-600">Manage your network, track earnings, and view reports from one single, easy-to-use interface.</p>
            </div>

            {{-- Feature Card 2 --}}
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    {{-- Icon: Members --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.125-1.274-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.653.125-1.274.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 mb-2">Member Management</h4>
                <p class="text-gray-600">Easily add, view, and manage your downline. Keep track of everyone in your network effortlessly.</p>
            </div>

            {{-- Feature Card 3 --}}
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    {{-- Icon: Reports --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V7a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h4 class="text-xl font-semibold text-gray-900 mb-2">Detailed Reports</h4>
                <p class="text-gray-600">Get insightful reports on your performance, team growth, and commissions to make data-driven decisions.</p>
            </div>

        </div>
    </div>
</div>
@endsection
