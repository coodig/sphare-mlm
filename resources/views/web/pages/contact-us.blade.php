@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="bg-gray-50">

        {{-- ✅ 1. Page Header Section --}}
        <section class="text-center py-20 px-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-tl-2xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
                Get in Touch
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                We're here to help! Whether you have a question about our platform, our business plan, or anything else, our
                team is ready to answer all your questions.
            </p>
        </section>

        {{-- ✅ 2. Contact Form & Info Section --}}
        <section class="py-20 px-6">
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Left Side: Contact Form --}}
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Send us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        {{-- Subject --}}
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        {{-- Submit Button --}}
                        <div>
                            <button type="submit"
                                class="w-full bg-blue-600 text-white font-bold px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Right Side: Contact Details --}}
                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Contact Information</h3>
                        <div class="space-y-4 text-gray-600">
                            {{-- Address --}}
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-100 text-blue-600 p-2 rounded-full mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7m0 9.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Our Office</h4>
                                    <p> Amausi Metro Station, Kanpur Road, Tapovan Nagar, Amausi, Lucknow, Uttar Pradesh,
                                        226008, India</p>
                                </div>
                            </div>
                            {{-- Phone --}}
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-100 text-blue-600 p-2 rounded-full mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Phone</h4>
                                    <p>(+91) 888-142-3949</p>
                                </div>
                            </div>
                            {{-- Email --}}
                            <div class="flex items-start gap-4">
                                <div class="bg-blue-100 text-blue-600 p-2 rounded-full mt-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Email</h4>
                                    <p>sphare@zohomail.in</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- FAQs Link --}}
                    <div class="text-center">
                        <p class="text-gray-600">Have a common question? Check out our <a href="{{ route('faqs') }}"
                                class="font-semibold text-blue-600 hover:underline">FAQ Page</a>.</p>
                    </div>
                </div>

            </div>
        </section>

        {{-- ✅ 3. Map Section --}}
        {{-- Replace this with your Google Maps embed code --}}
        {{-- <section>
            <div class="bg-gray-300 w-full h-96 flex items-center justify-center text-gray-500">
                [Map of Lucknow, Uttar Pradesh]
                <p>(Google Map will be embedded here)</p>
            </div>
        </section> --}}

        <section>
            <iframe style="width: 100%; height: 384px; border: 0;" {{-- h-96 is 384px --}}
                src="https://embed.mappls.com/place/ygjia4" {{-- src="https://embed.mappls.com/immersive/ygjia4" --}}
                allowfullscreen loading="lazy"></iframe>
        </section>
    </div>
@endsection
