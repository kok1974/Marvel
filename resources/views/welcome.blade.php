        @extends('layouts.app')

        @section('content')

            @include('partials.carrusel')

            <div class="cuerpo">
                <div class="row mx-0">
                    <H1>Novedades</H1>
                    <div class="col-12" style="height: 250px; width: 100%; background-color: blue"></div>
                </div>
                <div class="row mx-0">
                    <H1>Más buscados</H1>
                    <div class="col-12" style="height: 250px; width: 100%; background-color: green"></div>
                </div>
            </div>

        @endsection

