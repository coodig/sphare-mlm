@extends('layouts.auth')
@section('title', 'Register')

@section('content')
    {{-- <x-guest-layout> --}}
        <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 p-4">
            <div class="w-full sm:max-w-md bg-white p-8 rounded-lg shadow-xl border border-gray-200">
                <div class="text-center mb-6">
                    {{-- Logo or App Name --}}
                    <a href="/" class="block text-3xl font-bold text-blue-600">
                        SphareMLM
                    </a>
                    <h2 class="mt-4 text-2xl font-semibold text-gray-800">
                        Create Your Account
                    </h2>
                    <p class="text-gray-500 text-sm">Start your journey with us!</p>
                </div>

                {{-- <form method="POST" action="{{ route('register') }}"> --}}
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

                        {{-- Sponsor ID --}}
                        <div class="mb-4">
                            <label for="sponsor_id">Sponsor ID</label>
                            <input type="text" id="sponsor_id" class="block mt-1 w-full" name="sponsor_id" autofocus
                                autocomplete="sponsor_id" placeholder="Enter Sponsor ID if you have one">
                        </div>

                        <div class="mb-4">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" autofocus autocomplete="username"
                                placeholder="Enter your username">
                        </div>
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
                            <input type="password" id="password_confirmation" name="password_confirmation" autofocus
                                autocomplete="password_confirmation" placeholder="Enter your password_confirmation">
                        </div>

                        <div class="mb-4">
                            <button type="submit">Register</button>
                        </div>

                        <div class="mb-4">

                            <p>Already Register<a href="{{ route('login') }}"><span>login</span></a></p>
                        </div>

                    </form>
            </div>
        </div>
@endsection
