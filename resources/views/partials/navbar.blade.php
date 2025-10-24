{{-- <nav class="bg-blue-600 text-white px-6 py-4 flex justify-between items-center shadow">
    <h1 class="text-2xl font-bold">SphareMLM</h1>
    <ul class="flex gap-6">
        <li><a href="#" class="hover:text-gray-200">Home</a></li>
        <li><a href="#" class="hover:text-gray-200">About</a></li>
        <li><a href="#" class="hover:text-gray-200">Contact</a></li>
    </ul>
</nav> --}}



<nav class="bg-white text-gray-800 px-6 py-3 flex justify-between items-center shadow-md z-10">

    <div class="flex items-center gap-x-2 text-black text-2xl font-bold cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16" id="sidebar-toggle-button"><path fill="currentColor" d="M2 3.75A.75.75 0 0 1 2.75 3h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75m0 4A.75.75 0 0 1 2.75 7h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 7.75m0 4a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75"/></svg>
        <a href="/">
            <span>
                Sphare<span class="text-blue-600">MLM</span>
            </span>
        </a>
    </div>


    {{-- Action buttons --}}
    <div class="hidden md:flex items-center gap-4">
        <ul class="space-y-3">
            <li>
                <a href="#"
                    class="flex items-center text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g fill="none">
                            <path d="M19 12a7 7 0 1 1-14 0a7 7 0 0 1 14 0" />
                            <path stroke="currentColor" stroke-linecap="square" stroke-width="2"
                                d="M19 12a7 7 0 1 1-14 0a7 7 0 0 1 14 0Zm.782 7.776l-.003.003l-.003-.003l.003-.003zm3.221-7.78V12h-.004v-.004zM19.78 4.217l.002.003l-.003.002l-.003-.002zM11.999.996h.004V1h-.004zM4.225 4.22l-.003.002l-.002-.002l.002-.003zm-3.222 7.776V12H.999v-.004zm3.219 7.777l.003.003l-.003.003l-.002-.003zm7.777 3.223h.004V23h-.004z" />
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
        <ul class="space-y-3">
            <li>
                <a href="#"
                    class="flex items-center text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M5 6a1 1 0 0 1 1-1h2a1 1 0 0 0 0-2H6a3 3 0 0 0-3 3v2a1 1 0 0 0 2 0zm0 12a1 1 0 0 0 1 1h2a1 1 0 1 1 0 2H6a3 3 0 0 1-3-3v-2a1 1 0 1 1 2 0zM18 5a1 1 0 0 1 1 1v2a1 1 0 1 0 2 0V6a3 3 0 0 0-3-3h-2a1 1 0 1 0 0 2zm1 13a1 1 0 0 1-1 1h-2a1 1 0 1 0 0 2h2a3 3 0 0 0 3-3v-2a1 1 0 1 0-2 0z"/></svg>
                </a>
            </li>
        </ul>
        <ul class="space-y-3">
            <li>
                <a href="#"
                    class="flex items-center text-lg hover:bg-gray-700 hover:text-white p-3 rounded-lg transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M5.677 12.458a1.5 1.5 0 0 0 2.646 0M4.262 1.884a3.872 3.872 0 0 1 6.61 2.738c0 .604.1 1.171.25 1.752q.063.198.137.373c.232.545.871.732 1.348 1.084c.711.527.574 1.654-.018 2.092c0 0-.955.827-5.589.827s-5.589-.827-5.589-.827c-.592-.438-.73-1.565-.018-2.092c.477-.352 1.116-.539 1.348-1.084c.231-.544.387-1.24.387-2.125c0-1.027.408-2.012 1.134-2.738"
                            stroke-width="1" />
                    </svg>
                </a>
            </li>
        </ul>

        @guest
            <a href="{{ route('login') }}" class="font-medium text-gray-600 hover:text-blue-600 transition-colors">Login</a>
            <a href="{{ route('register') }}"
                class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition-colors">Register</a>
        @endguest
        @auth
            <a href="{{ route('profile', ['username' => Auth::user()->username]) }}">
                <p class="text-lg">👋 Welcome, <span
                        class="font-semibold cursor-pointer">{{ ucfirst(Auth::user()->username)}}</span></p>
                {{-- <p class="text-lg">👋 Welcome, <span
                        class="font-semibold cursor-pointer">{{ ucfirst($user->username)}}</span></p> --}}
            </a>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button
                    class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-red-100 py-2 px-4 border border-red-500 hover:border-transparent rounded cursor-pointer">
                    Logout
                </button>

            </form>
        @endauth
    </div>

    {{-- Mobile Menu Button --}}
    <button class="md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
</nav>
