import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function () {
    // Hero Section All Work
    var HeroSectionSlider = new Swiper(".HeroSectionSlider", {
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

    // Service page suggest other service
    var otherService = new Swiper(".ServiceSuggestSlider", {
        effect: "coverflow",
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        slidesPerView: 3,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },

    });

    // Pause autoplay on mouse enter
    var sliderContainer = document.querySelector(".HeroSectionSlider");
    if (sliderContainer) {
        sliderContainer.addEventListener("mouseenter", function () {
            HeroSectionSlider.autoplay.stop();
        });

        // Resume autoplay on mouse leave
        sliderContainer.addEventListener("mouseleave", function () {
            HeroSectionSlider.autoplay.start();
        });
    }
});
