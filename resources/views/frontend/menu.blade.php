@php
    $prefix = 'Photo Editing Serive';
@endphp

<header class="header w-full">

    <header class='flex border-b bg-white font-sans min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center justify-between px-10 py-3 gap-4 w-full'>
            <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="{{ route('home') }}"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                                class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'>
                        <a href='{{ route('home') }}'
                            class='hover:text-blue-600 text-[15px] font-bold text-blue-600 block'>Home</a>
                        </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Service<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block" viewBox="0 0 24 24">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>
                        </a>
                        <ul
                            class='absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service', 'family') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Family {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service', 'headshorts') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Headshots {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service', 'matenity') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Maternity {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service', 'wedding') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Wedding {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Real Estate {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Beauty & Skin {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Boudoir {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Background Removal {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Product & E-Commerce {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Jewelry {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Retouching {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Food {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Clipping Path {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Shadow Creations {{ $prefix }}
                                </a>
                            </li>
                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    Image Masking {{ $prefix }}
                                </a>
                            </li>

                            <li class='border-b py-2 '>
                                <a href='{{ route('service') }}'
                                    class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>
                                    New-born {{ $prefix }}
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class='group max-lg:border-b max-lg:py-3 relative'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold lg:hover:fill-[#007bff] block'>Portfolio
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Pricing</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>About</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3'>
                        <a href='{{ route('contact') }}'
                            class='hover:text-[#007bff] text-gray-600 text-[15px] font-bold block'>Contact</a>
                    </li>
                </ul>
            </div>

            <div class='flex items-center space-x-8 max-lg:ml-auto'>
                {{-- <span class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                        class="cursor-pointer fill-[#333] hover:fill-[#007bff] inline" viewBox="0 0 64 64">
                        <path
                            d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                            data-original="#000000" />
                    </svg>
                    <span
                        class="absolute left-auto -ml-1 top-0 rounded-full bg-black px-1 py-0 text-xs text-white">0</span>
                </span> --}}

                <span class="relative">
                    <a href="{{ route('service') }}" class="capitalize font-bold bg-indigo-300 hover:bg-indigo-500 hover:text-white hover:shadow-md hover:shadow-gray-500 transition-all duration-700 px-5 py-2 rounded-md text-sm md:text-base ">Free tial</a>
                </span>
                <a href="{{ route('service') }}" class="capitalize font-bold bg-indigo-300 hover:bg-indigo-500 hover:text-white hover:shadow-md hover:shadow-gray-500 transition-all duration-700 px-5 py-2 rounded-md  text-sm md:text-base">quick edit </a>

                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <!--? Navbar -->
</header>


<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);
</script>
