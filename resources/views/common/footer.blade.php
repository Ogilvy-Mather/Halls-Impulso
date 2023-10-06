<!-- Footer and copyrights -->
<footer class="p-4">
    <div class="container">
        <!-- Logo Halls -->
        <div class="row text-center mb-4">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logos/halls.png') }}" alt="Halls Logo">
            </a>
        </div>
            <!-- Links copyright -->
        <div class="row d-flex flex-column flex-lg-row justify-content-center gap-lg-5 mb-4 ff-gotham-bold">
                    <a href="#" class="d-block text-decoration-none text-center w-auto mx-5">
                        Políticas de Privacidad
                    </a>                
                    <a href="#" class="d-block text-decoration-none text-center w-auto mx-5">
                        Aviso de Cookies
                    </a>
                    <a href="#" class="d-block text-decoration-none text-center w-auto mx-5">
                        Aviso legal
                    </a>    
        </div>
        <!-- Links social media -->
        <div class="row d-flex justify-content-center gap-1 mb-4">
            <a href="#" class="d-block text-decoration-none text-center w-auto">
                <img src="{{ asset('images/footer/facebook.svg') }}" alt="">
            </a>
            <a href="#" class="d-block text-decoration-none text-center w-auto">
                <img src="{{ asset('images/footer/instagram.svg') }}" alt="">
            </a>
            <a href="#" class="d-block text-decoration-none text-center w-auto">
                <img src="{{ asset('images/footer/youtube.svg') }}" alt="">
            </a>    
        </div>
    </div>
</footer>