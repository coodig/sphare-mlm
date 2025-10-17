{{-- Alpine.js for any interactivity --}}
{{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SphareMLM</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <div class=" flex flex-col items-center justify-center ">

        <div class="mb-3">
            <a href="/" class="flex items-center gap-x-2 text-black text-3xl font-bold">
                Sphare<span class="text-blue-600">MLM</span>
            </a>
        </div>

        <div class="rounded-2xl mt-12 justify-center">

            @yield('content')

        </div>
    </div>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SphareMLM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    {{-- ✅ SOLUTION: Is main div ko screen ki poori height dein --}}
    <div class="min-h-screen flex flex-col items-center justify-center py-12 px-4">

        {{-- 1. Logo Section --}}
        <div class="mb-6">
            <a href="/" class="flex items-center gap-x-2 text-black text-4xl font-bold">
                Sphare<span class="text-blue-600">MLM</span>
            </a>
        </div>

        {{-- 2. Authentication Card Wrapper --}}
        {{-- Card ki styling ab yahan se aayegi --}}
        <div class="w-full sm:max-w-md bg-white p-8 rounded-2xl shadow-lg">
            @yield('content')
        </div>

    </div>

</body>
</html>
