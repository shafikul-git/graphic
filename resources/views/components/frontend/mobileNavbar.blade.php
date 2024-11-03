<div class="mobileNavbar">
    <!--? navbar button -->
    <div style="box-shadow: 0 0 0.3rem lightgray"
        class="z-10 bg-white w-96 lg:hidden flex justify-around items-center p-4 border rounded-t-xl fixed bottom-0 left-1/2 -translate-x-1/2 text-lg">
        <button id="openNavbarButton" type="button">
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <button class="relative" type="button">
            <span
                class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full">
                0
            </span>
            <ion-icon name="bag-handle-outline"></ion-icon>
        </button>

        <button type="button">
            <ion-icon name="home-outline"></ion-icon>
        </button>

        <button class="relative" type="button">
            <span
                class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full">
                0
            </span>
            <ion-icon name="heart-outline"></ion-icon>
        </button>

        <button id="categoriesBtn" type="button">
            <ion-icon name="grid-outline"></ion-icon>
        </button>
    </div>
    <!--* overlay -->
    <div id="overlayNavbar" class="hidden fixed top-0 left-0 w-screen h-screen bg-gray-500/30 z-10"></div>

    <!--! sidebarNavbar -->
    <div class="fixed top-0 w-72 h-screen bg-white p-4 shadow-lg hidden flex-col justify-start gap-4 text-lg font-semibold overflow-auto z-20"
        id="sidebarNavbar">
        <div class="flex justify-between border-b-2 py-4">
            <h3 class="text-red-400">Menu</h3>
            <button class="closeButton hover:text-red-500">
                <ion-icon name="close-circle-outline"></ion-icon>
            </button>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">Home</div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Shirt</a>
                <a href="#">Shorts & Jeans</a>
                <a href="#">Safety Shoes</a>
                <a href="#">Wallet</a>
                <summary>Men's</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Dress & Frock</a>
                <a href="#">Earrings</a>
                <a href="#">Necklace</a>
                <a href="#">Makeup Kit</a>
                <summary>Women's</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Earrings</a>
                <a href="#">Couple Rings</a>
                <a href="#">Necklace</a>
                <a href="#">Bracelets</a>
                <summary>Jewelry</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <a href="#">Clothes Perfume</a>
                <a href="#">Deodorant</a>
                <a href="#">Flower Fragrance</a>
                <a href="#">Air Freshener</a>
                <summary>Perfume</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <a href="#">Blog</a>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <a href="#">Hot Offers</a>
        </div>

        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <div class="border rounded-xl shadow-xl flex flex-col items-start">
                    <a class="border-b w-full pb-2" href="#">English</a>
                    <a class="border-b w-full pb-2" href="#">Persian</a>
                </div>
                <summary>Language</summary>
            </details>
        </div>
        <div class="mobile_navbar_item border-b pb-3 text-gray-600">
            <details>
                <div class="border rounded-xl shadow-xl flex flex-col items-start">
                    <a class="border-b w-full pb-2" href="#">USD $</a>
                    <a class="border-b w-full pb-2" href="#">EUR €</a>
                </div>
                <summary>Currency</summary>
            </details>
        </div>

        <div class="icons flex items-center justify-center gap-4">
            <a class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center"
                href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center"
                href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a class="text-gray-900 bg-gray-300/50 p-2 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center"
                href="#">
                <ion-icon name="logo-github"></ion-icon>
            </a>
        </div>
    </div>

    <!--todo sidebarCategories -->
    <div id="sidebarCategories"
    class="fixed top-0 w-80 h-screen bg-white p-6 shadow-lg hidden flex-col justify-start gap-4 font-semibold overflow-auto z-20">
        @stack('todoMobileMenu')
    </div>
</div>