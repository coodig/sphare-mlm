@extends('layouts.app')

@section('title', 'Our Products')

@section('content')

<body class="bg-gray-100 font-sans">

    <div class="container mx-auto max-w-7xl px-4 py-12">

        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-12">
            Our Products
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- @forelse ($products as $product) --}}
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">

                <img class="w-full h-56 object-cover" src="{{ asset($product->image_path) }}"
                    alt="{{ $product->name }}">

                <div class="p-6 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">campa</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">this is a softdrink product.</p>
                </div>

                <div class="p-6 bg-gray-50 border-t border-gray-200 flex justify-between items-center">

                    <div>
                        <span class="text-2xl font-extrabold text-gray-900">₹ 1000</span>
                        <span
                            class="ml-2 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">wr43
                            BV</span>
                        {{-- <span class="text-2xl font-extrabold text-gray-900">₹{{ $product->price }}</span>
                        <span class="ml-2 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{
                            $product->bv }} BV</span> --}}
                    </div>

                    {{-- <x-payment-button :amount="$product->price * 100" purpose="product_purchase"
                        :meta="['product_id' => $product->id]" button-label="Buy Now"
                        class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" />
                </div> --}}

            </div>
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">

                {{-- <img class="w-full h-56 object-cover" src="{{ asset($product->image_path) }}"
                    alt="{{ $product->name }}"> --}}

                <div class="p-6 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">campa</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">this is a softdrink product.</p>
                </div>

                <div class="p-6 bg-gray-50 border-t border-gray-200 flex justify-between items-center">

                    <div>
                        <span class="text-2xl font-extrabold text-gray-900">₹ 1000</span>
                        <span
                            class="ml-2 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">wr43
                            BV</span>
                        {{-- <span class="text-2xl font-extrabold text-gray-900">₹{{ $product->price }}</span>
                        <span class="ml-2 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{
                            $product->bv }} BV</span> --}}
                    </div>

                    {{-- <x-payment-button :amount="$product->price * 100" purpose="product_purchase"
                        :meta="['product_id' => $product->id]" button-label="Buy Now"
                        class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" />
                </div> --}}

            </div>
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">

                {{-- <img class="w-full h-56 object-cover" src="{{ asset($product->image_path) }}"
                    alt="{{ $product->name }}"> --}}

                <div class="p-6 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">campa</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">this is a softdrink product.</p>
                </div>

                <div class="p-6 bg-gray-50 border-t border-gray-200 flex justify-between items-center">

                    <div>
                        <span class="text-2xl font-extrabold text-gray-900">₹ 1000</span>
                        <span
                            class="ml-2 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">wr43
                            BV</span>
                        {{-- <span class="text-2xl font-extrabold text-gray-900">₹{{ $product->price }}</span>
                        <span class="ml-2 bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{
                            $product->bv }} BV</span> --}}
                    </div>

                    {{-- <x-payment-button :amount="$product->price * 100" purpose="product_purchase"
                        :meta="['product_id' => $product->id]" button-label="Buy Now"
                        class="inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" />
                </div> --}}

            </div>
            {{-- @empty --}}
            {{-- <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-12">
                <p class="text-xl text-gray-500">Abhi koi products available nahi hain.</p>
            </div> --}}
            {{-- @endforelse --}}

        </div>
    </div>
@endsection
