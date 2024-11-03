
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js";

const newspaper = document.getElementById("newspaper");
const newspaperOverlay = document.getElementById("newspaperOverlay");
const openNavbarButton = document.getElementById("openNavbarButton");
const overlayNavbar = document.getElementById("overlayNavbar");
const sidebarNavbar = document.getElementById("sidebarNavbar");
const categoriesBtn = document.getElementById("categoriesBtn");
const sidebarCategories = document.getElementById("sidebarCategories");
const closeButton = document.querySelectorAll(".closeButton");
const swiperr = document.querySelector(".swiper");
const categories_swiper = document.querySelector(".categories_swiper");

const details = document.querySelectorAll("details");

//! close summary tag when another is open
// Add the onclick listeners.
details.forEach((targetDetail) => {
  targetDetail.addEventListener("click", () => {
    // Close all the details that are not targetDetail.
    details.forEach((detail) => {
      if (detail !== targetDetail) {
        detail.removeAttribute("open");
      }
    });
  });
});

// ! newspaper
window.addEventListener("load", () => {
  setTimeout(() => {
    newspaper.classList.add("show");
  }, 2000);
});
//! close mobile navbar
overlayNavbar.addEventListener("click", closed);
newspaperOverlay.addEventListener("click", closed);
closeButton[0].addEventListener("click", closed);
closeButton[1].addEventListener("click", closed);
if(closeButton[2]){
  closeButton[2].addEventListener("click", closed);
}

function closed() {
  sidebarNavbar.classList.remove("show");
  sidebarCategories.classList.remove("show");
  overlayNavbar.classList.remove("show");
  newspaper.classList.remove("show");
}

//! open mobile navbar
openNavbarButton.addEventListener("click", openNavbar);
function openNavbar() {
  sidebarNavbar.classList.add("show");
  overlayNavbar.classList.add("show");
}
// !open categories sidebar
categoriesBtn.addEventListener("click", openCategories);
function openCategories() {
  sidebarCategories.classList.add("show");
  overlayNavbar.classList.add("show");
}





const swiper = new Swiper(swiperr, {
  grabCursor: true,
  autoplay: {
    delay: 5000,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});

const categoriesSwiper = new Swiper(categories_swiper, {
  grabCursor: true,
  slidesPerView: 4,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
    },
    800: {
      slidesPerView: 4,
    },
  },
  autoplay: {
    delay: 2000,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});




