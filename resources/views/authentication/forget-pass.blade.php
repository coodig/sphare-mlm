@extends('layouts.auth')

@section('title', 'Forget Password')

@section('content')
    {{-- Form Header --}}
    <div class="text-center mb-6"> {{-- Increased margin bottom --}}
        <h2 class="text-3xl font-extrabold text-gray-900">
            Forgot Your Password?
        </h2>
        <p class="mt-2 text-sm text-gray-600">
            No problem. Just let us know your email address and we will email you a password reset link.
        </p>
    </div>

    {{-- Form --}}
    <form method="POST" action="#" class="space-y-6">
        @csrf

        {{-- Email --}}
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email<span class="text-red-500 text-lg ml-1">*</span></label>
            <input type="email" id="email" name="email"
                   value="{{ old('email') }}"
                   required autofocus
                   class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm
                           {{-- @error('email')
                               border-red-500 focus:ring-red-500 focus:border-red-500
                           @else
                               border-gray-300 focus:ring-blue-500 focus:border-blue-500
                           @enderror"
                           --}}
                           ">

            {{-- Email error message --}}
            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Submit Button --}}
        <div>
            <button type="submit"
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-2xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer">
                Send Password Reset Link
            </button>
        </div>

        {{-- Back to Login Link --}}
        <div class="text-center text-sm">
            <p class="text-gray-600">
                Remembered your password?
                {{-- Route ko 'login' se change karein agar aapka alag hai --}}
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                    Back to login
                </a>
            </p>
        </div>
    </form>
@endsection
