@extends('layouts.auth')

@section('title', 'Set New Password')

@section('content')
    {{-- Form Header --}}
    <div class="text-center mb-6">
        <h2 class="text-3xl font-extrabold text-gray-900">
            Set a New Password
        </h2>
        <p class="mt-2 text-sm text-gray-600">
            Create a new, strong password to secure your account.
        </p>
    </div>

    {{-- Reset Password Form --}}
    {{-- <form method="POST" action="{{ route('password.update') }}" class="space-y-6"> --}}
    <form method="POST" action="#" class="space-y-6">
        {{-- @csrf --}}

        {{-- Hidden Token --}}
        {{-- Yeh URL se token (e.g., /reset-password/TOKEN_HERE) automatically le lega --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        {{-- Email (Readonly) --}}
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email"
                   {{-- Yeh email ko URL parameter (?email=...) se utha lega --}}
                   {{-- value="{{ $request->email ?? old('email') }}" --}}
                   required readonly
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 focus:outline-none cursor-not-allowed">

            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- New Password --}}
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">New Password<span class="text-red-500 ml-1">*</span></label>
            <input type="password" id="password" name="password"
                   required autofocus
                   class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm
                           {{-- @error('password')
                               border-red-500 focus:ring-red-500 focus:border-red-500
                           @else
                               border-gray-300 focus:ring-blue-500 focus:border-blue-500
                           @enderror --}}
                           ">

            {{-- Password error message --}}
            @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirm New Password --}}
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password<span class="text-red-500 ml-1">*</span></label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                   required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>

        {{-- Submit Button --}}
        <div>
            <button type="submit"
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-2xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer">
                Reset Password
            </button>
        </div>
    </form>
@endsection
