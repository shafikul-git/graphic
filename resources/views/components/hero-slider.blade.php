@vite(['resources/css/slider.css', 'resources/js/slider.js'])

<div class="HeroSlider">
    <div class="swiper HeroSectionSlider w-full h-[80vh] relative">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div class="swiper-slide h-full bg-cover bg-center relative animate-slideInBackground" style="background-image: url('{{ $slide->image ?? url('frontend/image/slider/1.png') }}');">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                    <!-- Content -->
                    <div class="relative z-10 flex flex-col items-start justify-center h-full max-w-xl mx-auto px-8 text-left">
                        <h3 class="text-white text-4xl font-semibold mb-4 animate-slideUpContent">{{ $slide->title ?? 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' }}</h3>
                        <p class="text-white text-lg mb-6 animate-slideUpContent">
                            {{ $slide->description ?? 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo odit, perspiciatis vero sunt cum temporibus odio provident necessitatibus aspernatur culpa?' }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>


</div>


<style>
.HeroSectionSlider {
    width: 100%;
    height: 80vh;
}

.swiper-slide {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    animation: slideInBackground 0.8s ease forwards;
}

.animate-slideUpContent {
    opacity: 0;
    transform: translateY(30px);
    animation: slideUpContent 0.8s ease-in-out forwards;
    animation-delay: 0.3s;
}

@keyframes slideInBackground {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideUpContent {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


</style>
