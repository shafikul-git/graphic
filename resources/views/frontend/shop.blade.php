@section('title', 'Shop')
<x-guest-layout>
    <!-- !banner -->
    <x-frontend.heroSlider />


    <div class="bg-gray-100 rounded-lg p-3 flex items-center flex-wrap">
        <ul class="flex items-center">
            <li class="inline-flex items-center">
                <a href="#" class="text-gray-600 hover:text-blue-500">
                    <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                    </svg>
                </a>

                <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
            </li>

            <li class="inline-flex items-center">
                <a href="#" class="text-gray-600 hover:text-blue-500">
                    Page 1
                </a>

                <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
            </li>

            <li class="inline-flex items-center">
                <a href="#" class="text-gray-600 hover:text-blue-500">
                    Page 2
                </a>

                <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
            </li>

            <li class="inline-flex items-center">
                <a href="#" class="text-gray-600 hover:text-blue-500 ">
                    Page 3
                </a>
            </li>
        </ul>
    </div>



    <!--? Products and categories  -->
    <section class="w-full min-h-auto px-8 lg:px-0 lg:w-5/6 mx-auto mt-16 flex gap-8">
        <aside class="sticky top-0 hidden lg:flex flex-col lg:w-1/4 max-h-screen">
            <div class="aside_section overflow-y-auto">
                @push('todoMobileMenu')
                    <x-frontend.category />
                    <x-frontend.customSelect.price />
                    <x-frontend.customSelect.brand />
                    <x-frontend.customSelect.size />
                    <x-frontend.customSelect.colour />
                    <x-frontend.customSelect.customCode />
                    <x-frontend.bestSeller />
                @endpush

                <x-frontend.category />
                <x-frontend.customSelect.price />
                <x-frontend.customSelect.brand />
                <x-frontend.customSelect.size />
                <x-frontend.customSelect.colour />
                <x-frontend.customSelect.customCode />
                <x-frontend.bestSeller />
            </div>
        </aside>

        <div class="products w-full lg:w-3/4 flex flex-col">

            <div
                class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4 p-4 border-b">
                <!-- Sort By Section -->
                <div class="flex items-center space-x-2">
                    <span class="text-gray-600">Sort By:</span>
                    <select
                        class="border border-gray-300 rounded-md px-3 py-1 text-gray-700 focus:outline-none focus:ring focus:ring-gray-200">
                        <option>Default sorting</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>

                <!-- View Toggle Buttons -->
                <div class="flex space-x-1">

                    <!-- Show Count Section -->
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-600">Show:</span>
                        <div class="relative">
                            <select
                                class="border border-gray-300 rounded-md pl-3 pr-8 py-1 text-gray-700 focus:outline-none focus:ring focus:ring-gray-200 appearance-none">
                                <option>9</option>
                                <option>12</option>
                                <option>24</option>
                            </select>
                        </div>
                    </div>


                    <!-- Grid View Button -->
                    <button
                        class="p-2 border rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M4 4h3v3H4V4zm0 5h3v3H4V9zm0 5h3v3H4v-3zm5-10h3v3H9V4zm0 5h3v3H9V9zm0 5h3v3H9v-3zm5-10h3v3h-3V4zm0 5h3v3h-3V9zm0 5h3v3h-3v-3z" />
                        </svg>
                    </button>
                    <!-- List View Button -->
                    <button
                        class="p-2 border rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4h14v2H3V4zm0 4h14v2H3V8zm0 4h14v2H3v-2zm0 4h14v2H3v-2z" />
                        </svg>
                    </button>
                </div>
            </div>


            {{-- aLL Product --}}
            <x-frontend.newProducts />



        </div>

    </section>

    <div
        class="mt-10 w-full px-8 lg:px-0 lg:w-5/6 mx-auto flex flex-wrap lg:flex-nowrap flex-col lg:flex-row gap-8 mb-20">


        <!-- Discound Offer Vacation Banner -->
        <x-frontend.discountOffer />

        <!-- Our Service Deails -->
        <x-frontend.ourService />
    </div>


</x-guest-layout>

