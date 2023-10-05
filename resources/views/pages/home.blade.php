@extends("common.layout")

@section('content')
@include('common.navbar')
<!-- SECTION 1 - VIDEO  -->
    <section class="blue-home">
        <div class="video-home spacing-halls">
            <div class="row">
                <div class="video-halls">
                        <video controls="off" autoplay="" muted="" loop="" class="mainVideo">
                            <source src="{{ asset('/video/entrada-hub.mp4') }}" type="video/mp4">
                        </video>
                        <div class="opacity-halls">
                            <img src="{{ asset('/images/home/playIcon.svg') }}" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        </div>
                </div>
            </div>
        </div>
        <div class="icon-mouse">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="27" viewBox="0 0 16 27">
                <g id="Grupo_1019" data-name="Grupo 1019" transform="translate(-952 -1023)">
                    <g id="Rectángulo_253" data-name="Rectángulo 253" transform="translate(952 1023)" fill="none" stroke="#fff" stroke-width="1">
                    <rect width="16" height="27" rx="8" stroke="none"/>
                    <rect x="0.5" y="0.5" width="15" height="26" rx="7.5" fill="none"/>
                    </g>
                    <circle id="Elipse_192" data-name="Elipse 192" cx="2" cy="2" r="2" transform="translate(958 1027)" fill="#fff">
                    <animate 
                        attributeName="cy" 
                        values="2;6;2" 
                        dur="1s" 
                        repeatCount="indefinite" />
                    </circle>
                </g>
            </svg>

        </div>
        <div class="option-nav-person">
            <div class="title-option">
                <img src="{{ asset('/images/home/title_respiraconhalls.svg') }}" alt="#Respiraytomaunimpulsoreal">
            </div>
            <div class="person-option">
                <div class="row">
                    <div class="col-4">
                        <div class="person-images">
                            <img src="{{ asset('/images/home/person_1.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="person-images">
                            <img src="{{ asset('/images/home/person_2.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="person-images">
                            <img src="{{ asset('/images/home/person_3.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="txt-person">
                        <p>
                        Aquí hablar de tu jefe, conquistar a tu mejor amigx y querer cambiarse de carrera es el chisme diario. ¡Tú tranqui! <br>#RespiraYTomaUnImpulsoReal para comenzar ¡Clickea sin miedo!
                        </p>
                    </div>
                </div>
            </div>
        </div>   
    </section>
<!-- SECTION 2 - SPOT -->
    <section class="purple-home">
        <div class="title-halls-barra">
            <img src="{{ asset('/images/home/halls-purple.svg') }}" alt="">
        </div>
        <div class="spot-info">
            <div class="row">
                <div class="col-6"></div>
            </div>
        </div>
    </section>
@endsection