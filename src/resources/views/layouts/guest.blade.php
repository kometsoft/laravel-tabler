<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'Laravel') }} @hasSection('title') - @yield('title') @endif</title>

	<!-- Tabler Theme -->
	<link rel="stylesheet" href="{{ asset('vendor/tabler/assets/tabler.css') }}">
	<script type="module" src="{{ asset('vendor/tabler/assets/tabler2.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('style')
</head>

<body>
    <!-- Toasts -->
	<x-tabler::toast-group></x-tabler::toast-group>

    <div class="page page-center">
        @yield('content')
    </div>
    @stack('script')
</body>

</html>