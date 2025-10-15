@section('title', 'Register')

{{-- <x-guest-layout> --}}
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 p-4">
        <div class="w-full sm:max-w-md bg-white p-8 rounded-lg shadow-xl border border-gray-200">
            <div class="text-center mb-6">
                {{-- Logo or App Name --}}
                <a href="/" class="block text-3xl font-bold text-blue-600">
                    SphareMLM
                </a>
                <h2 class="mt-4 text-2xl font-semibold text-gray-800">
                    Log In Your Account
                </h2>
                <p class="text-gray-500 text-sm">Start your journey with us!</p>
            </div>

            {{-- <form method="POST" action="{{ route('register') }}"> --}}
                <form method="POST" action="#">
                    @csrf

                    {{-- Sponsor ID --}}
                    {{-- <x-input-label for="sponsor_id" :value="__('Sponsor ID (Optional)')" />
                    <x-text-input id="sponsor_id" class="block mt-1 w-full" type="text" name="sponsor_id"
                        :value="old('sponsor_id', request('ref'))" autofocus autocomplete="sponsor_id"
                        placeholder="Enter Sponsor ID if you have one" />
                    <x-input-error :messages="$errors->get('sponsor_id')" class="mt-2" /> --}}

                    {{-- <div class="mb-4">
                        <label for="sponsor_id">Sponsor ID</label>
                        <input type="text" id="sponsor_id" class="block mt-1 w-full" name="sponsor_id" autofocus
                            autocomplete="sponsor_id" placeholder="Enter Sponsor ID if you have one">

                    </div> --}}

                    {{-- <div class="mb-4">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" autofocus autocomplete="name"
                            placeholder="Enter your name">
                    </div> --}}
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
                            autofocus autocomplete="password_confirmation"
                            placeholder="Enter your password_confirmation">
                    </div>

                    <div class="mb-4">
                        <button type="submit">Login</button>
                    </div>

                    <div class="mb-4">
                        <p>Not Register yet?<a href="{{ route('register') }}"><span>Register</span></a></p>
                    </div>
                    {{-- :value="old('sponsor_id', request('ref'))" --}}

                    {{-- Name --}}
                    {{-- <div class="mb-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autocomplete="name" placeholder="Your Full Name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div> --}}

                    {{-- Email Address --}}
                    {{-- <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="name@example.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div> --}}

                    {{-- Password --}}
                    {{-- <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="Min 8 characters" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div> --}}

                    {{-- Confirm Password --}}
                    {{-- <div class="mb-6">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm your password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div> --}}

                    {{-- <div class="flex items-center justify-between mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button
                            class="ml-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition ease-in-out duration-150 shadow-md">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div> --}}
                </form>
        </div>
    </div>
    {{--
</x-guest-layout> --}}
