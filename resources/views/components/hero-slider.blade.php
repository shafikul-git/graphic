@vite(['resources/css/slider.css', 'resources/js/slider.js'])

<div class="HeroSlider">
    <div class="swiper HeroSectionSlider">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div class="swiper-slide">
                    <div
                        class="bg-white sm:p-8 shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full max-w-xl rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                        <div class="flex items-center">
                            <p class="text-sm text-gray-600 text-right">
                                {{ $slide->description }}
                            </p>
                            <img src="{{ $slide->image }}" class=" ml-6 rounded-full" loding="lazy" style="height: 200px; width: 300px;" />
                        </div>
                        <h3 class="text-gray-800 text-lg font-semibold mt-4">{{ $slide->title }}</h3>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
