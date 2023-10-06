@extends("common.layout")

@section('content')
@include('common.navbar')
<!-- SECCIÓN 1 - VIDEO  -->
    <section class="video-home">
        <div class="container">
        <div class="row">
            <div class="video-halls">
                    <video controls="" autoplay="" muted="" loop="" class="mainVideo">
                        <source src="{{ asset('/video/entrada-hub.mp4') }}" type="video/mp4">
                    </video>
            </div>
        </div>
        </div>
    </section>
    @include('common.footer')
@endsection