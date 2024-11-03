import {
    BolgSwiper,
  } from "./dummy.js";
  import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

const blog_swiper = document.querySelector(".blog_swiper");

document.getElementById("blog_swiper").innerHTML = BolgSwiper.map(
    (item) =>
      `
    <div class="swiper-slide">
    <div
     class="rounded-lg w-full h-40"
     style="background-image: url('${item.pic}')">
    </div>
    <div class="mt-4 flex flex-col items-start justify-start gap-2">
    <h3 class="text-red-400">${item.title}</h3>
    <h2 class="font-semibold text-sm lg:text-lg hover:text-red-500 cursor-pointer">${item.info}</h2>
    <h4 class="text-gray-500 text-xs lg:text-sm">${item.date}</h4>
    </div>
    </div>
    `
  ).join("");


  const blogswiper = new Swiper(blog_swiper, {
    grabCursor: true,
    slidesPerView: 4,
    spaceBetween: 20,
    breakpoints: {
      // when window width is >= 320px
      400: {
        slidesPerView: 1,
      },
      // when window width is >= 480px
      460: {
        slidesPerView: 2,
      },
      // when window width is >= 640px
      800: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });
  