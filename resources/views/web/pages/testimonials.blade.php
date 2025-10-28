@extends('layouts.app') {{-- Apne main layout ko extend karein --}}

@section('title', 'Testimonials')

{{-- Is page ke specific CSS ko head mein daalne ke liye --}}
@push('styles')
<style>
    /* Yeh scrollbar ko chhipa dega (Chrome, Safari, Edge) */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    /* Yeh scrollbar ko chhipa dega (Firefox) */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>
@endpush


@section('content')
<div class="bg-gray-100 py-16">
    <div class="container mx-auto max-w-6xl px-4">

        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-900">
                What Our Members Say
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Their success stories, in their own words.
            </p>
        </div>

        {{-- Slider Container --}}
        <div class="relative">

            {{-- Yeh wrapper hai jo scrolling ko handle karega --}}
            <div id="testimonial-slider"
                 class="flex items-stretch overflow-x-auto scroll-smooth snap-x snap-mandatory space-x-6 md:space-x-8 pb-4 no-scrollbar">

                {{-- Card 1 --}}
                <div class="snap-start flex-shrink-0 w-80 md:w-96 bg-white rounded-xl shadow-lg p-8">
                    <div class="flex flex-col h-full">
                        {{-- SVG Quote Icon --}}
                        <svg class="w-10 h-10 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.924 12.39C6.326 14.138 4.962 15.502 3.214 16.1C3.812 14.352 5.176 12.988 6.924 12.39ZM20.924 12.39C20.326 14.138 18.962 15.502 17.214 16.1C17.812 14.352 19.176 12.988 20.924 12.39ZM4.11 7.17C2.012 7.968.748 9.922.75 12C.75 16.004 4.11 19.364 8.114 19.364C10.706 19.364 12.87 18.062 14.076 16.1C13.278 18.062 11.114 19.364 8.522 19.364C4.518 19.364 1.158 16.004 1.158 12C1.158 9.922 2.422 7.968 4.52 7.17H4.11ZM18.11 7.17C16.012 7.968 14.748 9.922 14.75 12C14.75 16.004 18.11 19.364 22.114 19.364C24.706 19.364 26.87 18.062 28.076 16.1C27.278 18.062 25.114 19.364 22.522 19.364C18.518 19.364 15.158 16.004 15.158 12C15.158 9.922 16.422 7.968 18.52 7.17H18.11Z" transform="translate(-4 -6)"/></svg>

                        <p class="text-gray-600 mt-6 flex-grow">
                            "Joining SphareMLM was the best decision of my life. The support system is excellent and the plan is very easy to understand."
                        </p>

                        <div class="flex items-center mt-8 pt-5 border-t border-gray-100">
                            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Rohan+Sharma" alt="Rohan Sharma">
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Rohan Sharma</p>
                                <p class="text-sm text-gray-500">Gold Executive</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="snap-start flex-shrink-0 w-80 md:w-96 bg-white rounded-xl shadow-lg p-8">
                    <div class="flex flex-col h-full">
                        <svg class="w-10 h-10 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.924 12.39C6.326 14.138 4.962 15.502 3.214 16.1C3.812 14.352 5.176 12.988 6.924 12.39ZM20.924 12.39C20.326 14.138 18.962 15.502 17.214 16.1C17.812 14.352 19.176 12.988 20.924 12.39ZM4.11 7.17C2.012 7.968.748 9.922.75 12C.75 16.004 4.11 19.364 8.114 19.364C10.706 19.364 12.87 18.062 14.076 16.1C13.278 18.062 11.114 19.364 8.522 19.364C4.518 19.364 1.158 16.004 1.158 12C1.158 9.922 2.422 7.968 4.52 7.17H4.11ZM18.11 7.17C16.012 7.968 14.748 9.922 14.75 12C14.75 16.004 18.11 19.364 22.114 19.364C24.706 19.364 26.87 18.062 28.076 16.1C27.278 18.062 25.114 19.364 22.522 19.364C18.518 19.364 15.158 16.004 15.158 12C15.158 9.922 16.422 7.968 18.52 7.17H18.11Z" transform="translate(-4 -6)"/></svg>

                        <p class="text-gray-600 mt-6 flex-grow">
                            "I was skeptical at first, but my income started within 3 months. The products are also of very high quality."
                        </p>

                        <div class="flex items-center mt-8 pt-5 border-t border-gray-100">
                            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Priya+Singh" alt="Priya Singh">
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Priya Singh</p>
                                <p class="text-sm text-gray-500">Silver Manager</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="snap-start flex-shrink-0 w-80 md:w-96 bg-white rounded-xl shadow-lg p-8">
                    <div class="flex flex-col h-full">
                        <svg class="w-10 h-10 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.924 12.39C6.326 14.138 4.962 15.502 3.214 16.1C3.812 14.352 5.176 12.988 6.924 12.39ZM20.924 12.39C20.326 14.138 18.962 15.502 17.214 16.1C17.812 14.352 19.176 12.988 20.924 12.39ZM4.11 7.17C2.012 7.968.748 9.922.75 12C.75 16.004 4.11 19.364 8.114 19.364C10.706 19.364 12.87 18.062 14.076 16.1C13.278 18.062 11.114 19.364 8.522 19.364C4.518 19.364 1.158 16.004 1.158 12C1.158 9.922 2.422 7.968 4.52 7.17H4.11ZM18.11 7.17C16.012 7.968 14.748 9.922 14.75 12C14.75 16.004 18.11 19.364 22.114 19.364C24.706 19.364 26.87 18.062 28.076 16.1C27.278 18.062 25.114 19.364 22.522 19.364C18.518 19.364 15.158 16.004 15.158 12C15.158 9.922 16.422 7.968 18.52 7.17H18.11Z" transform="translate(-4 -6)"/></svg>

                        <p class="text-gray-600 mt-6 flex-grow">
                            "Even as a student, I am able to generate a side income from here. The referral system is very transparent."
                        </p>

                        <div class="flex items-center mt-8 pt-5 border-t border-gray-100">
                            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Amit+Kumar" alt="Amit Kumar">
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Amit Kumar</p>
                                <p class="text-sm text-gray-500">Distributor</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="snap-start flex-shrink-0 w-80 md:w-96 bg-white rounded-xl shadow-lg p-8">
                    <div class="flex flex-col h-full">
                        <svg class="w-10 h-10 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.924 12.39C6.326 14.138 4.962 15.502 3.214 16.1C3.812 14.352 5.176 12.988 6.924 12.39ZM20.924 12.39C20.326 14.138 18.962 15.502 17.214 16.1C17.812 14.352 19.176 12.988 20.924 12.39ZM4.11 7.17C2.012 7.968.748 9.922.75 12C.75 16.004 4.11 19.364 8.114 19.364C10.706 19.364 12.87 18.062 14.076 16.1C13.278 18.062 11.114 19.364 8.522 19.364C4.518 19.364 1.158 16.004 1.158 12C1.158 9.922 2.422 7.968 4.52 7.17H4.11ZM18.11 7.17C16.012 7.968 14.748 9.922 14.75 12C14.75 16.004 18.11 19.364 22.114 19.364C24.706 19.364 26.87 18.062 28.076 16.1C27.278 18.062 25.114 19.364 22.522 19.364C18.518 19.364 15.158 16.004 15.158 12C15.158 9.922 16.422 7.968 18.52 7.17H18.11Z" transform="translate(-4 -6)"/></svg>

                        <p class="text-gray-600 mt-6 flex-grow">
                            "The weekly payout system is amazing. The money gets credited to the account on time. Highly recommended!"
                        </p>

                        <div class="flex items-center mt-8 pt-5 border-t border-gray-100">
                            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Sunita+Devi" alt="Sunita Devi">
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Sunita Devi</p>
                                <p class="text-sm text-gray-500">Diamond Leader</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 5 --}}
                <div class="snap-start flex-shrink-0 w-80 md:w-96 bg-white rounded-xl shadow-lg p-8">
                    <div class="flex flex-col h-full">
                        <svg class="w-10 h-10 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.924 12.39C6.326 14.138 4.962 15.502 3.214 16.1C3.812 14.352 5.176 12.988 6.924 12.39ZM20.924 12.39C20.326 14.138 18.962 15.502 17.214 16.1C17.812 14.352 19.176 12.988 20.924 12.39ZM4.11 7.17C2.012 7.968.748 9.922.75 12C.75 16.004 4.11 19.364 8.114 19.364C10.706 19.364 12.87 18.062 14.076 16.1C13.278 18.062 11.114 19.364 8.522 19.364C4.518 19.364 1.158 16.004 1.158 12C1.158 9.922 2.422 7.968 4.52 7.17H4.11ZM18.11 7.17C16.012 7.968 14.748 9.922 14.75 12C14.75 16.004 18.11 19.364 22.114 19.364C24.706 19.364 26.87 18.062 28.076 16.1C27.278 18.062 25.114 19.364 22.522 19.364C18.518 19.364 15.158 16.004 15.158 12C15.158 9.922 16.422 7.968 18.52 7.17H18.11Z" transform="translate(-4 -6)"/></svg>

                        <p class="text-gray-600 mt-6 flex-grow">
                            "I've seen many MLM companies, but SphareMLM's UI and dashboard are the simplest and most powerful. It's easy to track everything."
                        </p>

                        <div class="flex items-center mt-8 pt-5 border-t border-gray-100">
                            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Vikram+Rathore" alt="Vikram Rathore">
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Vikram Rathore</p>
                                <p class="text-sm text-gray-500">Senior Manager</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 6 --}}
                <div class="snap-start flex-shrink-0 w-80 md:w-96 bg-white rounded-xl shadow-lg p-8">
                    <div class="flex flex-col h-full">
                        <svg class="w-10 h-10 text-blue-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.924 12.39C6.326 14.138 4.962 15.502 3.214 16.1C3.812 14.352 5.176 12.988 6.924 12.39ZM20.924 12.39C20.326 14.138 18.962 15.502 17.214 16.1C17.812 14.352 19.176 12.988 20.924 12.39ZM4.11 7.17C2.012 7.968.748 9.922.75 12C.75 16.004 4.11 19.364 8.114 19.364C10.706 19.364 12.87 18.062 14.076 16.1C13.278 18.062 11.114 19.364 8.522 19.364C4.518 19.364 1.158 16.004 1.158 12C1.158 9.922 2.422 7.968 4.52 7.17H4.11ZM18.11 7.17C16.012 7.968 14.748 9.922 14.75 12C14.75 16.004 18.11 19.364 22.114 19.364C24.706 19.364 26.87 18.062 28.076 16.1C27.278 18.062 25.114 19.364 22.522 19.364C18.518 19.364 15.158 16.004 15.158 12C15.158 9.922 16.422 7.968 18.52 7.17H18.11Z" transform="translate(-4 -6)"/></svg>

                        <p class="text-gray-600 mt-6 flex-grow">
                            "I completed my journey from a housewife to a business owner with SphareMLM. Thank you for this platform."
                        </p>

                        <div class="flex items-center mt-8 pt-5 border-t border-gray-100">
                            <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name=Anita+Jain" alt="Anita Jain">
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Anita Jain</p>
                                <p class="text-sm text-gray-500">Team Leader</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> {{-- End Slider --}}

            {{-- Navigation Buttons --}}
            <div class="flex justify-center mt-8 space-x-3">
                {{-- Prev Button --}}
                <button id="prev-btn" class="p-3 rounded-full bg-white shadow-md hover:bg-gray-100 transition duration-300 cursor-pointer">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                {{-- Next Button --}}
                <button id="next-btn" class="p-3 rounded-full bg-white shadow-md hover:bg-gray-100 transition duration-300 cursor-pointer">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

        </div> {{-- End Relative Wrapper --}}
    </div>
</div>
@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('testimonial-slider');

        // Check if slider exists to prevent errors on other pages
        if (!slider) {
            return;
        }

        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');

        // Check if all elements are present
        if (!prevBtn || !nextBtn || !slider.querySelector('.snap-start')) {
            console.warn('Testimonial slider elements not found.');
            return;
        }

        // Ek card ki width + gap kitna hai, yeh calculate karein
        // Hum pehle card ki chaurai (width) lete hain
        const cardWidth = slider.querySelector('.snap-start').offsetWidth;
        // Cards ke beech ka gap (space-x-8 ya 2rem ya 32px)
        const gap = parseInt(window.getComputedStyle(slider).gap) || 32;

        const scrollAmount = cardWidth + gap;

        // Next button click
        nextBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        // Prev button click
        prevBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });
    });
</script>
@endpush
