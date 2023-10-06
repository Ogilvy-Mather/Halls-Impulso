@extends("common.layout")

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tinder-cards.css') }}">
@endpush

@section('content')
@include('common.navbar')
<!-- Manifestando aumentos landing  -->
    <section class="amor-astros text-center">
        <div class="spacing-halls py-5">
            <!--Dramatic, love , astral picture-->
            <div class="row">
                <figure>
                    <img class="mw-100" src="{{ asset('images/pages/red/amor-barra.svg') }}" alt="Barra de amor y astros">
                </figure>
            </div>
            <!--Break the ice-->
            <div class="row">
                <article>
                        <img class="mw-100" src="{{ asset('images/pages/red/mural-rompe-hielo.png') }}" alt="Mural rompe hielo">
                        <p class="mt-3 text-white fs-5">Ser el más extrovertido no asegura el éxito en la primer a cita. Rompe el hielo con Halls y estos tipcitos. 
                        ¿Funcionan? No tenemos pruebas, pero tampoco dudas.#RespiraYTomaUnImpulsoReal y ponlos a prueba</p>
                        </article>
            </div>

            <div class="row">
                @include('partials.tinder-cards')
            </div>
            <!--Camera picture-->
            <div class="row my-5">
                <figure>
                    <img class="mw-100" src="{{ asset('images/pages/green/camera.svg') }}" alt="Barra verde">
                </figure>
                <p class="mt-2 text-white fs-5">#RespiraYTomaUnImpulsoReal para hablar sin trabarte y alégrate porque 
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
    <script src="{{ asset('js/tinder-cards/hammer.js') }}" defer></script>
    <script src="{{ asset('js/tinder-cards/config.js') }}" defer></script>
    
@endsection