@extends("common.layout")

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-custom.css') }}">
@endpush

@section('content')
@include('common.navbar')
<!-- Manifestando aumentos landing  -->
    <section class="manifestando-aumentos text-center ff-gotham-medium">
        <div class="spacing-halls py-5">
            <div class="row">
                <figure>
                    <img class="mw-100" src="{{ asset('images/pages/green/manifestando-barra.svg') }}" alt="Barra verde">
                </figure>
            </div>

            <div class="row align-items-center my-5 gx-5">
                <div class="col-lg-6">
                    <article>
                        <img class="mw-100 mb-5" src="{{ asset('images/pages/green/workimpulsos.svg') }}" alt="Work impulsos">
                        <p class="mt-3 text-white fs-5">
                        #RespiraYTomaUnImpulsoReal y haz eso que te apasiona con 
                        los workimpulsos. Pedir vacaciones, un aumento o salir temprano 
                        los viernes ahora con Halls es posible ¡Descarga el tuyo!
                        </p>
                    </article>
                </div>
                <div class="col-lg-6">
                    @include('partials.work-impulsos-slider')
                </div>
            </div>
            <!--Camera picture-->
            <div class="row my-5">
                <figure>
                    <img class="mw-100" src="{{ asset('images/pages/green/camera.svg') }}" alt="Barra verde">
                </figure>
                <p class="mt-3 text-white fs-5">#RespiraYTomaUnImpulsoReal para hablar sin trabarte y alégrate porque 
el inglés ya no será un problema si lo que quieres es facturar.</p>
            </div>
            <!--Typsettings-->
            <div class="row d-flex justify-content-center align-items-center gap-1 mb-4 my-5">
                <a href="#" class="d-block text-decoration-none text-center w-auto">
                    <img src="{{ asset('images/pages/green/instagram-icon.svg') }}" alt="Icon Instagram">
                </a>
                <span class="d-block text-center text-white w-auto fs-3"> @typesetting </span>
            </div>

            <!--Slider Tik Toks-->
            <div class="row m-5">
                @include('partials.tiktok-slider')
            </div>

            <!--Articles-->
            <div class="row d-flex flex-column flex-lg-row justify-content-center gap-lg-5 mb-4">
                <article class="d-block text-decoration-none text-center w-auto mx-0">
                    <img class="d-block w-auto" src="{{ asset('images/pages/green/art-2.svg') }}" alt="fluye en la u">
                </article>
                
                <article class="d-block text-decoration-none text-center w-auto mx-0">
                    <img class="d-block w-auto" src="{{ asset('images/pages/green/art-1.svg') }}" alt="fluye en la u">
                </article>
            </div>
        </div>
    </section>
    @include('common.footer')
@endsection

<!-- scripts for this page  -->
@section('scripts')
    <!-- Script específico para esta vista -->
    <script src="{{ asset('js/swiper/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/swiper/swiper-custom.js') }}" defer></script>
@endsection