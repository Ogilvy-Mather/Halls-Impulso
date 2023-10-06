@if(request()->is('/'))
<div id="nav-blue">
    <div class="container">
    <nav  class="navbar navbar-expand-lg navbar-light p-0 m-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logos/halls.png') }}" alt="Halls Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalls" aria-controls="collapseHalls" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="collapseHalls">
            <ul class="d-flex justify-content-center align-items-center navbar-nav m-0 p-0 h-100 gap-5">
                <li class="nav-item active">
                    <a class="nav-link mx-3" href="{{ url('/fluye-en-la-u') }}">
                        <img src="{{ asset('images/navbar/blue/fluye.png') }}" alt="Fluye en la u enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/manifestando-aumentos') }}">
                        <img src="{{ asset('images/navbar/blue/ma-aumentos.png') }}" alt="Manifestando aumentos enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/amor-drama-y-astros') }}">
                        <img src="{{ asset('images/navbar/blue/amor.png') }}" alt="amor enlace">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
</div>
@endif

@if(request()->is('fluye-en-la-u'))

<div id="nav-purple">
    <div class="container">
    <nav  class="navbar navbar-expand-lg navbar-light p-0 m-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logos/halls.png') }}" alt="Halls Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalls" aria-controls="collapseHalls" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="collapseHalls">
            <ul class="d-flex justify-content-center align-items-center navbar-nav m-0 p-0 h-100 gap-5">
                <li class="nav-item active">
                    <a class="nav-link mx-3" href="{{ url('/fluye-en-la-u') }}">
                        <img src="{{ asset('images/navbar/purple/fluye.png') }}" alt="Fluye en la u enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/manifestando-aumentos') }}">
                        <img src="{{ asset('images/navbar/purple/ma-aumentos.png') }}" alt="Manifestando aumentos enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/amor-drama-y-astros') }}">
                        <img src="{{ asset('images/navbar/purple/amor.png') }}" alt="amor enlace">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
</div>
@endif


@if(request()->is('amor-drama-y-astros'))

<div id="nav-red">
    <div class="container">
    <nav  class="navbar navbar-expand-lg navbar-light p-0 m-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logos/halls.png') }}" alt="Halls Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalls" aria-controls="collapseHalls" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="collapseHalls">
            <ul class="d-flex justify-content-center align-items-center navbar-nav m-0 p-0 h-100 gap-5">
                <li class="nav-item active">
                    <a class="nav-link mx-3" href="{{ url('/fluye-en-la-u') }}">
                        <img src="{{ asset('images/navbar/purple/fluye.png') }}" alt="Fluye en la u enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/manifestando-aumentos') }}">
                        <img src="{{ asset('images/navbar/purple/ma-aumentos.png') }}" alt="Manifestando aumentos enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/amor-drama-y-astros') }}">
                        <img src="{{ asset('images/navbar/purple/amor.png') }}" alt="amor enlace">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
</div>
@endif


@if(request()->is('manifestando-aumentos'))

<div id="nav-green">
    <div class="container">
    <nav  class="navbar navbar-expand-lg navbar-light p-0 m-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logos/halls.png') }}" alt="Halls Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHalls" aria-controls="collapseHalls" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="collapseHalls">
            <ul class="d-flex justify-content-center align-items-center navbar-nav m-0 p-0 h-100 gap-5">
                <li class="nav-item active">
                    <a class="nav-link mx-3" href="{{ url('/fluye-en-la-u') }}">
                        <img src="{{ asset('images/navbar/green/fluye.png') }}" alt="Fluye en la u enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/manifestando-aumentos') }}">
                        <img src="{{ asset('images/navbar/green/ma-aumentos.png') }}" alt="Manifestando aumentos enlace">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3" href="{{ url('/amor-drama-y-astros') }}">
                        <img src="{{ asset('images/navbar/green/amor.png') }}" alt="amor enlace">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
</div>
@endif

    

    
