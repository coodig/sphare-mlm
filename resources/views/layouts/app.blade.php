{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SphareMLM')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

  @include('partials.navbar')

  <div class="flex flex-1">
    @include('partials.sidebar')

    <main class="flex-1 p-6 bg-white rounded-tl-2xl shadow-inner">
      @yield('content')
    </main>
  </div>

  @include('partials.footer')

</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tree.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- <body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col"> --}}
<body class="bg-gray-100 text-gray-900 h-screen flex flex-col">

    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="flex flex-1 overflow-y-auto">
        {{-- Sidebar --}}
        @auth

        @include('partials.sidebar')
        @endauth

        {{-- Main Content --}}
        {{-- yahan `rounded-tl-2xl shadow-inner` hata diya hai for a cleaner look --}}


        {{-- <main class="flex-1 bg-gray-500 overflow-y-auto"> --}}
        <main class="flex-1 overflow-y-auto ">
            @yield('content')
            @include('partials.footer')
        </main>
    </div>

    {{-- Footer ko layout se bahar rakha hai (optional, but cleaner) --}}

</body>
</html>
