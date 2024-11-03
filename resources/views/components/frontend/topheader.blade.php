 <!--! topHeader -->
 <div class="top-header w-screen flex flex-col items-center justify-between border-b">
    <div class="flex w-full items-center justify-between p-4 md:px-20 border-b">
        <div class="icons hidden lg:flex items-center gap-2">
            <a class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center transition-all"
                href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center transition-all"
                href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            <a class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-red-400 flex items-center justify-center transition-all"
                href="#">
                <ion-icon name="logo-github"></ion-icon>
            </a>
        </div>
        <h3 class="text-gray-400 font-semibold text-xs">
            FREE SHIPPING THIS WEEK ORDER OVER - $55
        </h3>
        <div class="select hidden md:flex">
            <select class="mr-2 p-1 px-2 text-sm font-semibold" id="currency">
                <option value="USD">USD $</option>
                <option value="EUR">EUR €</option>
            </select>
            <select class="mr-2 p-1 px-2 text-sm font-semibold" id="language">
                <option value="Persian">English</option>
                <option value="English">Persian</option>
            </select>
        </div>
    </div>
    <div class="gap-4 flex flex-col sm:flex-row w-full items-center justify-between p-6 md:px-24">
        <h1 class="font-semibold text-4xl text-gray-600">Anon</h1>
        <form class="relative w-full sm:w-3/5">
            <input class="w-full h-full p-2 border rounded-xl" placeholder="Enter Your Product Name..."
                id="search" type="text" />
            <label class="absolute right-2 top-2" for="search">
                <i class="fa-solid fa-magnifying-glass cursor-pointer"></i>
            </label>
        </form>
        <div class="icons hidden mr-2 text-3xl md:flex gap-8 text-gray-600">
            <div class="relative">
               <a href="{{ route('dashboard-analytics') }}">
                <ion-icon name="person-outline"></ion-icon>
               </a>
            </div>
            <div class="relative">
                <span
                    class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full">0</span>
               <a href="{{ route('wishlist') }}">
                <ion-icon name="heart-outline"></ion-icon>
               </a>
            </div>
            <div class="relative">
                <span class="text-xs text-center font-semibold text-white absolute -top-2 -right-2 w-4 h-4 bg-red-400 rounded-full">0</span>
                <a href="{{ route('cart') }}">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                </a>
            </div>
            @if (Auth::check())
                <div class="relative">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"> <ion-icon name="log-out"></ion-icon></button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
<!--! topHeader -->
