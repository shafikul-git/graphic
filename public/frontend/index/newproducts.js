import {
  NewProducts,
} from "./dummy.js";
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

//! new Products
document.getElementById("newProducts").innerHTML = NewProducts.map(
    (item) =>
      `
      <div
      class="product_pic cursor-pointer overflow-hidden flex flex-col gap-2 p-4 w-full h-92 border shadow-md bg-white rounded-lg relative"
    >
      <div
        class="z-10 tax absolute top-2 left-2 bg-green-600 text-white text-sm font-bold border rounded-md"
      >
      ${item.present}
      </div>
      <div
        class="productOptions hidden flex-col gap-2 absolute right-2 top-2 text-xl font-semibold z-10"
      >
        <div
          class="w-8 h-8 bg-white rounded-lg shadow-md border flex items-center justify-center cursor-pointer text-gray-700 hover:text-white hover:bg-gray-700"
        >
          <ion-icon name="heart-outline"></ion-icon>
        </div>
        <div
          class="w-8 h-8 bg-white rounded-lg shadow-md border flex items-center justify-center cursor-pointer text-gray-700 hover:text-white hover:bg-gray-700"
        >
          <ion-icon name="eye-outline"></ion-icon>
        </div>
        <div
          class="w-8 h-8 bg-white rounded-lg shadow-md border flex items-center justify-center cursor-pointer text-gray-700 hover:text-white hover:bg-gray-700"
        >
          <ion-icon name="repeat-outline"></ion-icon>
        </div>
        <div
          class="w-8 h-8 bg-white rounded-lg shadow-md border flex items-center justify-center cursor-pointer text-gray-700 hover:text-white hover:bg-gray-700"
        >
          <ion-icon name="bag-add-outline"></ion-icon>
        </div>
      </div>
      <div
        class="w-full h-1/2 mb-2"
        style="
          background-image: url('${item.productPic}');
        "
      >
        <img
          class="product_hover_pic w-full h-full"
          src="${item.productHover}"
          alt=""
        />
      </div>
  
      <h3 class="text-red-500">${item.productName}</h3>
      <h5>${item.productInfo}</h5>
  
      <div class="stars text-yellow-500">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star-half-outline"></ion-icon>
      </div>
      <div
        class="flex items-center justify-start gap-4 font-semibold text-sm"
      >
        <strong>${item.taxPrice}</strong>
        <s class="text-gray-500">${item.productPrice}</s>
      </div>
    </div>
      `
  ).join("");