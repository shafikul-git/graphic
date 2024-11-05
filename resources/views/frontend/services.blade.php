@section('title', ' Service')
@extends('layouts.servicePageLayout')
@vite(['resources/css/slider.css', 'resources/js/slider.js'])

@section('services')

    <section class="my-5">
        <div id="heroSectionBgChange"
            class="md:mb-[3rem] grid md:grid-cols-2 grid-cols-1 order-2 md:order-1 md:gap-[5rem] gap-3 p-[1rem] md:p-0 rounded-md">
            <div class="relative w-full ">
                <img id="originalImage" src="{{ url('frontend/others/photo-retouching.jpg') }}" alt=""
                    class="w-full h-full object-cover md:hidden">
                <div class="absolute bottom-0 w-full flex justify-center mb-4">
                    <div class="flex gap-8">
                        <x-animatedbutton onclick="changeImageOriginal()" buttonText="Original"
                            linkClass="py-[0.2rem] px-2 md:py-2 md:px-5" />
                        <x-animatedbutton onclick="changeImageWork()" buttonText="Work"
                            linkClass="py-[0.2rem] px-2 md:py-2 md:px-5" />
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 md:py-[3rem] lg:py-[5rem] xl:py-[8rem] xl:pr-[5rem] 2xl:py-[13rem] md:pr-[1rem]">
                <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">
                    High-end photo retouching
                </h3>
                <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-5">
                    Our experts guarantee extraordinary modifications using professional techniques to improve the quality
                    and overall look of every high-end photo.
                </p>
                <a href="#"
                    class="py-2 px-9 border border-indigo-300  rounded-md shadow-md shadow-gray-500 capitalize hover:bg-gray-900 hover:text-white transition-all duration-150">Try
                    For Free</a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-[5rem]">
            <div class="">
                <x-before-after beforeAfterKey="before_after_9" />
            </div>
            <div class="flex items-center">
                <div class="px-3 py-2">
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">
                        Image masking services
                    </h3>
                    <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-2">Remove backgrounds from
                        hair,
                        fur,
                        and difficult borders</p>
                    <button
                        class="font-bold livvicFontFamily py-3 px-5 bg-indigo-300 hover:bg-indigo-500 my-2 rounded-md capitalize shadow-md shadow-gray-500 transition-all duration-200 hover:text-white">get
                        Start</button>
                </div>
            </div>
        </div>

        <div class="my-[7rem] text-center livvicFontFamily">
            <h1 class="text-xl md:text-2xl lg:text-5xl font-extrabold ">Best Service the work it is</h1>
            <p class="text-sm md:text-xl lg:text-2xl font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eum expedita ullam eius ipsam, cumque sequi sed recusandae voluptates perspiciatis accusamus commodi
                molestias dolorem libero ipsa, officia quibusdam? Deleniti, labore. Mollitia.</p>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-[5rem]">
            <div class="flex items-center md:order-1 order-2">
                <div class="px-3 py-2">
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">Image masking services
                    </h3>
                    <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-2">Remove backgrounds from
                        hair,
                        fur,
                        and difficult borders</p>
                    <button
                        class="font-bold livvicFontFamily py-3 px-5 bg-indigo-300 hover:bg-indigo-500 my-2 rounded-md capitalize shadow-md shadow-gray-500 transition-all duration-200 hover:text-white">get
                        Start</button>
                </div>
            </div>
            <div class="md:order-2 order-1">
                <x-before-after beforeAfterKey="before_after_9" />
            </div>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-[5rem] mt-[4rem]">
            <div class="flex items-center md:order-2 order-2">
                <div class="px-3 py-2">
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">Image masking services
                    </h3>
                    <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-2">Remove backgrounds from
                        hair,
                        fur,
                        and difficult borders</p>
                    <button
                        class="font-bold livvicFontFamily py-3 px-5 bg-indigo-300 hover:bg-indigo-500 my-2 rounded-md capitalize shadow-md shadow-gray-500 transition-all duration-200 hover:text-white">get
                        Start</button>
                </div>
            </div>
            <div class="md:order-1 order-1">
                <x-before-after beforeAfterKey="before_after_1" />
            </div>
        </div>

        <div class="">
            <h3 class="livvicFontFamily text-center mt-[4rem] mb-4 text-xl md:text-2xl lg:text-5xl font-extrabold ">Our
                Retouch service List</h3>
            <div class="grid grid-cols-1 gap-3 md:grid-cols-3 md:gap-5">
                <div class="text-center align-middle p-[2rem] bg-[#e7e5e9] rounded-md">
                    <div class="">
                        <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2 uppercase">
                            BASIC
                        </h3>
                        <p class="font-normal livvicFontFamily text-sm  my-2 uppercase">
                            Package
                        </p>
                    </div>
                    <hr class="bg-indigo-700 py-[1px] rounded-xl">
                    <div class="">
                        <ul>
                            <li>newborn</li>
                            <li>wedding</li>
                            <li>metarnity</li>
                            <li>boudir</li>
                        </ul>
                    </div>
                    <button
                        class="py-2 mt-5 px-5 border border-indigo-300  rounded-md shadow-md shadow-gray-500 capitalize hover:bg-gray-900 hover:text-white transition-all duration-150">Try
                        Buy Now</button>
                </div>

                <div class="text-center align-middle p-[2rem] bg-[#e7e5e9] rounded-md">
                    <div class="">
                        <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2 uppercase">
                            BASIC
                        </h3>
                        <p class="font-normal livvicFontFamily text-sm  my-2 uppercase">
                            Package
                        </p>
                    </div>
                    <hr class="bg-indigo-700 py-[1px] rounded-xl">
                    <div class="">
                        <ul>
                            <li>newborn</li>
                            <li>wedding</li>
                            <li>metarnity</li>
                            <li>boudir</li>
                        </ul>
                    </div>
                    <button
                        class="py-2 mt-5 px-5 border border-indigo-300  rounded-md shadow-md shadow-gray-500 capitalize hover:bg-gray-900 hover:text-white transition-all duration-150">Try
                        Buy Now</button>
                </div>

                <div class="text-center align-middle p-[2rem] bg-[#e7e5e9] rounded-md">
                    <div class="">
                        <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2 uppercase">
                            BASIC
                        </h3>
                        <p class="font-normal livvicFontFamily text-sm  my-2 uppercase">
                            Package
                        </p>
                    </div>
                    <hr class="bg-indigo-700 py-[1px] rounded-xl">
                    <div class="">
                        <ul>
                            <li>newborn</li>
                            <li>wedding</li>
                            <li>metarnity</li>
                            <li>boudir</li>
                        </ul>
                    </div>
                    <button
                        class="py-2 mt-5 px-5 border border-indigo-300  rounded-md shadow-md shadow-gray-500 capitalize hover:bg-gray-900 hover:text-white transition-all duration-150">Try
                        Buy Now</button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 my-[4rem] rounded-md bg-[#ff5c33af]">
            <div class="flex items-center justify-center">
                <div class="text-center md:text-start pt-[1rem] md:pt-0">
                    <p class="font-normal livvicFontFamily text-sm  my-2 uppercase">
                        Package
                    </p>
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2 uppercase">
                        Try For Free
                    </h3>
                    <ul class="text-start">
                        <li>Fast, high-quality photo editing</li>
                        <li>Receive your edited image within 24 hours</li>
                        <li>24/7 customer support you can rely on</li>
                    </ul>
                </div>
            </div>
            <div class="">
                <x-freeTrial />
            </div>
        </div>

        <div class="">
            <div class="px-[3rem] md:px-[7rem] lg:px-[12rem] xl:px-[16rem] text-center ">
                <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2 uppercase">
                    Other services build your one-of-a-kind
                </h3>
                <p class="font-normal  text-sm  my-2 uppercase">
                    Ephotovn has been the most trusted agency in online photo retouching. Simply upload your photos, provide
                    your requirements, and we'll handle the rest.
                </p>
            </div>

            <div class="mt-[4rem]">
                <div class="HeroSlider">
                    <div class="swiper ServiceSuggestSlider">
                        <div class="swiper-wrapper">


                            <div class="swiper-slide">
                                <div
                                    class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                                    <div class="flex items-center">
                                        <p class="text-sm text-gray-600 text-right">
                                           sdfsfsfsfsffsfsfsdfsdsdfsd
                                        </p>
                                        <img src="https://ephotovn.com/wp-content/themes/ephotoWand/assets/images/photo-retouching/portrait/after-5.jpg" class=" ml-6 rounded-full" loding="lazy"
                                            style="height: 200px; width: 300px;" />
                                    </div>
                                    <h3 class="text-gray-800 text-lg font-semibold mt-4">fsfsfsfsdfsdfsdffs</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                                    <div class="flex items-center">
                                        <p class="text-sm text-gray-600 text-right">
                                           sdfsfsfsfsffsfsfsdfsdsdfsd
                                        </p>
                                        <img src="https://ephotovn.com/wp-content/themes/ephotoWand/assets/images/photo-retouching/portrait/after-5.jpg" class=" ml-6 rounded-full" loding="lazy"
                                            style="height: 200px; width: 300px;" />
                                    </div>
                                    <h3 class="text-gray-800 text-lg font-semibold mt-4">fsfsfsfsdfsdfsdffs</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                                    <div class="flex items-center">
                                        <p class="text-sm text-gray-600 text-right">
                                           sdfsfsfsfsffsfsfsdfsdsdfsd
                                        </p>
                                        <img src="https://ephotovn.com/wp-content/themes/ephotoWand/assets/images/photo-retouching/portrait/after-5.jpg" class=" ml-6 rounded-full" loding="lazy"
                                            style="height: 200px; width: 300px;" />
                                    </div>
                                    <h3 class="text-gray-800 text-lg font-semibold mt-4">fsfsfsfsdfsdfsdffs</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                                    <div class="flex items-center">
                                        <p class="text-sm text-gray-600 text-right">
                                           sdfsfsfsfsffsfsfsdfsdsdfsd
                                        </p>
                                        <img src="https://ephotovn.com/wp-content/themes/ephotoWand/assets/images/photo-retouching/portrait/after-5.jpg" class=" ml-6 rounded-full" loding="lazy"
                                            style="height: 200px; width: 300px;" />
                                    </div>
                                    <h3 class="text-gray-800 text-lg font-semibold mt-4">fsfsfsfsdfsdfsdffs</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                                    <div class="flex items-center">
                                        <p class="text-sm text-gray-600 text-right">
                                           sdfsfsfsfsffsfsfsdfsdsdfsd
                                        </p>
                                        <img src="https://ephotovn.com/wp-content/themes/ephotoWand/assets/images/photo-retouching/portrait/after-5.jpg" class=" ml-6 rounded-full" loding="lazy"
                                            style="height: 200px; width: 300px;" />
                                    </div>
                                    <h3 class="text-gray-800 text-lg font-semibold mt-4">fsfsfsfsdfsdfsdffs</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                                    <div class="flex items-center">
                                        <p class="text-sm text-gray-600 text-right">
                                           sdfsfsfsfsffsfsfsdfsdsdfsd
                                        </p>
                                        <img src="https://ephotovn.com/wp-content/themes/ephotoWand/assets/images/photo-retouching/portrait/after-5.jpg" class=" ml-6 rounded-full" loding="lazy"
                                            style="height: 200px; width: 300px;" />
                                    </div>
                                    <h3 class="text-gray-800 text-lg font-semibold mt-4">fsfsfsfsdfsdfsdffs</h3>
                                </div>
                            </div>


                        </div>
                        
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

<style>
    #heroSectionBgChange {
        background-image: url("{{ url('frontend/others/photo-retouching.jpg') }}");
        background-size: cover;
        background-position: center;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSectionBgChange = document.getElementById('heroSectionBgChange');
        const originalImage = document.getElementById('originalImage');

        const photoRetouchingImage = "{{ url('frontend/others/photo-retouching.jpg') }}";
        const backdropImageUrl = "{{ url('frontend/others/backdrop.jpg') }}";

        function changeImageOriginal() {
            if (window.innerWidth >= 768) {
                heroSectionBgChange.style.backgroundImage = `url(${photoRetouchingImage})`;
            }
            originalImage.src = photoRetouchingImage;
            console.log("Displaying Original:", photoRetouchingImage);
        }

        function changeImageWork() {
            if (window.innerWidth >= 768) {
                heroSectionBgChange.style.backgroundImage = `url(${backdropImageUrl})`;
            }
            originalImage.src = backdropImageUrl;
            console.log("Displaying Retouched:", backdropImageUrl);
        }

        // Make functions globally accessible
        window.changeImageOriginal = changeImageOriginal;
        window.changeImageWork = changeImageWork;
    });
</script>
