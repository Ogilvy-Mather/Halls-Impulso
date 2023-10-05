<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- START CSS  -->
    <link rel="stylesheet" href="{{ asset('/css/app-bf.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/pp-imd.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
    <div id="app-halls">
        <main class="">
            @yield('content')
        </main>
    </div>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>