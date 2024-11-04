<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Graphic - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--* favicon -->
    <link rel="shortcut icon" href="{{ url('frontend/index/images/logo/favicon.ico') }}" type="image/x-icon" />
    <!--! css link -->
    <script defer src="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    @stack('heads')
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    @vite(['resources/css/app.css'])
</head>

<body>

    @include('frontend.menu')

    <main class="min-h-[70vh]">
        {{ $slot }}
    </main>

    <x-front-end-footer />

    <!--! icons -->
    <script src="https://kit.fontawesome.com/ed5a9b6893.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js') }}"></script>

    @stack('scripts')
</body>

</html>
