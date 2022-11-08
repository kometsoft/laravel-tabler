<!doctype html>
<!--
* @version 1.0.0-beta14
* @link https://tabler.io
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name', 'Laravel') }} @hasSection('title') - @yield('title') @endif</title>
    
    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tabler Theme -->
    <link rel="stylesheet" href="{{ asset('vendor/tabler/assets/tabler.css') }}">
    <script type="module" src="{{ asset('vendor/tabler/assets/tabler2.js') }}"></script>

    <!-- Datatable -->
	<x-tabler::datatable-assets></x-tabler::datatable-assets>

	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@stack('style')
</head>

<body>
    <!-- Toasts -->
	<x-tabler::toast-group></x-tabler::toast-group>

    <div class="page">
        <!-- Sidebar -->
        @include('tabler::layouts.combined.sidebar')

        <!-- Header -->
        @include('tabler::layouts.combined.header')

        <div class="page-wrapper">
            <!-- Page header -->
            @yield('header')

            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
            @include('tabler::layouts.combined.footer')
        </div>
    </div>
	@stack('script')
</body>

</html>