@section('title', 'All Service')
@extends('layouts.servicePageLayout')

@section('services')

    <section class="my-5">
        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-[5rem]">
            <div class="">
                <x-before-after beforeAfterKey="before_after_9" />
            </div>
            <div class="flex items-center">
                <div class="px-3 py-2">
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">Image masking services
                    </h3>
                    <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-2">Remove backgrounds from hair,
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
            <p class="text-sm md:text-xl lg:text-2xl font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum expedita ullam eius ipsam, cumque sequi sed recusandae voluptates perspiciatis accusamus commodi molestias dolorem libero ipsa, officia quibusdam? Deleniti, labore. Mollitia.</p>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-[5rem]">
            <div class="flex items-center md:order-1 order-2">
                <div class="px-3 py-2">
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">Image masking services
                    </h3>
                    <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-2">Remove backgrounds from hair,
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
            <div class="flex items-center md:order-2 order-1">
                <div class="px-3 py-2">
                    <h3 class="livvicFontFamily text-xl md:text-2xl lg:text-5xl font-extrabold my-2">Image masking services
                    </h3>
                    <p class="font-normal livvicFontFamily text-sm md:text-xl lg:text-2xl my-2">Remove backgrounds from hair,
                        fur,
                        and difficult borders</p>
                    <button
                        class="font-bold livvicFontFamily py-3 px-5 bg-indigo-300 hover:bg-indigo-500 my-2 rounded-md capitalize shadow-md shadow-gray-500 transition-all duration-200 hover:text-white">get
                        Start</button>
                </div>
            </div>
            <div class="md:order-1 order-1">
               <img src="https://pathedits.com/cdn/shop/files/masking-about-ugg-boot_large.png?v=1628340141" alt="">
            </div>
        </div>

    </section>

@endsection
