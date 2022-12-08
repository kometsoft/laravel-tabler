<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

    <title>{{ config('app.name', 'Laravel') }} @hasSection('title') - @yield('title') @endif</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @stack('style')
</head>

<body>
    <!-- Toasts -->
    <x-tabler::toast-group></x-tabler::toast-group>

    <!-- Header -->
    @include('layouts._header')

    <div class="page-wrapper">
        <div class="page-body pt-4">
            <div class="container-xl">
                @yield('content')
            </div>
        </div>
    </div>
    @stack('script')
</body>

</html>