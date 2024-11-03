<div class="desktopNavbar">
    <nav class="my-4 hidden lg:flex justify-center">
        <ul class="desktopNavbarUl flex justify-center items-center gap-12 font-sm font-bold text-gray-600">
            <li class="nav_items relative">
                <a href="#Home">HOME</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
            </li>
            <li class="nav_items relative category_nav_item">
                <a href="#Categories">CATEGORIES</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
                <!--? hoverItems -->
                <ul
                    class="categoriesItem absolute top-10 shadow-lg rounded-xl hidden grid-cols-4 p-4 gap-4 border text-gray-400 font-normal bg-white z-10">
                    <li>
                        <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                            Electronics
                        </h3>
                        <ul class="flex flex-col items-start justify-start gap-2">
                            <li>
                                <a href="#"> Desktop </a>
                            </li>
                            <li>
                                <a href="#"> Laptop </a>
                            </li>
                            <li>
                                <a href="#"> Camera </a>
                            </li>
                            <li>
                                <a href="#"> Tablet </a>
                            </li>
                            <li>
                                <a href="#"> Headphone </a>
                            </li>
                            <li>
                                <img src="{{ url('frontend/index/images/electronics-banner-1.jpg') }}"
                                    alt="pic" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                            Men's
                        </h3>
                        <ul class="flex flex-col items-start justify-start gap-2">
                            <li>
                                <a href="#"> Formal </a>
                            </li>
                            <li>
                                <a href="#"> Casual </a>
                            </li>
                            <li>
                                <a href="#"> Sports </a>
                            </li>
                            <li>
                                <a href="#"> Jacket </a>
                            </li>
                            <li>
                                <a href="#"> Sunglasses </a>
                            </li>
                            <li>
                                <img src="{{ url('frontend/index/images/electronics-banner-2.jpg') }}"
                                    alt="pic" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                            Women's
                        </h3>
                        <ul class="flex flex-col items-start justify-start gap-2">
                            <li>
                                <a href="#"> Formal </a>
                            </li>
                            <li>
                                <a href="#"> Casual </a>
                            </li>
                            <li>
                                <a href="#"> Perfume </a>
                            </li>
                            <li>
                                <a href="#"> Cosmetics </a>
                            </li>
                            <li>
                                <a href="#"> Bags </a>
                            </li>
                            <li><img src="{{ url('frontend/index/images/mens-banner.jpg') }}"
                                    alt="pic" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="border-b py-2 mb-4 text-gray-900 font-semibold">
                            Electronics
                        </h3>
                        <ul class="flex flex-col items-start justify-start gap-2">
                            <li>
                                <a href="#"> Smart </a>
                                Watch
                            </li>
                            <li>
                                <a href="#"> Smart </a>
                                TV
                            </li>
                            <li>
                                <a href="#"> Keyboard </a>
                            </li>
                            <li>
                                <a href="#"> Mouse </a>
                            </li>
                            <li>
                                <a href="#"> Microphone </a>
                            </li>
                            <li>
                                <img src="{{ url('frontend/index/images/womens-banner.jpg') }}"
                                    alt="pic" />
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--? hoverItems -->
            </li>
            <li class="nav_items relative men_nav_item">
                <a href="#Men">MEN'S</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
                <!--? hoverItems -->
                <ul
                    class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white">
                    <li>
                        <a href="#">Shirt</a>
                    </li>
                    <li>
                        <a href="#">Shorts & Jeans</a>
                    </li>
                    <li>
                        <a href="#">Safety</a>
                    </li>
                    <li>
                        <a href="#">Wallet</a>
                    </li>
                </ul>
                <!--? hoverItems -->
            </li>
            <li class="nav_items relative women_nav_item">
                <a href="#Women">WOMEN'S</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
                <!--? hoverItems -->
                <ul
                    class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white">
                    <li>
                        <a href="#">Dress & Frock</a>
                    </li>
                    <li>
                        <a href="#">Earrings</a>
                    </li>
                    <li>
                        <a href="#">Necklace</a>
                    </li>
                    <li>
                        <a href="#">Makeup Kit</a>
                    </li>
                </ul>
                <!--? hoverItems -->
            </li>
            <li class="nav_items relative jewelry_nav_item">
                <a href="#Jewelry">JEWELRY</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
                <!--? hoverItems -->
                <ul
                    class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white">
                    <li>
                        <a href="#">Earrings</a>
                    </li>
                    <li>
                        <a href="#">Couple Rings</a>
                    </li>
                    <li>
                        <a href="#">Necklace</a>
                    </li>
                    <li>
                        <a href="#">Bracelets</a>
                    </li>
                </ul>
                <!--? hoverItems -->
            </li>
            <li class="nav_items relative perfume_nav_item">
                <a href="#Perfume">PERFUME</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
                <!--? hoverItems -->
                <ul
                    class="hoveredItems w-52 absolute top-10 hidden flex-col items-start justify-start gap-2 p-4 rounded-xl shadow-lg border font-normal bg-white">
                    <li>
                        <a href="#">Clothes Perfume</a>
                    </li>
                    <li>
                        <a href="#">Flower Fragrance</a>
                    </li>
                    <li>
                        <a href="#">Safety</a>
                    </li>
                    <li>
                        <a href="#">Air Freshener</a>
                    </li>
                </ul>
                <!--? hoverItems -->
            </li>
            <li class="nav_items relative">
                <a href="#Blog">BLOG</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
            </li>
            <li class="nav_items relative">
                <a href="{{ route('shop') }}">SHOP</a>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-400 transition-all ease-in-out"></span>
            </li>
        </ul>
    </nav>
</div>