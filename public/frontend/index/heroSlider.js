
import {
  swiperData,
} from "./dummy.js";
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

//! swiper data
document.getElementById("swiperSlide").innerHTML = swiperData
  .map(
    (item) =>
      `
        <div
          class="swiper-slide cursor-pointer w-full h-full rounded-xl flex items-center"
          data-swiper-autoplay="2000"
          style="background-image: url('${item.avatar}')"
        >
          <div
            class="w-3/4 md:w-1/2 lg:ml-10 p-6 bg-gray-300/50 lg:bg-transparent rounded-xl flex flex-col justify-start items-start gap-2 ml-4"
          >
            <h3 class="text-red-500 text-lg font-semibold lg:font-bold lg:text-xl">
              ${item.title}
            </h3>
            <h1 class="text-gray-800 text-2xl lg:text-4xl font-extrabold">
              ${item.info}
            </h1>
            <h4 class="text-gray-500 lg:text-xl lg:mb-4">
              ${item.price}
            </h4>
            <button
              class="font-semibold px-3 py-2 text-xs text-white bg-red-400 rounded-xl"
              type="button"
            >
              ${item.button}
            </button>
          </div>
        </div>
  `
  )
  .join("");
