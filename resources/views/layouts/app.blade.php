<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="icon"
        href="https://leblokkmarrakech.com/wp-content/uploads/2021/04/cropped-android-chrome-512x512-2-32x32.png"
        sizes="32x32" />
    @yield('befor-style')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/f4eca1ee68.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    @yield('styles')
</head>

<body class="bg-black">

    @include('layouts.navbar')

    @yield('content')

    <button id="toTop" class="fixed z-30 rounded-md bottom-5 right-5 px-3 py-2 bg-orange-300 text-white"><i
            class="fa-solid fa-chevron-up"></i></button>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    @yield('scripts')
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
                $('#navtop').addClass('md:fixed md:top-0 md:z-50')
            } else {
                $('#toTop').fadeOut();
                $('#navtop').removeClass('md:fixed md:top-0 md:z-50')
            }
        });
        $("#toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });
    </script>
</body>

</html>
