<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Demo styles -->
<style>
    .HeroSlider {
        position: relative;
        height: 100%;
    }

    .swiper {
        width: 100%;
        height: 400px;
        background: #000;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #b39b9b;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".HeroSectionSlider", {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });

    // Pause autoplay on mouse enter
    var sliderContainer = document.querySelector('.HeroSectionSlider');
    sliderContainer.addEventListener('mouseenter', function() {
        swiper.autoplay.stop(); // Stop autoplay
    });

    // Resume autoplay on mouse leave
    sliderContainer.addEventListener('mouseleave', function() {
        swiper.autoplay.start(); // Start autoplay
    });
</script>
