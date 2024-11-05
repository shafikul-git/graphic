<x-guest-layout>
    <div class="md:mx-[1rem] lg:mx-[3rem] xl:mx-[5rem] mx-[0.2rem]">
        <section class="my-5">
            {{-- Hero Section --}}
            <x-service.hero />

            {{-- Before After Service Details --}}
            <x-service.beforeafter1 />

            {{-- Service Details Heading --}}
            <div class="my-[7rem] text-center livvicFontFamily">
                <h1 class="text-xl md:text-2xl lg:text-5xl font-extrabold ">Best Service the work it is</h1>
                <p class="text-sm md:text-xl lg:text-2xl font-normal">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Eum expedita ullam eius ipsam, cumque sequi sed recusandae voluptates perspiciatis accusamus commodi
                    molestias dolorem libero ipsa, officia quibusdam? Deleniti, labore. Mollitia.</p>
            </div>

            {{-- Before After Service Details --}}
            <x-service.beforeafter2 />

            {{-- Before After Service Details --}}
            <x-service.beforeafter3 />

            {{-- Service Package --}}
            <x-service.ourpackage />

            {{-- Slider Othe Cateogey --}}
            <x-service.othercategoryslider />


            {{-- Try For Free Form --}}
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

        </section>
    </div>
</x-guest-layout>
