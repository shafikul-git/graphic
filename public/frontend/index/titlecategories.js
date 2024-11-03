
import {
    TitleCategories,
  } from "./dummy.js";
  import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";
  
//! title categories swiper data

document.getElementById("titlecategories").innerHTML = TitleCategories.map(
    (item) =>
      `
    <div
        class="categories_slide_swiper cursor-pointer rounded-xl swiper-slide h-full flex items-start justify-between border shadow-xl p-4"
        data-swiper-autoplay="1000"
    >
        <div
            class="w-12 h-12 border-2 bg-gray-400/20 rounded-lg flex items-center justify-center"
        >
        <img class="w-8 h-8" src="${item.icon}" title="productPic">
    </div>
        <div class="mr-auto ml-2">  
            <h3 class="font-semibold md:font-bold text-xs md:text-sm text-gray-700 mb-1">${item.title}</h3>
            <button type="button" class="border-0 text-xs md:text-sm font-semibold text-red-400">Show All</button>
        </div>
        
        <span class="text-gray-400 text-xs">${item.count}</span>
          
    </div>
    `
  ).join("");
  
  