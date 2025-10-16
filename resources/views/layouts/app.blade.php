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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- <body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col"> --}}
<body class="bg-gray-100 text-gray-900 h-screen flex flex-col">

    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="flex flex-1 overflow-y-auto">
        {{-- Sidebar --}}
        @include('partials.sidebar')

        {{-- Main Content --}}
        {{-- yahan `rounded-tl-2xl shadow-inner` hata diya hai for a cleaner look --}}


        {{-- <main class="flex-1 bg-gray-500 overflow-y-auto"> --}}
        <main class="flex-1 bg-gray-500 overflow-y-auto ">
            @yield('content')
            @include('partials.footer')
        </main>
    </div>

    {{-- Footer ko layout se bahar rakha hai (optional, but cleaner) --}}

</body>
</html>
