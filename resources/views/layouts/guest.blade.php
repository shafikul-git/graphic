<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ecommarce - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--* favicon -->
    <link rel="shortcut icon" href="{{ url('frontend/index/images/logo/favicon.ico') }}" type="image/x-icon" />
    <!--! css link -->
    <link rel="stylesheet" href="{{ url('frontend/index/style.css') }}" />
    <!--? swiperjs cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--todo tailwind cdn link -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>

</head>

<body>

    <x-frontend.newslatterPopup />
    @include('frontend.menu')

    <main>
        {{ $slot }}
    </main>

    <!--todo footer -->
    <x-frontendFooter />
    <!--! icons -->
    <script src="https://kit.fontawesome.com/ed5a9b6893.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}"></script>

    <!--!javascript file  -->
    <script type="module" src="{{ url('frontend/index/index.js') }}"></script>

</body>

</html>
