{{-- @extends('layouts.auth')
@section('title', 'Log In')

@section('content')
        <div class="w-full sm:max-w-md bg-white p-8 rounded-lg shadow-xl border border-gray-200">
            <div class="text-center mb-6">

                <a href="/" class="block text-3xl font-bold text-blue-600">
                    SphareMLM
                </a>
                <h2 class="mt-4 text-2xl font-semibold text-gray-800">
                    Log In Your Account
                </h2>
                <p class="text-gray-500 text-sm">Start your journey with us!</p>
            </div>


                <form method="POST" action="#">
                    @csrf


                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" autofocus autocomplete="email"
                            placeholder="Enter your email">
                    </div>
                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" autofocus autocomplete="password"
                            placeholder="Enter your password">
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password_confirmation" id="password_confirmation" name="password_confirmation"
                            autofocus autocomplete="password_confirmation" placeholder="Enter your password_confirmation">
                    </div>

                    <div class="mb-4">
                        <button type="submit">Login</button>
                    </div>

                    <div class="mb-4">
                        <p>Not Register yet?<a href="{{ route('register') }}"><span>Register</span></a></p>
                    </div>

                </form>
        </div>
@endsection --}}


@extends('layouts.auth')

@section('title', 'Log In')

@section('content')
    {{-- Form Header --}}
    <div class="text-center mb-8">
        <h2 class="text-3xl font-extrabold text-gray-900">
            Log In Your Account
        </h2>
        <p class="mt-2 text-sm text-gray-600">
            Start your journey with us!
        </p>
    </div>

    {{-- Login Form --}}
    <form method="POST" action="#" class="space-y-6">
        @csrf

        {{-- Email --}}
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required autofocus
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>

        {{-- Password --}}
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>

        {{-- Login Button --}}
        <div>
            <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
        </div>

        {{-- Register Link --}}
        <div class="text-center text-sm gap-2">
            <p class="text-gray-600">
                Not registered yet?
                <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
                    Register here
                </a>
            </p>
             <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
             <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
             <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
             <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Login
            </button>
        </div>
    </form>
@endsection
