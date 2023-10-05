<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- START CSS  -->
    <link rel="stylesheet" href="{{ asset('/css/app-bf.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/pp-imd.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.rtl.min.css') }}">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="{{ asset('/js/scrtips.js') }}"></script>
<script>
    // PARALLAX ANIMATION 
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);
    var scene1 = document.getElementById('scene1');
    var parallaxInstance = new Parallax(scene1);

    // SPINER PRELOAD VIDEO
    // document.querySelector('.mainVideo').addEventListener('canplay', function() {
    // document.querySelector('.loader').style.display = 'none';
    // document.querySelector('.playicon').style.display = 'block';
    // });
</script>
</body>
</html>