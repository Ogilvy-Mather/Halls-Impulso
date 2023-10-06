@extends("common.layout")

@section('content')
@include('common.navbar')
<!-- SECTION 1 - VIDEO  -->
    <section class="blue-home">
        <div class="video-home spacing-halls">
            <div class="row">
                <div class="video-halls">
                        <video autoplay="" muted="" loop="" class="mainVideo">
                            <source src="{{ asset('/video/video-hub1.mp4') }}" type="video/mp4">
                        </video>
                        <div class="opacity-halls">
                            <!-- <div class="loader"></div> -->
                            <img src="{{ asset('/images/home/playIcon.svg') }}" class="playicon" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                <img src="{{ asset('/images/home/title_respiraconhalls.svg') }}" alt="#Respiraytomaunimpulsoreal" class="wow animate__animated animate__tada" data-wow-delay="0.7s">
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
    <section class="purple-home spacing-halls">
        <div class="title-halls-barra">
            <img src="{{ asset('/images/home/halls-purple.svg') }}" alt="" class="wow animate__animated animate__tada" data-wow-delay="0.7s">
        </div>
        <div class="spot-info">
            <div class="row">
                <div class="col-7">
                    <div class="images-spots">
                        <img src="{{ asset('/images/home/spot_images.svg') }}" alt="">
                        <div class="halls-menta-1">
                            <div id="scene">
                                <div data-depth="0.3"><img src="{{ asset('/images/home/mentas-morada-1.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="text-spots">
                        <h1>Nuevo <span>en la zona</span></h1>
                        <p>Dile no a los sitios más básicos del lugar. #RespiraYTomaUnImpulsoReal con Halls y sé el anfitrión más cool entre tus amigos.</p>
                        <div class="btn-section">
                            <a href="">Leer más</a>
                        </div>
                        <div class="halls-menta-2">
                            <div id="scene1">
                                <div data-depth="0.1"><img src="{{ asset('/images/home/mentas-morada-2.svg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hash-respira">
            <h1>#RespiraYTomaUnImpulsoReal</h1>
            <p>con Halls y rómpela en el semestre.</p>
        </div>
        <div class="tiras-consejo">
            <div class="consejos-home">
                <img src="{{ asset('/images/home/tiras-morada.svg') }}" alt="">
                <div class="consejos-title">
                    <img src="{{ asset('/images/home/consejos-title-sombra.png') }}" alt="" class="wow animate__animated animate__bounceIn" data-wow-delay="1.5s">
                </div>
                <div class="object-scene">
                    <div id="scene2">
                        <div data-depth="0.4" class="object-morado1"><img src="{{ asset('/images/home/object-morado-1.svg') }}" alt=""></div>
                        <div data-depth="0.8" class="object-morado2"><img src="{{ asset('/images/home/object-morado-2.svg') }}" alt=""></div>
                    </div>
                    
                </div>
            </div>
            <div class="txt-consejos-home">
                <div class="info-consejos-home">
                    <p>
                    No levantes la mano para ir al baño y haz lo imposible para que el profe no sepa tu apellido, son solo algunos consejos para sobrevivir en la U.
                    </p>
                    <div class="btn-section">
                        <a href="">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 3  -->
    <section class="green-home spacing-halls">
        <div class="title-halls-barra wow animate__animated animate__tada" data-wow-delay="0.7s">
            <img src="{{ asset('/images/home/title_manifestando.svg') }}" alt="">
        </div>
    </section>
@endsection