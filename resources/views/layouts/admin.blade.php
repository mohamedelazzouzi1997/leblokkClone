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
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/adminstyle.min.css') }}">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    @yield('styles')
</head>

<body class="bg-slate-100">

    @if (request()->route()->getName() != 'profile.show' ||
            request()->route()->getName() != 'dashboard')
        @php
            $bookings = app\Models\Resevation::where('deleted', 0)->get();
            $deleted_bookings = app\Models\Resevation::where('deleted', 1)->get();
        @endphp
    @endif
    @include('navigation-menu')
    @yield('content')


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('scripts')

</body>

</html>
